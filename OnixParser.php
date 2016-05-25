<?php 

namespace BBM\parser;

require 'autoload.php';

/**
 * Convert XML Onix(Essential) to object
 */

class OnixParser 
{
	private $onix;

	public function getOnix()
	{
		return isset($this->onix) ? $this->onix : null;
	}

	public function __construct($xml)
	{
		$xml = new \SimpleXMLElement($xml);
		
		$this->onix = new \BBM\model\Onix();

		$header = new \BBM\model\Header();

		$header->setSenderName(strval($xml->Header->Sender->SenderName));
		$header->setContactName(strval($xml->Header->Sender->SenderName));

		$this->onix->setHeader($header);

		\BBM\model\ProductEnum::init();

		foreach ($xml->Product as $xmlProduct)
		{
			$product = new \BBM\model\Product();

			//Existem algumas situações que podem fazer com que o livro não esteja disponível para venda.
			//Neste caso aqui estamos verificando se o produto está ativo e seu status junto ao fornecedor
			$product->setAvailability(strval($xmlProduct->PublishingDetail->PublishingStatus) == '04' && strval($xmlProduct->ProductSupply->SupplyDetail->ProductAvailability == '20') ? true : false);

			$product->setOperationType(strval($xmlProduct->NotificationType));//Para saber se é inserção(03), deleção(05) ou alteração(04).

			foreach ($xmlProduct->ProductIdentifier as $productIdentifier)
			{
				switch (strval($productIdentifier->ProductIDType))
				{
					case '01'://Significa que o idvalue deste bloco é do nosso ebook. obs - Id que será utilizado para requisições na api
						//Criar estrutura na tabela para isso
						$product->setID(strval($productIdentifier->IDValue));
						break;
					
					case '15'://Significa que o idValue deste bloco trata-se do isbn do ebook.
						$product->setISBN(strval($productIdentifier->IDValue));
						break;
				}
			}

			$product->setFormatType(strval($xmlProduct->DescriptiveDetail->ProductFormDetail));//epub, pdf etc

			//Nó opcional
			if(isset($xmlProduct->DescriptiveDetail->EpubTechnicalProtection))
				$product->setProtectionType(strval($xmlProduct->DescriptiveDetail->EpubTechnicalProtection));//adobe, marca d'agua etc

			//Bloco opcional. Apenas quando a obra eh parte de uma coleção
			if(isset($xmlProduct->DescriptiveDetail->Collection))
			{
				$product->setCollectionTitle(strval($xmlProduct->DescriptiveDetail->Collection->TitleDetail->TitleElement->TitleText));
			}

			$product->setTitle(strval($xmlProduct->DescriptiveDetail->TitleDetail->TitleElement->TitleText));
			
			$product->setSubTitle(strval($xmlProduct->DescriptiveDetail->TitleDetail->TitleElement->Subtitle));

			//Podemos ter vários autores e ilustradores para o mesmo ebook. Lembrando que neste caso trabalharemos apenas com esses dois 		
			foreach ($xmlProduct->DescriptiveDetail->Contributor as $xmlContributor)
			{
				$contributor = null;

				switch (strval($xmlContributor->ContributorRole))
				{
					case 'A01'://Significa que é autor do livro
						$contributor = new \BBM\model\Contributor\Autor();
						break;
					case 'A12'://Significa que é ilustrador do livro
						$contributor = new \BBM\model\Contributor\Ilustrador();
						break;
				}

				if(isset($contributor))
				{
					$contributor->setId(strval($xmlContributor->NameIdentifier->IDValue));
					$contributor->setPreferenceOrderExibition(strval($xmlContributor->SequenceNumber));
					$contributor->setName(strval($xmlContributor->NamesBeforeKey));
					$contributor->setTypeName(strval($xmlContributor->NameIdentifier->IDTypeName));
					$contributor->setLastName(strval($xmlContributor->KeyNames));
					$contributor->setBiography(strval($xmlContributor->BiographicalNote->p));
					if(isset($xmlContributor->Website) && strval($xmlContributor->Website->WebsiteRole == '06')) //Se o site for do proprio contribuidor
						$contributor->setWebsite(strval($xmlContributor->Website->WebsiteLink));

					$product->setContributor($contributor);
				}
			}

			$product->setEditionNumber(strval($xmlProduct->DescriptiveDetail->EditionNumber));

			if (strval($xmlProduct->DescriptiveDetail->Language->LanguageRole == '01'))//Idioma do texto do produto. Por hora somente isso nos importa
				$product->setIdiom(strval($xmlProduct->DescriptiveDetail->Language->LanguageCode));


			//Nó não obrigatório, apesar de ser usado em praticamente 100% dos casos. 
			foreach ($xmlProduct->DescriptiveDetail->Extent as $extent) 
			{
				if (strval($extent->ExtentType) == '00' && strval($extent->ExtentUnit) == '03')//número de páginas
					$product->setPagesNumber(strval($extent->ExtentValue));

				if(strval($extent->ExtentType) == '22')//Tamanho do arquivo
				{
					$product->setSize(strval($extent->ExtentValue));
					$product->setSizeUnit(strval($extent->ExtentUnit));
				}
			}

			//Categorias. Apesar de serem chamadas de subject. Nó nao obrigatorio e repetitivo
			if(isset($xmlProduct->DescriptiveDetail->Subject))
			{
				foreach ($xmlProduct->DescriptiveDetail->Subject as $subject)
				{
					
					$category = null;

					switch (strval($subject->SubjectSchemeIdentifier))
					{
						case '10'://Bisac
							//Gambiarra momentanea, pois ainda existem muitos ebooks que nao possuem categorias existentes. Creio eu
							try
							{
								$category = new \BBM\model\Category\Bisac(strval($subject->SubjectCode));
							}
							catch(\Exception $e)
							{
								unset($category);
								continue 2;//Passa para a próxima categoria
							}

						break;

						case '01'://CDD
							//Gambiarra momentanea, pois ainda existem muitos ebooks que nao possuem categorias existentes. Creio eu
							try
							{
								$category = new \BBM\model\Category\CDD(strval($subject->SubjectCode));
							}
							catch(\Exception $e)
							{
								unset($category);
								continue 2;//Passa para a próxima categoria
							}

						break;

						case '20'://Tags

							$product->setTags(explode(';', trim(strval($subject->SubjectCode))));

						break;
					}

				if(isset($category))
					$product->setCategory($category);
				}
			}



			//01 Exatamente, 03 "A partir de", 04 Até
			$product->setAgeRating(strval($xmlProduct->DescriptiveDetail->AudienceRange->AudienceRangePrecision), strval($xmlProduct->DescriptiveDetail->AudienceRange->AudienceRangeValue));


			//Nó não obrigatório.
			if(isset($xmlProduct->CollateralDetail))
			{
				//Nó não obrigatório e repetitivo
				if (strval($xmlProduct->CollateralDetail->TextContent->TextType) == '03')
					$product->setSynopsis(strval($xmlProduct->CollateralDetail->TextContent->Text->p));

				//Nó não obrigatório e repetitivo. Se for Capa e se tratar de arquivo
				if (strval($xmlProduct->CollateralDetail->SupportingResource->ResourceContentType) == '01' &&
					strval($xmlProduct->CollateralDetail->SupportingResource->ResourceVersion->ResourceVersionFeature->ResourceVersionFeatureType == '01'))
				{
					$product->setFormatFile(strval($xmlProduct->CollateralDetail->SupportingResource->ResourceVersion->ResourceVersionFeature->FeatureValue));
					$product->setUrlFile(strval($xmlProduct->CollateralDetail->SupportingResource->ResourceVersion->ResourceLink));
				}
			}

			if(isset($xmlProduct->PublishingDetail))
			{
				$product->setPublisherName(strval($xmlProduct->PublishingDetail->Imprint->ImprintName));
				$product->setPublisherWebsite(strval($xmlProduct->PublishingDetail->Publisher->PublisherName));
			}

			//Existem muitas coisas a se considerar aqui, mas por hora vou inserir o valor 
			$product->setPrice(strval($xmlProduct->ProductSupply->SupplyDetail->Price->PriceAmount));
			
			$this->onix->setProduct($product);
		}
	}
}
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

	public function __construct($xml, $dir = false)
	{
		if($dir)
			$xml = simplexml_load_file($xml);
		else
 			$xml = simplexml_load_string($xml);

		$this->onix = new \BBM\model\Onix();

		$this->onix->setVersion($xml['release']);

		$this->onix->setHeader($this->getHeader($xml->Header));

		\BBM\model\ProductEnum::init();

		foreach ($xml->Product as $xmlProduct)
		{
			$product = new \BBM\model\Product();

			$product->setAvailability($this->getProductAvailability($xmlProduct));

			$product->setOperationType($this->getProductOperationType($xmlProduct));

			$product->setId($this->getProductId($xmlProduct));

			$product->setISBN($this->getProductISBN($xmlProduct));

			$product->setFormatType($this->getProductFormatType($xmlProduct));

			$product->setProtectionType($this->getProductProtectionType($xmlProduct));

			$product->setCollectionTitle($this->getProductCollectionTitle($xmlProduct));
			
			$product->setTitle($this->getProductTitle($xmlProduct));
			
			$product->setSubTitle($this->getProductSubTitle($xmlProduct));

			$product->setContributors($this->getProductContributors($xmlProduct));

			$product->setEditionNumber(strval($xmlProduct->DescriptiveDetail->EditionNumber));

			$product->setIdiom($this->getProductIdiom($xmlProduct));

			$product->setPagesNumber($this->getProductPageNumbers($xmlProduct));

			//************Parei aqui***************//
			$product->setSize($this->getProductSize($xmlProduct));

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

	private function getHeader($xmlHeader)
	{
		$header = new \BBM\model\Header();

		switch ($this->onix->getVersion()) 
		{
			case '3.0':
				$header->setSender(strval($xmlHeader->Sender->SenderName));
				$header->setContact(strval($xmlHeader->Sender->ContactName));
				$header->setEmail(strval($xmlHeader->Sender->EmailAddress));
				break;
			
			case '2.0':
			case '2.1':
				$header->setSender(strval($xmlHeader->FromCompany));
				$header->setContact(strval($xmlHeader->FromPerson));
				$header->setEmail(strval($xmlHeader->FromEmail));
				break;
		}

		return $header;
	}

	private function getProductAvailability($xmlProduct)
	{
		//Existem algumas situações que podem fazer com que o livro não esteja disponível para venda.
		//Neste caso aqui estamos verificando se o produto está ativo e seu status junto ao fornecedor

		switch ($this->onix->getVersion())
		{
			case '3.0':
				$availability = strval($xmlProduct->PublishingDetail->PublishingStatus) == '04' && strval($xmlProduct->ProductSupply->SupplyDetail->ProductAvailability == '20') ? true : false;
				break;
			
			case '2.0':
			case '2.1':
				$availability = strval($xmlProduct->PublishingStatus) == '04' && strval($xmlProduct->SupplyDetail->ProductAvailability == '20') ? true : false;
				break;
		}

		return $availability;
	}

	private function getProductOperationType($xmlProduct)
	{
		//Para saber se é inserção(03), deleção(05) ou alteração(04).

		switch ($this->onix->getVersion())
		{
			case '3.0':
			case '2.0':
			case '2.1':
				$operationType = strval($xmlProduct->NotificationType);
				break;
		}

		return $operationType;
	}

	private function getProductId($xmlProduct)
	{
		switch ($this->onix->getVersion())
		{
			case '3.0':
			case '2.0':
			case '2.1':
				foreach ($xmlProduct->ProductIdentifier as $productIdentifier)
				{
					if(strval($productIdentifier->ProductIDType == '01'))
						$id = strval($productIdentifier->IDValue);
				}
				break;
		}

		return $id;
	}

	private function getProductISBN($xmlProduct)
	{
		switch ($this->onix->getVersion())
		{
			case '3.0':
			case '2.0':
			case '2.1':
				foreach ($xmlProduct->ProductIdentifier as $productIdentifier)
				{
					if(strval($productIdentifier->ProductIDType == '15'))
						$isbn = strval($productIdentifier->IDValue);
				}
				break;
		}

		return $isbn;
	}

	private function getProductFormatType($xmlProduct)
	{
		//epub, pdf etc

		switch ($this->onix->getVersion())
		{
			case '3.0':
				$formatType = strval($xmlProduct->DescriptiveDetail->ProductFormDetail);
				break;
			case '2.0':
			case '2.1':
				$formatType = strval($xmlProduct->EpubType);
				break;
		}

		return $formatType;
	}

	private function getProductProtectionType($xmlProduct)
	{
		//adobe, marca d'agua etc

		switch ($this->onix->getVersion())
		{
			case '3.0':
				$protectionType = strval($xmlProduct->DescriptiveDetail->EpubTechnicalProtection);
				break;
			case '2.0':
			case '2.1':
				$protectionType = '';
				break;
		}
		
		return $protectionType;
	}

	private function getProductCollectionTitle($xmlProduct)
	{
		switch ($this->onix->getVersion())
		{
			case '3.0':
				$collectionTitle = strval($xmlProduct->DescriptiveDetail->Collection->TitleDetail->TitleElement->TitleText);
				break;
			case '2.0':
			case '2.1':
				$collectionTitle = strval($xmlProduct->Series->TitleOfSeries);
				break;
		}

		return $collectionTitle;
	}

	private function getProductTitle($xmlProduct)
	{
		switch ($this->onix->getVersion())
		{
			case '3.0':
				$title = strval($xmlProduct->DescriptiveDetail->TitleDetail->TitleElement->TitleText);
				break;
			case '2.0':
			case '2.1':
				$title = strval($xmlProduct->Title->TitleText);
				break;
		}

		return $title;
	}

	private function getProductSubTitle($xmlProduct)
	{
		switch ($this->onix->getVersion())
		{
			case '3.0':
				$subtitle = strval($xmlProduct->DescriptiveDetail->TitleDetail->TitleElement->Subtitle);
				break;
			case '2.0':
			case '2.1':
				$subtitle = '';
				break;
		}

		return $subtitle;
	}

	private function getProductContributors($xmlProduct)
	{
		$contributors = array();

		//Podemos ter vários autores e ilustradores para o mesmo ebook. Lembrando que neste caso trabalharemos apenas com esses dois 		

		switch ($this->onix->getVersion())
		{
			case '3.0':
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

						$contributors[] = $contributor;
					}
				}
				break;
			case '2.0':
			case '2.1':
				foreach ($xmlProduct->Contributor as $xmlContributor)
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
						$contributor->setId('');
						$contributor->setPreferenceOrderExibition(strval($xmlContributor->SequenceNumber));
						$contributor->setName(strval($xmlContributor->NamesBeforeKey));
						$contributor->setTypeName('');
						$contributor->setLastName(strval($xmlContributor->KeyNames));
						$contributor->setBiography(strval($xmlContributor->BiographicalNote));
						$contributor->setWebsite('');

						$contributors[] = $contributor;
					}
				}
				break;
		}

		return $contributors;
	}

	public function getProductIdiom($xmlProduct)
	{
		//Idioma do texto do produto. Por hora somente isso nos importa

		switch ($this->onix->getVersion())
		{
			case '3.0':
				if (strval($xmlProduct->DescriptiveDetail->Language->LanguageRole == '01'))
					$idiom = strval($xmlProduct->DescriptiveDetail->Language->LanguageCode);
				break;
			case '2.0':
			case '2.1':
				if (strval($xmlProduct->Language->LanguageRole == '01'))
					$idiom = strval($xmlProduct->Language->LanguageCode);
				break;
		}

		return $idiom;
	}

	public function getProductpageNumbers($xmlProduct)
	{
		switch ($this->onix->getVersion())
		{
			case '3.0':
				foreach ($xmlProduct->DescriptiveDetail->Extent as $extent) 
				{
					if (strval($extent->ExtentType) == '00' && strval($extent->ExtentUnit) == '03')
						$pageNumbers = strval($extent->ExtentValue);
				}
				break;
			case '2.0':
			case '2.1':
				$pageNumbers = strval($xmlProduct->NumberOfPages);
				break;
		}

		return $pageNumbers;
	}

	public function getProductSizeUnit($xmlProduct)
	{
		switch ($this->onix->getVersion())
		{
			case '3.0':
				if (strval($xmlProduct->DescriptiveDetail->Language->LanguageRole == '01'))
					$idiom = strval($xmlProduct->DescriptiveDetail->Language->LanguageCode);
				break;
			case '2.0':
			case '2.1':
				if (strval($xmlProduct->Language->LanguageRole == '01'))
					$idiom = strval($xmlProduct->Language->LanguageCode);
				break;
		}
	}
}
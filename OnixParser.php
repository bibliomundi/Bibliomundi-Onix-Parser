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

			$product->setPageNumbers($this->getProductPageNumbers($xmlProduct));

			$product->setSize($this->getProductSize($xmlProduct));

			$product->setSizeUnit($this->getProductSizeUnit($xmlProduct));

			$product->setCategories($this->getProductCategories($xmlProduct));

			$product->setTags($this->getProductTags($xmlProduct));

			$product->setAgeRatingPrecision($this->getProductAgeRationPrecision($xmlProduct));

			$product->setAgeRatingValue($this->getProductAgeRationValue($xmlProduct));

			$product->setSynopsis($this->getProductSynopsis($xmlProduct));

			$product->setFormatFile($this->getProductFormatFile($xmlProduct));

			$product->setUrlFile($this->getProductUrlFile($xmlProduct));

			$product->setPrices($this->getProductPrices($xmlProduct));
			
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
		$collectionTitle = '';

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

	private function getProductIdiom($xmlProduct)
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

	private function getProductpageNumbers($xmlProduct)
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

	private function getProductSize($xmlProduct)
	{
		$size = '';
		switch ($this->onix->getVersion())
		{
			case '3.0':
				foreach ($xmlProduct->DescriptiveDetail->Extent as $extent) 
				{
					if(strval($extent->ExtentType) == '22')
						$size = strval($extent->ExtentValue);
				}
				break;
			case '2.0':
			case '2.1':
				foreach ($xmlProduct->Extent as $extent) 
				{
					if(strval($extent->ExtentType) == '22')
						$size = strval($extent->ExtentValue);
				}
				break;
		}

		return $size;
	}

	private function getProductSizeUnit($xmlProduct)
	{
		$sizeUnit = '';

		switch ($this->onix->getVersion())
		{
			case '3.0':
				foreach ($xmlProduct->DescriptiveDetail->Extent as $extent) 
				{
					if(strval($extent->ExtentType) == '22')
						$sizeUnit = strval($extent->ExtentUnit);
				}
				break;
			case '2.0':
			case '2.1':
				foreach ($xmlProduct->Extent as $extent) 
				{
					if(strval($extent->ExtentType) == '22')
						$sizeUnit = strval($extent->ExtentUnit);
				}
				break;
		}

		return $sizeUnit;
	}

	private function getProductCategories($xmlProduct)
	{
		switch ($this->onix->getVersion())
		{
			case '3.0':
				$categories = array();

				foreach ($xmlProduct->DescriptiveDetail->Subject as $subject)
				{
					$category = null;

					switch (strval($subject->SubjectSchemeIdentifier))
					{
						case '10'://Bisac
							//Gambiarra momentanea, pois ainda existem muitos ebooks que nao possuem categorias existentes. Creio eu
							try
							{
								$category = new \BBM\model\Category\Bisac(strval($subject->SubjectCode), strval($subject->SubjectHeadingText));
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
								$category = new \BBM\model\Category\CDD(strval($subject->SubjectCode), strval($subject->SubjectHeadingText));
							}
							catch(\Exception $e)
							{
								unset($category);
								continue 2;//Passa para a próxima categoria
							}

						break;
					}

					if(isset($category))
						$categories[] = $category;
				}
				break;
			case '2.0':
			case '2.1':
				$categories = array();

				foreach ($xmlProduct->Subject as $subject)
				{
					$category = null;

					switch (strval($subject->SubjectSchemeIdentifier))
					{
						case '10'://Bisac
							//Gambiarra momentanea, pois ainda existem muitos ebooks que nao possuem categorias existentes. Creio eu
							try
							{
								$category = new \BBM\model\Category\Bisac(strval($subject->SubjectCode), strval($subject->SubjectHeadingText));
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
								$category = new \BBM\model\Category\CDD(strval($subject->SubjectCode), strval($subject->SubjectHeadingText));
							}
							catch(\Exception $e)
							{
								unset($category);
								continue 2;//Passa para a próxima categoria
							}

						break;
					}

					if(isset($category))
						$categories[] = $category;
				}
				break;
		}

		return $categories;
	}

	private function getProductTags($xmlProduct)
	{
		switch ($this->onix->getVersion())
		{
			case '3.0':
				$tags = '';

				foreach ($xmlProduct->DescriptiveDetail->Subject as $subject)
				{
					switch (strval($subject->SubjectSchemeIdentifier))
					{
						case '20' : 
							$tags = trim(strval($subject->SubjectCode));
						break;
					}
				}
				break;
			case '2.0':
			case '2.1':
				$tags = '';

				foreach ($xmlProduct->Subject as $subject)
				{
					switch (strval($subject->SubjectSchemeIdentifier))
					{
						case '20' : 
							$tags = trim(strval($subject->SubjectCode));
						break;
					}
				}
				break;
		}

		return $tags;
	}

	private function getProductAgeRationPrecision($xmlProduct)
	{
		switch ($this->onix->getVersion())
		{
			case '3.0':
				$ageRationPrecision = strval($xmlProduct->DescriptiveDetail->AudienceRange->AudienceRangePrecision);
				break;
			case '2.0':
			case '2.1':
				$ageRationPrecision = strval($xmlProduct->AudienceRange->AudienceRangePrecision);
				break;
		}
	}

	private function getProductAgeRationValue($xmlProduct)
	{
		switch ($this->onix->getVersion())
		{
			case '3.0':
				$ageRationPrecision = strval($xmlProduct->DescriptiveDetail->AudienceRange->AudienceRangeValue);
				break;
			case '2.0':
			case '2.1':
				$ageRationPrecision = strval($xmlProduct->AudienceRange->AudienceRangeValue);
				break;
		}
	}

	private function getProductSynopsis($xmlProduct)
	{
		$synopsis = '';

		switch ($this->onix->getVersion())
		{
			case '3.0':
				foreach($xmlProduct->CollateralDetail->TextContent as $textContent)
				{
					if(strval($textContent->TextType) == '03')
						$synopsis = strval($textContent->Text->p);
				}
				break;
			case '2.0':
			case '2.1':
				foreach($xmlProduct->OtherText as $otherText)
				{
					if(strval($otherText->TextTypeCode) == '01')
						$synopsis = strval($otherText->Text);
				}
				break;
		}

		return $synopsis;
	}

	private function getProductFormatFile($xmlProduct)
	{
		switch ($this->onix->getVersion())
		{
			case '3.0':
				if (strval($xmlProduct->CollateralDetail->SupportingResource->ResourceContentType) == '01' &&
					strval($xmlProduct->CollateralDetail->SupportingResource->ResourceVersion->ResourceVersionFeature->ResourceVersionFeatureType == '01'))
				{
					$formatFile = strval($xmlProduct->CollateralDetail->SupportingResource->ResourceVersion->ResourceVersionFeature->FeatureValue);
					// $product->setUrlFile(strval($xmlProduct->CollateralDetail->SupportingResource->ResourceVersion->ResourceLink));
				}
				break;
			case '2.0':
			case '2.1':
				$formatFile = '';
				break;
		}

		return $formatFile;
	}

	private function getProductUrlFile($xmlProduct)
	{
		switch ($this->onix->getVersion())
		{
			case '3.0':
				if (strval($xmlProduct->CollateralDetail->SupportingResource->ResourceContentType) == '01' &&
					strval($xmlProduct->CollateralDetail->SupportingResource->ResourceVersion->ResourceVersionFeature->ResourceVersionFeatureType == '01'))
				{
					$urlFile = strval($xmlProduct->CollateralDetail->SupportingResource->ResourceVersion->ResourceLink);
				}
				break;
			case '2.0':
			case '2.1':
				$urlFile = '';
				break;
		}

		return $urlFile;
	}

	private function getProductPrices($xmlProduct)
	{
		$prices = array();

		switch ($this->onix->getVersion())
		{
			case '3.0':
				if(is_array($xmlProduct->SupplyDetail->Price))
				{
					foreach ($xmlProduct->SupplyDetail->Price as $xmlPrice) 
					{
						$price = new \BBM\model\Price();

						$price->setType(strval($xmlPrice->PriceType));
						$price->setStatus(strval($xmlPrice->PriceStatus));
						$price->setAmount(strval($xmlPrice->PriceAmount));
						$price->setCurrency(strval($xmlPrice->CurrencyCode));

						$prices[] = $price;
					}
				}
				else
				{
					$price = new \BBM\model\Price();

					$price->setType(strval($xmlProduct->ProductSupply->SupplyDetail->PriceType));
					$price->setStatus(strval($xmlProduct->ProductSupply->SupplyDetail->PriceStatus));
					$price->setAmount(strval($xmlProduct->ProductSupply->SupplyDetail->PriceAmount));
					$price->setCurrency(strval($xmlProduct->ProductSupply->SupplyDetail->CurrencyCode));

					$prices[] = $price;
				}
				break;
			case '2.0':
			case '2.1':
				if(is_array($xmlProduct->SupplyDetail->Price))
				{
					foreach ($xmlProduct->SupplyDetail->Price as $xmlPrice) 
					{
						$price = new \BBM\model\Price();

						$price->setType(strval($xmlPrice->PriceTypeCode));
						$price->setStatus('');
						$price->setAmount(strval($xmlPrice->PriceAmount));
						$price->setCurrency(strval($xmlPrice->CurrencyCode));

						$prices[] = $price;
					}
				}
				else
				{
					$price = new \BBM\model\Price();

					$price->setType(strval($xmlProduct->SupplyDetail->Price->PriceTypeCode));
					$price->setStatus('');
					$price->setAmount(strval($xmlProduct->SupplyDetail->Price->PriceAmount));
					$price->setCurrency(strval($xmlProduct->SupplyDetail->Price->CurrencyCode));

					$prices[] = $price;
				}
				break;
		}

		return $prices;
	}
}

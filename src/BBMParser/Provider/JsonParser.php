<?php

namespace BBMParser\Provider;

use BBMParser\Model\Json as Json;
use BBMParser\Model\Price as Price;
use BBMParser\Model\Title as Title;
use BBMParser\Model\Author as Author;
use BBMParser\Model\Ilustrator as Ilustrator;
use BBMParser\Model\Bisac as Bisac;
use BBMParser\Model\CDD as CDD;
use BBMParser\Model\Header as Header;
use BBMParser\Model\Product as Product;

/**
 * Convert XML Onix(Essential) to object
 */

class JsonParser implements ObjectParser
{
    private $parser;

    public function getParserObject()
    {
        return isset($this->parser) ? $this->parser : null;
    }

    public function __construct($data, $dir = false, $version = null)
    {
        $release = json_decode($data,true)['@attributes']['release'];
        $data = json_decode($data);
        $this->parser = new Json();
        $this->parser->setVersion($version ? $version : $release);

        $this->parser->setHeader($this->getHeader($data->Header));
        //Needed!! becouse onix dont has tag for category names
        Bisac::loadFile();
        CDD::loadFile();

        foreach ($data->Product as $dataProduct)
        {
            $product = new Product();

            $product->setAvailability($this->getProductAvailability($dataProduct));

            $product->setOperationType($this->getProductOperationType($dataProduct));

            $product->setId($this->getProductId($dataProduct));

            $product->setISBN($this->getProductISBN($dataProduct));

            $product->setImprintName($this->getProductImprintName($dataProduct));

            $product->setFormatType($this->getProductFormatType($dataProduct));

            $product->setProtectionType($this->getProductProtectionType($dataProduct));

            $product->setCollectionTitle($this->getProductCollectionTitle($dataProduct));

            $product->setTitle($this->getProductTitle($dataProduct));

            $product->setSubTitle($this->getProductSubTitle($dataProduct,$product->getId()));

            $product->setContributors($this->getProductContributors($dataProduct));

            $product->setEditionNumber($this->getProductEditionNumber($dataProduct));

            $product->setIdiom($this->getProductIdiom($dataProduct));

            $product->setPageNumbers($this->getProductPageNumbers($dataProduct));

            $product->setSize($this->getProductSize($dataProduct));

            $product->setSizeUnit($this->getProductSizeUnit($dataProduct));

            $product->setCategories($this->getProductCategories($dataProduct));

            $product->setTags($this->getProductTags($dataProduct));

            $product->setAgeRatingPrecision($this->getProductAgeRatingPrecision($dataProduct));

            $product->setAgeRatingValue($this->getProductAgeRatingValue($dataProduct));

            $product->setSynopsis($this->getProductSynopsis($dataProduct));

            $product->setIncludedTerritoriality($this->getProductIncludedTerritoriality($dataProduct));

            $product->setFormatFile($this->getProductFormatFile($dataProduct));

            $product->setUrlFile($this->getProductUrlFile($dataProduct));

            $product->setPrices($this->getProductPrices($dataProduct));

            $this->parser->setProduct($product);

        }
    }

    private function getHeader($dataHeader)
    {
        $header = new Header();

        switch ($this->parser->getVersion())
        {
            case '3.0':
                // case '3.0.5':
                $header->setSender(strval($dataHeader->Sender->SenderName));
                $header->setContact(strval($dataHeader->Sender->ContactName));
                $header->setEmail(strval($dataHeader->Sender->EmailAddress));
                $header->setMessage(strval($dataHeader->MessageNote));
                break;

            case '2.0':
            case '2.1':
                $header->setSender(strval($dataHeader->FromCompany));
                $header->setContact(strval($dataHeader->FromPerson));
                $header->setEmail(strval($dataHeader->FromEmail));
                break;
        }

        return $header;
    }

    private function getProductAvailability($dataProduct)
    {
        //Existem algumas situações que podem fazer com que o livro não esteja disponível para venda.
        //Neste caso aqui estamos verificando se o produto está ativo e seu status junto ao fornecedor

        switch ($this->parser->getVersion())
        {
            case '3.0':
                // case '3.0.5':
                $availability = strval($dataProduct->PublishingDetail->PublishingStatus) == '04' && strval($dataProduct->ProductSupply->SupplyDetail->ProductAvailability == '20') ? true : false;
                break;

            case '2.0':
            case '2.1':
                $availability = strval($dataProduct->PublishingStatus) == '04' && strval($dataProduct->SupplyDetail->ProductAvailability == '20') ? true : false;
                break;
        }

        return $availability;
    }

    private function getProductOperationType($dataProduct)
    {
        //Para saber se é inserção(03), deleção(05) ou alteração(04).

        switch ($this->parser->getVersion())
        {
            case '3.0':
                // case '3.0.5':
            case '2.0':
            case '2.1':
                $operationType = strval($dataProduct->NotificationType);
                break;
        }

        return $operationType;
    }

    private function getProductId($dataProduct)
    {
        switch ($this->parser->getVersion())
        {
            case '3.0':
                // case '3.0.5':
            case '2.0':
            case '2.1':
                foreach ($dataProduct->ProductIdentifier as $productIdentifier)
                {
                    if(strval($productIdentifier->ProductIDType == '01'))
                        $id = strval($productIdentifier->IDValue);
                }
                break;
        }

        return $id;
    }

    private function getProductISBN($dataProduct)
    {
        switch ($this->parser->getVersion())
        {
            case '3.0':
            case '2.0':
            case '2.1':
                foreach ($dataProduct->ProductIdentifier as $productIdentifier)
                {
                    if(strval($productIdentifier->ProductIDType == '15') || strval($productIdentifier->ProductIDType == '03'))
                        $isbn = strval($productIdentifier->IDValue);
                }
                break;
        }

        return $isbn;
    }

    private function getProductImprintName($dataProduct)
    {
        switch ($this->parser->getVersion())
        {
            case '3.0':
                // case '3.0.5':
                $imprintName = strval($dataProduct->PublishingDetail->Imprint->ImprintName);
                break;
            case '2.0':
            case '2.1':
                $imprintName = strval($dataProduct->Imprint->ImprintName);
                break;
        }

        return $imprintName;
    }


    private function getProductFormatType($dataProduct)
    {
        //epub, pdf etc

        switch ($this->parser->getVersion())
        {
            case '3.0':
                // case '3.0.5':
                $formatType = strval($dataProduct->DescriptiveDetail->ProductFormDetail);
                break;
            case '2.0':
            case '2.1':
                $formatType = strval($dataProduct->EpubType);
                break;
        }

        return $formatType;
    }

    private function getProductProtectionType($dataProduct)
    {
        //adobe, marca d'agua etc

        switch ($this->parser->getVersion())
        {
            case '3.0':
                // case '3.0.5':
                $protectionType = strval($dataProduct->DescriptiveDetail->EpubTechnicalProtection);
                break;
            case '2.0':
            case '2.1':
                $protectionType = '';
                break;
        }

        return $protectionType;
    }

    private function getProductCollectionTitle($dataProduct)
    {
        $collectionTitle = '';

        switch ($this->parser->getVersion())
        {
            case '3.0':
                // case '3.0.5':
                if(!isset($dataProduct->DescriptiveDetail->NoCollection) && isset($dataProduct->DescriptiveDetail->Collection))
                    $collectionTitle = strval($dataProduct->DescriptiveDetail->Collection->TitleDetail->TitleElement->TitleText);

                break;
            case '2.0':
            case '2.1':
                $collectionTitle = strval($dataProduct->Series->TitleOfSeries);
                break;
        }

        return $collectionTitle;
    }

    private function getProductTitle($dataProduct)
    {
        $title = new Title();

        switch ($this->parser->getVersion())
        {
            case '3.0':
                // case '3.0.5':
                if(isset($dataProduct->DescriptiveDetail->TitleDetail->TitleElement->TitleText))
                    $title->setTitle(strval($dataProduct->DescriptiveDetail->TitleDetail->TitleElement->TitleText));

                if(!isset($dataProduct->DescriptiveDetail->TitleDetail->TitleElement->NoPrefix))
                    $title->setPrefix(strval($dataProduct->DescriptiveDetail->TitleDetail->TitleElement->TitlePrefix));

                $title->setWithoutPrefix(strval($dataProduct->DescriptiveDetail->TitleDetail->TitleElement->TitleWithoutPrefix));

                break;
            case '2.0':
            case '2.1':
                if(isset($dataProduct->Title->TitleText))
                    $title->setTitle(strval($dataProduct->Title->TitleText));

                if(!isset($dataProduct->Title->NoPrefix))
                    $title->setPrefix(strval($dataProduct->Title->TitlePrefix));

                $title->setWithoutPrefix(strval($dataProduct->Title->TitleWithoutPrefix));

                break;
        }

        return $title;
    }

    private function getProductSubTitle($dataProduct,$productId)
    {
        switch ($this->parser->getVersion())
        {
            case '3.0':
                // case '3.0.5':
                $subtitle = (is_string($dataProduct->DescriptiveDetail->TitleDetail->TitleElement->Subtitle)) ? strval($dataProduct->DescriptiveDetail->TitleDetail->TitleElement->Subtitle) : '';
                break;
            case '2.0':
            case '2.1':
                $subtitle = '';
                break;
        }

        return $subtitle;
    }

    private function getProductContributors($dataProduct)
    {
        $contributors = array();

        //Podemos ter vários autores e ilustradores para o mesmo ebook. Lembrando que neste caso trabalharemos apenas com esses dois

        switch ($this->parser->getVersion())
        {
            case '3.0':
                // case '3.0.5':

                foreach ($dataProduct->DescriptiveDetail->Contributor as $key =>  $xmlContributor)
                {
                    $contributor = null;

                    switch (strval($xmlContributor->ContributorRole))
                    {
                        case 'A01'://Significa que é autor do livro
                            $contributor = new Author();
                            break;
                        case 'A12'://Significa que é ilustrador do livro
                            $contributor = new Ilustrator();
                            break;
                    }

                    if(isset($contributor))
                    {
                        $contributor->setId(strval($xmlContributor->NameIdentifier->IDValue));
                        $contributor->setPreferenceOrderExibition(strval($xmlContributor->SequenceNumber));
                        $contributor->setName(strval($xmlContributor->NamesBeforeKey));
                        $contributor->setTypeName(strval($xmlContributor->NameIdentifier->IDTypeName));
                        $keyNames = (is_string($xmlContributor->KeyNames)) ? strval($xmlContributor->KeyNames) : '';
                        $contributor->setLastName($keyNames);
                        $contributor->setBiography(strval($xmlContributor->BiographicalNote->p));
                        $contributor->setTerritoriality(strval($xmlContributor->ContributorPlace->CountryCode));
                        if(isset($xmlContributor->Website) && strval($xmlContributor->Website->WebsiteRole == '06')) //Se o site for do proprio contribuidor
                            $contributor->setWebsite(strval($xmlContributor->Website->WebsiteLink));

                        $contributors[] = $contributor;
                    }

                }
                break;
            case '2.0':
            case '2.1':
                foreach ($dataProduct->Contributor as $xmlContributor)
                {
                    $contributor = null;

                    switch (strval($xmlContributor->ContributorRole))
                    {
                        case 'A01'://Significa que é autor do livro
                            $contributor = new Author();
                            break;
                        case 'A12'://Significa que é ilustrador do livro
                            $contributor = new Ilustrator();
                            break;
                    }

                    if(isset($contributor))
                    {
                        $contributor->setId('');
                        $contributor->setPreferenceOrderExibition(strval($xmlContributor->SequenceNumber));
                        $contributor->setName(strval($xmlContributor->NamesBeforeKey));
                        $contributor->setTypeName('');
                        $keyNames = (is_string($xmlContributor->KeyNames)) ? strval($xmlContributor->KeyNames) : '';
                        $contributor->setLastName($keyNames);
                        $contributor->setBiography(strval($xmlContributor->BiographicalNote));
                        $contributor->setWebsite('');
                        $contributor->setTerritoriality(strval($xmlContributor->CountryCode));

                        $contributors[] = $contributor;
                    }
                }
                break;
        }
        return $contributors;
    }

    private function getProductEditionNumber($dataProduct)
    {
        switch ($this->parser->getVersion())
        {
            case '3.0':
                // case '3.0.5':
                $editionNumber = strval($dataProduct->DescriptiveDetail->EditionNumber);
                break;
            case '2.0':
            case '2.1':
                $editionNumber = strval($dataProduct->EditionNumber);
                break;
        }

        return $editionNumber;
    }

    private function getProductIdiom($dataProduct)
    {
        //Idioma do texto do produto. Por hora somente isso nos importa

        switch ($this->parser->getVersion())
        {
            case '3.0':
                // case '3.0.5':
                if (strval($dataProduct->DescriptiveDetail->Language->LanguageRole == '01'))
                    $idiom = strval($dataProduct->DescriptiveDetail->Language->LanguageCode);
                break;
            case '2.0':
            case '2.1':
                if (strval($dataProduct->Language->LanguageRole == '01'))
                    $idiom = strval($dataProduct->Language->LanguageCode);
                break;
        }

        return $idiom;
    }

    private function getProductpageNumbers($dataProduct)
    {
        $pageNumbers = '';

        switch ($this->parser->getVersion())
        {
            case '3.0':
                // case '3.0.5':
                if(isset($dataProduct->DescriptiveDetail->Extent))
                {
                    foreach ($dataProduct->DescriptiveDetail->Extent as $extent)
                    {
                        if (strval($extent->ExtentType) == '10' && strval($extent->ExtentUnit) == '03')
                            $pageNumbers = strval($extent->ExtentValue);
                    }
                }
                break;
            case '2.0':
            case '2.1':
                $pageNumbers = strval($dataProduct->NumberOfPages);
                break;
        }

        return $pageNumbers;
    }

    private function getProductSize($dataProduct)
    {
        $size = '';
        switch ($this->parser->getVersion())
        {
            case '3.0':
                // case '3.0.5':
                foreach ($dataProduct->DescriptiveDetail->Extent as $extent)
                {
                    if(strval($extent->ExtentType) == '22')
                        $size = strval($extent->ExtentValue);
                }
                break;
            case '2.0':
            case '2.1':
                foreach ($dataProduct->Extent as $extent)
                {
                    if(strval($extent->ExtentType) == '22')
                        $size = strval($extent->ExtentValue);
                }
                break;
        }

        return $size;
    }

    private function getProductSizeUnit($dataProduct)
    {
        $sizeUnit = '';

        switch ($this->parser->getVersion())
        {
            case '3.0':
                // case '3.0.5':
                foreach ($dataProduct->DescriptiveDetail->Extent as $extent)
                {
                    if(strval($extent->ExtentType) == '22')
                        $sizeUnit = strval($extent->ExtentUnit);
                }
                break;
            case '2.0':
            case '2.1':
                foreach ($dataProduct->Extent as $extent)
                {
                    if(strval($extent->ExtentType) == '22')
                        $sizeUnit = strval($extent->ExtentUnit);
                }
                break;
        }

        return $sizeUnit;
    }

    private function getProductCategories($dataProduct)
    {
        switch ($this->parser->getVersion())
        {
            case '3.0':
                // case '3.0.5':
                $categories = array();

                foreach ($dataProduct->DescriptiveDetail->Subject as $subject)
                {
                    $category = null;

                    switch (strval($subject->SubjectSchemeIdentifier))
                    {
                        case '10'://Bisac
                            //Gambiarra momentanea, pois ainda existem muitos ebooks que nao possuem categorias existentes. Creio eu
                            try
                            {
                                if(is_string($subject->SubjectCode)){
                                    $category = new Bisac(strval($subject->SubjectCode));
                                }


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
                                if(is_string($subject->SubjectCode)) {
                                    $category = new CDD(strval($subject->SubjectCode));
                                }
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

                foreach ($dataProduct->MainSubject as $mainSubject)
                {
                    $category = null;

                    switch (strval($mainSubject->MainSubjectSchemeIdentifier))
                    {
                        case '10'://Bisac
                            //Gambiarra momentanea, pois ainda existem muitos ebooks que nao possuem categorias existentes. Creio eu
                            try
                            {
                                if(is_string($mainSubject->SubjectCode)){
                                    $category = new Bisac(strval($mainSubject->SubjectCode));
                                }

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
                                if(is_string($mainSubject->SubjectCode)) {
                                    $category = new CDD(strval($mainSubject->SubjectCode));
                                }
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

                foreach ($dataProduct->Subject as $subject)
                {
                    $category = null;

                    switch (strval($subject->SubjectSchemeIdentifier))
                    {
                        case '10'://Bisac
                            //Gambiarra momentanea, pois ainda existem muitos ebooks que nao possuem categorias existentes. Creio eu
                            try
                            {
                                $category = new Bisac(strval($subject->SubjectCode), strval($subject->SubjectHeadingText));
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
                                $category = new CDD(strval($subject->SubjectCode), strval($subject->SubjectHeadingText));
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

    private function getProductTags($dataProduct)
    {

        switch ($this->parser->getVersion())
        {
            case '3.0':
                $tags = '';

                foreach ($dataProduct->DescriptiveDetail->Subject as $subject)
                {
                    switch (strval($subject->SubjectSchemeIdentifier))
                    {
                        case '20' :
                            $tags = trim(strval($subject->SubjectHeadingText));
                            break;
                    }
                }
                break;
            case '2.0':
            case '2.1':
                $tags = '';

                foreach ($dataProduct->Subject as $subject)
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

    private function getProductAgeRatingPrecision($dataProduct)
    {
        $ageRatingPrecision = '';

        switch ($this->parser->getVersion())
        {
            case '3.0':
                // case '3.0.5':
                $ageRatingPrecision = strval($dataProduct->DescriptiveDetail->AudienceRange->AudienceRangePrecision);
                break;
            case '2.0':
            case '2.1':
                $ageRatingPrecision = strval($dataProduct->AudienceRange->AudienceRangePrecision);
                break;
        }

        return $ageRatingPrecision;
    }

    private function getProductAgeRatingValue($dataProduct)
    {
        $ageRationValue = '';

        switch ($this->parser->getVersion())
        {
            case '3.0':
                // case '3.0.5':
                $ageRatingValue = strval($dataProduct->DescriptiveDetail->AudienceRange->AudienceRangeValue);
                break;
            case '2.0':
            case '2.1':
                $ageRatingValue = strval($dataProduct->AudienceRange->AudienceRangeValue);
                break;
        }

        return $ageRatingValue;
    }

    private function getProductSynopsis($dataProduct)
    {
        $synopsis = '';

        switch ($this->parser->getVersion())
        {
            case '3.0':
                // case '3.0.5':
                if(isset($dataProduct->CollateralDetail->TextContent))
                {
                    foreach($dataProduct->CollateralDetail->TextContent as $textContent)
                    {
                        if(strval($textContent->TextType) == '03')
                            $synopsis = strval($textContent->Text);
                    }
                }
                break;
            case '2.0':
            case '2.1':
                foreach($dataProduct->OtherText as $otherText)
                {
                    if(strval($otherText->TextTypeCode) == '01')
                        $synopsis = strval($otherText->Text);
                }
                break;
        }

        return $synopsis;
    }

    private function getProductFormatFile($dataProduct)
    {
        $formatFile = '';

        switch ($this->parser->getVersion())
        {
            case '3.0':
                // case '3.0.5':
                if(isset($dataProduct->CollateralDetail->SupportingResource))
                {
                    if (strval($dataProduct->CollateralDetail->SupportingResource->ResourceContentType) == '01' &&
                        strval($dataProduct->CollateralDetail->SupportingResource->ResourceVersion->ResourceVersionFeature->ResourceVersionFeatureType == '01'))
                    {
                        $formatFile = strval($dataProduct->CollateralDetail->SupportingResource->ResourceVersion->ResourceVersionFeature->FeatureValue);
                        // $product->setUrlFile(strval($dataProduct->CollateralDetail->SupportingResource->ResourceVersion->ResourceLink));
                    }
                }
                break;
            case '2.0':
            case '2.1':
                $formatFile = '';
                break;
        }

        return $formatFile;
    }

    private function getProductUrlFile($dataProduct)
    {
        $urlFile = '';

        switch ($this->parser->getVersion())
        {
            case '3.0':
                // case '3.0.5':
                if(isset($dataProduct->CollateralDetail->SupportingResource))
                {
                    if (strval($dataProduct->CollateralDetail->SupportingResource->ResourceContentType) == '01' &&
                        strval($dataProduct->CollateralDetail->SupportingResource->ResourceVersion->ResourceVersionFeature->ResourceVersionFeatureType == '01'))
                    {
                        $urlFile = strval($dataProduct->CollateralDetail->SupportingResource->ResourceVersion->ResourceLink);
                    }
                }
                break;
            case '2.0':
            case '2.1':
                $urlFile = '';
                break;
        }

        return $urlFile;
    }

    private function getProductPrices($dataProduct)
    {
        $prices = array();

        switch ($this->parser->getVersion())
        {
            case '3.0':
                // case '3.0.5':
                if(count($dataProduct->ProductSupply->SupplyDetail->Price) > 1)//is array
                {
                    foreach ($dataProduct->ProductSupply->SupplyDetail->Price as $xmlPrice)
                    {
                        $price = new Price();

                        $price->setType(strval($xmlPrice->PriceType));
                        $price->setStatus(strval($xmlPrice->PriceStatus));
                        $price->setAmount(strval($xmlPrice->PriceAmount));
                        $price->setCurrency(strval($xmlPrice->CurrencyCode));

                        $prices[] = $price;
                    }
                }
                else
                {
                    $price = new Price();

                    $price->setType(strval($dataProduct->ProductSupply->SupplyDetail->PriceType));
                    $price->setStatus(strval($dataProduct->ProductSupply->SupplyDetail->PriceStatus));
                    $price->setAmount(strval($dataProduct->ProductSupply->SupplyDetail->PriceAmount));
                    $price->setCurrency(strval($dataProduct->ProductSupply->SupplyDetail->CurrencyCode));

                    $prices[] = $price;
                }
                break;
            case '2.0':
            case '2.1':
                if(count($dataProduct->SupplyDetail->Price) > 1)//is array
                {
                    foreach ($dataProduct->SupplyDetail->Price as $xmlPrice)
                    {
                        $price = new Price();

                        $price->setType(strval($xmlPrice->PriceTypeCode));
                        $price->setStatus('');
                        $price->setAmount(strval($xmlPrice->PriceAmount));
                        $price->setCurrency(strval($xmlPrice->CurrencyCode));

                        $prices[] = $price;
                    }
                }
                else
                {
                    $price = new Price();

                    $price->setType(strval($dataProduct->SupplyDetail->Price->PriceTypeCode));
                    $price->setStatus('');
                    $price->setAmount(strval($dataProduct->SupplyDetail->Price->PriceAmount));
                    $price->setCurrency(strval($dataProduct->SupplyDetail->Price->CurrencyCode));

                    $prices[] = $price;
                }
                break;
        }

        return $prices;
    }

    private function getProductIncludedTerritoriality($dataProduct)
    {
        $includedTerritoriality = '';

        switch ($this->parser->getVersion())
        {
            case '3.0':
                // case '3.0.5':
                if(isset($dataProduct->PublishingDetail->SalesRights->Territory->RegionsIncluded))
                    $includedTerritoriality = strval($dataProduct->PublishingDetail->SalesRights->Territory->RegionsIncluded);
                else
                    $includedTerritoriality = strval($dataProduct->PublishingDetail->SalesRights->Territory->CountriesIncluded);
                break;
            case '2.0':
            case '2.1':
                if(isset($dataProduct->SalesRights->RightsTerritory))
                    $includedTerritoriality = strval($dataProduct->SalesRights->RightsTerritory);
                else
                    $includedTerritoriality = strval($dataProduct->SalesRights->RightsCountry);
                break;
        }

        return $includedTerritoriality;
    }

}

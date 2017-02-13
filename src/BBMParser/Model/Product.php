<?php

namespace BBMParser\Model;

class Product
{
    private $availability;
    private $id;
    private $isbn;
    private $operationType;
    private $formatType;
    private $protectionType;
    private $collectionTitle;
    private $title;
    private $subTitle;
    private $contributors = array();
    private $editionNumber;
    private $idiom;
    private $pageNumbers;
    private $size;
    private $sizeUnit;
    private $categories = array();
    private $tags;
    private $ageRatingPrecision;
    private $ageRatingValue;
    private $synopsis;
    private $formatFile;
    private $urlFile;
    private $prices = array();
    private $includedTerritoriality;
    private $imprintName;

    /**
     * @param [type]
     */
    public function setAvailability($availability)
    {
        $this->availability = $availability;
    }

    /**
     * Gets the value of availability.
     *
     * @return mixed
     */
    public function isAvailable()
    {
        return $this->availability;
    }

    /**
     * @param [type]
     */
    public function setOperationType($operationType)
    {
        $this->operationType = $operationType;
    }

    /**
     * Gets the value of operationType.
     *
     * @return mixed
     */
    public function getOperationType()
    {
        return $this->operationType;
    }

    /**
     * Gets the value of isbn.
     *
     * @return mixed
     */
    public function getISBN()
    {
        return $this->isbn;
    }

    /**
     * Sets the value of isbn.
     *
     * @param mixed $isbn the isbn
     *
     * @return self
     */
    public function setISBN($isbn)
    {
        $this->isbn = $isbn;
    }

    /**
     * Gets the value of id.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the value of id.
     *
     * @param mixed $id the id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Gets the value of formatType.
     *
     * @return mixed
     */
    public function getFormatType()
    {
        return $this->formatType;
    }

    /**
     * Sets the value of formatType.
     *
     * @param mixed $formatType the product type
     *
     * @return self
     */
    public function setFormatType($formatType)
    {
        $this->formatType = $formatType;
    }

    /**
     * Gets the value of setProtectionType.
     *
     * @return mixed
     */
    public function getProtectionType()
    {
        return $this->protectionType;
    }

    /**
     * Sets the value of setProtectionType.
     *
     * @param mixed $setProtectionType the set protection type
     *
     * @return self
     */
    public function setProtectionType($protectionType)
    {
        $this->protectionType = $protectionType;
    }

    /**
     * Gets the value of collectionTitle.
     *
     * @return mixed
     */
    public function getCollectionTitle()
    {
        return $this->collectionTitle;
    }

    /**
     * Sets the value of collectionTitle.
     *
     * @param mixed $collectionTitle the collection title
     *
     * @return self
     */
    public function setCollectionTitle($collectionTitle)
    {
        $this->collectionTitle = $collectionTitle;
    }

    /**
     * Gets the value of title.
     *
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the value of title.
     *
     * @param mixed $title the title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Gets the value of subTitle.
     *
     * @return mixed
     */
    public function getSubTitle()
    {
        return $this->subTitle;
    }

    /**
     * Sets the value of subTitle.
     *
     * @param mixed $subTitle the sub title
     *
     * @return self
     */
    public function setSubTitle($subTitle)
    {
        $this->subTitle = $subTitle;
    }

    /**
     * Gets the value of contributor.
     *
     * @return mixed
     */
    public function getContributors()
    {
        return $this->contributors;
    }

     /**
     * Gets the value of contributor.
     *
     * @return mixed
     */
    public function getContributorsByType($type)
    {
        $contributors = array();

        foreach ($this->contributors as $contributor) 
        {
            $reflection = new \ReflectionClass($contributor);
            
            if($reflection->getShortName() == ucfirst($type))
                $contributors[] = $contributor;
        }

        return $contributors;
    }

    /**
     * Sets the value of contributor.
     *
     * @param mixed $contributor the contributor
     *
     * @return self
     */
    public function setContributors(Array $contributors)
    {
        $this->contributors = $contributors;
    }

    /**
     * Gets the value of editionNumber.
     *
     * @return mixed
     */
    public function getEditionNumber()
    {
        return $this->editionNumber;
    }

    /**
     * Sets the value of editionNumber.
     *
     * @param mixed $editionNumber the edition number
     *
     * @return self
     */
    public function setEditionNumber($editionNumber)
    {
        $this->editionNumber = $editionNumber;
    }

    /**
     * Gets the value of idiom.
     *
     * @return mixed
     */
    public function getIdiom()
    {
        return $this->idiom;
    }

    /**
     * Sets the value of idiom.
     *
     * @param mixed $idiom the idiom
     *
     * @return self
     */
    public function setIdiom($idiomCode)
    {
        $this->idiom = $idiomCode;
    }

    /**
     * Gets the value of pagesNumber.
     *
     * @return mixed
     */
    public function getPageNumbers()
    {
        return $this->pageNumbers;
    }

    /**
     * Sets the value of pagesNumber.
     *
     * @param mixed $pagesNumber the pages number
     *
     * @return self
     */
    public function setPageNumbers($pageNumbers)
    {
        $this->pageNumbers = $pageNumbers;
    }

    /**
     * Gets the value of size.
     *
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Sets the value of size.
     *
     * @param mixed $size the size
     *
     * @return self
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * Gets the value of sizeUnit.
     *
     * @return mixed
     */
    public function getSizeUnit()
    {
        return $this->sizeUnit;
    }

    /**
     * Sets the value of sizeUnit.
     *
     * @param mixed $sizeUnit the size unit
     *
     * @return self
     */
    public function setSizeUnit($sizeUnit)
    {
        $this->sizeUnit = $sizeUnit;
    }

    /**
     * Gets the value of categories.
     *
     * @return mixed
     */
    public function getCategories()
    {
        return $this->categories;
    }

    public function getCategoriesByType($type)
    {
        $categories = array();

        foreach ($this->categories as $category) 
        {
            $reflection = new \ReflectionClass($category);
            
            if($reflection->getShortName() == ucfirst($type))
                $categories[] = $category;
        }

        return $categories;
    }


    /**
     * Sets the value of categories.
     *
     * @param mixed $categories the categories
     *
     * @return self
     */
    public function setCategories(Array $categories)
    {
        $this->categories = $categories;
    }

    /**
     * Gets the value of tags.
     *
     * @return mixed
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Sets the value of tags.
     *
     * @param mixed $tags the tags
     *
     * @return self
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }

    /**
     * Gets the value of ageRating.
     *
     * @return mixed
     */
    public function getAgeRatingPrecision()
    {
        return $this->ageRatingPrecision;
    }

    /**
     * Sets the value of ageRating.
     *
     * @param mixed $ageRating the age rating
     *
     * @return self
     */
    public function setAgeRatingPrecision($ageRatingPrecision)
    {
        $this->ageRatingPrecision = $ageRatingPrecision;
    }

    /**
     * Gets the value of ageRating.
     *
     * @return mixed
     */
    public function getAgeRatingValue()
    {
        return $this->ageRatingValue;
    }

    /**
     * Sets the value of ageRating.
     *
     * @param mixed $ageRating the age rating
     *
     * @return self
     */
    public function setAgeRatingValue($ageRatingValue)
    {
        $this->ageRatingValue = $ageRatingValue;
    }

    /**
     * Gets the value of synopsis.
     *
     * @return mixed
     */
    public function getSynopsis()
    {
        return $this->synopsis;
    }

    /**
     * Sets the value of synopsis.
     *
     * @param mixed $synopsis the synopsis
     *
     * @return self
     */
    public function setSynopsis($synopsis)
    {
        $this->synopsis = $synopsis;
    }

    /**
     * Gets the value of formatFile.
     *
     * @return mixed
     */
    public function getFormatFile()
    {
        return $this->formatFile;
    }

    /**
     * Sets the value of formatFile.
     *
     * @param mixed $formatFile the format file
     *
     * @return self
     */
    public function setFormatFile($formatFile)
    {
        $this->formatFile = $formatFile;
    }

    /**
     * Gets the value of urlFile.
     *
     * @return mixed
     */
    public function getUrlFile()
    {
        return $this->urlFile;
    }

    /**
     * Sets the value of urlFile.
     *
     * @param mixed $urlFile the url file
     *
     * @return self
     */
    public function setUrlFile($urlFile)
    {
        $this->urlFile = $urlFile;
    }

    /**
     * Gets the value of price.
     *
     * @return mixed
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * Sets the value of price.
     *
     * @param mixed $price the price
     *
     * @return self
     */
    public function setPrices(Array $prices)
    {
        $this->prices = $prices;
    }

     /**
     * Gets the value of price.
     *
     * @return mixed
     */
    public function getIncludedTerritoriality()
    {
        return $this->includedTerritoriality;
    }

    /**
     * Sets the value of price.
     *
     * @param mixed $price the price
     *
     * @return self
     */
    public function setIncludedTerritoriality($includedTerritoriality)
    {
        $this->includedTerritoriality = $includedTerritoriality;
    }

     /**
     * Gets the value of price.
     *
     * @return mixed
     */
    public function getImprintName()
    {
        return $this->imprintName;
    }

    /**
     * Sets the value of price.
     *
     * @param mixed $price the price
     *
     * @return self
     */
    public function setImprintName($imprintName)
    {
        $this->imprintName = $imprintName;
    }
}
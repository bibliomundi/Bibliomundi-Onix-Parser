<?php

namespace BBM\model;

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
	private $pagesNumber;
	private $size;
	private $sizeUnit;
	private $categories = array();
	private $tags = array();
	private $ageRating;
	private $synopsis;
	private $formatFile;
	private $urlFile;
	private $publisherName;
	private $publisherWebsite;
	private $price;

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
	public function setOperationType($type)
	{
		$this->operationType = \BBM\model\ProductEnum::$operationType[$type];
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
        $this->id = (int) $id;
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
        $this->formatType = \BBM\model\ProductEnum::$productFormDetail[$formatType];
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
        $this->protectionType = \BBM\model\ProductEnum::$epubTechnicalProtection[$protectionType];
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
    public function setContributor(Contributor $contributor)
    {
        $this->contributors[] = $contributor;
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
        $this->editionNumber = (int) $editionNumber;
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
        $this->idiom = ProductEnum::$languageRoleDescription[$idiomCode];
    }

    /**
     * Gets the value of pagesNumber.
     *
     * @return mixed
     */
    public function getPagesNumber()
    {
        return $this->pagesNumber;
    }

    /**
     * Sets the value of pagesNumber.
     *
     * @param mixed $pagesNumber the pages number
     *
     * @return self
     */
    public function setPagesNumber($pagesNumber)
    {
        $this->pagesNumber = (int) $pagesNumber;
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
        $this->size = (int) $size;
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
        $this->sizeUnit = \BBM\model\ProductEnum::$sizeUnit[$sizeUnit];
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


    /**
     * Sets the value of categories.
     *
     * @param mixed $categories the categories
     *
     * @return self
     */
    public function setCategory($category)
    {
        $this->categories[] = $category;
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
    public function getAgeRating()
    {
        return $this->ageRating;
    }

    /**
     * Sets the value of ageRating.
     *
     * @param mixed $ageRating the age rating
     *
     * @return self
     */
    public function setAgeRating($precision, $value)
    {
        $aux = $value > 1 ? 'anos' : 'ano';
        $this->ageRating = \BBM\model\ProductEnum::$ageRatingClassification[$precision] . ' ' . $value . ' ' . $aux;
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
        $this->formatFile = \BBM\model\ProductEnum::$formatFile[$formatFile];
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
        $this->urlFile = 'http://' . $urlFile;
    }

    /**
     * Gets the value of publisherName.
     *
     * @return mixed
     */
    public function getPublisherName()
    {
        return $this->publisherName;
    }

    /**
     * Sets the value of publisherName.
     *
     * @param mixed $publisherName the publisher name
     *
     * @return self
     */
    public function setPublisherName($publisherName)
    {
        $this->publisherName = $publisherName;
    }

    /**
     * Gets the value of publisherWebsite.
     *
     * @return mixed
     */
    public function getPublisherWebsite()
    {
        return $this->publisherWebsite;
    }

    /**
     * Sets the value of publisherWebsite.
     *
     * @param mixed $publisherWebsite the publisher website
     *
     * @return self
     */
    public function setPublisherWebsite($publisherWebsite)
    {
        $this->publisherWebsite = $publisherWebsite;
    }

    /**
     * Gets the value of price.
     *
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets the value of price.
     *
     * @param mixed $price the price
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }
}
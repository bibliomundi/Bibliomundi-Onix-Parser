<?php

namespace BBM\model;

abstract class Category
{
	private $code;
	private $name;

     /**
     * Gets the value of code.
     *
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets the value of code.
     *
     * @param mixed $code the code
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * Gets the value of name.
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getIdentifier()
    {
        return $this->identifier;
    }

    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
    }

}

namespace BBM\model\Category;

class Bisac extends \BBM\model\Category
{    
    public function __construct($code, $name)
    {
        $this->name = $name;
        $this->code = $code;
        $this->identifier = '10';
    }
}

namespace BBM\model\Category;

class CDD extends \BBM\model\Category
{
    public function __construct($code, $name)
    {
        $this->name = $name;
        $this->code = $code;
        $this->identifier = '01' ;
    }
}
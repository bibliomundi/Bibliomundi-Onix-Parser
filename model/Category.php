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

    /**
     * Sets the value of name.
     *
     * @param mixed $name the name
     *
     * @return self
     */

}

namespace BBM\model\Category;

class Bisac extends \BBM\model\Category
{    
    public function __construct($code)
    {
        if(array_key_exists($code, \BBM\model\ProductEnum::$bisac))
        {
            $this->setName(\BBM\model\ProductEnum::$bisac[$code]);
            $this->setCode($code);
        }
        else
            throw new \Exception('Not Found');
    }
}

namespace BBM\model\Category;

class CDD extends \BBM\model\Category
{
    public function __construct($code)
    {
        if(array_key_exists($code, \BBM\model\ProductEnum::$bisac))
        {
            $this->setName(\BBM\model\ProductEnum::$bisac[$code]);
            $this->setCode($code);
        }
        else
            throw new \Exception('Not Found');
    }
}
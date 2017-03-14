<?php

namespace BBMParser\Model;

class Bisac extends Category
{    
	private static $names;

    public function __construct($code)
    {
        parent::setCode($code);
        parent::setIdentifier('10');

        $this->getFromFile($code);
    }

    public function getFromFile($code)
    {
    	foreach (self::$names as $value) 
    	{
    		if($value['code'] == $code)
				parent::setName($value['description_ptbr']);	 		
    	}
    }

    public static function loadFile()
    {
    	self::$names = json_decode(file_get_contents(__DIR__ . '/bisac.json'), true);
    }
}
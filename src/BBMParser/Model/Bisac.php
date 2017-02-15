<?php

namespace BBMParser\Model;

class Bisac extends Category
{    
    public function __construct($code, $name)
    {
        parent::setName($name);
        parent::setCode($code);
        parent::setIdentifier('10');
    }
}
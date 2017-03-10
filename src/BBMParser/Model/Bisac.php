<?php

namespace BBMParser\Model;

class Bisac extends Category
{    
    public function __construct($code)
    {
        parent::setCode($code);
        parent::setIdentifier('10');
    }
}
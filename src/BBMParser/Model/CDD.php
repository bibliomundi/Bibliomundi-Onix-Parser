<?php

namespace BBMParser\Model;

class CDD extends Category
{
    public function __construct($code, $name)
    {
        parent::setName($name);
        parent::setCode($code);
        parent::setIdentifier('01');
    }
}
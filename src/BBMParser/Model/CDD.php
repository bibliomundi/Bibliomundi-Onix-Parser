<?php

namespace BBMParser\Model;

class CDD extends Category
{
    public function __construct($code)
    {
        parent::setCode($code);
        parent::setIdentifier('01');
    }
}
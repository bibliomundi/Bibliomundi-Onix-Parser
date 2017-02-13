<?php

namespace BBMParser\Model;

class CDD extends BBMParser\Model\Category
{
    public function __construct($code, $name)
    {
        parent::setName($name);
        parent::setCode($code);
        parent::setIdentifier('01');
    }
}
<?php 

namespace BBMParser\Model;

class Author extends Contributor
{
    public function __construct()
    {
        parent::setRole('A01');
    }
}
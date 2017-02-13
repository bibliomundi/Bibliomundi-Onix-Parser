<?php 

namespace BBMParser\Model;

class Author extends BBMParser\Model\Contributor
{
    public function __construct()
    {
        parent::setRole('A01');
    }
}
<?php

namespace BBMParser\Model;

class Title
{
    private $title;
    private $prefix;
    private $withoutPrefix;

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getPrefix()
    {
        return $this->prefix;
    }

    public function setPrefix($prefix)
    {
        $this->prefix = $prefix;
    }

    public function getWithoutPrefix()
    {
        return $this->withoutPrefix;
    }

    public function setWithoutPrefix($withoutPrefix)
    {
        $this->withoutPrefix = $withoutPrefix;
    }
}
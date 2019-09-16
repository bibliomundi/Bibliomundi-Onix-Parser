<?php

namespace BBMParser\Provider;

interface ObjectParser {

    public function __construct( $data , $dir = false, $version = null);
    public function getParserObject();

}
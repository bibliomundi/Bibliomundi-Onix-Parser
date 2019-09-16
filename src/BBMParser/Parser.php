<?php

namespace BBMParser;

use BBMParser\Provider\OnixParser;
use BBMParser\Provider\JsonParser;
class Parser {
    private $parser = null;
    private $parserType = '';
    public function __construct( $data, $type = 'xml', $dir = false, $version = null){
        $this->parserType = $type;
        switch ($this->parserType){
            case "xml" :
                $this->parser = new OnixParser($data,$dir,$version);
                break;
            case "json":
                $this->parser = new JsonParser($data,$dir,$version);
                break;
        }
    }
    public function getParserObject(){
        return $this->parser->getParserObject();
    }

}
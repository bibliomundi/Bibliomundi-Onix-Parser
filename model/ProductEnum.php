<?php

namespace BBM\model;

class ProductEnum
{
	public static $operationType;
	public static $contributorsType;
	public static $productFormDetail; 
	public static $epubTechnicalProtection;
	public static $sizeUnit; 
	public static $ageRatingClassification;
	public static $formatFile;		
    public static $languageRoleDescription;	
	public static $bisac;
	public static $cdd;

    public static function init()
    {
        $aux = json_decode(file_get_contents('bisac.json'), TRUE);

        foreach ($aux as $bisac)
           self::$bisac[$bisac['code']] = $bisac['description_ptbr'];

        $aux = json_decode(file_get_contents('cdd.json'), TRUE);

        foreach ($aux as $cdd)
           self::$cdd[$cdd['code']] = $cdd['description_ptbr'];

        self::$operationType           = array('03' => 'insert', '04' => 'update', '05' => 'delete');
        self::$contributorsType        = array('Autor', 'Ilustrador');
        self::$productFormDetail       = array('E101' => 'epub');
        self::$epubTechnicalProtection = array('00' => 'Sem proteção', '02' => 'Marca d\'água', '03' => 'Adobe DRM');
        self::$sizeUnit                = array('17' => 'Bytes', '18' => 'Kbytes', '19' => 'MBytes');
        self::$ageRatingClassification = array('01' => 'Exatamente', '03' => 'A partir de', '04' => 'Até');
        self::$formatFile              = array('D502' => 'jpeg', 'D503' => 'png');
        self::$languageRoleDescription = array('por' => 'Português');
    }
    
}
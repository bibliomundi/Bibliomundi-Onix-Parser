# Bibliomundi-Onix-Parser

PHP Library to convert XML Onix into PHP Objects.

# Requirements

- XML Onix 2.0 >
- PHP 5.4 >

# Install

Simple require the autoload.php file that is inside the src folder. Ex: include"src/autoload.php".

If you user composer simple require magrao/bibliomundi-onix-parse.

# Usage

$parser = new BBMParser\OnixParser($xmlOnix);

//If you prefer load from file

$parser = new BBMParser\OnixParser('/var/www/xml_onix.xml', true);

//Loop for all products

foreach($parser->getOnix()->getProducts() as $product);

//Loop for all only available for sell products

foreach($parser->getOnix()->getProductsAvailable() as $productAvailable);

# Docs

Coming soon...

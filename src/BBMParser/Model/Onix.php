<?php

namespace BBMParser\Model;

class Onix
{
	/**
	 * [$product description]
	 * @var array<Product>
	 */
	private $products = array();

	/**
	 * [$productAvailable description]
	 * @var array<Product>
	 */
	private $productsAvailable = array();

	/**
	 * [$header description]
	 * @var [Header]
	 */
	private $header;

	/**
	 * [$header description]
	 * @var [Header]
	 */
	private $version;

	/**
	 * 
	 */
	public function setProduct(Product $product)
	{
		$this->products[] = $product;
		
		if($product->isAvailable())
			$this->productsAvailable[] = $product;
			
	}

	public function getProducts()
	{
		return $this->products;
	}

	public function getProductsAvailable()
	{
		return $this->productsAvailable;
	}

	public function setHeader(Header $header)
	{
		$this->header = $header;
	}

	public function getHeader()
	{
		return $this->header;
	}

	public function setVersion($version)
	{
		$this->version = $version;
	}

	public function getVersion()
	{
		return $this->version;
	}
}
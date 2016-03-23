<?php

namespace BBM\model;

class Onix
{
	/**
	 * [$product description]
	 * @var array<Product>
	 */
	private $products = array();

	/**
	 * [$header description]
	 * @var [Header]
	 */
	private $header;

	/**
	 * 
	 */
	public function setProduct(Product $product)
	{
		$this->products[] = $product;
	}

	public function getProducts()
	{
		return $this->products;
	}

	public function getProductsAvailable()
	{
		if(count($this->products))
		{
			$productsAvailable = array();

			foreach ($this->products as $product)
			{
				if($product->isAvailable())
					$productsAvailable[] = $product;
			}

			return $productsAvailable;
		}
	}

	public function setHeader(Header $header)
	{
		$this->header = $header;
	}

	public function getHeader()
	{
		return $this->header;
	}
}
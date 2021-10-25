<?php

require_once __DIR__ . '/../Traits/ProductTraits.php';
class Product
{
	use ProductTraits;
	private $name;
	private $price;
	public function __construct($_name, $_price, $_brand)
	{
		$this->name = $_name;
		$this->price = $_price;
		$this->brand = $_brand;
	}
}

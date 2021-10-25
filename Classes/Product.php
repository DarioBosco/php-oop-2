<?php

require_once __DIR__ . '/../Traits/ProductTraits.php';
class Product
{
	use ProductTraits;
	public $name;
	public $price;
	public function __construct($_name, $_price)
	{
		$this->name = $_name;
		$this->price = $_price;
	}
}

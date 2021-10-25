<?php

require_once __DIR__ . '/Products/Mouse.php';
require_once __DIR__ . '/Products/Keyboard.php';

class Product
{
	public $name;
	public $price;
	public function __construct($_name, $_price)
	{
		$this->name = $_name;
		$this->price = $_price;
	}

	function setName($name)
	{
		$this->name = $name;
	}

	function getName()
	{
		return $this->name;
	}

	function setPrice($price)
	{
		$this->price = $price;
	}

	function getPrice()
	{
		return $this->price;
	}
}

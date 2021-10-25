<?php
require_once __DIR__ . '/Products/Mouse.php';
require_once __DIR__ . '/Products/Keyboard.php';

class Product
{
	private $name;
	private $price;

	use ProductTraits;

	public function __construct($_name, $_price)
	{
		$this->name = $_name;
		$this->price = $_price;
	}
}

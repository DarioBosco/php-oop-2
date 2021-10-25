<?php
class Keyboard extends Product
{
	private $brand;
	private $languageLayout;
	private $amountOfKeys;
	private $connector;

	public function __construct($_name, $_price, $_brand, $_languageLayout, $_amountOfKeys, $_connector)
	{
		parent::__construct($_name, $_price);
		$this->brand = $_brand;
		$this->languageLayout = $_languageLayout;
		$this->amountOfKeys = $_amountOfKeys;
		$this->connector = $_connector;
	}
}

<?php

trait ProductTraits
{
	function setName($name)
	{
		$this->name = $name;
	}

	function getName()
	{
		return $this->name;
	}

	//Imposto un'eccezione nel caso il prezzo non sia numerico.
	function setPrice($price)
	{
		if (!is_numeric($price)) {
			throw new Exception('It\'s not a number!');
		}
		$this->price = $price;
	}

	function getPrice()
	{
		return $this->price;
	}

	function setBrand($brand)
	{
		$this->brand = $brand;
	}

	function getBrand()
	{
		return $this->brand;
	}
}

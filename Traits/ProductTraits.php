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

	function setPrice($price)
	{
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

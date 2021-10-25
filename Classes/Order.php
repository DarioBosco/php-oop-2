<?php
class Order
{
	private $products = array();
	private $user;

	function __construct($_user, ...$_products)
	{
		$this->user = $_user;
		$this->products = $_products;
	}

	function setProducts(...$products)
	{
		$this->products = $products;
	}

	function getProducts()
	{
		return $this->products;
	}

	function setUser($user)
	{
		$this->user = $user;
	}

	function getUser()
	{
		return $this->user;
	}
}

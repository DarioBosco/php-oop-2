<?php

class Address
{
	public $street;
	public $streetNo;
	public $city;
	public $zipCode;
	public $country;

	function __construct($_street, $_streetNo, $_city, $_zipCode, $_country)
	{
		$this->street = $_street;
		$this->streetNo = $_streetNo;
		$this->city = $_city;
		$this->zipCode = $_zipCode;
		$this->country = $_country;
	}

	function setStreet($street)
	{
		$this->street = $street;
	}

	function getStreet()
	{
		return $this->street;
	}

	function setStreetNo($streetNo)
	{
		$this->streetNo = $streetNo;
	}

	function getStreetNo()
	{
		return $this->streetNo;
	}

	function setCity($city)
	{
		$this->city = $city;
	}

	function getCity()
	{
		return $this->city;
	}

	function setZipCode($zipCode)
	{
		$this->zipCode = $zipCode;
	}

	function getZipCode()
	{
		return $this->zipCode;
	}

	function setCountry($country)
	{
		$this->country = $country;
	}

	function getCountry()
	{
		return $this->country;
	}
}

<?php

class Address
{
	public $street;
	public $StreetNo;
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
}

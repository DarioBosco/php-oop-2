<?php
class User
{
	public $firstName;
	public $lastName;
	public $email;
	public $phone;
	//public $address;

	function __construct($_firstName, $_lastName, $_email, $_phone)
	{
		$this->firstName = $_firstName;
		$this->lastName = $_lastName;
		$this->email = $_email;
		$this->phone = $_phone;
	}

	function setfirstName($firstName)
	{
		$this->firstName = $firstName;
	}

	function getfirstName()
	{
		return $this->firstName;
	}

	function setlastName($lastName)
	{
		$this->lastName = $lastName;
	}

	function getLastName()
	{
		return $this->lastName;
	}

	function setEmail($email)
	{
		$this->email = $email;
	}

	function getEmail()
	{
		return $this->email;
	}

	function setPhone($phone)
	{
		$this->phone = $phone;
	}

	function getPhone()
	{
		return $this->phone;
	}
}

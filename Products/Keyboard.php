<?php
class Keyboard extends Product
{
	public $languageLayout;
	public $amountOfKeys;
	public $connector;

	public function __construct($_name, $_price, $_brand, $_languageLayout, $_amountOfKeys, $_connector)
	{
		parent::__construct($_name, $_price, $_brand);
		$this->languageLayout = $_languageLayout;
		$this->amountOfKeys = $_amountOfKeys;
		$this->connector = $_connector;
	}

	function setLanguageLayout($languageLayout)
	{
		$this->languageLayout = $languageLayout;
	}

	function getLanguageLayout()
	{
		return $this->languageLayout;
	}

	function setAmountOfKeys($amountOfKeys)
	{
		$this->amountOfKeys = $amountOfKeys;
	}

	function getAmountOfKeys()
	{
		return $this->amountOfKeys;
	}

	function setConnector($connector)
	{
		$this->connector = $connector;
	}

	function getConnector()
	{
		return $this->connector;
	}
}

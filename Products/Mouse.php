<?php
class Mouse extends Product
{
	public $dpi;
	public $weight;
	public $connector;

	public function __construct($_name, $_price, $_brand, $_dpi = NULL, $_weight = NULL, $_connector)
	{
		parent::__construct($_name, $_price, $_brand);
		$this->dpi = $_dpi;
		$this->weight = $_weight;
		$this->connector = $_connector;
	}

	function setDPI($dpi)
	{
		$this->dpi = $dpi;
	}

	function getDPI()
	{
		return $this->dpi;
	}

	function setWeight($weight)
	{
		$this->weight = $weight;
	}

	function getWeight()
	{
		return $this->weight;
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

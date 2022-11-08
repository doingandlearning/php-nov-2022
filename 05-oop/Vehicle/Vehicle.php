<?php
namespace Vehicle;

 class Vehicle
{
	protected $company = "Aurora";
	
public static $countryOfOperation = "Scotland";
	function __construct(
		public string $make = "DefaultMake",
		public string $model = "DefaultModel",
		public string $color = "DefaultColor",
		public int $noOfWheels = 0,
		public string $engineNumber = "XXXXXX"
	)
	{
	}

	function unlock() {
		echo "Ready to go!";
	}

	function getCompany() {
		echo $this->company;
	}

	final static function generateMot() {
		echo "You vehicle is road worthy!";
	}

}
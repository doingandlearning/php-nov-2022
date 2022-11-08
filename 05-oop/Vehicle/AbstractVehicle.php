<?php
namespace Vehicle;
abstract class AbstractVehicle implements VehicleInterface
{
	protected $engineStatus = false;
	function __construct(
		public string $make = "DefaultMake",
		public string $model = "DefaultModel",
		public string $color = "DefaultColor",
		public int $noOfWheels = 0,
		public string $engineNumber = "XXXXXX"
	)
	{
	}
}
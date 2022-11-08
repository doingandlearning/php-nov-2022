<?php

namespace Vehicle;

class Car extends AbstractVehicle
{
	
	use \Traits\PriceTrait;
	use \Traits\LoggingTrait;
	public $doors = 5;
	public $passengerCapacity = 5;
	public $steeringWheel = true;
	public $tranmission = "manual";

	function __construct(
		public string $make = "DefaultMake",
		public string $model = "DefaultModel",
		public string $color = "DefaultColor",
		public string $engineNumber = "XXXXXX"
	)
	{
		parent::__construct(
			$make,
			$model,
			$color,
			4,
			$engineNumber
		);
	}

	function beep()
	{
		echo "Beep beep!";
	}
	function start(): void
	{
		$this->engineStatus = true;
	}

	function stop(): void
	{
		$this->engineStatus = false;
	}

	function getEngineState(...$args): bool|string
	{
		$args = func_get_args();
		switch(count($args)) {
			case 0:
				return $this->engineStatus;
			case 1:
				return "Thanks for asking, $args[0], I'm good and the engine state is $this->engineStatus";
		}
	}



}


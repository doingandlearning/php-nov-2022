<?php

namespace Vehicle;
interface VehicleInterface
{
	function start(): void;
	function stop(): void;
	function getEngineState(): bool|string;
}

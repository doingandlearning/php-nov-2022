<?php

spl_autoload_register();

$myVehicle = new Vehicle\Vehicle("Renault", "Kaptur", "Red");

$myCar = new Vehicle\Car();
$myCar->setPrice(10000);
$myCar->log($myCar->getPrice());
$myCar->log($myCar->getPrice());
$myCar->log($myCar->getPrice());
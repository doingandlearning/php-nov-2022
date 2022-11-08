<?php

/**
 * 
 * Self contained
 * Public/private
 * Treat as one object
 * Method calls
 * Doesn't need to know how just what
 * 	Black box
 * 
 * - OO Approach in PHP
 * - Interfaces/Abstract
 * - Overriding/Overloading
 * - Traits
 * - Namespacing
 */

class ClassName 
 {
	const ADDRESS = "This is unchangable";
	public $name = "Lukasz";
	static private $company = "Aurora";

	function getCompany() {
		return self::$company;
	}

	function sayHello() {
		echo "Hello!";
	}

	function getName() {
		return $this->name;
	}

	function setName($newName) {
		$this->name = $newName;
	}
 }

 $className = new ClassName();
echo ClassName::ADDRESS;
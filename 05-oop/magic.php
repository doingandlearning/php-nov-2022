<?php

class MyMagicClass
{
	private $arr = array();
	// private $name = "Kevin";	
	public function __set($attribute, $value) {
		$this->arr[$attribute] = $value;
	}

	public function __get($attribute) {
		if(array_key_exists($attribute, $this->arr)) {
			return $this->arr[$attribute];
		} else {
			echo 'Error: undefined attribute.';
		}
	}

	public function __unset($attribute) {
		echo "I'm not going to do that!";
	}
	public function __isset($attribute) {}

	function getName() {}
}

$new = new MyMagicClass();

$new->name = "Kevin";
print_r($new);
unset($new->name);
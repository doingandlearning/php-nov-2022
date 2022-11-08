<?php

namespace Traits;
trait PriceTrait 
{
  public function getPrice() {
		echo "This is from the trait";
		return "£$this->price";
	}
	
	public function setPrice($price) {
		echo "This is from the trait";
		$this->price = $price;
	}
}
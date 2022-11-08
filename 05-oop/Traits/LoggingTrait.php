<?php

namespace Traits;
trait LoggingTrait {
	function log($message) {
		echo PHP_EOL;
		echo $message;
		echo PHP_EOL;
	}
}
<?php
declare(strict_type=1);

namespace handlers;

abstract class Handler {
	private $redirectUri = "";
	abstract public function handle(): string;

	public function getTitle(): string {
		return "Aurora Website";
	}
}
<?php

declare(strict_types=1);

namespace Components;

class Template
{
	public static $viewsPath = __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "templates";

	function __construct(private string $name) {}

	private function getFilePath(): string {
		return self::$viewsPath . DIRECTORY_SEPARATOR . $this->name . '.php';
	}

	function render(array $data = []): string {
		extract($data, EXTR_OVERWRITE);
		ob_start();
		require $this->getFilePath();
		$rendered = ob_get_clean();
		return (string) $rendered;
	}
}
<?php

declare(strict_types=1);

require_once __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "src" . DIRECTORY_SEPARATOR . "components" . DIRECTORY_SEPARATOR . "Template.php";

$mainTemplate = new \Components\Template('main');
$templateData = [
	'title' => 'My main template'
];

echo $mainTemplate->render($templateData);
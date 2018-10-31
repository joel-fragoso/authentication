<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new \Slim\App([
	'settings' => [
		'displayErrorDetails' => true,
	]
]);

require_once __DIR__.'/../app/routes.php';

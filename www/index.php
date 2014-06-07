<?php
define('DS', DIRECTORY_SEPARATOR);

require '..' . DS . 'vendor' . DS . 'autoload.php';

$app = new \Slim\Slim();
$app->get('/hello/:name', function ($name) {
	echo "Hello, $name";
});
$app->run();
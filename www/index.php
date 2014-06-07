<?php
<<<<<<< HEAD
require '../vendor/autoload.php';

define ('PATH_ROOT', realpath(dirname(__FILE__)) . '/../');
defined('PATH_WWW') or define('PATH_WWW', PATH_ROOT . 'www/');
defined('PATH_SRC') or define('PATH_SRC', PATH_ROOT . 'src/');
defined('PATH_VIEW') or define('PATH_VIEW', PATH_SRC . 'main/html/');
defined('PATH_ETC') or define('PATH_ETC', PATH_ROOT . 'etc/');

//+++ TEMPLATE CONFIG
// Create new Plates engine
$engine = new \League\Plates\Engine(PATH_VIEW);
// Create a new template
$template = new \League\Plates\Template($engine);

//--- TEMPLATE CONFIG
=======
define('DS', DIRECTORY_SEPARATOR);

require '..' . DS . 'vendor' . DS . 'autoload.php';
>>>>>>> bfd49de2092a1b5796d181d1ede9dc6dee639929

$app = new \Slim\Slim();

$app->get('/', function() use ($template) {
	$template->render('index');
});

$app->get('/hello/:name', function ($name) use ($template) {
	echo "Hello, $name";
});

$app->run();
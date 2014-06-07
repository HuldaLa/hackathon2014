<?php
$loader = require '../vendor/autoload.php';

define ('PATH_ROOT', realpath(dirname(__FILE__)) . '/../');
defined('PATH_WWW') or define('PATH_WWW', PATH_ROOT . 'www/');
defined('PATH_SRC') or define('PATH_SRC', PATH_ROOT . 'src/');
defined('PATH_VIEW') or define('PATH_VIEW', PATH_SRC . 'html/');
defined('PATH_ETC') or define('PATH_ETC', PATH_ROOT . 'etc/');

//+++ TEMPLATE CONFIG
// Create new Plates engine
$engine = new \League\Plates\Engine(PATH_VIEW);
// Create a new template
$template = new \League\Plates\Template($engine);

//--- TEMPLATE CONFIG

//+++ CONFIG
$configPath = PATH_ETC. 'config.json';
if (!file_exists($configPath)) {
	exit('copy etc/config.json-dist to etc/config.json');
}
$configRaw = file_get_contents($configPath);
$config = json_decode($configRaw);
//--- CONFIG


//+++ AUTOLOADER
$loader->add('Controller\Character', PATH_SRC.'/php');
$loader->add('Controller\Event', PATH_SRC.'/php');
$loader->add('Controller\Place', PATH_SRC.'/php');
//--- AUTOLOADER

\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();

require 'routes.php';

$app->run();

<?php
#loader required for routes configuration
$loader = require '../vendor/autoload.php';

// Little helper constant.
define('DS', DIRECTORY_SEPARATOR);

define ('PATH_ROOT', realpath(dirname(__FILE__)) . DS . '..');
defined('PATH_WWW') or define('PATH_WWW', PATH_ROOT . DS . 'www');
defined('PATH_SRC') or define('PATH_SRC', PATH_ROOT . DS . 'src');
defined('PATH_PHP') or define('PATH_PHP', PATH_SRC . DS . 'php');
defined('PATH_PHP_LIB') or define('PATH_PHP_LIB', PATH_PHP . DS . 'lib');
defined('PATH_VIEW') or define('PATH_VIEW', PATH_SRC . DS . 'html');
defined('PATH_ETC') or define('PATH_ETC', PATH_ROOT . DS . 'etc');

// Add library folder of to autoload paths.
$loader->add(NULL, PATH_PHP_LIB);

//+++ TEMPLATE CONFIG
// Create new Plates engine
$engine = new \League\Plates\Engine(PATH_VIEW);
// Create a new template
$template = new \League\Plates\Template($engine);
// Register url extension.
$engine->loadExtension(new \Plates\Extension\SlimUrl());

//--- TEMPLATE CONFIG

//+++ CONFIG
$configPath = PATH_ETC .  DS . 'config.json';
if (!file_exists($configPath)) {
	exit('copy etc/config.json-dist to etc/config.json');
}
$configRaw = file_get_contents($configPath);
$config = json_decode($configRaw);
//--- CONFIG

\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();

// Initiate the database once and for all time
require_once(PATH_PHP_LIB . '/Database/MySQL/MysqliDb.php');
$db = new MysqliDb('localhost', 'root', 'root', 'hackathon2k14');

// Include router configuration.
require PATH_PHP . DS . 'routes.php';

$app->run();

<?php
require '../vendor/autoload.php';
require_once('../src/php/controller/character.php');
require_once('../src/php/controller/event.php');
require_once('../src/php/controller/place.php');

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


$app = new \Slim\Slim();

$app->get('/', function() use ($template) {
    echo $template->render('index');
});

$app->get('/hello/:name', function ($name) use ($template) {
    echo "Hello, $name";
});

/* general rule for ids to consist of digits */
\Slim\Route::setDefaultConditions(array(
    'id' => '\d+'
));

/* routes for showing character related views/forms */
$app->get('/characters', 'showCharacterList');
$app->get('/character/:id', 'showCharacter');
$app->get('/character/create', 'showCreateCharacter');
$app->get('/character/:id/update', 'showUpdateCharacter');
/* routes for performing character related functions (crud) */
$app->post('/character/create', 'createCharacter');
$app->post('/character/:id/update', 'updateCharacter');
$app->post('/character/:id/delete', 'deleteCharacter');


/* routes for showing place related views/forms */
$app->get('/places', 'showPlaceList');
$app->get('/place/:id', 'showPlace');
$app->get('/place/create', 'showCreatePlace');
$app->get('/place/:id/update', 'showUpdatePlace');
/* routes for performing place related functions (crud) */
$app->post('/place/create', 'createPlace');
$app->post('/place/:id/update', 'updatePlace');
$app->post('/place/:id/delete', 'deletePlace');


/* routes for showing event related views/forms */
$app->get('/events', 'showEventList');
$app->get('/event/:id', 'showEvent');
$app->get('/event/create', 'showCreateEvent');
$app->get('/event/:id/update', 'showUpdateEvent');
/* routes for performing event related functions (crud) */
$app->post('/event/create', 'createEvent');
$app->post('/event/:id/update', 'updateEvent');
$app->post('/event/:id/delete', 'deleteEvent');

$app->run();

<?php
define('DS', DIRECTORY_SEPARATOR);

require '..' . DS . 'vendor' . DS . 'autoload.php';

//+++ TEMPLATE CONFIG
// Create new Plates engine
$engine = new \League\Plates\Engine(PATH_VIEW);
// Create a new template
$template = new \League\Plates\Template($engine);

//--- TEMPLATE CONFIG


$app = new \Slim\Slim();
\Slim\Route::setDefaultConditions(array(
    'id' => '\d+'
));

$app->get('/hello/:name', function ($name) {
    echo "Hello, $name";
});


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

<?php
define('DS', DIRECTORY_SEPARATOR);

require '..' . DS . 'vendor' . DS . 'autoload.php';

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


/* character related functions to call by routes */
function showCharacterList() {
    echo "list of characters";
}

function showCharacter($id) {
    echo "show character with id: $id";
}

#TODO put create/update into one form?
function showCreateCharacter() {
    echo "character creation form";
}

function showUpdateCharacter($id) {
    echo "character $id update form";
}

function createCharacter() {
    echo "new character created!";
}

function updateCharacter($id) {
    echo "character $id updated!";
}

function deleteCharacter($id) {
    echo "character $id deleted";
}



/* place related functions to call by routes */
function showPlaceList() {
    echo "list of places";
}

function showPlace($id) {
    echo "show place with id: $id";
}

#TODO put create/update into one form?
function showCreatePlace() {
    echo "place creation form";
}

function showUpdatePlace($id) {
    echo "place $id update form";
}

function createPlace() {
    echo "new place created!";
}

function updatePlace($id) {
    echo "place $id updated!";
}

function deletePlace($id) {
    echo "place $id deleted";
}



/* event related functions to call by routes */
function showEventList() {
    echo "list of events";
}

function showEvent($id) {
    echo "show event with id: $id";
}

#TODO put create/update into one form?
function showCreateEvent() {
    echo "event creation form";
}

function showUpdateEvent($id) {
    echo "event $id update form";
}

function createEvent() {
    echo "new event created!";
}

function updateEvent($id) {
    echo "event $id updated!";
}

function deleteEvent($id) {
    echo "event $id deleted";
}
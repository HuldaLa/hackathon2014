<?php

$routes = array("character", "place", "event");
$classes = array("\Controller\Character", "\Controller\Place", "\Controller\Event");

$classMap = array_map(null, $routes, $classes);

/* general rule for ids to consist of digits */
\Slim\Route::setDefaultConditions(array(
    'id' => '\d+'
));

$app->get('/', function() use ($template) {
    echo $template->render('index');
});

$app->get('/:name/:id', function ($name, $id) use ($template, $classMap) {
   $className = $classMap[$name];
   $object = new $className;
   echo $object.showAll();
});

/* routes for showing character related views/forms */
$app->get('/characters', '\Controller\Character:showAll');
$app->get('/character/:id', '\Controller\Character:show');
$app->get('/character/create', '\Controller\Character:showCreate');
$app->get('/character/:id/update', '\Controller\Character:showUpdate');
/* routes for performing character related functions (crud) */
$app->post('/character/create', '\Controller\Character:create');
$app->post('/character/:id/update', '\Controller\Character:update');
$app->post('/character/:id/delete', '\Controller\Character:delete');


/* routes for showing place related views/forms */
$app->get('/places', '\Controller\Place:showAll');
$app->get('/place/:id', '\Controller\Place:show');
$app->get('/place/create', '\Controller\Place:showCreate');
$app->get('/place/:id/update', '\Controller\Place:showUpdate');
/* routes for performing place related functions (crud) */
$app->post('/place/create', '\Controller\Place:create');
$app->post('/place/:id/update', '\Controller\Place:update');
$app->post('/place/:id/delete', '\Controller\Place:delete');


/* routes for showing event related views/forms */
$app->get('/events', '\Controller\Event:showAll');
$app->get('/event/:id', '\Controller\Event:show');
$app->get('/event/create', '\Controller\Event:showCreate');
$app->get('/event/:id/update', '\Controller\Event:showUpdate');
/* routes for performing event related functions (crud) */
$app->post('/event/create', '\Controller\Event:create');
$app->post('/event/:id/update', '\Controller\Event:update');
$app->post('/event/:id/delete', '\Controller\Event:delete');
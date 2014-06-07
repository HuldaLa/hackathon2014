<?php

/* general rule for ids to consist of digits */
\Slim\Route::setDefaultConditions(array(
    'id' => '\d+'
));

$app->get('/', function() use ($template) {
    echo $template->render('index');
});

$classMap = array (
    'character' => '\Controller\Character',
    'place'   => '\Controller\Place',
    'event' => '\Controller\Event'
);

foreach ($classMap as $controller => $class) {
    $app->get('/' . $controller, $class . ':showAll');
    $app->get('/' . $controller . '/:id', $class . ':show');
    $app->get('/' . $controller . '/create', $class . ':showCreate');
    $app->get('/' . $controller . '/:id/update', $class . ':showUpdate');

    $app->post('/' . $controller . '/create', $class . ':create');
    $app->post('/' . $controller . '/:id/update', $class . ':update');
    $app->post('/' . $controller . '/:id/delete', $class . ':delete');
}
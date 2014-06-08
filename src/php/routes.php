<?php

/* general rule for ids to consist of digits */
\Slim\Route::setDefaultConditions(array(
    'id' => '\d+'
));

$app->get('/', function() use ($template) {
    echo $template->render('index');
});

$classMap = array (
    'characters' => '\Controller\Character',
    'places'   => '\Controller\Place',
    'events' => '\Controller\Event'
);

// Save callback for routes.
$route_callback = function($class, $methodName) use ($app, $template) {
    return function() use ($app, $template, $class, $methodName) {
        // Get arguments.
        $args = func_get_args();

        // Form controller callback.
        $controller_callback = $class . ':' . $methodName;

        // Get new route for callback.
        $route = new \Slim\Route(FALSE, $controller_callback);

        // Merge existing arguments with template.& app
        $args[] = $app;
        $args[] = $template;

        // Set parameters.
        $route->setParams($args);

        // Dispatch.
        $route->dispatch();
    };
};

foreach ($classMap as $controller => $class) {
    $app->get(
        '/' . $controller,
        $route_callback($class, 'showAll')
    );

    // Get actions.
    $app->get(
        '/' . $controller . '/:id',
        $route_callback($class, 'show')
    );
    $app->get(
        '/' . $controller . '/create',
        $route_callback($class, 'showCreate')
    );
    $app->get(
        '/' . $controller . '/:id/update',
        $route_callback($class, 'showUpdate')
    );

    // Post actions.
    $app->post(
        '/' . $controller . '/create',
        $route_callback($class, 'create')
    );
    $app->post(
        '/' . $controller . '/:id/update',
        $route_callback($class, 'update')
    );
    $app->post(
        '/' . $controller . '/:id/delete',
        $route_callback($class, 'delete')
    );
}

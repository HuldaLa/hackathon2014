<?php
namespace Controller;

class Place {
    function showAll($app, $template) {
        $crud_place = new \Crud\Place();
        $template->places = $crud_place->getAll();
        echo $template->render('places');
    }

    function show($id, $app, $template) {
        echo "show place with id: $id";
    }

    function showCreate($app, $template) {
        $crud_universe = new \Crud\Universe();
        $template->universes = $crud_universe->getAll();
        echo $template->render('forms/create_places');
    }

    function showUpdate($id, $app, $template) {
        echo $template->render('forms/update_places');
    }

    function create($app, $template) {
        $name = $app->request->params('name');
        $description = $app->request->params('description');
        $universe = $app->request->params('universes');

        $place = new \Entities\Place();
        $place->setName($name);
        $place->setDescription($description);
        $place->setUniverse($universe);

        $crud_place = new \Crud\Place();
        $crud_place->create($place);

        return $app->redirect($template->url('/places'));
    }

    function update($id, $app, $template) {
        echo "place $id updated!";
    }

    function delete($id, $app, $template) {
        echo "place $id deleted";
    }

}
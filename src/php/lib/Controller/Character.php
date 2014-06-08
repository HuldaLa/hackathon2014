<?php
namespace Controller;

#use \Crud\Universe;

class Character {
    function showAll($app, $template) {
        echo "list of characters";
    }

    function show($id, $app, $template) {
        echo "show character with id: $id";
    }

    function showCreate($app, $template) {
        $crud_universe = new \Crud\Universe();
        $template->universes = $crud_universe->getAll();
        echo $template->render('forms/create_characters');
    }

    function showUpdate($id, $app, $template) {
        echo $template->render('forms/create_characters');
    }

    function create($app, $template) {
        $name = $app->request->params('name');
        echo "new character $name created!";
    }

    function update($id, $app, $template) {
        echo "character $id updated!";
    }

    function delete($id, $app, $template) {
        echo "character $id deleted";
    }

}
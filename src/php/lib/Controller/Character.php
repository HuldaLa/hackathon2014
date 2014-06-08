<?php
namespace Controller;

#use \Crud\Universe;

class Character {
    function showAll($app, $template) {
        $crud_char = new \Crud\Character();
        $template->characters = $crud_char->getAll();
        echo $template->render('characters');
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
        $universe = $app->request->params('universes');

        $character = new \Entities\Character();
        $character->setName($name);
        $character->setUniverse($universe);

        $crud_char = new \Crud\Character();
        $new_char = $crud_char->create($character);

        $app->redirect($template->url('/characters'));
    }

    function update($id, $app, $template) {
        echo "character $id updated!";
    }

    function delete($id, $app, $template) {
        echo "character $id deleted";
    }

}
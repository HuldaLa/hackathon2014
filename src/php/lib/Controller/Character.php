<?php
namespace Controller;

#use \Crud\Universe;

class Character {
    function showAll($engine, $template) {
        $crud_character = new \Crud\Character();
        $template->characters = $crud_character->getAll();
        echo $template->render('characters');
    }

    function show($id, $engine, $template) {
        echo "show character with id: $id";
    }

    function showCreate($engine, $template) {
        $crud_universe = new \Crud\Universe();
        $template->universes = $crud_universe->getAll();
        echo $template->render('forms/create_characters');
    }

    function showUpdate($id, $engine, $template) {
        echo $template->render('forms/create_characters');
    }

    function create($engine, $template) {
        $app = \Slim\Slim::getInstance();
        $name = $app->request->params('name');
        $universe = $app->request->params('universes');

        $character = new \Entities\Character();
        $character->setName($name);
        $character->setUniverse($universe);

        $crud_char = new \Crud\Character();
        $new_char = $crud_char->create($character);

        $app->redirect($template->url('/characters'));
    }

    function update($id, $engine, $template) {
        echo "character $id updated!";
    }

    function delete($id, $engine, $template) {
        echo "character $id deleted";
    }

}
<?php
namespace Controller;

#use \Crud\Universe;

class Character {
    function showAll($template) {
        echo "list of characters";
    }

    function show($id, $template) {
        echo "show character with id: $id";
    }

    function showCreate($template) {
        // $crud_univers = new \Crud\Universe();
        // $template->universes = $crud_univers->getAll();
        // var_dump($template->universes);
        // exit;
        echo $template->render('forms/create_characters');
    }

    function showUpdate($id, $template) {
        echo $template->render('forms/create_characters');
    }

    function create($template) {
        echo "new character created!";
    }

    function update($id, $template) {
        echo "character $id updated!";
    }

    function delete($id, $template) {
        echo "character $id deleted";
    }

}
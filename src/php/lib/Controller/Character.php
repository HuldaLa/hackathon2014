<?php
namespace Controller;

class Character {
    function showAll($template) {
        echo "list of characters";
    }

    function show($id, $template) {
        echo "show character with id: $id";
    }

    function showCreate($template) {
        echo "character creation form";
    }

    function showUpdate($id, $template) {
        echo "character $id update form";
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
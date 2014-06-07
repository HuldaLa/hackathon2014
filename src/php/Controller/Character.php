<?php
namespace Controller;

class Character {
    function showAll() {
        echo "list of characters";
    }

    function show($id) {
        echo "show character with id: $id";
    }

    function showCreate() {
        echo "character creation form";
    }

    function showUpdate($id) {
        echo "character $id update form";
    }

    function create() {
        echo "new character created!";
    }

    function update($id) {
        echo "character $id updated!";
    }

    function delete($id) {
        echo "character $id deleted";
    }

}
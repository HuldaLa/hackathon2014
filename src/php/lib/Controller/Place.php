<?php
namespace Controller;

class Place {
    function showAll($template) {
        echo "list of places";
    }

    function show($id, $template) {
        echo "show place with id: $id";
    }

    function showCreate($template) {
        echo "place creation form";
    }

    function showUpdate($id, $template) {
        echo "place $id update form";
    }

    function create($template) {
        echo "new place created!";
    }

    function update($id, $template) {
        echo "place $id updated!";
    }

    function delete($id, $template) {
        echo "place $id deleted";
    }

}
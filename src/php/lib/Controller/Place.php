<?php
namespace Controller;

class Place {
    function showAll($app, $template) {
        echo "list of places";
    }

    function show($id, $app, $template) {
        echo "show place with id: $id";
    }

    function showCreate($app, $template) {
        echo $template->render('forms/create_places');
    }

    function showUpdate($id, $app, $template) {
        echo $template->render('forms/update_places');
    }

    function create($app, $template) {
        echo "new place created!";
    }

    function update($id, $app, $template) {
        echo "place $id updated!";
    }

    function delete($id, $app, $template) {
        echo "place $id deleted";
    }

}
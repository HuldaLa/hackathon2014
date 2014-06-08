<?php
namespace Controller;

class Event {
    function showAll($app, $template) {
        echo "list of events";
    }

    function show($id, $app, $template) {
        echo "show event with id: $id";
    }

    function showCreate($app, $template) {
        echo $template->render('forms/create_events');
    }

    function showUpdate($id, $app, $template) {
        echo $template->render('forms/update_events');
    }

    function create($app, $template) {
        echo "new event created!";
    }

    function update($id, $app, $template) {
        echo "event $id updated!";
    }

    function delete($id, $app, $template) {
        echo "event $id deleted";
    }

}
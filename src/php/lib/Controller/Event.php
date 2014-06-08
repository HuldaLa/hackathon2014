<?php
namespace Controller;

class Event {
    function showAll($engine, $template) {
        echo "list of events";
    }

    function show($id, $engine, $template) {
        echo "show event with id: $id";
    }

    function showCreate($engine, $template) {
        echo $template->render('forms/create_events');
    }

    function showUpdate($id, $engine, $template) {
        echo $template->render('forms/update_events');
    }

    function create($engine, $template) {
        echo "new event created!";
    }

    function update($id, $engine, $template) {
        echo "event $id updated!";
    }

    function delete($id, $engine, $template) {
        echo "event $id deleted";
    }

}
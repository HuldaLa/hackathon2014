<?php
namespace Controller;

class Event {
    function showAll($template) {
        echo "list of events";
    }

    function show($id, $template) {
        echo "show event with id: $id";
    }

    function showCreate($template) {
        echo $template->render('forms/create_events');
    }

    function showUpdate($id, $template) {
        echo $template->render('forms/update_events');
    }

    function create($template) {
        echo "new event created!";
    }

    function update($id, $template) {
        echo "event $id updated!";
    }

    function delete($id, $template) {
        echo "event $id deleted";
    }

}
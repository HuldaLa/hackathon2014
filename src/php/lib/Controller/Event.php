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
        echo "event creation form";
    }

    function showUpdate($id, $template) {
        echo "event $id update form";
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
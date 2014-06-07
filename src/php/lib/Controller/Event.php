<?php
namespace Controller;

class Event {
    function showAll() {
        echo "list of events";
    }

    function show($id) {
        echo "show event with id: $id";
    }

    function showCreate() {
        echo "event creation form";
    }

    function showUpdate($id) {
        echo "event $id update form";
    }

    function create() {
        echo "new event created!";
    }

    function update($id) {
        echo "event $id updated!";
    }

    function delete($id) {
        echo "event $id deleted";
    }

}
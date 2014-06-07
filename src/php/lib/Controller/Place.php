<?php
namespace Controller;

class Place {
    function showAll() {
        echo "list of places";
    }

    function show($id) {
        echo "show place with id: $id";
    }

    function showCreate() {
        echo "place creation form";
    }

    function showUpdate($id) {
        echo "place $id update form";
    }

    function create() {
        echo "new place created!";
    }

    function update($id) {
        echo "place $id updated!";
    }

    function delete($id) {
        echo "place $id deleted";
    }

}
<?php

/* place related functions to call by routes */
function showPlaceList() {
    echo "list of places";
}

function showPlace($id) {
    echo "show place with id: $id";
}

#TODO put create/update into one form?
function showCreatePlace() {
    echo "place creation form";
}

function showUpdatePlace($id) {
    echo "place $id update form";
}

function createPlace() {
    echo "new place created!";
}

function updatePlace($id) {
    echo "place $id updated!";
}

function deletePlace($id) {
    echo "place $id deleted";
}
<?php

/* event related functions to call by routes */
function showEventList() {
    echo "list of events";
}

function showEvent($id) {
    echo "show event with id: $id";
}

#TODO put create/update into one form?
function showCreateEvent() {
    echo "event creation form";
}

function showUpdateEvent($id) {
    echo "event $id update form";
}

function createEvent() {
    echo "new event created!";
}

function updateEvent($id) {
    echo "event $id updated!";
}

function deleteEvent($id) {
    echo "event $id deleted";
}
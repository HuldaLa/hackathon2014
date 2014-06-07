<?php

/* character related functions to call by routes */
function showCharacterList() {
    echo "list of characters";
}

function showCharacter($id) {
    echo "show character with id: $id";
}

#TODO put create/update into one form?
function showCreateCharacter() {
    echo "character creation form";
}

function showUpdateCharacter($id) {
    echo "character $id update form";
}

function createCharacter() {
    echo "new character created!";
}

function updateCharacter($id) {
    echo "character $id updated!";
}

function deleteCharacter($id) {
    echo "character $id deleted";
}

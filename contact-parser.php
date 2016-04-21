<?php

function parseContacts($filename)
{
    $contacts = array();

    // todo - read file and parse contacts

    return $contacts;
}

var_dump(parseContacts('contacts.txt'));





// NOTES

    //name of the file, holding onto file name

// $filename = 'cities.txt';

    //connection(bookmark)
    //"handle" = what type of connection to do with file(file name, what we want to do with it)
    //kind of like setting the stage, preparing for the actual later action. "Hey, we're gonna do these things."

// $handle = fopen($filename, 'r');

    //gets the contents of the file from the bookmark
    //this one actually enacts the action. "Do this thing."
    //fread gets the contents. handle specifies the connection and
    //filesize($filename) tells how MUCH of it to get (this specifically says whole file length)

// $contents = fread($handle, filesize($filename));

    //closing the connection we made
    //ALWAYS DO THIS!

// fclose($handle);

    //make array of our cities string

// $array = explode("\n", $contents);

// var_dump($array);

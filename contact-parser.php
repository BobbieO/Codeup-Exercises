<?php

//name of file
$filename = 'contacts.txt';

function parseContacts($filename)
{
    // $contacts = array();
    // todo - read file and parse contacts

    //connection
    $handle = fopen($filename, 'r');

    //get contents
    $contents = fread($handle, filesize($filename));

    //to make array of contacts
    $contacts = explode("\n", $contents);
    array_pop($contacts);

    //new empty array
    $newContacts = [];

    //close connection
    fclose($handle);

    //check for erased empty space
    // var_dump($contacts);

    foreach($contacts as $person) {

        //empty array to hold bits of person info
        $newArray = [];

        //breaks person info into array
        $personInfo = explode("|", $person);

        //marks info at index 0 as "name"
        $name = $personInfo[0];

        //marks info at index 1 as "phone" and inserts dashes
        $phone = substr ($personInfo[1], 0, 3) . "-" . substr ($personInfo[1], 3, 3) . "-" . substr ($personInfo[1], 6, 4);
        
        //marks name and phone as parts of newarray
        $newArray = ['name' => $name, 'phone' => $phone];

        array_push($newContacts, $newArray);
    }

    return $newContacts;
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






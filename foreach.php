<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

// loop that outputs each item's type
foreach($things as $thing) {
    if (is_int($thing)) {
        echo "integer\n";
    } elseif (is_float($thing)) {
        echo "float\n";
    } elseif (is_bool($thing)) {
        echo "boolean\n";
    } elseif (is_array($thing)) {
        echo "array\n";
    } elseif (is_null($thing)) {
        echo "null\n";
    } elseif (is_string($thing)) {
        echo "string\n";
    }
}

// loop that outputs only scalar items, and items within the array
foreach($things as $thing) {
    if (is_scalar($thing)) {
        echo "{$thing}\n";
    } elseif (is_array($thing)) {
        foreach($thing as $thing2) {
            echo "{$thing2}\n";
        }
    }
}



// example: For vs foreach:
// $names [Lorena, Niki, Pancho, Will]

// for ($i = 0;  $i < count($names); $i++) {
//     $studentName = $names[$i];
//     echo "Hey everybody, say hello to $studentName\n";
//     echo "Hi $studentName!\n";
// }

// foreach($names as $studentName) {
//     echo "Hey everybody, say hello to $studentName\n";
//     echo "Hi $studentName!\n";
// }
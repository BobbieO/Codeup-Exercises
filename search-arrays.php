<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

$firstName = 'Tina';

//to search for given value and return true/false if exists in array
function inArray($itemSearchingFor, $anyArray) {
    $nameSearch = array_search($itemSearchingFor, $anyArray);
    if ($nameSearch !== false) {
        return true;
    } else {
        return false;
    }
}

//testing above function
var_dump(inArray('Tina', $names));
var_dump(inArray('Bob', $names));

//to compare any two arrays and find number of common values
function compareTwo($arrayOne, $arrayTwo) {
    $counter = 0;
    foreach($arrayOne as $itemOne) {
        if (inArray($itemOne, $arrayTwo)==true ) {
            $counter++;
        } 
    }
    return $counter;
}

var_dump(compareTwo($names, $compare)) . PHP_EOL;




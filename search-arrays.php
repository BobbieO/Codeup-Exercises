<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

$firstName = 'Tina';

//to search for given value and return true/false if exists in array
function inArray($itemSearchingFor, $anyArray) {
    $nameSearch = array_search($itemSearchingFor, $anyArray);
    //null, 0, empty string all render as boolean false, so must say 
        //if result is not exactly the same as boolean false (same in type and value) then return true
    if ($nameSearch !== false) {
        return true;

    //if result IS exactly the same as boolean false, return false
    } else {
        return false;
    }
}

//testing above function to check if Tina/index of 0 and
    //Bob index of not-there both render correctly
var_dump(inArray('Tina', $names));
var_dump(inArray('Bob', $names));

//to compare any two arrays and find number of common values
    //first create new parameter variable names for the function
function compareTwo($arrayOne, $arrayTwo) {

    //set a counter variable equal to zero for later iteration
    $counter = 0;

    //a loop examines each item in the first parameter array
    foreach($arrayOne as $itemOne) {

        //if an item in the first parameter array is in the SECOND parameter array
        if (inArray($itemOne, $arrayTwo)==true ) {

            //add to counter
            $counter++;
        } 
    }

    //tells number of items that were duplicated in the parameter arrays
        //does NOT display to dev
    return $counter;
}

//actually calls the function, in order to see the number of common items
var_dump(compareTwo($names, $compare)) . PHP_EOL;




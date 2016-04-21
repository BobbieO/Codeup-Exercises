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


function combineArrays($arrayA, $arrayB) {
    // empty array to add things to
    $arrayC = [];
    foreach($arrayA as $itemA) {
        //put all arrayA items into arrayC
        array_push($arrayC, $itemA);
    }

    foreach($arrayB as $itemB) {
        //if arrayB item is not already in arrayC, add
        if (!inArray($itemB, $arrayC)) {
            array_push($arrayC, $itemB);
        }
    }

    return $arrayC;
}

var_dump(combineArrays($names, $compare));

//new function mimicing above but with exact order
function combineArraysAgain($arrayUno, $arrayDos) {
    $arrayTres = [];
    //within arrayUno has key with value itemUno
    foreach($arrayUno as $key => $itemUno) {
        //if itemUno-value is identical to the value of the item in arrayDos
        if ($itemUno==$arrayDos[$key]) {
            //add only itemUno from first array not both
            array_push($arrayTres, $itemUno);
        } else {
            //add both items from Uno and Dos since not identical
            array_push($arrayTres, $itemUno, $arrayDos[$key]);
        }
    }
    return $arrayTres;
}

var_dump(combineArraysAgain($names, $compare));



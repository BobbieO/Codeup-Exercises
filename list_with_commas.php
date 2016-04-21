<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

//changes string into array
$physicistsArray = explode(', ', $physicistsString);

//pops off end item, Tony Stark
$cutOnePhysi = array_pop($physicistsArray);

//changes back into a string, store in new variable (still minus Tony)
$newPhysicistsString = implode(', ', $physicistsArray);
//above stuff duplicated below in function^^


//takes original array and applies to function humanizedList
function humanizedList($physicistsArray) {

    //removes end/Tony, stores in new variable
    $cutOnePhysi = array_pop($physicistsArray);

    //changes back to string in new variable minus Tony item
    $newPhysicistsString = implode(', ', $physicistsArray);

    //combines new string minus Tony with punctuation, an and, and the removed item Tony into a new variable
        //variable not accessible outside of this function
    $famousFakePhysicists = $newPhysicistsString . ', ' . 'and ' . $cutOnePhysi . '.';

    //returns the above sentence
    return $famousFakePhysicists;
}

//takes array and places into function, applies to variable to enable call
$famousFakePhysicists = humanizedList($physicistsArray);


echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.";






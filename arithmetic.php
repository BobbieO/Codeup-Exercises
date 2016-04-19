<?php


function add($a, $b)
{
    if (is_numeric($a) && is_numeric($b)) {
        return $a + $b;
    } else {
        return throwErrorMessage($a, $b);
    }
}

function subtract($a, $b)
{
    if (is_numeric($a) && is_numeric($b)) {
        return $a - $b;
    } else {
        return throwErrorMessage($a, $b);
    }
}

function multiply($a, $b)
{
    if (is_numeric($a) && is_numeric($b)) { 
        return $a * $b;
    } else {
        return throwErrorMessage($a, $b); 
    }  
}

function divide($a, $b)
{
    if ( (!is_numeric($a) || !is_numeric($b)) || ($b == 0) ) { 
        return throwErrorMessage($a, $b);
    } else {
        return $a / $b;
    }
}

function modulus($a, $b)
{
    if (is_numeric($a) && is_numeric($b)) { 
        return $a % $b;
    } else {
        return throwErrorMessage($a, $b); 
    }
}

function throwErrorMessage($a, $b)
{
    return "Error: {$a} and {$b}. \$a and \$b must both be numbers.\n";
}


echo add(5, 6) . PHP_EOL;
echo subtract(10, 2) . PHP_EOL;
echo multiply(4, 6) . PHP_EOL;
echo divide(66, 0) . PHP_EOL;
echo modulus(3, 2) . PHP_EOL;


// example:
// function sayHello() 
// {
//     return "Hello!";
// }

// echo sayHello() . PHP_EOL;

// //will see "Hello!"

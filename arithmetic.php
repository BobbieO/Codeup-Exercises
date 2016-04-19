<?php

function add($a, $b)
{
    if (is_numeric($a) && is_numeric($b)) {
        return $a + $b;
    } else {
        return "Error: {$a} and {$b}. \$a and \$b must both be numbers.\n";
    }
}

function subtract($a, $b)
{
    if (is_numeric($a) && is_numeric($b)) {
        return $a - $b;
    } else {
        return "Error: {$a} and {$b}. \$a and \$b must both be numbers.\n";
    }
}

function multiply($a, $b)
{
    if (is_numeric($a) && is_numeric($b)) { 
        return $a * $b;
    } else {
        return "Error: {$a} and {$b}. \$a and \$b must both be numbers.\n"; 
    }  
}

function divide($a, $b)
{
    if (is_numeric($a) && is_numeric($b)) { 
        return $a / $b;
    } else {
        return "Error: {$a} and {$b}. \$a and \$b must both be numbers.\n"; 
    }
}

function modulus($a, $b)
{
    if (is_numeric($a) && is_numeric($b)) { 
        return $a % $b;
    } else {
        return "Error: {$a} and {$b}. \$a and \$b must both be numbers.\n"; 
    }
}

echo add(5, 6) . PHP_EOL;
echo subtract(10, 2) . PHP_EOL;
echo multiply(4, 6) . PHP_EOL;
echo divide(66, 2) . PHP_EOL;
echo modulus(3, 2) . PHP_EOL;




// example:
// function sayHello() 
// {
//     return "Hello!";
// }

// echo sayHello() . PHP_EOL;

// //will see "Hello!"

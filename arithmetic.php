<?php

$a = 20;
$b = 2;
//these variables aren't "seen" by the functions bc they exist outside of the functions

function add($a, $b)
{
    return $a + $b;
}

function subtract($a, $b)
{
    return $a - $b;
}

function multiply($a, $b)
{
    return $a * $b;
}

function divide($a, $b)
{
    return $a / $b;
}

function modulus($a, $b)
{
    return $a % $b;
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

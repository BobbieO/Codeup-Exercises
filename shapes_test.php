<?php

REQUIRE_ONCE 'rectangle.php';
REQUIRE_ONCE 'square.php';

$rectangle = new Rectangle(20, 40);
echo 'Rectangle One area is: ' . $Rectangle->area() . PHP_EOL;

$rectangle = new Rectangle(3, 100);
echo 'Rectangle Two area is: ' . $Rectangle->area() . PHP_EOL;

$square = new Square(2, 2);
echo 'Square area is: ' . $Square->area() . PHP_EOL;
echo 'Square perimeter is: ' . $Square->perimeter() . PHP_EOL;

$square = new Square(8, 8);
echo 'Square area is: ' . $Square->area() . PHP_EOL;
echo 'Square perimeter is: ' . $Square->perimeter() . PHP_EOL;


?>


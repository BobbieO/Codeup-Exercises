<?php

REQUIRE_ONCE 'rectangle.php';
REQUIRE_ONCE 'square.php';

$rectangle = new Rectangle(20, 4);
echo 'Rectangle One area is: ' . $Rectangle->area() . PHP_EOL;

$rectangle = new Rectangle(3, 10);
echo 'Rectangle Two area is: ' . $Rectangle->area() . PHP_EOL;

$square = new Square(4);
echo 'Square area is: ' . $Square->area() . PHP_EOL;
echo 'Square perimeter is: ' . $Square->perimeter() . PHP_EOL;

$square = new Square(9);
echo 'Square area is: ' . $Square->area() . PHP_EOL;
echo 'Square perimeter is: ' . $Square->perimeter() . PHP_EOL;


?>

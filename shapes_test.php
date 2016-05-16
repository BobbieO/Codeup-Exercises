<?php

REQUIRE_ONCE 'rectangle.php';

$Rectangle = new Rectangle(20, 40);
echo $Rectangle->area() . PHP_EOL;

$Rectangle = new Rectangle(3, 100);
echo $Rectangle->area() . PHP_EOL;

?>


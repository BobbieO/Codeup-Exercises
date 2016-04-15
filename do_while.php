<?php

$a = 100;

do {
    echo "$a\n";
    $a -= 5;
} while ($a >= 0);

$b = 2;

do {
    echo "$b * $b\n";
    $b *= $b;
} while ($b < 1000000);


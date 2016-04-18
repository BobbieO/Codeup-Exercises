<?php

// print numbers 1 to 100
for ($i = 0; $i <= 100; $i++) {

    //print FIZZBUZZ for numbers which are both 3-5 mults
    if ( ($i % 3 == 0) && ($i % 5 == 0) ) {
        echo "FizzBuzz\n";

    //print FIZZ for numbers which are multiples of three
    } elseif ($i % 3 == 0) {
        echo "Fizz\n";

    //print BUZZ for numbers which are multiples of five
    } elseif ($i % 5 == 0) {
        echo "Buzz\n";

    // if none of above apply
    } else {
        echo "{$i}\n";
    }
}




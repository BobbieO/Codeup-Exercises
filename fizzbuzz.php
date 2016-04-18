<?php


// print/echo numbers 1 to 100
for ($i = 0; $i <= 100; $i++) {

    //print FIZZ for numbers which are multiples of three
       if ($i % 3 == 0) {
            echo "Fizz\n";
        } else {
            echo "{$i}\n";
        }
}


//print BUZZ for numbers which are multiples of five


//print FIZZBUZZ for numbers which are both 3-5 mults
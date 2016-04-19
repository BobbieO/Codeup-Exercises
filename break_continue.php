<?php

for ($i = 0; $i <= 100; $i++) {

    if ($i % 2 !== 0) {
        continue;
    }
    
    echo "{$i}\n";
}



for ($i = 0; $i <= 100; $i++) {
    echo "{$i}\n";

    if ($i == 10) {
        break;
    }
}

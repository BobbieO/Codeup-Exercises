<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

$firstName = 'Tina';
$search = array_search($firstName, $names);

if($search!==false) {
    echo $names[$search] . PHP_EOL;
}

if($search==$firstName) {
    echo "TRUE\n";
} else {
    echo "FALSE\n";
}

<?php 

$names = [
    'Niki',
    'Micah',
    'Zach',
    'Lorena',
    'Raj'
];

echo $names[1] . PHP_EOL;

var_dump($names) . PHP_EOL;

print_r($names) . PHP_EOL;

$student = [
    'first_name' => 'Andrew',
    'last_name' => 'Powell-Morse'    
];

var_dump($student) . PHP_EOL;

$numbers = array(1, 2, 3, 4, 5);

$numbersTwo = [6, 7, 8, 9, 10];

var_dump($numbers) . PHP_EOL; //used this to print whole array
print_r($numbers) . PHP_EOL;
echo $numbers[3] . PHP_EOL;  //used this to print specific bit

$info = [
        'first_name' => 'Mercy',
        'last_name' => 'Thompson',
        'email' => 'mercy@email.com',
        'phone' => '555-5555'
];

echo $info['first_name'];

$test = [
    'person1' => [
        'first_name' => 'Mercy',
        'last_name' => 'Thompson',
        'email' => 'mercy@email.com',
        'phone' => '555-5555'
        ],
    'person2' => [
        'first_name' => 'Hermione',
        'last_name' => 'Granger',
        'email' => 'hermi@email.com',
        'phone' => '111-1111'
        ],
    'person3' => [
        'first_name' => 'Katniss',
        'last_name' => 'Everdeen',
        'email' => 'kat@email.com',
        'phone' => '222-2222'
        ],
];

var_dump($test); //echo doesn't work with 'consoling' whole arrays,only specific bits like index 1 etc.





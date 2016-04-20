<?php

$companies = [
    'Sun Microsystems' => [
        'Vinod Khosla',
        'Bill Joy',
        'Andy Bechtolsheim',
        'Scott McNealy'
    ],
    'Silicon Graphics' => [
        'Jim Clark',
        'Ed McCracken'
    ],
    'Cray' => [
        'William Norris',
        'Seymour Cray'
    ],
    'NeXT' => [
        'Steve Jobs',
        'Avie Tevanian',
        'Joanna Hoffman',
        'Bud Tribble',
        'Susan Kare'
    ],
    'Acorn Computers' => [
        'Steve Furber',
        'Sophie Wilson',
        'Hermann Hauser',
        'Jim Mitchell'
    ],
    'MIPS Technologies' => [
        'Skip Stritter',
        'John L. Hennessy'
    ],
    'Commodore' => [
        'Yash Terakura',
        'Bob Russell',
        'Bob Yannes',
        'David A. Ziembicki',
        'Jay Miner'
    ],
    'Be Inc' => [
        'Steve Sakoman',
        'Jean-Louis Gassée'
    ]
];
//make a copy to maintain the original array
$copy = $companies;

//to output the companies array in current form
echo "untouched\n";
print_r($companies);

// sort by company name and output
echo "sorted by company name\n";
ksort($copy);
print_r($copy);

//sort people in each company alphabetically
echo "company's people sorted by alpha\n";

//loop to iterate through each company
foreach ($copy as $company => $person) {
    //sorting person by alpha, 'stores' in working memory--doesn't actually alter person info until reassigned
    sort($person);

    //reassigns new alpha'd person value to the existing (unaltered) company key within the copy array.
    $copy[$company] = $person;
}
//outputs result of above foreach loop
print_r($copy);


//sort companies from biggest to smallest
array_multisort($copy);
echo "sorted from biggest to smallest\n";
print_r($copy);








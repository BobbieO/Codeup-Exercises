<?php

$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);


//loop to iterate through each book, keys and values
foreach($books as $title => $book) {
    // echo "Book title is {$title}.\n";
    
    foreach($book as $key => $value) {
        // echo "{$key} {$value}\n";
    }

    //updated to show only books pubbed after 1950.
    if($book['published'] > 1950) {
        echo "{$title} was published after 1950.\n";
    }
    
    echo "================================\n";
}




//example:
//$names = ['Issac', 'Ben', 'Cameron']
//foreach($names as $firstName => $value) {
//    echo "\$value has a key of [$key} and a vale of {$value}\n";
//} outputs $value has a key of 0 and a value of Issac;
        //  $value has a key of 1 and a value of Ben etc;
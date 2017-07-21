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

//Construct a loop that iterates through each book and then each book's keys and values. 
// Have it output the book's title, then list the key value pairs for the data about each book.

$books['Lord of the Rings'] = array(
        'published' => 1968,
        'author' => 'J. R. R. Tolkien',
        'pages' => 1178
    );

foreach($books as $key => $value){
    // if ($value['pages'] < 300){
        echo "--------------" . PHP_EOL;
        echo $key . PHP_EOL;
        foreach($value as $key => $value){
            echo "$key: $value" . PHP_EOL;
        }
    // }
}

$totalPages = 0;
$totalYears = 0;
$numberBooks = 0;
foreach($books as $book => $info){
    $totalPages += $info['pages'];
    $totalYears += $info['published'];
    $numberBooks += 1;
}

echo PHP_EOL . "Average number of pages: " . $totalPages/$numberBooks . PHP_EOL . "Average year published: " . $totalYears/$numberBooks . PHP_EOL;



// Update your loop to only show books that were written after 1950.




// BONUSES:
// 1) Update loop to only include books with less than 300 pages
// 2) Create a new loop that outputs the average page length and year of publication of the books in the books array 
// 3) Add the following entry to the $books array:
//     'Lord of the Rings' => array(
//         'published' => 1968,
//         'author' => 'J. R. R. Tolkien',
//         'pages' => 1178
//     )
// Construct another loop that iterates through each book as in the exercise step 2 
// but the loop should only list the first book of a given author in the books array.
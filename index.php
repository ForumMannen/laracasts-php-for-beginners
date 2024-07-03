<?php
$books = [
    [
        'title' => 'Do Androids Dream of Electric Sheep',
        'releaseYear' => 1968,
        'author' => 'Philip K. Dick',
        'purchaseUrl' => 'http://example.com'
    ],
    [
        'title' => 'The Langoliers',
        'releaseYear' => 1990,
        'author' => 'Stephen King',
        'purchaseUrl' => 'http://example.com'
    ],
    [
        'title' => 'Project Hail Mary',
        'releaseYear' => 2021,
        'author' => 'Andy Weir',
        'purchaseUrl' => 'http://example.com'
    ],
    [
        'title' => 'The Martian',
        'releaseYear' => 2011,
        'author' => 'Andy Weir',
        'purchaseUrl' => 'http://example.com'
    ],
];

$filteredBooks = array_filter($books, function ($book) {
    return $book['releaseYear'] >= 1950 && $book['releaseYear'] <= 2020;
});

require "index.view.php";

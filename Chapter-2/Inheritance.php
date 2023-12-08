<?php

require_once 'DigitalBook.php';
require_once 'PhysicalBook.php';

$physicalBook = new PhysicalBook('A Physical Book', 'J.K. Rowling', 400, 1);
$digitalBook = new DigitalBook('A Digital Book', 'J.K. Rowling', 300, 1000);

$book = new Book('A Book', 'J.K. Rowling', 200);

print $book->print() . PHP_EOL;

// print $physicalBook->print() . PHP_EOL;
// print $digitalBook->print() . PHP_EOL;

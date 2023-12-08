<?php

declare(strict_types=1);

require_once 'Book.php';

class PhysicalBook extends Book
{
    public function __construct(
        string $title,
        string $author,
        int $price,
        public int $weight,
    ) {
        parent::__construct($title, $author, $price);
        $this->weight = $weight;
    }

    public function getWeight(): int
    {
        return $this->weight;
    }

    public function print()
    {
        return "Physical book: {$this->title}, author: {$this->author}, price: {$this->price}, weight: {$this->weight} ". PHP_EOL;
    }
}

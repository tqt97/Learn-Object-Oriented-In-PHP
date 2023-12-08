<?php

declare(strict_types=1);

class Book
{
    public function __construct(
        public string $title,
        public string $author,
        public int $price
    ) {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function print()
    {
        return "Book: {$this->title}, author: {$this->author}, price: {$this->price} " . PHP_EOL;
    }
}

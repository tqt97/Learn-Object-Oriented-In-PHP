<?php

declare(strict_types=1);

require_once 'Book.php';

class DigitalBook extends Book
{
    public function __construct(
        string $title,
        string $author,
        int $price,
        public int $fileSize = 0,
    ) {
        parent::__construct($title, $author, $price);
        $this->fileSize = $fileSize;
    }

    public function getFileSize(): int
    {
        return $this->fileSize;
    }

    public function print()
    {
        return "Digital book: {$this->title}, author: {$this->author}, price: {$this->price}, file size: {$this->fileSize} " . PHP_EOL;
    }
}

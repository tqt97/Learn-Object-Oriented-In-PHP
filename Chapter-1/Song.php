<?php

declare(strict_types=1);

class Song
{
    public function __construct(public string $name, public string $artist)
    {
        $this->name = $name;
        $this->artist = $artist;
    }
}
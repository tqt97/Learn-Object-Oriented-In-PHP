<?php
declare(strict_types=1);

class Playlist
{
    public array $songs = [];

    public function addSong(Song $song){
        $this->songs[] = $song;
    }
}
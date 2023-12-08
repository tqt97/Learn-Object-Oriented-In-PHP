<?php
declare(strict_types=1);

require_once('Playlist.php');
require_once('Song.php');

$playlist = new Playlist();

$playlist->addSong(new Song('Song 1', 'Artist 1'));
$playlist->addSong(new Song('Song 2', 'Artist 2'));

foreach ($playlist->songs as $song) {
    echo $song->name . PHP_EOL;
}

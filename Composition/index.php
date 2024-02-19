<?php

//01
class Song
{
    public $songId;
    public $songTitle;
}
$song = new Song();
echo $song->songId = 1 . PHP_EOL;
echo $song->songTitle = 'Peheli Bhi Main' . PHP_EOL;

$anothersong = new Song();
echo $anothersong->songId = 2 . PHP_EOL;
echo $anothersong->songTitle = 'Mujhe Pyaar Hua Tha' . PHP_EOL;

//02 parametar
class Playlist
{
    public $name;
    public $songs = [];

    public function addSong($song)
    {
        $this->songs[] = $song;
    }
}
$playlist = new Playlist();
echo $playlist->addSong('Tere Bin');
// print_r($playlist);

// 03
class Playlists
{
    public $name;
    public $songs = [];
    public function addSong()
    {
        echo  $this->songs[] = 'new song';
    }
}
$playlists = new Playlists();
echo $playlists->name = 'normal playlist' . PHP_EOL;
echo $playlists->addSong();

print_r($playlists);

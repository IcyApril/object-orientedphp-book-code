<?php

/**
 * Created by PhpStorm.
 * User: junade
 * Date: 18/03/2017
 * Time: 22:59
 */
class Album implements Music
{
    private $name;
    private $songs = array();

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function addSong(Music $song)
    {
        array_push($this->songs, $song);
    }

    public function play(): string
    {
        $songNames = array();

        foreach ($this->songs as $song) {
            array_push($songNames, $song->play());
        }

        $songList = implode("", $songNames);

        return "Playing album: " . $this->name . "\n" . $songList . "\n";
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: junade
 * Date: 18/03/2017
 * Time: 23:10
 */

require_once('Music.php');
require_once('Song.php');
require_once('Album.php');

$lostInStereo = new Song('Lost in Stereo');
$guts = new Song('Guts');
$helloBrooklyn = new Song('Hello, Brooklyn');
$poison = new Song('Poison');

$fences = new Song("Fences");

$album = new Album('Nothing Personal');
$album->addSong($lostInStereo);
$album->addSong($guts);
$album->addSong($helloBrooklyn);


echo $album->play();
echo $fences->play();
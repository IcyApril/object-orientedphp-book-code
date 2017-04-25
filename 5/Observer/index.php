<?php
/**
 * Created by PhpStorm.
 * User: junade
 * Date: 19/03/2017
 * Time: 18:48
 */

require_once('Feed.php');
require_once('Reader.php');

$blog = new Feed('Junade.com');

$rhona = new Reader('Rhona');
$lillie = new Reader('Lillie');
$caitlin = new Reader('Caitlin');

//add reader
$blog->attach($rhona);
$blog->attach($lillie);
$blog->attach($caitlin);

//remove reader
$blog->detach($lillie);

//set break outs
$blog->breakOutNews('Object-Oriented PHP Book');
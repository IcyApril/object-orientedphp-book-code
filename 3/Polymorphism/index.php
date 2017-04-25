<?php
/**
 * User: junade
 * Date: 10/02/2017
 * Time: 04:12
 */

require_once('Region.php');
require_once('City.php');
require_once('Town.php');
require_once('Village.php');

$regions = [
    new City('London'),
    new Town('Rugby'),
    new City('New York'),
    new Village('Dunchurch'),
    new Town('Lutterworth'),
    new City('Baltimore'),
    new City('San Francisco')
];

foreach ($regions as $region) {
    echo $region->getInfo() . " \n";
}
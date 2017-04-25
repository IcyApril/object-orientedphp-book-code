<?php
/**
 * User: junade
 * Date: 24/01/2017
 * Time: 07:59
 */

require_once('Food.php');
require_once('Lunch.php');

$tacos = new Food('Tacos');
$cake  = new Food('Cake');

$lunch = new Lunch($tacos, $cake);

var_dump($lunch->getMenu());
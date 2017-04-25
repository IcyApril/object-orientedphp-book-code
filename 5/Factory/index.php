<?php
/**
 * Created by PhpStorm.
 * User: junade
 * Date: 13/03/2017
 * Time: 19:56
 */

require_once('Car.php');
require_once('BMWSevenSeries.php');
require_once('BMWThreeSeries.php');
require_once('CarFactory.php');

$car = CarFactory::getCar(false);
echo $car->drive();
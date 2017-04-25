<?php

/**
 * Created by PhpStorm.
 * User: junade
 * Date: 13/03/2017
 * Time: 19:52
 */
class CarFactory
{
    public static function getCar(bool $luxury): Car {
        if ($luxury === true) {
            return new BMWSevenSeries();
        }

        return new BMWThreeSeries();
    }
}
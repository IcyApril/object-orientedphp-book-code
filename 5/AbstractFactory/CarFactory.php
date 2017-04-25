<?php

/**
 * Created by PhpStorm.
 * User: junade
 * Date: 13/03/2017
 * Time: 20:25
 */
class CarFactory implements VehicleFactory
{
    public static function getVehicle(bool $luxury): Car {
        if ($luxury === true) {
            return new BMWSevenSeries();
        }

        return new BMWThreeSeries();
    }
}
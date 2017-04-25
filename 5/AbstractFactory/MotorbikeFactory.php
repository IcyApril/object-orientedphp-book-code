<?php

/**
 * Created by PhpStorm.
 * User: junade
 * Date: 13/03/2017
 * Time: 20:29
 */
class MotorbikeFactory implements VehicleFactory
{
    public static function getVehicle(bool $luxury): Vehicle
    {
        if ($luxury === true) {
            return new BMWMotorrad();
        }

        return new YamahaMotor();
    }

}
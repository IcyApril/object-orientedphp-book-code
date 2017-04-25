<?php

/**
 * Created by PhpStorm.
 * User: junade
 * Date: 13/03/2017
 * Time: 20:23
 */
interface VehicleFactory
{
    public static function getVehicle(bool $luxury): Vehicle;
}
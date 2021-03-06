<?php

/**
 * Created by PhpStorm.
 * User: junade
 * Date: 19/03/2017
 * Time: 12:19
 */
class Manager implements Purchaser
{
    private $nextPurchaser;

    public function setNextPurchaser(Purchaser $nextPurchaser)
    {
        $this->nextPurchaser = $nextPurchaser;
    }

    public function buy(float $price): bool
    {
        if ($price <= 10000) {
            echo "Manager purchased";
            return true;
        }

        if (isset($this->nextPurchaser)) {
            return $this->nextPurchaser->buy($price);
        }

        echo "Could not purchase";
        return false;
    }
}
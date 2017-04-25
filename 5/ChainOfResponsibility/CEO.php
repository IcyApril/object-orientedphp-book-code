<?php

/**
 * Created by PhpStorm.
 * User: junade
 * Date: 19/03/2017
 * Time: 12:19
 */
class CEO implements Purchaser
{
    private $nextPurchaser;

    public function setNextPurchaser(Purchaser $nextPurchaser)
    {
        $this->nextPurchaser = $nextPurchaser;
    }

    public function buy(float $price): bool
    {
        echo "CEO purchased";
        return true;
    }
}
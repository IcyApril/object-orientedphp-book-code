<?php

/**
 * Created by PhpStorm.
 * User: junade
 * Date: 19/03/2017
 * Time: 11:44
 */
interface Purchaser
{
    public function setNextPurchaser(Purchaser $nextPurchaser);

    public function buy(float $price): bool;
}
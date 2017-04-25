<?php

/**
 * User: junade
 * Date: 26/01/2017
 * Time: 09:30
 */
interface Product
{
    public function __construct(float $purchasePrice, float $salesPrice);

    public function getSalePrice(): float;

    public function getPurchasePrice(): float;

    public function getSalesTax(): float;
}
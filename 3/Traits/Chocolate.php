<?php

/**
 * User: junade
 * Date: 26/01/2017
 * Time: 09:39
 */
class Chocolate implements Product
{
    use StandardSalesTax;

    private $purchasePrice;
    private $salesPrice;

    public function __construct(float $purchasePrice, float $salesPrice)
    {
        $this->purchasePrice = $purchasePrice;
        $this->salesPrice = $salesPrice;

    }

    public function getSalePrice(): float
    {
        return $this->salesPrice+$this->getSalesTax();
    }

    public function getPurchasePrice(): float
    {
        return $this->purchasePrice;
    }
}
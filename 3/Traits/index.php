<?php
/**
 * User: junade
 * Date: 26/01/2017
 * Time: 09:30
 */

require_once('Product.php');
require_once('StandardSalesTax.php');
require_once('Chocolate.php');


$chocolateBar = new Chocolate(0.5, 1);
var_dump($chocolateBar->getSalePrice());
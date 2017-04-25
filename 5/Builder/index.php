<?php
/**
 * Created by PhpStorm.
 * User: junade
 * Date: 13/03/2017
 * Time: 20:52
 */

require_once('PizzaBuilder.php');
require_once('Pizza.php');

$builder = new PizzaBuilder('Margarita');
$builder->addCheese();
$builder->setSize(9);
$builder->setSauce('BBQ');

$pizza = new Pizza($builder);
echo $pizza->getLabel();
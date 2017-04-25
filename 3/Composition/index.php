<?php
/**
 * User: junade
 * Date: 04/02/2017
 * Time: 01:11
 */

require_once('Person.php');
require_once('Teacher.php');
require_once('HeadTeacher.php');

$person      = new Person('Neville Longbottom', 'Griffindor');
$teacher     = new Teacher($person);
$headTeacher = new HeadTeacher($teacher);

echo $headTeacher->createRule("Thou shalt not eat sweets in the corridors.");
echo PHP_EOL;
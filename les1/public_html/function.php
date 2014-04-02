<?php
/**
 * Created by PhpStorm.
 * User: HVSsoftware
 * Date: 1-4-14
 * Time: 11:22
 */

$parameter1 = ($_GET['par1'] ? $_GET['par1'] : 200) ;
$parameter2 = ($_GET['par2'] ? $_GET['par2'] : 100) ;

function add($value1, $value2) {
    return $value1 + $value2;
}

function substract($value1, $value2) {
    return $value1 - $value2;
}

function multiply($value1, $value2) {
    return $value1 * $value2;
}

function divide($value1, $value2) {
    return $value1 / $value2;
}

function moeilijk($value1, $value2) {
  $sum = 5 * $value1;
  $sum = 9 * $value2 + 60 + $sum;
  $sum = ($sum - $value1 + $value2) * 0;
  return $sum;
}

function marketingregel($aantal_personen, $aantal_producten) {
    return 3;
}

print "Below you will see the results:<br>";
print "Add values: " . add($parameter1, $parameter2) . "<br>";
print "Substract values: " . substract($parameter1, $parameter2) . "<br>";
print "Multiply values: " . multiply($parameter1, $parameter2) . "<br>";
print "Divide values: " . divide($parameter1, $parameter2) . "<br>";

print "Moeilijke berekening: " . moeilijk($parameter1, $parameter2) . "<br>";

marketingregel($parameter1, $parameter2);

print "Moeilijke berekening: " . moeilijk(2 * $parameter1, 2 * $parameter2) . "<br>";

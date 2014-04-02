<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk @ HVSoftware
 * Date: 1-4-14
 * Time: 14:21
 */

$value = 'Hallo';

function printThis() {
    global $value;

    echo $value;
}

function changeValue() {
    global $value;

    $value = "Hello, I have been changed.";
}

print "Printing the value.<br>";

printThis();

changeValue();

print "<br>Printed the value after change.<br>";

printThis();

print "<br>Printed the value.<br>";
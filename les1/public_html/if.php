<?php
/**
 * Created by PhpStorm.
 * User: HVSsoftware
 * Date: 1-4-14
 * Time: 11:03
 */

$parameter = null;

print "Test de waarde van de parameter.<br>";

if ($parameter === true) {
    print "1. Yes, its true";
} else {
    print "1. No, not true";
}
print "<br>";

if ($parameter == true) {
    print "2. Yes, its true";
} else {
    print "2. No, not true";
}
print "<br>";

if ($parameter) {
    print "3. Yes, its true";
} else {
    print "3. No, not true";
}
print "<br>";

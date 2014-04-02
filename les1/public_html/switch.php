<?php
/**
 * Created by PhpStorm.
 * User: HVSsoftware
 * Date: 1-4-14
 * Time: 11:07
 */

print "Voorbeeld van een switch statement. Een optie is een parameter - ?id= - via de url door te geven.<br><br>";

$parameter = ($_GET['id'] ? $_GET['id'] : 0);

switch ($parameter) {
    case 0:
        print "This is a default value ($parameter)";
        break;
    case 1:
        print "Value is $parameter";
        break;
    case 2:
        print "This value is $parameter";
        break;
    case 3:
        print "This value is a value of $parameter";
        break;
    default:
        print "I cant handle this value of $parameter";
}

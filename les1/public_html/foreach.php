<?php
/**
 * Created by PhpStorm.
 * User: HVSsoftware
 * Date: 1-4-14
 * Time: 10:32
 */

print "Gebruik van een foreach loop:";

$name = ($_GET['id'] ? $_GET['id'] : 0);

$persons = array("Harry", "Kees", "Jan", "George", "Jan");
$persons[] = $name;

//print "Eerste persoon:" . $persons[0];

//print "Derde persoon:" . $persons[2];

sort($persons);

print "<ul>";
foreach ($persons as $person) {
  print "<li>$person</li>";
}
print "</ul>";
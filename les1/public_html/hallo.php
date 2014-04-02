<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk @ HVSoftware
 * Date: 2-4-14
 * Time: 16:38
 *
 * Dit is een test
 */

$user = "Harry";
$user2 = 'Kees';
$age = 41;

$string = "$user is $age years of age";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Dit is een test</title>
</head>
<body>
Hallo <?php echo $user . " " . $age; ?>, dit is de body<br>

<?php echo $string; ?>
</body>
</html>
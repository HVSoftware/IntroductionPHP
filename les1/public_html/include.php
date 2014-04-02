<?php
/**
 * Created by PhpStorm.
 * User: HVSoftware
 * Date: 1-4-14
 * Time: 10:52
 */

include_once "header.php";

$content = "De content van de pagina";

$with_css = array(
    "active"  => ($_GET['css'] ? $_GET['css'] : false),
    "file"    => "include_css.php",
    "caption" => "Include the CSS."
);

if ($with_css["active"]) {
    $content .= "<p><a href=" . $with_css["file"] . ">" . $with_css["caption"] . "</a></p>";
}

print "<div class='container'><p>$content</p></div>";

include_once "footer.php";
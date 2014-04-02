<?php
/**
 * Created by PhpStorm.
 * User: HVSoftware
 * Date: 1-4-14
 * Time: 10:52
 */

include_once "header_with_css.php";

$content = <<<EOT
  <h1>CSS styled page</h1>
  <p>De content van de pagina.
  <ul>
  <li>Classes hebben een prefix in CSS met #</li>
  <li>Id hebben in CSS een prefix van .</li>
  </ul></p>;
EOT;

print "<div class='container'>$content</div>";

include_once "footer.php";
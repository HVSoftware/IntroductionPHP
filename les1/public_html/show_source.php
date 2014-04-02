<?php
/**
 * Created by PhpStorm.
 * User: HVSsoftware
 * Date: 1-4-14
 * Time: 12:09
 */

function show_source($file) {
    $fh = fopen($file, 'r');
    $data = fread($fh, 1);
    fclose($fh);
    echo $data;
}

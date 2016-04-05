<?php
/**
 * Created by PhpStorm.
 * User: Serge
 * Date: 04.04.2016
 * Time: 14:37
 */
$x = $_GET['x'];
$y = $_GET['y'];
$md5 = $_GET['md5'];
$SALT = r2h8fr83wfy3874fg8yfw46;
$hash = md5($x . $y . $SALT);
if ($hash === $md5){
    echo 'OK';
}
else {echo 'ERROR';}
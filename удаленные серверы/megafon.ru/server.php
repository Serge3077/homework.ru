<?php
/**
 * Created by PhpStorm.
 * User: Serge
 * Date: 04.04.2016
 * Time: 14:37
 */
$a = $_GET['a'];
$b = $_GET['b'];
$md5 = $_GET['md5'];
$SALT = r2h8fr83wfy3874fg8yfw46;
$hash = md5($a . $b . $SALT);
if ($hash === $md5){
    echo '<answer>1</answer>';
}
else {echo $a;}


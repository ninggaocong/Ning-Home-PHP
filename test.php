<?php
/**
 * Created by PhpStorm.
 * User: Ning
 * Date: 11/2/2017 0002
 * Time: 9:29 AM
 */


echo date("h:i:s").'<br/>';
$mysqli = mysqli_connect("132.207.244.139", "ning", "ninggc", "db_home");
echo date("h:i:s").'<br/>';
if ($mysqli) {
echo date("h:i:s").'<br/>';
}

?>
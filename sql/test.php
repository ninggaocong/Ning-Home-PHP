<?php
/**
 * Created by PhpStorm.
 * User: Ning
 * Date: 11/2/2017 0002
 * Time: 9:29 AM
 */

//$conn = mysql_connect("123.207.244.139","ning","ninggc");
//if (!$conn)
//{
//    die('Could not connect: ' . mysql_error());
//}
//else {
//    echo 'success';
//}
//
//
//mysql_select_db("db_home", conn);
//// some code
//
//mysql_close($conn);

$mysqli = new mysqli("132.207.244.139", "ning", "ninggc", "db_home");
if ($mysqli) {
    echo 'success';
}
//$result = $mysqli->query("SELECT 'Hello, dear MySQL user!' AS _message FROM DUAL");
//$row = $result->fetch_assoc();
//echo htmlentities($row['_message']);

?>
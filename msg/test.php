<?php
/**
 * Created by PhpStorm.
 * User: Ning
 * Date: 11/2/2017 0002
 * Time: 8:50 AM
 */

/**
 * session储存当前日期时间
 */
echo 'hello\n';
session_start();
echo $_GET['id'];
echo $_SESSION['id'];

$_SESSION['name'] = 'name';


Header("HTTP/1.1 303 See Other");
Header("Location: http://123.207.244.139:8080/msg/test1.php");
exit;


?>
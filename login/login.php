<?php

$name = $_GET['login'];
$pwd = $_GET['pwd'];


$conn = mysql_connect("123.207.244.139","ning","ninggc");
if (!$conn)
{
    die('Could not connect: ' . mysql_error());
}
else {
//    echo 'success'.'<br/>';
}

$db = "db_home";
mysql_select_db("db_home", $conn);
// some code

$result = mysql_query("select * from user where name = '".$name."'");

if ($row = mysql_fetch_assoc($result)) {
    if($row['password'] != $pwd) {
        echo "密码错误"."<br/>";
    } else {
        echo "登陆成功"."<br/>";
    }
} else {
    echo "用户名不存在"."<br/>";
}

mysql_free_result($result);

mysql_close($conn);

?>

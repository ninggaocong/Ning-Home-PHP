<?php

$conn = mysql_connect("123.207.244.139","ning","ninggc");
if (!$conn)
{
    die('Could not connect: ' . mysql_error());
}
else {
    echo 'success'.'<br/>';
}

$db = "db_home";
mysql_select_db("db_home", $conn);
// some code

$result = mysql_query("select * from user");

while ($row = mysql_fetch_assoc($result)) {
    echo $row['name'];
}

mysql_free_result($result);

mysql_close($conn);

?>
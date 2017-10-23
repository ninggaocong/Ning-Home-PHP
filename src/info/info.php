<?php
$data = date("Y-m-d");
$file = fopen($data.".txt", "a") or die("Unable to open file!");
$s = $_GET[msg];
echo "输入信息：", $s;
fwrite($file, "\n".$_GET[msg]);
fclose($file);
echo "\n输入成功";

if ($s == "906978985") {
    $file = fopen($data.".txt", "w") or die("Unable to open file!");
    fwrite($file, "Welcome");
    fclose($file);
}

Header("HTTP/1.1 303 See Other");
Header("Location: http://123.207.244.139:8080/src/info/message.php");
exit; //from www.tsingyuan.cn
?>
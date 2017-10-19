<?php
//require_once("../base.php");

function add_order(){
    $myfile = fopen("select.json", "r") or die("Unable to open file!");
    $json = fread($myfile,filesize("select.json"));
    fclose($myfile);
    $result = array(
        "data" => $json
    );
//     echo json_encode("asdf");  这种方式返回数据网页能接收，curl命令能接收，但是app接收为null
    echo json_encode($result);
}

add_order();

?>
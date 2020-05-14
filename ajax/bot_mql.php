<?php
 $mysqli = new mysqli('127.0.0.1','root','','test');
 $mysqli->query("SET NAMES UTF8");
 
    $sql = "SELECT * FROM `bbin` WHERE 1";
    $result = $mysqli->query($sql);
    $array =[];
    while ($fild = $result->fetch_assoc()) {
        array_push($array,$fild);
    }
    echo json_encode($array);
?>

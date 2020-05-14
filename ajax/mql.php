<?php
$mysqli = new mysqli('127.0.0.1', 'root', '', 'test');
$mysqli->set_charset('utf-8');
$mysqli->query("SET NAMES UTF8");
$sql = "select * from bbin where 1";
$result = $mysqli->query($sql);

// print_r($result->fetch_assoc());
//  $time=date('Y-m-d H:i:s',time()+21600);
//  $sql = "UPDATE `test` SET `content` = '{$a}',`createtime` = '{$time}' where `id` = 3";
//  $mysqli->query($sql);
//  $time = date('Y-m-d H:i:s', time());
//  $sql = "INSERT INTO bbin(igroup,conversationId,createtime) VALUES ('1232','3232131','{$time}')";
//  $result = $mysqli->query($sql);
// print_r($result->fetch_assoc());
// echo $_REQUEST['TT'];
$array = [];
while ($fild = $result->fetch_assoc()) {
    array_push($array, $fild);
}
echo json_encode($array);
//  echo '<br>';
// while ($product = $result->fetch_object()) {
//  echo $product->id;
//  echo $product->igroup;
//  }

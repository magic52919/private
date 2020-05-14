<?php
$mysqli = new mysqli('127.0.0.1', 'root', '', 'test');
$mysqli->set_charset('utf-8');
$mysqli->query("SET NAMES UTF8");
$ia = $_REQUEST['TT'];
echo $date = mktime(0,0,0,date('m'),date('d'),date('y'));
echo '<br>';
echo $datenew = date("Y-m-d", $date);
$sql = "select * from bbin_api where `createtime` = '$datenew'";

$result = $mysqli->query($sql);

$array = [];
while ($fild = $result->fetch_assoc()) {
    array_push($array, $fild);
}
echo json_encode($array);


<?php


echo $date = mktime(0,0,0,date('m'),date('d'),date('y'));
echo '<br>';
echo $datenew = date("Y/m/d H:i:s", $date);
echo '<br>';
echo $dateold = date("Y/m/d H:i:s", $date-24*3600);

$sql = "select $date";
echo $sql;
<?php
$request = $_REQUEST;
var_dump($request);
echo '<hr>';
$ccc=json_encode($request["Checkbox"]);
echo $ccc;
echo '<hr>';
print_r( $request["Checkbox"] );
echo '<hr>';
// if($request["Checkbox"][0] == "1"){
//     echo 1;
// }else if($request["Checkbox"][0] == "2"){
//     echo 2;
// }
echo '<hr>';

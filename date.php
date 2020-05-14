<?php

echo date('Y-m-01', strtotime('-1 month'));

echo "<br/>";


echo date('Y-m-t', strtotime('-1 month'));

echo "<br/>";
echo date('Y-m-01', strtotime('-2 month'));

echo "<br/>";
echo date('Y-m-t', strtotime('-2 month'));

echo "<br/>";
echo date('Y-m-01', strtotime('-3 month'));

echo "<br/>";
echo date('Y-m-t', strtotime('-3 month'));

echo "<br/>";
echo date('Y-m-01', strtotime('-4 month'));

echo "<br/>";
echo date('m', strtotime('-4 month'));

echo "<br/>";
echo date('Y-m-d', strtotime('-1 monday'));

echo "<br/>";
echo date('Y-m-d', strtotime('-2 monday'));

echo "<br/>";
echo date('Y-m-d', strtotime('-1 thursday'));

echo "<br/>";
echo date("l");
echo "<br/>";

if (date("l") == 'monday') {
    echo date('Y-m-d', strtotime('-1 monday'));

    echo "<br/>";
} else {
    echo date('Y-m-d', strtotime('-2 monday'));

    echo "<br/>";
}
echo date('Y-m-d', strtotime('-2 Day'));

echo "<br/>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="select-style">
    <select id='gamekind'>
        <option value="Month">每月</option>
        <option value="Day">每日</option>
    </select>
</div>

<input type="button" id="btn_search" style="width:80px;margin-left: 100px;float:left;padding: 1px;" value="查詢" class="btn-secondary btn-lg btn-block">

<script>
    $("#btn_search").click(function() {
alert($("#gamekind").val());
    })
</script>
</body>
</html>
if (date("l") == 'Monday') {


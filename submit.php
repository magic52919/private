<?php
session_start();
if(!isset($_REQUEST['birthday'])){
    $new = date("Y-m-d 00:00:00");
    $date=strtotime($new);
    //$date = mktime(0, 0, 0, date('m'), date('d'), date('y'));
}else{
    //echo $_REQUEST['birthday'];

    $date = strtotime($_REQUEST['birthday']);
    
    $new =date("Y-m-d",$date);
    echo date("Y-m-d H:i:s", $date);
}




$to = date("Y-m-d", $date + 24 * 3600);
$ye= date("Y-m-d", $date - 24 * 3600);



?>
<!DOCTYPE HTML>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <title>submit</title>
    <style>

    </style>
</head>



<script>

</script>
<div>
    <form action="submit.php" method="post">

        <div style="width: 500px">
            <input type="text" name="date" vlue="123">
            <input type="submit" class="btn btn-primary" data-toggle="button" style="background-color:black" id="send">
            <?php echo $new ?><span class="text-danger">(美東時間)</span>
            <input type="submit" class="btn btn-primary" data-toggle="button" style="background-color:black" id="send">
            <input type="text" name="date" vlue="123">
        </div>

        <div>
            <form action="submit.php" method="post">
                <input style="display:none;"type="date" value="<?php echo $to?>" id="birthday" name="birthday">
                <input type="submit" value="明天">
            </form>

            <form action="submit.php" method="post">
                <input style="display:none;" type="date" value="<?php echo $ye?>" id="birthday" name="birthday">
                <input type="submit" value="昨天">
            </form>
        </div>
    </form>
</div>

<div style="margin-right:10%">
    <span>1231</span>

</div>

</body>

</html>
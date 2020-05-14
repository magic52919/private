<?php
session_start();
$_SESSION['url'] = 'css.php';

include_once 'mql.php';
$mysqli->query("SET NAMES UTF8");
$sql = "select * from test";
$result = $mysqli->query($sql);
$product = $result->fetch_object();
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <style>
        #menu {
            position: relative;
            height: 70%;
            width: 50%;
            top: 0;
            left: 0;
            position: fixed;
        }

        #content {
            height: 100%;
            width: 50%;
            top: 0;
            left: 0;
            position: absolute;
            margin-left: 50%;
        }

        #cul_word {
            text-align: right;
        }
    </style>
    <script>
        function word() {

            let length = encodeURI(document.getElementById("con").value).length;
            if (length > 900) {
                alert("已超過字數限制");
            }
            console.log(encodeURI(document.getElementById("con").value));
            document.getElementById("test").innerHTML = 900 - length;

        }
    </script>

</head>

<body>
        <div id="menu" style="background-color:#FF00FF;float:left;">
        <form action="ma.php" method="post" style="margin-left:10%" onkeyup="word()" onsubmit="return alert_bbin();">
            <h3 style=color:blue;>GM-BBIN機器人<br>※通知客管端維護/分項遊戲維護資訊※<a id="right" href="exampleblog.php" style="margin-left: 30px" class="btn  btn-success pull-right">範本</a></h3>

            <div style="width: 100%">
                <textarea style="border:3px black dashed;border-radius:5px;background-color:rgba(241,241,241,.98);margin-left:10%;width: 60%;height: 500px;" placeholder="輸入群發內容" name="con" id="con"></textarea><br>
                <input type="submit" class="btn btn-primary" data-toggle="button" style="background-color:black;margin-left:10%;" id="send"><br>
                <span style="margin-left:10%" id="cul_word" ondblclick="load()" >剩餘字元:<span id="test" >950</span>

                </span>
                
            </div>
            </form>
        </div>
        
 
    <div id="content" style="background-color:#EEEEEE;float:left;">

    <form action="ma.php" method="post" style="margin-left:10%" onkeyup="word()" onsubmit="return alert_bbin();">
            <h3 style=color:blue;>GM-BBIN機器人<br>※通知客管端維護/分項遊戲維護資訊※<a id="right" href="exampleblog.php" style="margin-left: 30px" class="btn  btn-success pull-right">範本</a></h3>

            <div style="width: 100%">
                <textarea style="border:3px black dashed;border-radius:5px;background-color:rgba(241,241,241,.98);margin-left:10%;width: 60%;height: 500px;" placeholder="輸入群發內容" name="con" id="con"></textarea><br>
                <input type="submit" class="btn btn-primary" data-toggle="button" style="background-color:black;margin-left:10%;" id="send"><br>
                <span style="margin-left:10%" id="cul_word" ondblclick="load()" >剩餘字元:<span id="test" >950</span>

                </span>
                
            </div>
            </form>
    </div>



</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <title>Tokyo Onepiece Tower</title>
    <meta charset="utf-8">
    <!-- <link rel="stylesheet" href="css/onepiece.css"> -->
    <style type="text/css">
       #left1{
	height: 100px;
	width: 200px;
	background-color: #69F;
	float: left;
	margin-right: 10px;
}
    </style>
</head>

<body>
    <div id="left" style="float:left;width:45%;">
    <form action="skyform.php" method="post" style="margin-right:10%" onkeyup="word()" onsubmit="return alert_bbin();">
            <h3 style=color:blue;>GM-BBIN機器人<br>※通知客管端維護/分項遊戲維護資訊※<a id="right" href="exampleblog.php" style="margin-left:  10px" class="btn  btn-success pull-right">範本</a></h3>
            <div style="width: 500px;">
                <textarea style="border:3px black dashed;border-radius:5px;background-color:rgba(241,241,241,.98);width: 500px;height: 500px;padding: 10px;resize: none;" placeholder="輸入群發內容" name="content" id="content"></textarea><br>
                <input type="submit" class="btn btn-primary" data-toggle="button" style="background-color:black" id="send">
                <span id="cul_word">
                    <h4 ondblclick="load()">剩餘字元:<span id="test" style="">950</span></h4>
                </span>
            </div>
            


            </div>
            <div>
                <?php
                if (!isset($_REQUEST['content'])) exit(0);
                echo $_REQUEST['content'];
                ?>
            </div>
        </form>

    </div>

    <div id="right" style="float:right;width:55%">
        
   
        <table>
            <tr>1</tr>
            <tr>1</tr>
            <tr>1</tr>
            <tr>1</tr>
        </table>
    </div>
 
    

</body>

</html>
<?php



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <script src="https://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.2/chosen.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.2/chosen.jquery.min.js"></script>

    <title></title>
    <style>
    
        hr {
            border-bottom: 2px solid black;
            background: #000;
        }

        h4 a:hover {
            background-color: #AAAAAA;
        }
    </style>
    <script>
    </script>
</head>

<body >
<a id="liveagent_button_online_5737F000000DAhc" href="javascript://Chat" style="display: none;" onclick="liveagent.startChat('5737F000000DAhc')">線上聊天內容</a>
<div id="liveagent_button_offline_5737F000000DAhc" style="display: none;">離線聊天內容 </div>
<script type="text/javascript">
if (!window._laq) { window._laq = []; }
window._laq.push(function(){liveagent.showWhenOnline('5737F000000DAhc', document.getElementById('liveagent_button_online_5737F000000DAhc'));
liveagent.showWhenOffline('5737F000000DAhc', document.getElementById('liveagent_button_offline_5737F000000DAhc'));
});</script>

    <table>
    
<?php
function aa(){

    include_once 'mql.php';
    $mysqli->query("SET NAMES UTF8");
    $sql = "select * from bbin";
    $result = $mysqli->query($sql);

    while ($product = $result->fetch_object()) {

        bb($product->conversationId);
        echo '<br>';
    }
}
function bb($b){
echo $b;

}
//    echo $_SESSION['url'];
    aa();
    ?>
</table>
</body>

</html>



<?php
include_once 'mql.php';
$mysqli->query("SET NAMES UTF8");

$sqlbbi = "select * from bbin";
$resultbbi = $mysqli->query($sqlbbi);

$sqlbba = "select * from bbin_api";
$resultbba = $mysqli->query($sqlbba);

$sqlbbo = "select * from bbos";
$resultbbo = $mysqli->query($sqlbbo);

$sqlbboa = "select * from bbos_api";
$resultbboa = $mysqli->query($sqlbboa);


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

<body style="background-color:#FFFFFF; height:800px; margin-left:15px; margin-right:15px;">

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">

        <span> </span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/Ncs/ajax/add_botgroup2.php">新增機器人群組</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/Ncs/ajax/del_botgroup2.php">刪除機器人群組</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/Ncs/ajax/list_bot.php">機器人群組列表</a>
                </li>
            </ul>

        </div>
    </nav>
    <br>
    <hr>

    <hr>
    <br>
    <div class="panel-group" id="accordion">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" style=" display:block; padding:5px; color:black;">
                        <strong>BBIN</strong>
                    </a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div id="jojo1" class="panel-body" style="width: 100%;  margin: 10 auto">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th></th>
                                <th>群組名稱</th>
                                <th>群組Id</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            while ($product = $resultbbi->fetch_object()) {
                                echo '<tr>';
                                echo "<td>{$i}</td>";
                                echo "<td>{$product->igroup}</td>";
                                echo "<td>{$product->conversationId}</td>";
                                echo '</tr>';
                                $i++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel panel-info">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" style=" display:block; padding:5px; color:black;">
                        <strong>BBIN-API</strong>
                    </a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div id="jojo2" class="panel-body" style="width: 100%; margin: 10 auto">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th></th>
                                <th>群組名稱</th>
                                <th>群組Id</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            while ($product = $resultbba->fetch_object()) {
                                echo '<tr>';
                                echo "<td>{$i}</td>";
                                echo "<td>{$product->igroup}</td>";
                                echo "<td>{$product->conversationId}</td>";
                                echo '</tr>';
                                $i++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel panel-warning">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" style=" display:block; padding:5px; color:black;">
                        <strong>BBOS</strong>
                    </a>
                </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse">
                <div id="jojo3" class="panel-body" style="width: 100%; margin: 10 auto">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th></th>
                                <th>群組名稱</th>
                                <th>群組Id</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            while ($product = $resultbbo->fetch_object()) {
                                echo '<tr>';
                                echo "<td>{$i}</td>";
                                echo "<td>{$product->igroup}</td>";
                                echo "<td>{$product->conversationId}</td>";
                                echo '</tr>';
                                $i++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="panel panel-warning">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive" style=" display:block; padding:5px; color:black;">
                        <strong>BBOS-API</strong>
                    </a>
                </h4>
            </div>
            <div id="collapseFive" class="panel-collapse collapse">
                <div id="jojo4" class="panel-body" style="width: 100%; margin: 10 auto">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th></th>
                                <th>群組名稱</th>
                                <th>群組Id</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            while ($product = $resultbboa->fetch_object()) {
                                echo '<tr>';
                                echo "<td>{$i}</td>";
                                echo "<td>{$product->igroup}</td>";
                                echo "<td>{$product->conversationId}</td>";
                                echo '</tr>';
                                $i++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function() {
            $('#collapseFour').collapse({
                toggle: false
            })
        });
        $(function() {
            $('#collapseFive').collapse('hide')

        });
        $(function() {
            $('#collapseTwo').collapse('hide')
        });
        $(function() {
            $('#collapseThree').collapse('hide')
        });
        $(function() {
            $('#collapseOne').collapse('hide')
        });
    </script>



</body>

</html>
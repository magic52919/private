<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="test.js"></script>
    <title>BB電子</title>
</head>
<style>
    hr.style-one {
        border: 0;
        height: 1px;
        background: #333;
        background-image: linear-gradient(to right, #ccc, #333, #ccc);
    }

    label {
        color: white;
    }
</style>

<body style="background-color:white; height:800px;">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <h2 style="color:white;margin-right:16px"><a style="color:white; text-decoration:none;" href="index2.html">BB電子</a></h2>
        <span> </span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href='https://ts-op.vir888.com/Hall_amount_monitor/BBS.php?aa=<?php echo $_REQUEST['aa']; ?>'>BB六合彩</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href='https://ts-op.vir888.com/Hall_amount_monitor/BBL.php?aa=<?php echo $_REQUEST['aa']; ?>'>BB彩票</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href='https://ts-op.vir888.com/Hall_amount_monitor/BBP.php?aa=<?php echo $_REQUEST['aa']; ?>'>BB體育</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href='https://ts-op.vir888.com/Hall_amount_monitor/BBV.php?aa=<?php echo $_REQUEST['aa']; ?>'>BB視訊</a>
                </li>
            </ul>
            <span id="div_picker">
                <label>從</label>
                <input id="picker_start" type="text">
                <label>到</label>
                <input id="picker_end" type="text">
                <button id="btn_search" type="button" class="btn btn-info" style="margin-right:20px">搜尋</button>

                <a class="btn btn-info" style="float:right" href="index.php">回首頁</a>
            </span>

        </div>
    </nav>
    <br>
    <br>
    <br>
    <div style=" display:block; padding:5px; color:black;">
        <strong>
            <?php if (isset($_REQUEST['aa'])) {
                $deleteid = $_REQUEST['aa'];
                echo $deleteid;
            } ?>
        </strong>
    </div>
    <div id="jojo" style="width: 99%; height: 24%; margin: 10 auto"></div>
    <br>
    <hr>
    <br>
    <div id="jojo2" style="width: 99%; height: 24%; margin: 10 auto"></div>
    <script>
        let value = "<?php echo $deleteid ?>";

        aa("#jojo", 4, value);

        function show_chart(start_time, end_time) {
            htmlobj = $.ajax({
                method: "GET",
                url: "Five_Hall.php?start=" + start_time + "&end=" + end_time,
                async: false
            });
            msg = JSON.parse(htmlobj.responseText);

        }


        $(function() {
            var date = $('#picker_start').datepicker({
                dateFormat: 'yy-mm-dd'
            }).val();
            var date = $('#picker_end').datepicker({
                dateFormat: 'yy-mm-dd'
            }).val();
        });

        $(document).ready(function() {
            $("#btn_search").click(function() {
                let start_time = new Date($("#picker_start").val());
                let end_time = new Date($("#picker_end").val());
                console.log(start_time);
                var time_st = start_time.getTime() - 29800000;
                var time_ed = end_time.getTime() - 29800000;
                var date55 = new Date(time_st);
                var date66 = new Date(time_ed);

                Y = date55.getFullYear() + '-';
                M = (date55.getMonth() + 1 < 10 ? "0" + (date55.getMonth() + 1) : date55.getMonth() + 1) + "-";
                D = (date55.getDate() < 10 ? '0' + (date55.getDate()) : date55.getDate());

                Y2 = date66.getFullYear() + '-';
                M2 = ((date66.getMonth() + 1 < 10) ? ('0' + (date66.getMonth() + 1)) : date66.getMonth() + 1) + '-';
                D2 = (date66.getDate() < 10 ? '0' + (date66.getDate()) : date66.getDate());

                var str = Y + M + D + "T16:00:00Z";
                var str2 = Y2 + M2 + D2 + "T16:00:00Z";

                if ($("#picker_start").val() == "") {
                    alert("你尚未填寫初始日期");
                } else if ($("#picker_end").val() == "") {
                    alert("你尚未填寫結束日期");
                } else if ($("#picker_end").val() == $("#picker_start").val()) {
                    alert("輸入錯誤");
                } else {
                    bb(value, 4, str, str2);
                }
            })
        });
    </script>
    </div>
</body>

</html>
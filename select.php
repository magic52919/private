<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <!-- <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <link href="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" rel="stylesheet"> -->
    <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="test.js"></script>
    <title>開發中</title>
    <script>
        document.getElementById
            function test($a) {
                let select = document.getElementById("num");
                switch($a){
                    case 1:
                    document.location.href = 'BBE.php?aa=' + select.value;break;
                    case 2:
                    document.location.href = 'BBV.php?aa=' + select.value;break;
                    case 3:
                    document.location.href = 'BBL.php?aa=' + select.value;break;
                    case 4:
                    document.location.href = 'BBP.php?aa=' + select.value;break;
                }             
            }
        </script>
</head>

<body background="red" >
    <div class="container">
        <script>
            let hall = ["888娛樂城 [da8]", "888真人 [cny]", "Esball [esb]", "888真人賭場 [447]", "A8娛樂城 [a8]", "BBIN [bbin]", "BBOS [bo]", "BS Casino [bs8]", "BWT casino [bwt]", "Bebet casino [beb]", "GPK [gpk]", "Bet365 [chn]", "CG Casino [cgs]", "CRO WN澳門皇冠賭場 [crc]", "EG [em]"];
            document.write("<select id='num'>");
            for (let select of hall) {
                document.write("<option>");
                document.write(select);
                document.write("</option>");
            }
            document.write("</select>");
        </script>
        <a onclick="return test(1);" class="btn">BB電子</a>
        <a onclick="return test(2);" class="btn">BB視訊</a>
        <a onclick="return test(3);" class="btn">BB彩票</a>
        <a onclick="return test(4);" class="btn">BB體育</a>
        <button></button>
    </div>

    <div id="jojo" style="width: 90%; height: 25%; margin: 10 auto"></div>
    <script>
        aa("#jojo")
    </script>
    <script>
        document.write("<br>");
    </script>
    <div id="jojo2" style="width: 90%; height: 25%; margin: 10 auto"></div>
    <script>
        aa("#jojo2")
    </script>
</body>

</html>
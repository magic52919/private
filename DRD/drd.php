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
  <script src="test.js"></script>
  <title>分聽單量監控</title>
  <style>
    #num {
      color: white;
      background-color: rgba(0, 0, 0, 0.5);
    }

    hr {
      border-bottom: 2px solid black;
      background: #000;
    }

    h4 a:hover {
      background-color: #AAAAAA;
    }

    tspan {
      color: yellow;

    }
  </style>
  <script>
    var timer0;


    function test($a) {
      let select = document.getElementById("num");
      switch ($a) {
        case 0:
          document.location.href = 'BBS.php?aa=' + select.value;
          break;
        case 1:
          document.location.href = 'BBL.php?aa=' + select.value;
          break;
        case 2:
          document.location.href = 'BBP.php?aa=' + select.value;
          break;
        case 3:
          document.location.href = 'BBV.php?aa=' + select.value;
          break;
        case 4:
          document.location.href = 'BBE.php?aa=' + select.value;
          break;
      }
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
      $("#num").on('change', function() {
        clearInterval(timer0);
        $("#jojo0").empty();

        aa("#jojo0", 0, this.value);
      });


      $("#btn_search").click(function() {
        if ($("#picker_start").val() == "") {
          alert("你尚未填寫初始日期");
        } else if ($("#picker_end").val() == "") {
          alert("你尚未填寫結束日期");
        } else if ($("#picker_end").val() == $("#picker_start").val()) {
          alert("輸入錯誤");
        } else {
          console.log($("#picker_start").val() + "T00:00:00Z");
          console.log($("#picker_end").val());
        }
      })
    });
  </script>
</head>

<body style="background-color:#FFFFFF; height:800px; margin-left:15px;">

  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">

    <span> </span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="javascript: return false;" onclick="test(0)">BB六合彩</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript: return false;" onclick="test(1)">BB彩票</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript: return false;" onclick="test(2)">BB體育</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript: return false;" onclick="test(3)">BB視訊</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript: return false;" onclick="test(4)">BB電子</a>
        </li>
      </ul>
      <div id="Hall_Kind" style="float:left">
        <script>
          let hall = ["sands澳門金沙娛樂場 [dkk]", "GPK [gpk]", "888娛樂城 [da8]", "888真人 [cny]", "Esball [esb]", "銀河娛樂 GALAXY RECREATION [63]", "888真人賭場 [447]", "A8娛樂城 [a8]", "BBIN [bbin]", "BBOS [bo]", "BS Casino [bs8]", "BWT casino [bwt]", "Bebet casino [beb]", "Bet365 [chn]", "公海赌船 [710]", "CG Casino [cgs]", "CRO WN澳門皇冠賭場 [crc]", "EG [em]", "輝煌國際 [hh]", "澳門sands金沙娛樂場 [55]", "澳門金沙集團Macao Sands Group [56]", "GALAXY澳門銀河娛樂場 [63]", "必贏國際 [437]", "銀河娛樂場GALAXY [ga]", "澳門金沙sands娛樂場 [scc]", "THE PARISIAN澳門巴黎人 [940]"];
          document.write("<select id='num'>");

          for (let select of hall) {
            document.write("<option>");
            document.write(select);
            document.write("</option>");
          }
          document.write("</select>");
          $("#num").chosen();
        </script>
      </div>
    </div>
  </nav>


  <br>

  <hr>

  <br>

  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" style=" display:block; padding:5px; color:black;">
            <strong>六合彩</strong>
          </a>
        </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse in">
        <div id="jojo0" class="panel-body" style="width: 100%;  height: 130px; margin: 10 auto">

        </div>
      </div>
    </div>



  </div>
  <script type="text/javascript">
    $(function() {
      $('#collapseFour').collapse({
        toggle: true
      })
    });
    $(function() {
      $('#collapseFive').collapse('show')
    });
    $(function() {
      $('#collapseTwo').collapse('show')
    });
    $(function() {
      $('#collapseThree').collapse('show')
    });
    $(function() {
      $('#collapseOne').collapse('show')
    });
  </script>
  <script>
    aa("#jojo0", 0, document.getElementById("num").value)
    document.write("<br>");
    aa("#jojo1", 1, document.getElementById("num").value)
    document.write("<br>");
    aa("#jojo2", 2, document.getElementById("num").value)
    document.write("<br>");
    aa("#jojo3", 3, document.getElementById("num").value)
    document.write("<br>");
    aa("#jojo4", 4, document.getElementById("num").value)
    var chart = $('#jojo0').highcharts();
  </script>


</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    
</head>

<body>

    <h2>我收藏的 CD :</h2>
    <div id="myDiv"></div>
    <button type="button" id="tt">获取我的 CD</button>
    <script>

         $("#tt").click(function() {

            $.ajax({
                url: '../json.txt',
                success: function(respons) {
                    $('#myDiv').html('抓到資料囉!');
                    console.log(respons);
                },
                error: function(xhr) {
                    alert("發生錯誤: " + xhr.status + " " + xhr.statusText);
                }
            });
        });

    </script>
</body>

</html>
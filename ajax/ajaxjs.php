<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;

        }

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: scroll;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #444444;
            margin-left: 0.5%;
            /* padding: 20px; */
            border: 1px solid #888;
            width: 80%;
            height: 30%;
        }

        .modal1 {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content1 {
            background-color: #880000;
            background-image: url('TS_GMOP.png');
            background-repeat: no-repeat;
            margin-left: 4%;
            /* padding: 20px; */
            border: 1px solid #888;
            width: 30%;
            height: 25%;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>

<body style="background-color: #888888;">
    <h2>我收藏的</h2>

    <!-- Trigger/Open The Modal -->
    <button id="myBtn">獲取我的</button>
    <!-- Trigger/Open The Modal -->
    <input id="myBtn1" style="width: 80px;"></input>
    <button id="sub">送出</button>
    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <p id="myd"></p>
        </div>

    </div>

    <div id="myModal1" class="modal1">
        <!-- Modal content -->
        <div class="modal-content1">
            <p id="myd1" style="height: 100%;overflow: auto;"></p>
        </div>

    </div>
    <div id="test"></div>
    <script>
        //鎖定右鍵
        document.oncontextmenu = function() {
            window.event.returnValue = true;
            if (window.event.returnValue == true) {
                window.event.returnValue = false; //將滑鼠右鍵事件取消
            }
        }


        // Get the modal
        var modal = document.getElementById("myModal");
        var modal1 = document.getElementById("myModal1");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");
        var btn1 = document.getElementById("myBtn1");
        var sub = document.getElementById("sub");
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        //獲取class的資料
        let num = document.getElementsByClassName('a');

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            $.ajax({
                url: 'mql.php',
                dataType: "json",
                data: {
                    TT: 'jonassp4',
                },
                success: function(respons) {
                    $('#myd').html('');
                    for (i = 0; i < respons.length; i++) {
                        $('#myd').append("<tr>");
                        $('#myd').append("<td style='width: 20%;background-color: #880000'><a href='https://tw.yahoo.com/'>" + respons[i].id + "</a></td>");
                        $('#myd').append("<td style='width: 20%'><a href='https://tw.yahoo.com/'>" + respons[i].content + "</a></td>");
                        $('#myd').append('</tr>');
                    }
                    $('#myd').append("<hr>");
                    $('#myd').append("<label><input type='checkbox' name='CheckAll' value='全選以下' id='CheckAll' />全選以下</label>");
                    $('#myd').append("<br>");

                    $('#myd').append("<hr>");

                    $('#myd').append("<br>");
                    $('#myd').append("<label><input type='checkbox' name='Checkbox[]' value='機車' id='CheckboxGroup1_0' />機車</label>");
                    $('#myd').append("<br>");

                    $('#myd').append("<label><input type='checkbox' name='Checkbox[]' value='腳踏車' id='CheckboxGroup1_1' />腳踏車</label>");
                    $('#myd').append("<br>");

                    $('#myd').append("<label><input type='checkbox' name='Checkbox[]' value='公車' id='CheckboxGroup1_2' />公車</label>");
                    $("#CheckAll").click(function() {
                        if ($("#CheckAll").prop("checked")) { //如果全選按鈕有被選擇的話（被選擇是true）
                            $("input[name='Checkbox[]']").each(function() {
                                $(this).prop("checked", true); //把所有的核取方框的property都變成勾選
                            })
                        } else {
                            $("input[name='Checkbox[]']").each(function() {
                                $(this).prop("checked", false); //把所有的核方框的property都取消勾選
                            })
                        }
                    })
                    console.log(respons);
                },
                error: function(xhr) {
                    alert("發生錯誤: " + xhr.status + " " + xhr.statusText);
                }
            });
            modal.style.display = "block";
        }
        let flag = 0;
        //input
        btn1.onclick = function() {
            $.ajax({
                url: 'bot_mql.php',
                dataType: "json",
                data: {
                    TT: 'jonassp4',
                },
                success: function(respons) {
                    if (flag == 0) {
                        $('#myd1').append("<label><input type='checkbox' name='CheckAll1' value='全選以下' id='CheckAll1' />全選以下</label>");
                        $('#myd1').append("<br><hr><br>");
                        for (i = 0; i < respons.length; i++) {
                            $('#myd1').append("<label><input class='a' type='checkbox' name='Checkbox1[]' value='" + respons[i].conversationid + "' id='" + respons[i].owner + "' />" + respons[i].owner + "</label>");
                            $('#myd1').append("<br>");
                        }
                    }
                    $("#CheckAll1").click(function() {
                        if ($("#CheckAll1").prop("checked")) { //如果全選按鈕有被選擇的話（被選擇是true）
                            $("input[name='Checkbox1[]']").each(function() {
                                $(this).prop("checked", true); //把所有的核取方框的property都變成勾選
                            })
                        } else {
                            $("input[name='Checkbox1[]']").each(function() {
                                $(this).prop("checked", false); //把所有的核方框的property都取消勾選
                            })
                        }
                    })
                    console.log(respons);
                },
                error: function(xhr) {
                    alert("發生錯誤: " + xhr.status + " " + xhr.statusText);
                }
            });
            // flag = 1;
            modal1.style.display = "block";
        }
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
        //點擊送出
        sub.onclick = function() {
            let own = [];
            for (let i = 0; i < num.length; i++) {
                if (num[i].checked) {
                    own.push(num[i].value);
                }
            }
            $.ajax({
                url: 'mql.php',
                dataType: "json",
                data: {
                    TT: own,
                },
                success: function(respons) {
                    $('#test').html('');
                    for (let i = 0; i < respons.length; i++) {
                        
                        document.getElementById("test").innerHTML = document.getElementById("test").innerHTML+respons[i]+'<br>';
                    }
                    console.log(respons);
                },
                error: function(xhr) {
                    alert("發生錯誤: " + xhr.status + " " + xhr.statusText);
                }


            });

        }
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
            if (event.target == modal1) {
                modal1.style.display = "none";
                let con = '';

                flag = 1;
                for (let i = 0; i < num.length; i++) {
                    if (num[i].checked) {
                        if (con == '') {
                            con = con + num[i].id;
                        } else {
                            con = con + ' + ' + num[i].id;
                        }
                    }
                }
                if (con.length > 0) {
                    btn1.style.width = con.replace(/\s+/g, "").length * 13 + 'px';
                } else {
                    btn1.style.width = '80px';
                }

                document.getElementById('myBtn1').value = con;
            }
        }
    </script>
</body>

</html>
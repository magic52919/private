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
    <h2>ＴＥＳＴ點墼網上</h2>


    <table>

        <th style='width: 10%'></th>
        <th style='width: 30%' id="test">群組名字</th>
        <th style='width: 30%' id="test1">群組ＩＤ</th>
        <tbody id="myd">

        </tbody>
    </table>

    <script>
        $.ajax({
            url: 'mql.php',
            dataType: "json",
            async: false,
            data: {
                TT: 'jonassp4',
            },
            success: function(respons) {
                $('#myd').empty();
                for (i = 0; i < respons.length; i++) {
                    $('#myd').append("<tr>");
                    $('#myd').append("<td ><a href='https://tw.yahoo.com/'>" + [i] + "</a></td>");
                    $('#myd').append("<td ><a href='https://tw.yahoo.com/'>" + respons[i].igroup + "</a></td>");
                    $('#myd').append("<td ><a href='https://tw.yahoo.com/'>" + respons[i].conversationId + "</a></td>");
                    $('#myd').append('</tr>');
                }

                console.log(respons);
            },
            error: function(xhr) {
                alert("發生錯誤: " + xhr.status + " " + xhr.statusText);
            }
        });


        $('#test').on('click', function() {
            $.ajax({
                url: 'mql1.php',
                dataType: "json",
                data: {
                    TT: 'igroup',
                },
                success: function(respons) {
                    $('#myd').empty();

                    for (i = 0; i < respons.length; i++) {
                        $('#myd').append("<tr>");
                        $('#myd').append("<td><a href='https://tw.yahoo.com/'>" + [i] + "</a></td>");
                        $('#myd').append("<td><a href='https://tw.yahoo.com/'>" + respons[i].igroup + "</a></td>");
                        $('#myd').append("<td><a href='https://tw.yahoo.com/'>" + respons[i].conversationId + "</a></td>");
                        $('#myd').append('</tr>');
                    }
                    console.log(respons);
                },
                error: function(xhr) {
                    alert("發生錯誤: " + xhr.status + " " + xhr.statusText);
                }
            });
        });


        $('#test1').on('click', function() {
            $.ajax({
                url: 'mql1.php',
                dataType: "json",
                data: {
                    TT: 'conversationId',
                },
                success: function(respons) {
                    $('#myd').empty();

                    for (i = 0; i < respons.length; i++) {
                        $('#myd').append("<tr>");
                        $('#myd').append("<td><a href='https://tw.yahoo.com/'>" + [i] + "</a></td>");
                        $('#myd').append("<td><a href='https://tw.yahoo.com/'>" + respons[i].igroup + "</a></td>");
                        $('#myd').append("<td><a href='https://tw.yahoo.com/'>" + respons[i].conversationId + "</a></td>");
                        $('#myd').append('</tr>');
                    }
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
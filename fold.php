<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <title>可摺疊展開的簡單目錄</title>
    <style>
        div {
            font-size: 12px;
            color: red;
            background-color: #EAEAE8;
            border: 1 solid #1892B5;
            padding: 1
        }
    </style>
    <div id="main1" style="color:blue" onclick="document.all.child1.style.display=(document.all.child1.style.display =='none')?'':'none'">
        主目錄1</div>
    <div id="child1" style="display:none">
        <a href="#">- 子目錄1</a> <br>
        <a href="#">- 子目錄2</a> <br>
        <a href="#">- 子目錄3</a> <br>
        <a href="#">- 子目錄4</a>
    </div>
    <div id="main2" style="color:blue" onclick="document.all.child2.style.display=(document.all.child2.style.display =='none')?'':'none'">
        主目錄2 </div>
    <div id="child2" style="display:none">
        <a href="#">- 子目錄1</a> <br>
        <a href="#">- 子目錄2</a> <br>
        <a href="#">- 子目錄3</a>
    </div>
</body>

</html>
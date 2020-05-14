<?php
    include_once 'mql.php';
    $mysqli->query("SET NAMES UTF8");

    if (isset($_REQUEST['group'])) {
    // echo $theme = $_REQUEST['group'];
    // echo $conversationid =$_REQUEST['conversationid'];
    echo $_REQUEST['text'];
    echo $_REQUEST['group'];
    echo '<br>';
    echo $time=date('Y-m-d H:i:s',time());
    //$sql = "INSERT INTO bbin01_api (group,conversationId,createtime) VALUES ('{$group}','{$conversationid}','{$time}')";
    //$mysqli->query($sql);
    //header('Location: add_botgroup.php');
    }

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
    <title>新增機器人群組</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>

    <body>
    <div class="container">

    <table class="table table-hover">
      <thead>
        <tr>
          <th>群組名稱</th>
          <th>conversation</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
    <tbody>
        <tr>
        <form action="add_botgroup.php?text=1" method="post" enctype='multipart/form-data'>
            <td><input type="text" name="group" value=''></td>
            <td><input type="text" name="conversationid" value=''></td>
            <td><input type="submit" value="新增"> </td>
        </form>
        </tr>
      </tbody>
    </table>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>群組名稱</th>
          <th>conversation</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
    <tbody>
        <tr>
        <form action="add_botgroup.php?text=2" method="post" enctype='multipart/form-data'>
            <td><input type="text" name="group" value=''></td>
            <td><input type="text" name="conversationid" value=''></td>
            <td><input type="submit" value="新增"> </td>
        </form>
        </tr>
      </tbody>
    </table>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>群組名稱</th>
          <th>conversation</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
    <tbody>
        <tr>
        <form action="add_botgroup.php?text=3" method="post" enctype='multipart/form-data'>
            <td><input type="text" name="group" value=''></td>
            <td><input type="text" name="conversationid" value=''></td>
            <td><input type="submit" value="新增"> </td>
        </form>
        </tr>
      </tbody>
    </table>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>群組名稱</th>
          <th>conversation</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
    <tbody>
        <tr>
        <form action="add_botgroup.php?text=4" method="post" enctype='multipart/form-data'>
            <td><input type="text" name="group" value=''></td>
            <td><input type="text" name="conversationid" value=''></td>
            <td><input type="submit" value="新增"> </td>
        </form>
        </tr>
      </tbody>
    </table>
    
    </div>
    </body>
   </html>

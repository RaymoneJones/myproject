<?php
session_start();
include("conn/conn.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<script src="http://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<head></head>
<body background="beijing.jpg"">

<table align="center">
    <tr>
        <td><h4>职&nbsp;&nbsp;工&nbsp;&nbsp;号：</h4></td>
        <td><h4></html> <?php echo $_SESSION["userid"] ?><html></h4></td>
    </tr>
    <tr>
        <td><h4>姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：</h4></td>
        <td><h4></html> <?php echo $_SESSION["username"] ?><html></h4></td>
    </tr>
    <tr>
        <td><h4>密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码：</h4></td>
        <td><h4></html> <?php echo $_SESSION["userpassword"] ?><html></h4></td>
    </tr>
    <tr>
        <td><h4>部&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;门：</h4></td>
        <td><h4></html> <?php echo $_SESSION["userbranch"] ?><html></h4></td>
    </tr>
    <tr>
        <td><h4>工&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;作：</h4></td>
        <td><h4></html> <?php echo $_SESSION["userjob"] ?><html></h4></td>
    </tr>
    <tr>
        <td><h4>性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别：</h4></td>
        <td><h4></html> <?php echo $_SESSION["usersex"] ?><html></h4></td>
    </tr>
    <tr>
        <td><h4>电&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;话：</h4></td>
        <td><h4></html> <?php echo $_SESSION["usertel"] ?><html></h4></td>
    </tr>
    <tr>
        <td><h4>家庭住址：</h4></td>
        <td><h4></html> <?php echo $_SESSION["useraddress"] ?><html></h4></td>
    </tr>
    <tr>
        <td><h4>入职时间：</h4></td>
        <td><h4></html> <?php echo $_SESSION["userfoundtime"] ?><html></h4></td>
    </tr>
</table>
</body>

</html>

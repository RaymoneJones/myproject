<?php
session_start();
include("conn/conn.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head></head>

<body>
<table align="center">
    <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;职工号：</td>
        <td></html> <?php echo $_SESSION["userid"] ?><html></td>
    </tr>
    <tr>
        <td>姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：</td>
        <td></html> <?php echo $_SESSION["username"] ?><html></td>
    </tr>
    <tr>
        <td>密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码：</td>
        <td></html> <?php echo $_SESSION["userpassword"] ?><html></td>
    </tr>
    <tr>
        <td>部&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;门：</td>
        <td></html> <?php echo $_SESSION["userbranch"] ?><html></td>
    </tr>
    <tr>
        <td>工&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;作：</td>
        <td></html> <?php echo $_SESSION["userjob"] ?><html></td>
    </tr>
    <tr>
        <td>性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别：</td>
        <td></html> <?php echo $_SESSION["usersex"] ?><html></td>
    </tr>
    <tr>
        <td>电&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;话：</td>
        <td></html> <?php echo $_SESSION["usertel"] ?><html></td>
    </tr>
    <tr>
        <td>家庭住址：</td>
        <td></html> <?php echo $_SESSION["useraddress"] ?><html></td>
    </tr>
    <tr>
        <td>入职时间：</td>
        <td></html> <?php echo $_SESSION["userfoundtime"] ?><html></td>
    </tr>
</table>
</body>
</html>

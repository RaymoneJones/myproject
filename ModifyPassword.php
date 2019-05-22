<?php
session_start();
include("conn/conn.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head></head>

<body>
<form name = "information" method = "post" action = "PasswordPage.php">
    <div style="text-align:center;">
    请输入旧密码：
    <input type = "text" name = "OldPassword">
    <br><br>
    请输入新密码：
    <input type = "text" name = "NewPassword1">
    <br><br>
    请确认新密码：
    <input type = "text" name = "NewPassword2">
    <br><br>
    <input name = "submit" type = "submit" id = "submit" value = "确认修改">
    </div>
</form>
</body>
</html>
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
<body background="beijing.jpg">
<form  name = "information" class="form-horizontal" role="form" action="PasswordPage.php" method="post">
    <div class="form-group">
        <label for="oldpassword" class="col-sm-2 control-label">请输入旧密码</label>
        <div class="col-sm-10">
            <input type="text" style="width:30%"; class="form-control" id="OldPassword" name="OldPassword" placeholder="请输入旧密码">
        </div>
    </div>
    <div class="form-group">
        <label for="NewPassword1" class="col-sm-2 control-label">请输入新密码</label>
        <div class="col-sm-10">
            <input type="text" style="width:30%"; class="form-control" id="NewPassword1" name="NewPassword1" placeholder="请输入新密码">
        </div>
    </div>
    <div class="form-group">
        <label for="NewPassword2" class="col-sm-2 control-label">请确定新密码</label>
        <div class="col-sm-10">
            <input type="text" style="width:30%"; class="form-control" id="NewPassword2" name="NewPassword2" placeholder="请确定新密码">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <input name = "submit" type = "submit" id = "submit" class="btn btn-default" value = "确认修改">
        </div>
    </div>
</form>

</body>
</html>
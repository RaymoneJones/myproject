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
<form  name = "information" class="form-horizontal" role="form" action="InformationPage.php" method="post">
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">姓名</label>
        <div class="col-sm-10">
            <input type="text" style="width:30%"; class="form-control" id="name" name="name" placeholder="请输入姓名" value = <?php echo $_SESSION["username"] ?>>
        </div>
    </div>
    <div class="form-group">
        <label for="branch" class="col-sm-2 control-label">部门</label>
        <div class="col-sm-10">
            <select name="branch" id="branch" style="width:30%"; class="form-control">
                <option value=<?php echo $_SESSION["userbranch"]; ?> ><?php echo $_SESSION["userbranch"]; ?></option>
                <option value="财务部" >财务部</option>
                <option value="后勤部">后勤部</option>
                <option value="人力资源部">人力资源部</option>
                <option value="营销中心">营销中心</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="job" class="col-sm-2 control-label">职位</label>
        <div class="col-sm-10">
            <select name="job" id="job" style="width:30%"; class="form-control">
                <option value=<?php echo $_SESSION["userjob"]; ?> ><?php echo $_SESSION["userjob"]; ?></option>
                <option value="职员">职员</option>
                <option value="经理">经理</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="sex" class="col-sm-2 control-label">性别</label>
        <div class="col-sm-10">
            <select name="sex" id="sex" style="width:30%"; class="form-control">
                <option value=<?php echo $_SESSION["usersex"]; ?> ><?php echo $_SESSION["usersex"]; ?></option>
                <option value="男">男</option>
                <option value="女">女</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for=tel" class="col-sm-2 control-label">电话</label>
        <div class="col-sm-10">
            <input type="text" style="width:30%"; class="form-control" id="tel" name="tel" placeholder="请输入电话" value = <?php echo $_SESSION["usertel"] ?>>
        </div>
    </div>
    <div class="form-group">
        <label for="address" class="col-sm-2 control-label">地址</label>
        <div class="col-sm-10">
            <input type="text" style="width:30%"; class="form-control" id="address" name="address" placeholder="请输入地址" value = <?php echo $_SESSION["useraddress"] ?>>
        </div>
    </div>
    <div class="form-group">
        <label for="foundtime" class="col-sm-2 control-label">入职时间</label>
        <div class="col-sm-10">
            <input type="text" style="width:30%"; class="form-control" id="foundtime" name="foundtime" placeholder="请输入入职时间" value = <?php echo $_SESSION["userfoundtime"] ?>>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <input name = "submit" type = "submit" id = "submit" class="btn btn-default" value = "修改">
        </div>
    </div>
</form>
</body>
</html>
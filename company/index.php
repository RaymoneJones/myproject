<?php
session_start();		//启用session支持
include("conn/conn.php");		//包含数据库文件
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>首页</title>
    <link href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	<script src="http://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
	<script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/backstage.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
   <nav class="navbar navbar-duomi navbar-static-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php" id="logo">网上办公系统</a>
            </div>
            <div>
            	<button type="button" class="btn btn-primary  btn-sm navbar-btn navbar-right" data-toggle="modal" data-target="#login">登录</button>
            </div>
        </div>
    </nav>
   
   	<div id="background" style="position:absolute;z-index:-1;width:100%;height:100%;top:0px;left:0px;">
	<img src="images/2345_image_file_copy_3.jpg" width="100%" height="100%"/></div>
    <!-- 登录窗口 -->
    <div id="login" class="modal fade">
        <div class="modal-dialog" style="width: 400px">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                    <div class="modal-title">
                    	<h3 class="text-center">登录</h3>
                	</div>
                </div>
                
                <div class="modal-body">
                    <form id="register-form" class="form-group" action="login.php" method="post">
                    	<div class="form-group">
                        	<label for="">用户名</label>
                        	<input id="username" name="username" class="form-control" type="text" placeholder="" autofocus>
                    	</div>
                    	<div class="form-group">
                        	<label for="">密码</label>
                        	<input id="password" name="password" class="form-control" type="password" placeholder="">
                    	</div>
                    </form>
                </div>
                <div class="modal-footer">
                	<div class="text-right">
                    	<button id="submit" class="btn btn-primary" type="submit">登录</button>
                        <button class="btn btn-danger" data-dismiss="modal">取消</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>
<script>

$("#submit").click(function(){
		
		formsub();
});
function formsub(){
		if($("#username").val() == ""){
			alert("用户名不能为空!")

		}else if($("#password").val() ==""){
			alert("密码不能为空!")
		}else{
			$("#register-form").submit();
		}
}
</script>
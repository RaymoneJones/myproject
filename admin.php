<?php
    session_start();
    include("conn/conn.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>网上办公系统-后台</title>
<link href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<script src="http://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/consumer.css">
<script src="js/consumer.js" type="text/javascript"></script>
</head>

<body onload="getTime()" style="height: 100% width:100%">
	<div class="firstguidence" id="top">
			<div>
                <table>
                    <tr>
                        <td>
                            <a href="consumer.php" >
                                <img src="./images/first.png"   style="margin-left: 20px" width="150px" height="50px"/>
                            </a>
                        </td>
                        <td>
                            <h id="yuanjing">&nbsp;&nbsp;&nbsp;百度愿景：成为最懂用户，并能帮助人们成长的全球顶级高科技公司。</h>

                        </td>
                        <td width="50px"></td>
                        <td>
                            <div class="topright" id="time1" ></div>
                        </td>
                        <td width="50px"></td>
                        <td>
                            <div class="topright">
                               <?php
                                echo     "欢迎管理员：" .$_SESSION["username"];
                                ?>
                            </div>
                        </td>
                        <td>

                        </td>
                        <td width="50px"></td>
                        <td>
                            <a href="logout.php" />
                            退出系统
                        </td>
                    </tr>
                </table>
            </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <ul id="main-nav" class="nav nav-tabs nav-stacked" style="">
                    <li>
                        <a href="member.php" target="menuFrame">
                            <i class="glyphicon glyphicon-th-large"></i>
                            成员管理    
                        </a>
                    </li>
                    <li>
                        <a href="matter.php" target="menuFrame">
                            <i class="glyphicon glyphicon-cog"></i>
                            事项管理
                               
                        </a>
                       
                    </li>
                    <li>
                        <a href="message.php" target="menuFrame">
                            <i class="glyphicon glyphicon-globe"></i>
                            信息管理
                            <!--<span class="label label-warning pull-right">5</span>--> 
                        </a>
                        
                    </li>

                </ul>
            </div>
           <div class="col-md-10">
            	<iframe id="menuFrame" onload="changeFrameHeight(this)" name="menuFrame" src="member.php" width="100%" height="auto"  float:"left" frameborder="0" scrolling="yes">
             	</iframe>
			</div>

          

        </div>
    </div>

</body>
</html>
<script>
function changeFrameHeight(that){
	$(that).height(document.documentElement.clientHeight - document.getElementById( "top" ).offsetHeight-5);
}

</script>

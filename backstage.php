 <?php
    session_start();
    include("conn/conn.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>百度网上办公系统</title>
    <link href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/backstage.css">
    <link rel="Shortcut Icon" href="./images/favicon.ico" type="image/x-icon" />



    <script src="./js/backstage.js" type="text/javascript"></script>

    <style>
        .firstguidence{
            background-color: #2B2E33;
        }

        #yuanjing{
            color: #E9E9E9;
            font-size: 20px;

        }
        .topright{
            color: #D5D5D5;
            float:right;

        }
    </style>


</head>

<body onload="getTime()" style="height: 100% width:100%">
<div class="firstguidence" style="height: 100%" id="top">
        <div>
            <div>
                <table>
                    <tr>
                        <td>
                            <a href="backstage.php" >
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
                                echo     "欢迎您：" .$_SESSION["username"];
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
</div>
    <div class="container-fluid" style="height: 80% float:left">
        <div class="row">
            <div class="col-md-2">
                <ul id="main-nav" class="nav nav-tabs nav-stacked" style="">
                    <li class="active">
                        <a href="home.php" target="menuFrame">
                            <i class="glyphicon glyphicon-th-large"></i>
                            首页         
                        </a>
                    </li>
                    <li id="company">
                        <a href="#" target="menuFrame">
                            <i class="glyphicon glyphicon-cog"></i>
                            公司简介
                               
                        </a>
                       
                    </li>
                    <li>
                        <a href="#branch" class="nav-header collapsed" data-toggle="collapse">
                            <i class="glyphicon glyphicon-credit-card"></i>
                            部门情况
                             <span class="pull-right glyphicon glyphicon-chevron-toggle"></span>        
                        </a>
                        <ul  id="branch" class="nav nav-list collapse secondmenu " style="height: 0px;">
                            <li class="active"><a href="LogisticsManagementDepartment.php" target="menuFrame"><i class="glyphicon glyphicon-user"></i>&nbsp;个人部门</a></li>
                            <li><a href="#" target="menuFrame"><i class="glyphicon glyphicon-th-list"></i>&nbsp;所有部门</a></li>
                         </ul>   
                    </li>

                    <li>
                        <a href="home.php" target="menuFrame">
                            <i class="glyphicon glyphicon-globe"></i>
                            个人事项
                            <!--<span class="label label-warning pull-right">5</span>--> 
                        </a>
                        
                    </li>
                    <li>
                        <a href="#person" class="nav-header collapsed" data-toggle="collapse">
                            <i class="glyphicon glyphicon-fire"></i>
                            用户管理
                            <span class="pull-right glyphicon glyphicon-chevron-toggle"></span>  
                        </a>
                        <ul  id="person" class="nav nav-list collapse secondmenu " style="height: 0px;">
<!--                            <li class="active"><a href="#" target="menuFrame"><i class="glyphicon glyphicon-user"></i>&nbsp;资料修改</a></li>-->
                            <li class="active"><a href="PersonalInformation.php" target="menuFrame"><i class="glyphicon glyphicon-user"></i>&nbsp;个人信息</a></li>
                            <li><a href="ModifyInformation.php" target="menuFrame"><i class="glyphicon glyphicon-th-list"></i>&nbsp;资料修改</a></li>
                            <li><a href="ModifyPassword.php" target="menuFrame"><i class="glyphicon glyphicon-th-list"></i>&nbsp;密码修改</a></li>                         </ul>
                    </li>

                </ul>
            </div>
            <div class="col-md-10">
                <iframe id="menuFrame" onload="changeFrameHeight(this)" name="menuFrame" src="home.php" width="100%" height="auto"  style="float:"left" "frameborder="0" scrolling="no">
                </iframe>
            </div>



        </div>
    </div>

</body>
<html>
    <script>
        function changeFrameHeight(that){

            $(that).height(document.documentElement.clientHeight - document.getElementById( "top" ).offsetHeight-5);
        }

    </script>

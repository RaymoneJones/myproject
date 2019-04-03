<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>网上办公系统-后台</title>
<link href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<script src="http://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/backstage.css">
</head>

<body>
<div class="navbar navbar-duomi navbar-static-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="backstage.php" id="logo">网上办公系统-后台
                </a>
                
            </div>
        </div>
</div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <ul id="main-nav" class="nav nav-tabs nav-stacked" style="">
                    <li class="active">
                        <a href="#" target="menuFrame">
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
                            <li class="active"><a href="#" target="menuFrame"><i class="glyphicon glyphicon-user"></i>&nbsp;个人部门</a></li>
                            <li><a href="#" target="menuFrame"><i class="glyphicon glyphicon-th-list"></i>&nbsp;所有部门</a></li>
                         </ul>   
                    </li>

                    <li>
                        <a href="#" target="menuFrame">
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
                            <li class="active"><a href="#" target="menuFrame"><i class="glyphicon glyphicon-user"></i>&nbsp;资料修改</a></li>
                            <li><a href="#" target="menuFrame"><i class="glyphicon glyphicon-th-list"></i>&nbsp;密码修改</a></li>
                         </ul> 
                    </li>

                </ul>
            </div>
            <div class="col-md-10">
            	<iframe id="menuFrame" name="menuFrame" src="#" style="overflow:visible;" scrolling="yes" frameborder="no" width="100%" height="100%; float:left">
             	</iframe>
			</div>

          

        </div>
    </div>

</body>
</html>


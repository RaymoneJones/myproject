<?php
session_start();
include("conn/conn.php");
?>
<link href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<script src="http://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<body background="beijing.jpg">
<ul id="myTab" class="nav nav-tabs">
	<li class="active"><a href="#first" data-toggle="tab">所有成员</a></li>
	<li><a href="#second" data-toggle="tab">成员添加</a></li>
	<li><a href="#third" data-toggle="tab">成员修改</a></li>
</ul>
<div id="myTabContent" class="tab-content">
    <div class="tab-pane fade in active" id="first">
       <!-- <div class="tab-pane fade in active" id="first">  -->
            <div>
                <h2>营销部成员信息</h2>
                <table class="table">
                    <thead>
                    <tr>
                        <th>职员号</th>
                        <th>职员</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $k=5;
                    $sql="select * from tb_user where user_branch='营销中心'";
                    $row=$conne->getRowsArray($sql);
                    $ber=$conne->getRowsNum($sql);
                    $total_page=ceil($ber/$k);
                    if(isset($_GET["id"])){ //判断所需要的参数是否存在
                        $now = $_GET['id'];

                    } else{
                        $now=1;
                    }
                    if($now == $total_page)
                    {
                        $k = $ber % 5;
                        for($i=0;$i<$k;$i++){
                            echo '<tr><td>'. @$row[$now*$k-$k+$i]['user_id'] .'</td><td>'. @$row[$now*$k-$k+$i]['user_name'] .'</td></tr>';
                        }
                    }
                    else {
                        for ($i = 0; $i < $k; $i++) {
                            echo '<tr><td>' . @$row[$now * $k - $k + $i]['user_id'] . '</td><td>' . @$row[$now * $k - $k + $i]['user_name'] . '</td></tr>';
                        }
                    }
                    ?>
                    </tbody>
                </table>
                <?php
                $page=0;
                echo '<ul class="pagination">
						';
                while($page++<$total_page){
                    echo '<li><a href="'.$_SERVER['PHP_SELF'].'?type=1&&id='.$page.'">'.$page.'</a></li>';
                }
                echo '</ul>';
                ?>

                <h2>人力资源部成员信息</h2>
                <table class="table">
                    <thead>
                    <tr>
                        <th>职员号</th>
                        <th>职员</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $k=5;
                    $sql="select * from tb_user where user_branch='人力资源部'";
                    $row=$conne1->getRowsArray($sql);
                    $ber=$conne1->getRowsNum($sql);
                    $total_page=ceil($ber/$k);
                    if(isset($_GET["id1"])){ //判断所需要的参数是否存在
                        $now = $_GET['id1'];

                    } else{
                        $now=1;
                    }
                    if($now == $total_page)
                    {
                        $k = $ber % 5;
                        for($i=0;$i<$k;$i++){
                            echo '<tr><td>'. @$row[$now*$k-$k+$i]['user_id'] .'</td><td>'. @$row[$now*$k-$k+$i]['user_name'] .'</td></tr>';
                        }
                    }
                    else {
                        for ($i = 0; $i < $k; $i++) {
                            echo '<tr><td>' . @$row[$now * $k - $k + $i]['user_id'] . '</td><td>' . @$row[$now * $k - $k + $i]['user_name'] . '</td></tr>';
                        }
                    }
                    ?>
                    </tbody>
                </table>
                <?php
                $page=0;
                echo '<ul class="pagination">
						';
                while($page++<$total_page){
                    echo '<li><a href="'.$_SERVER['PHP_SELF'].'?type=1&&id1='.$page.'">'.$page.'</a></li>';
                }
                echo '</ul>';
                ?>

                <h2>后勤部成员信息</h2>
                <table class="table">
                    <thead>
                    <tr>
                        <th>职员号</th>
                        <th>职员</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $k=5;
                    $sql="select * from tb_user where user_branch='后勤部'";
                    $row=$conne2->getRowsArray($sql);
                    $ber=$conne2->getRowsNum($sql);
                    $total_page=ceil($ber/$k);
                    if(isset($_GET["id2"])){ //判断所需要的参数是否存在
                        $now = $_GET['id2'];

                    } else{
                        $now=1;
                    }
                    if($now == $total_page)
                    {
                        $k = $ber % 5;
                        for($i=0;$i<$k;$i++){
                            echo '<tr><td>'. @$row[$now*$k-$k+$i]['user_id'] .'</td><td>'. @$row[$now*$k-$k+$i]['user_name'] .'</td></tr>';
                        }
                    }
                    else {
                        for ($i = 0; $i < $k; $i++) {
                            echo '<tr><td>' . @$row[$now * $k - $k + $i]['user_id'] . '</td><td>' . @$row[$now * $k - $k + $i]['user_name'] . '</td></tr>';
                        }
                    }
                    ?>
                    </tbody>
                </table>
                <?php
                $page=0;
                echo '<ul class="pagination">
						';
                while($page++<$total_page){
                    echo '<li><a href="'.$_SERVER['PHP_SELF'].'?type=1&&id2='.$page.'">'.$page.'</a></li>';
                }
                echo '</ul>';
                ?>

                <h2>财务部成员信息</h2>
                <table class="table">
                    <thead>
                    <tr>
                        <th>职员号</th>
                        <th>职员</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $k=5;
                    $sql="select * from tb_user where user_branch='财务部'";
                    $row=$conne3->getRowsArray($sql);
                    $ber=$conne3->getRowsNum($sql);
                    $total_page=ceil($ber/$k);
                    if(isset($_GET["id3"])){ //判断所需要的参数是否存在
                        $now = $_GET['id3'];

                    } else{
                        $now=1;
                    }
                    if($now == $total_page)
                    {
                        $k = $ber % 5;
                        for($i=0;$i<$k;$i++){
                            echo '<tr><td>'. @$row[$now*$k-$k+$i]['user_id'] .'</td><td>'. @$row[$now*$k-$k+$i]['user_name'] .'</td></tr>';
                        }
                    }
                    else {
                        for ($i = 0; $i < $k; $i++) {
                            echo '<tr><td>' . @$row[$now * $k - $k + $i]['user_id'] . '</td><td>' . @$row[$now * $k - $k + $i]['user_name'] . '</td></tr>';
                        }
                    }
                    ?>
                    </tbody>
                </table>
                <?php
                $page=0;
                echo '<ul class="pagination">
						';
                while($page++<$total_page){
                    echo '<li><a href="'.$_SERVER['PHP_SELF'].'?type=1&&id3='.$page.'">'.$page.'</a></li>';
                }
                echo '</ul>';
                ?>
            <!-- </div> -->
        </div>
    </div>

    <div class="tab-pane fade" id="second">
        <form class="form-horizontal" role="form" action="member_add.php" method="post">
            <div class="form-group">
                <label for="id" class="col-sm-2 control-label">职工号</label>
                <div class="col-sm-10">
                    <input type="text" style="width:30%"; class="form-control" id="id" name="id" placeholder="请输入职工号">
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">姓名</label>
                <div class="col-sm-10">
                    <input type="text" style="width:30%"; class="form-control" id="name" name="name" placeholder="请输入姓名">
                </div>
            </div>
            <div class="form-group">
                <label for="pwd" class="col-sm-2 control-label">密码</label>
                <div class="col-sm-10">
                    <input type="text" style="width:30%"; class="form-control" id="pwd" name="pwd" placeholder="请输入密码">
                </div>
            </div>
            <div class="form-group">
                <label for="branch" class="col-sm-2 control-label">部门</label>
                <div class="col-sm-10">
                    <select name="branch" id="branch" style="width:30%"; class="form-control">
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
                        <option value="职员">职员</option>
                        <option value="经理">经理</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="sex" class="col-sm-2 control-label">性别</label>
                <div class="col-sm-10">
                    <select name="sex" id="sex" style="width:30%"; class="form-control">
                        <option value="男">男</option>
                        <option value="女">女</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for=tel" class="col-sm-2 control-label">电话</label>
                <div class="col-sm-10">
                    <input type="text" style="width:30%"; class="form-control" id="tel" name="tel" placeholder="请输入电话">
                </div>
            </div>
            <div class="form-group">
                <label for="address" class="col-sm-2 control-label">地址</label>
                <div class="col-sm-10">
                    <input type="text" style="width:30%"; class="form-control" id="address" name="address" placeholder="请输入地址">
                </div>
            </div>
            <div class="form-group">
                <label for="foundtime" class="col-sm-2 control-label">入职时间</label>
                <div class="col-sm-10">
                    <input type="text" style="width:30%"; class="form-control" id="foundtime" name="foundtime" placeholder="请输入入职时间">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <input name = "submit" type = "submit" id = "submit" class="btn btn-default" value = "添加">
                </div>
            </div>
        </form>
    </div>

    <div class="tab-pane fade" id="third">
        <form class="form-horizontal" role="form" action="member_modify.php" method="post" target="_blank">
            <div class="form-group">
                <label for="id" class="col-sm-2 control-label">职工号</label>
                <div class="col-sm-10">
                    <input type="text" style="width:30%"; class="form-control" id="id" name="id" placeholder="请输入职工号">
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">姓名</label>
                <div class="col-sm-10">
                    <input type="text" style="width:30%"; class="form-control" id="name" name="name" placeholder="请输入姓名">
                </div>
            </div>
            <div class="form-group">
                <label for="pwd" class="col-sm-2 control-label">密码</label>
                <div class="col-sm-10">
                    <input type="text" style="width:30%"; class="form-control" id="pwd" name="pwd" placeholder="请输入密码">
                </div>
            </div>
            <div class="form-group">
                <label for="branch" class="col-sm-2 control-label">部门</label>
                <div class="col-sm-10">
                    <select name="branch" id="branch" style="width:30%"; class="form-control">
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
                        <option value="职员">职员</option>
                        <option value="经理">经理</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="sex" class="col-sm-2 control-label">性别</label>
                <div class="col-sm-10">
                    <select name="sex" id="sex" style="width:30%"; class="form-control">
                        <option value="男">男</option>
                        <option value="女">女</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for=tel" class="col-sm-2 control-label">电话</label>
                <div class="col-sm-10">
                    <input type="text" style="width:30%"; class="form-control" id="tel" name="tel" placeholder="请输入电话">
                </div>
            </div>
            <div class="form-group">
                <label for="address" class="col-sm-2 control-label">地址</label>
                <div class="col-sm-10">
                    <input type="text" style="width:30%"; class="form-control" id="address" name="address" placeholder="请输入地址">
                </div>
            </div>
            <div class="form-group">
                <label for="foundtime" class="col-sm-2 control-label">入职时间</label>
                <div class="col-sm-10">
                    <input type="text" style="width:30%"; class="form-control" id="foundtime" name="foundtime" placeholder="请输入入职时间">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <input name = "submit" type = "submit" id = "submit" class="btn btn-default" value = "查找">
                </div>
            </div>
        </form>


    </div>
  
</div>
</body>

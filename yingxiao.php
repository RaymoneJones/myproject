<?php
session_start();
include("conn/conn.php");
?>
<link href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<script src="http://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<ul id="myTab" class="nav nav-tabs">
    <li class="active"><a href="#first" data-toggle="tab">部门</a></li>
    <li><a href="#second" data-toggle="tab">订单</a></li>
    <li><a href="#third" data-toggle="tab">活动</a></li>
    <li><a href="#forth" data-toggle="tab">产品</a></li>
</ul>
<?php
if(isset($_GET["type"])){ //判断所需要的参数是否存在
    if($_GET["type"]==2){
        echo '<script>$(function () {$("#myTab  li:eq(1) a").tab("show");})</script>';
    }else if($_GET["type"]==22){
        echo '<script>$(function () {$("#myTab  li:eq(1) a").tab("show");$("#myOrder  li:eq(1) a").tab("show");})</script>';
    }else if($_GET["type"]==23){
        echo '<script>$(function () {$("#myTab  li:eq(1) a").tab("show");$("#myOrder  li:eq(2) a").tab("show");})</script>';
    }else if($_GET["type"]==24){
        echo '<script>$(function () {$("#myTab  li:eq(1) a").tab("show");$("#myOrder  li:eq(3) a").tab("show");})</script>';
    }else if($_GET["type"]==25){
        echo '<script>$(function () {$("#myTab  li:eq(1) a").tab("show");$("#myOrder  li:eq(4) a").tab("show");})</script>';
    }else if($_GET["type"]==26){
        echo '<script>$(function () {$("#myTab  li:eq(1) a").tab("show");$("#myOrder  li:eq(5) a").tab("show");})</script>';
    }

}


?>
<div id="myTabContent" class="tab-content">
    <div class="tab-pane fade in active" id="first">
        <div>
            <h2>部门简介</h2>
            <p>营销部门负责对公司产品价值实现过程中各销售环节实行管理、监督、协调、服务，主要职责
                是制定营销战略及实施的策略，包括资源的调配，人员的分工及激励，客户的关系协调，另
                外可能还有一部分技术的支持。制定具体的实施细则，包括区域的划分，营销人员的配置，
                公司相应资源的调配，如资金、人员、技术服务、售后维护等；再有一部分就是可能也是贵公
                司营销部的主要职责，针对不同客户制定实施方案，主要是技术方面的，比如制定seo工作流
                程，考核方案，用户满意度调查，售后服务等。</p>
        </div>
        <div>
            <h2>成员信息</h2>
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
                for($i=0;$i<$k;$i++){
                    echo '<tr><td>'. @$row[$now*$k-$k+$i]['user_id'] .'</td><td>'. @$row[$now*$k-$k+$i]['user_name'] .'</td></tr>';
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

        </div>
    </div>

    <div class="tab-pane fade" id="second">
        <ul id="myOrder" class="nav nav-tabs">
            <li class="active"><a href="#first_s" data-toggle="tab">全部</a></li>
            <li><a href="#second_s" data-toggle="tab">已确定</a></li>
            <li><a href="#third_s" data-toggle="tab">待发货</a></li>
            <li><a href="#forth_s" data-toggle="tab">待确定</a></li>
            <li><a href="#fifth_s" data-toggle="tab">个人处理</a></li>
            <li><a href="#sixth_s" data-toggle="tab">新订单</a></li>
        </ul>
        <div id="myTabContent2" class="tab-content">
            <div class="tab-pane fade in active" id="first_s">
                <table class="table">
                    <thead>
                    <tr>
                        <th>订单号</th><th>产品</th><th>付款日期</th><th>状态</th><th>负责人</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $j=9;
                    $sql2="select * from tb_order";
                    $row2=$conne1->getRowsArray($sql2);
                    $ber2=$conne1->getRowsNum($sql2);
                    $total_page2=ceil($ber2/$j);
                    if(isset($_GET["id2"])){ //判断所需要的参数是否存在
                        $now2 = $_GET['id2'];
                    } else{
                        $now2=1;
                    }
                    for($i=0;$i<$j;$i++){
                        echo '<tr><td>'. $row2[$now2*$j-$j+$i]['id'] .'</td><td>'. $row2[$now2*$j-$j+$i]['product']
                            .'</td><td>'. $row2[$now2*$j-$j+$i]['ordertime'] .'</td><td>'. $row2[$now2*$j-$j+$i]['state']
                            .'</td><td>'. $row2[$now2*$j-$j+$i]['charge'] .'</td></tr>';
                    }

                    ?>
                    </tbody>
                </table>
                <?php
                $page=0;
                echo '<ul class="pagination">
                                   ';
                while($page++<$total_page2){
                    echo '<li><a href="'.$_SERVER['PHP_SELF'].'?type=2&&id2='.$page.'">'.$page.'</a></li>';
                }
                echo '</ul>';
                ?>

            </div>
            <div class="tab-pane fade" id="second_s">
                <table class="table">
                    <thead>
                    <tr>
                        <th>订单号</th><th>产品</th><th>付款日期</th><th>状态</th><th>负责人</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    for($i=0;$i<$ber2;$i++){
                        if($row2[$i]['state']=='已确定'){
                            $row22[]=$row2[$i];
                        }
                    }
                    $ber22=count($row22);
                    $total_page22=ceil($ber22/$j);
                    if(isset($_GET["id22"])){ //判断所需要的参数是否存在
                        $now22 = $_GET['id22'];
                    } else{
                        $now22=1;
                    }
                    for($i=0;$i<$j;$i++){
                        echo '<tr><td>'. $row22[$now22*$j-$j+$i]['id'] .'</td><td>'. $row22[$now22*$j-$j+$i]['product']
                            .'</td><td>'. $row22[$now22*$j-$j+$i]['ordertime'] .'</td><td>'. $row22[$now22*$j-$j+$i]['state']
                            .'</td><td>'. $row22[$now22*$j-$j+$i]['charge'] .'</td></tr>';
                    }

                    ?>
                    </tbody>
                </table>
                <?php
                $page=0;
                echo '<ul class="pagination">
                                   ';
                while($page++<$total_page22){
                    echo '<li><a href="'.$_SERVER['PHP_SELF'].'?type=22&&id22='.$page.'">'.$page.'</a></li>';
                }
                echo '</ul>';
                ?>



            </div>
            <div class="tab-pane fade" id="third_s">
                <table class="table">
                    <thead>
                    <tr>
                        <th>订单号</th><th>产品</th><th>付款日期</th><th>状态</th><th>负责人</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    for($i=0;$i<$ber2;$i++){
                        if($row2[$i]['state']=='待发货'){
                            $row23[]=$row2[$i];
                        }
                    }
                    $ber23=count($row23);
                    $total_page23=ceil($ber23/$j);
                    if(isset($_GET["id23"])){ //判断所需要的参数是否存在
                        $now23 = $_GET['id23'];
                    } else{
                        $now23=1;
                    }
                    for($i=0;$i<$j;$i++){
                        echo '<tr><td>'. $row23[$now23*$j-$j+$i]['id'] .'</td><td>'. $row23[$now23*$j-$j+$i]['product']
                            .'</td><td>'. $row23[$now23*$j-$j+$i]['ordertime'] .'</td><td>'. $row23[$now23*$j-$j+$i]['state']
                            .'</td><td>'. $row23[$now23*$j-$j+$i]['charge'] .'</td></tr>';
                    }

                    ?>
                    </tbody>
                </table>
                <?php
                $page=0;
                echo '<ul class="pagination">
                                   ';
                while($page++<$total_page23){
                    echo '<li><a href="'.$_SERVER['PHP_SELF'].'?type=23&&id23='.$page.'">'.$page.'</a></li>';
                }
                echo '</ul>';
                ?>



            </div>
            <div class="tab-pane fade" id="forth_s">
                <table class="table">
                    <thead>
                    <tr>
                        <th>订单号</th><th>产品</th><th>付款日期</th><th>状态</th><th>负责人</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    for($i=0;$i<$ber2;$i++){
                        if($row2[$i]['state']=='待确定'){
                            $row24[]=$row2[$i];
                        }
                    }
                    $ber24=count($row24);
                    $total_page24=ceil($ber24/$j);
                    if(isset($_GET["id24"])){ //判断所需要的参数是否存在
                        $now24 = $_GET['id24'];
                    } else{
                        $now24=1;
                    }
                    for($i=0;$i<$j;$i++){
                        echo '<tr><td>'. $row24[$now24*$j-$j+$i]['id'] .'</td><td>'. $row24[$now24*$j-$j+$i]['product']
                            .'</td><td>'. $row24[$now24*$j-$j+$i]['ordertime'] .'</td><td>'. $row24[$now24*$j-$j+$i]['state']
                            .'</td><td>'. $row24[$now24*$j-$j+$i]['charge'] .'</td></tr>';
                    }

                    ?>
                    </tbody>
                </table>
                <?php
                $page=0;
                echo '<ul class="pagination">
                                   ';
                while($page++<$total_page24){
                    echo '<li><a href="'.$_SERVER['PHP_SELF'].'?type=24&&id24='.$page.'">'.$page.'</a></li>';
                }
                echo '</ul>';
                ?>



            </div>
            <div class="tab-pane fade" id="fifth_s">
                <table class="table">
                    <thead>
                    <tr>
                        <th>订单号</th><th>产品</th><th>付款日期</th><th>状态</th><th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    for($i=0;$i<$ber2;$i++){
                        if(($row2[$i]['state']=='待确定'||$row2[$i]['state']=='待发货')&&$row2[$i]['charge']==$_SESSION["username"]){
                            $row25[]=$row2[$i];
                        }
                    }
                    $ber25=count($row25);
                    $total_page25=ceil($ber25/$j);
                    if(isset($_GET["id25"])){ //判断所需要的参数是否存在
                        $now25 = $_GET['id25'];
                    } else{
                        $now25=1;
                    }
                    for($i=0;$i<$j;$i++){
                        echo '<tr><td>'. $row25[$now25*$j-$j+$i]['id'] .'</td><td>'. $row25[$now25*$j-$j+$i]['product']
                            .'</td><td>'. $row25[$now25*$j-$j+$i]['ordertime'] .'</td><td>'. $row25[$now25*$j-$j+$i]['state']
                            .'</td><td>'. $row25[$now25*$j-$j+$i]['charge'] .'</td></tr>';
                    }

                    ?>
                    </tbody>
                </table>
                <?php
                $page=0;
                echo '<ul class="pagination">
                                   ';
                while($page++<$total_page25){
                    echo '<li><a href="'.$_SERVER['PHP_SELF'].'?type=25&&id25='.$page.'">'.$page.'</a></li>';
                }
                echo '</ul>';
                ?>



            </div>
            <div class="tab-pane fade" id="sixth_s">
                <h1>新订单</h1>
                <form id="order-form" action="order.php" role="form" method="post">
                    <div class="form-group">
                        <label for="orderid">订单号</label>
                        <input type="text" class="form-control" id="orderid"  name="orderid"
                               placeholder="请输入订单号">
                    </div>
                    <div class="form-group">
                        <label for="product">产品</label>
                        <input type="text" class="form-control" id="product" name="product"
                               placeholder="请输入产品名称">
                    </div>
                    <div class="form-group">
                        <label for="ordertime">付款日期</label>
                        <input type="text" class="form-control" id="ordertime" name="ordertime"
                               placeholder="请输入付款日期">
                    </div>
                    <button id="order" type="submit" class="btn btn-default">提交</button>
                </form>

            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="third">
        <h1>活动介绍</h1>
    </div>
    <div class="tab-pane fade" id="forth">
        <h1>产品介绍</h1>
    </div>

</div>
<script>
    $("#order").click(function(){

        formsub2();
    });
    function formsub2(){
        if($("#orderid").val() == ""){
            alert("订单号不能为空!");

        }else if($("#product").val() ==""){
            alert("产品名称不能为空!");
        }else{
            $("#order-form").submit();
        }
    }
</script>


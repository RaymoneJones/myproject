<?php
session_start();
include("conn/conn.php");
?>
<link href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<script src="http://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<ul id="myTab" class="nav nav-tabs">
    <li class="active"><a href="#first" data-toggle="tab">部门</a></li>
    <li><a href="#second" data-toggle="tab">办公用品</a></li>
    <li><a href="#third" data-toggle="tab">申请</a></li>
    <li><a href="#forth" data-toggle="tab">报销</a></li>
    <li><a href="#fifth" data-toggle="tab">公寓</a></li>
    <li><a href="#sixth" data-toggle="tab">会议</a></li>
    <li><a href="#seventh" data-toggle="tab">档案</a></li>
    <li><a href="#eighth" data-toggle="tab">其他</a></li>
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
    <!--    部门begin-->
    <div class="tab-pane fade in active" id="first">
        <div>
            <h2>部门简介</h2>
            <p>主要从事人事档案管理；宿舍房间，床位管理，宿舍物品租借管理，宿舍水电表记录及水电费的计算等；
                办公用品管理，档案管理，印信管理，资产管理，车辆管理，办公秩序及行为管理，前台管理，电话管理，
                计算机管理，打印室、复印室管理，环保安全健康，员工培训，会议管理，公司物品租借，员工借贷款，
                出差管理，差费报销，内部通知及公司访客记录等。固定资产管理，图书管理。</p>
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
                $k=3;
                $sql="select * from tb_user where user_branch='后勤'";
                $row=$conne->getRowsArray($sql);
                $ber=$conne->getRowsNum($sql);
                $total_page=ceil($ber/$k);
                if(isset($_GET["id"])){ //判断所需要的参数是否存在
                    $now = $_GET['id'];

                } else{
                    $now=1;
                }
                for($i=0;$i<$k;$i++){
                    echo '<tr><td>'. $row[$now*$k-$k+$i]['user_id'] .'</td><td>'. $row[$now*$k-$k+$i]['user_name'] .'</td></tr>';
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

<!--    办公用品-->
    <div class="tab-pane fade" id="second">
        <ul id="myOrder" class="nav nav-tabs">
            <li class="active"><a href="#second1" data-toggle="tab">全部</a></li>
            <li><a href="#second2" data-toggle="tab">计算机</a></li>
            <li><a href="#second3" data-toggle="tab">打印机</a></li>
            <li><a href="#second4" data-toggle="tab">复印机</a></li>
            <li><a href="#second5" data-toggle="tab">车辆</a></li>
            <li><a href="#second6" data-toggle="tab">消耗品</a></li>
        </ul>
        <div id="myTabContent2" class="tab-content">
            <div class="tab-pane fade in active" id="second1">
                <table class="table">
                    <thead>
                    <tr>
                        <th>编号</th><th>物品名称</th><th>购入日期</th><th>状态</th><th>负责人</th><th>类别</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $con=mysqli_connect("localhost","root","123456","test");
                    $sql="select * from tb_office";
                    $result=mysqli_query($con,$sql);
                    $num=10;
                    if($num--){
                        while($row=$result->fetch_assoc()){
                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
                                    <td>'.$row['PIC'].'</td><td>'.$row['class'].'</td>';
                        }
                    }

                    ?>

                    </tbody>
                </table>


            </div>
            <div class="tab-pane fade" id="second2">
                <table class="table">
                    <thead>
                    <tr>
                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql="select no,name,date,state,PIC from tb_office where class='计算机'";
                    $result=mysqli_query($con,$sql);
                    $num=10;
                    if($num--){
                        while($row=$result->fetch_assoc()){
                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
                                    <td>'.$row['PIC'].'</td>';
                        }
                    }

                    ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="second3">
                <table class="table">
                    <thead>
                    <tr>
                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql="select no,name,date,state,PIC from tb_office where class='打印机'";
                    $result=mysqli_query($con,$sql);
                    $num=10;
                    if($num--){
                        while($row=$result->fetch_assoc()){
                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
                                    <td>'.$row['PIC'].'</td>';
                        }
                    }

                    ?>
                    </tbody>
                </table>



            </div>
            <div class="tab-pane fade" id="second4">
                <table class="table">
                    <thead>
                    <tr>
                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql="select no,name,date,state,PIC from tb_office where class='复印机'";
                    $result=mysqli_query($con,$sql);
                    $num=10;
                    if($num--){
                        while($row=$result->fetch_assoc()){
                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
                                    <td>'.$row['PIC'].'</td>';
                        }
                    }

                    ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="second5">
                <table class="table">
                    <thead>
                    <tr>
                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql="select no,name,date,state,PIC from tb_office where class='车辆'";
                    $result=mysqli_query($con,$sql);
                    $num=10;
                    if($num--){
                        while($row=$result->fetch_assoc()){
                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
                                    <td>'.$row['PIC'].'</td>';
                        }
                    }

                    ?>
                    </tbody>
                </table>

            </div>
            <div class="tab-pane fade" id="second6">
                <table class="table">
                    <thead>
                    <tr>
                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql="select no,name,date,state,PIC from tb_office where class='消耗品'";
                    $result=mysqli_query($con,$sql);
                    $num=10;
                    if($num--){
                        while($row=$result->fetch_assoc()){
                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
                                    <td>'.$row['PIC'].'</td>';
                        }
                    }

                    ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

<!--    申请-->
    <div class="tab-pane fade" id="third">
        <ul id="myOrder" class="nav nav-tabs">
            <li class="active"><a href="#second1" data-toggle="tab">全部</a></li>
            <li><a href="#second2" data-toggle="tab">计算机</a></li>
            <li><a href="#second3" data-toggle="tab">打印机</a></li>
            <li><a href="#second4" data-toggle="tab">复印机</a></li>
            <li><a href="#second5" data-toggle="tab">车辆</a></li>
            <li><a href="#second6" data-toggle="tab">消耗品</a></li>
        </ul>
        <div id="myTabContent2" class="tab-content">
            <div class="tab-pane fade in active" id="second1">
                <table class="table">
                    <thead>
                    <tr>
                        <th>编号</th><th>物品名称</th><th>购入日期</th><th>状态</th><th>负责人</th><th>类别</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $con=mysqli_connect("localhost","root","123456","test");
                    $sql="select * from tb_office";
                    $result=mysqli_query($con,$sql);
                    $num=10;
                    if($num--){
                        while($row=$result->fetch_assoc()){
                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
                                    <td>'.$row['PIC'].'</td><td>'.$row['class'].'</td>';
                        }
                    }

                    ?>

                    </tbody>
                </table>


            </div>
            <div class="tab-pane fade" id="second2">
                <table class="table">
                    <thead>
                    <tr>
                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql="select no,name,date,state,PIC from tb_office where class='计算机'";
                    $result=mysqli_query($con,$sql);
                    $num=10;
                    if($num--){
                        while($row=$result->fetch_assoc()){
                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
                                    <td>'.$row['PIC'].'</td>';
                        }
                    }

                    ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="second3">
                <table class="table">
                    <thead>
                    <tr>
                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql="select no,name,date,state,PIC from tb_office where class='打印机'";
                    $result=mysqli_query($con,$sql);
                    $num=10;
                    if($num--){
                        while($row=$result->fetch_assoc()){
                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
                                    <td>'.$row['PIC'].'</td>';
                        }
                    }

                    ?>
                    </tbody>
                </table>



            </div>
            <div class="tab-pane fade" id="second4">
                <table class="table">
                    <thead>
                    <tr>
                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql="select no,name,date,state,PIC from tb_office where class='复印机'";
                    $result=mysqli_query($con,$sql);
                    $num=10;
                    if($num--){
                        while($row=$result->fetch_assoc()){
                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
                                    <td>'.$row['PIC'].'</td>';
                        }
                    }

                    ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="second5">
                <table class="table">
                    <thead>
                    <tr>
                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql="select no,name,date,state,PIC from tb_office where class='车辆'";
                    $result=mysqli_query($con,$sql);
                    $num=10;
                    if($num--){
                        while($row=$result->fetch_assoc()){
                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
                                    <td>'.$row['PIC'].'</td>';
                        }
                    }

                    ?>
                    </tbody>
                </table>

            </div>
            <div class="tab-pane fade" id="second6">
                <table class="table">
                    <thead>
                    <tr>
                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql="select no,name,date,state,PIC from tb_office where class='消耗品'";
                    $result=mysqli_query($con,$sql);
                    $num=10;
                    if($num--){
                        while($row=$result->fetch_assoc()){
                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
                                    <td>'.$row['PIC'].'</td>';
                        }
                    }

                    ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

<!--    报销-->
    <div class="tab-pane fade" id="forth">
        <ul id="myOrder" class="nav nav-tabs">
            <li class="active"><a href="#second1" data-toggle="tab">全部</a></li>
            <li><a href="#second2" data-toggle="tab">计算机</a></li>
            <li><a href="#second3" data-toggle="tab">打印机</a></li>
            <li><a href="#second4" data-toggle="tab">复印机</a></li>
            <li><a href="#second5" data-toggle="tab">车辆</a></li>
            <li><a href="#second6" data-toggle="tab">消耗品</a></li>
        </ul>
        <div id="myTabContent2" class="tab-content">
            <div class="tab-pane fade in active" id="second1">
                <table class="table">
                    <thead>
                    <tr>
                        <th>编号</th><th>物品名称</th><th>购入日期</th><th>状态</th><th>负责人</th><th>类别</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $con=mysqli_connect("localhost","root","123456","test");
                    $sql="select * from tb_office";
                    $result=mysqli_query($con,$sql);
                    $num=10;
                    if($num--){
                        while($row=$result->fetch_assoc()){
                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
                                    <td>'.$row['PIC'].'</td><td>'.$row['class'].'</td>';
                        }
                    }

                    ?>

                    </tbody>
                </table>


            </div>
            <div class="tab-pane fade" id="second2">
                <table class="table">
                    <thead>
                    <tr>
                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql="select no,name,date,state,PIC from tb_office where class='计算机'";
                    $result=mysqli_query($con,$sql);
                    $num=10;
                    if($num--){
                        while($row=$result->fetch_assoc()){
                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
                                    <td>'.$row['PIC'].'</td>';
                        }
                    }

                    ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="second3">
                <table class="table">
                    <thead>
                    <tr>
                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql="select no,name,date,state,PIC from tb_office where class='打印机'";
                    $result=mysqli_query($con,$sql);
                    $num=10;
                    if($num--){
                        while($row=$result->fetch_assoc()){
                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
                                    <td>'.$row['PIC'].'</td>';
                        }
                    }

                    ?>
                    </tbody>
                </table>



            </div>
            <div class="tab-pane fade" id="second4">
                <table class="table">
                    <thead>
                    <tr>
                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql="select no,name,date,state,PIC from tb_office where class='复印机'";
                    $result=mysqli_query($con,$sql);
                    $num=10;
                    if($num--){
                        while($row=$result->fetch_assoc()){
                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
                                    <td>'.$row['PIC'].'</td>';
                        }
                    }

                    ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="second5">
                <table class="table">
                    <thead>
                    <tr>
                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql="select no,name,date,state,PIC from tb_office where class='车辆'";
                    $result=mysqli_query($con,$sql);
                    $num=10;
                    if($num--){
                        while($row=$result->fetch_assoc()){
                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
                                    <td>'.$row['PIC'].'</td>';
                        }
                    }

                    ?>
                    </tbody>
                </table>

            </div>
            <div class="tab-pane fade" id="second6">
                <table class="table">
                    <thead>
                    <tr>
                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql="select no,name,date,state,PIC from tb_office where class='消耗品'";
                    $result=mysqli_query($con,$sql);
                    $num=10;
                    if($num--){
                        while($row=$result->fetch_assoc()){
                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
                                    <td>'.$row['PIC'].'</td>';
                        }
                    }

                    ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

<!--    公寓-->
    <div class="tab-pane fade" id="fifth">
        <ul id="myOrder" class="nav nav-tabs">
            <li class="active"><a href="#second1" data-toggle="tab">全部</a></li>
            <li><a href="#second2" data-toggle="tab">计算机</a></li>
            <li><a href="#second3" data-toggle="tab">打印机</a></li>
            <li><a href="#second4" data-toggle="tab">复印机</a></li>
            <li><a href="#second5" data-toggle="tab">车辆</a></li>
            <li><a href="#second6" data-toggle="tab">消耗品</a></li>
        </ul>
        <div id="myTabContent2" class="tab-content">
            <div class="tab-pane fade in active" id="second1">
                <table class="table">
                    <thead>
                    <tr>
                        <th>编号</th><th>物品名称</th><th>购入日期</th><th>状态</th><th>负责人</th><th>类别</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $con=mysqli_connect("localhost","root","123456","test");
                    $sql="select * from tb_office";
                    $result=mysqli_query($con,$sql);
                    $num=10;
                    if($num--){
                        while($row=$result->fetch_assoc()){
                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
                                    <td>'.$row['PIC'].'</td><td>'.$row['class'].'</td>';
                        }
                    }

                    ?>

                    </tbody>
                </table>


            </div>
            <div class="tab-pane fade" id="second2">
                <table class="table">
                    <thead>
                    <tr>
                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql="select no,name,date,state,PIC from tb_office where class='计算机'";
                    $result=mysqli_query($con,$sql);
                    $num=10;
                    if($num--){
                        while($row=$result->fetch_assoc()){
                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
                                    <td>'.$row['PIC'].'</td>';
                        }
                    }

                    ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="second3">
                <table class="table">
                    <thead>
                    <tr>
                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql="select no,name,date,state,PIC from tb_office where class='打印机'";
                    $result=mysqli_query($con,$sql);
                    $num=10;
                    if($num--){
                        while($row=$result->fetch_assoc()){
                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
                                    <td>'.$row['PIC'].'</td>';
                        }
                    }

                    ?>
                    </tbody>
                </table>



            </div>
            <div class="tab-pane fade" id="second4">
                <table class="table">
                    <thead>
                    <tr>
                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql="select no,name,date,state,PIC from tb_office where class='复印机'";
                    $result=mysqli_query($con,$sql);
                    $num=10;
                    if($num--){
                        while($row=$result->fetch_assoc()){
                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
                                    <td>'.$row['PIC'].'</td>';
                        }
                    }

                    ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="second5">
                <table class="table">
                    <thead>
                    <tr>
                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql="select no,name,date,state,PIC from tb_office where class='车辆'";
                    $result=mysqli_query($con,$sql);
                    $num=10;
                    if($num--){
                        while($row=$result->fetch_assoc()){
                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
                                    <td>'.$row['PIC'].'</td>';
                        }
                    }

                    ?>
                    </tbody>
                </table>

            </div>
            <div class="tab-pane fade" id="second6">
                <table class="table">
                    <thead>
                    <tr>
                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql="select no,name,date,state,PIC from tb_office where class='消耗品'";
                    $result=mysqli_query($con,$sql);
                    $num=10;
                    if($num--){
                        while($row=$result->fetch_assoc()){
                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
                                    <td>'.$row['PIC'].'</td>';
                        }
                    }

                    ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

<!--    会议-->
    <div class="tab-pane fade" id="sixth">
        <ul id="myOrder" class="nav nav-tabs">
            <li class="active"><a href="#second1" data-toggle="tab">全部</a></li>
            <li><a href="#second2" data-toggle="tab">计算机</a></li>
            <li><a href="#second3" data-toggle="tab">打印机</a></li>
            <li><a href="#second4" data-toggle="tab">复印机</a></li>
            <li><a href="#second5" data-toggle="tab">车辆</a></li>
            <li><a href="#second6" data-toggle="tab">消耗品</a></li>
        </ul>
        <div id="myTabContent2" class="tab-content">
            <div class="tab-pane fade in active" id="second1">
                <table class="table">
                    <thead>
                    <tr>
                        <th>编号</th><th>物品名称</th><th>购入日期</th><th>状态</th><th>负责人</th><th>类别</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $con=mysqli_connect("localhost","root","123456","test");
                    $sql="select * from tb_office";
                    $result=mysqli_query($con,$sql);
                    $num=10;
                    if($num--){
                        while($row=$result->fetch_assoc()){
                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
                                    <td>'.$row['PIC'].'</td><td>'.$row['class'].'</td>';
                        }
                    }

                    ?>

                    </tbody>
                </table>


            </div>
            <div class="tab-pane fade" id="second2">
                <table class="table">
                    <thead>
                    <tr>
                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql="select no,name,date,state,PIC from tb_office where class='计算机'";
                    $result=mysqli_query($con,$sql);
                    $num=10;
                    if($num--){
                        while($row=$result->fetch_assoc()){
                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
                                    <td>'.$row['PIC'].'</td>';
                        }
                    }

                    ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="second3">
                <table class="table">
                    <thead>
                    <tr>
                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql="select no,name,date,state,PIC from tb_office where class='打印机'";
                    $result=mysqli_query($con,$sql);
                    $num=10;
                    if($num--){
                        while($row=$result->fetch_assoc()){
                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
                                    <td>'.$row['PIC'].'</td>';
                        }
                    }

                    ?>
                    </tbody>
                </table>



            </div>
            <div class="tab-pane fade" id="second4">
                <table class="table">
                    <thead>
                    <tr>
                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql="select no,name,date,state,PIC from tb_office where class='复印机'";
                    $result=mysqli_query($con,$sql);
                    $num=10;
                    if($num--){
                        while($row=$result->fetch_assoc()){
                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
                                    <td>'.$row['PIC'].'</td>';
                        }
                    }

                    ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="second5">
                <table class="table">
                    <thead>
                    <tr>
                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql="select no,name,date,state,PIC from tb_office where class='车辆'";
                    $result=mysqli_query($con,$sql);
                    $num=10;
                    if($num--){
                        while($row=$result->fetch_assoc()){
                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
                                    <td>'.$row['PIC'].'</td>';
                        }
                    }

                    ?>
                    </tbody>
                </table>

            </div>
            <div class="tab-pane fade" id="second6">
                <table class="table">
                    <thead>
                    <tr>
                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql="select no,name,date,state,PIC from tb_office where class='消耗品'";
                    $result=mysqli_query($con,$sql);
                    $num=10;
                    if($num--){
                        while($row=$result->fetch_assoc()){
                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
                                    <td>'.$row['PIC'].'</td>';
                        }
                    }

                    ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

<!--    档案-->
    <div class="tab-pane fade" id="seventh">
        <ul id="myOrder" class="nav nav-tabs">
            <li class="active"><a href="#second1" data-toggle="tab">全部</a></li>
            <li><a href="#second2" data-toggle="tab">计算机</a></li>
            <li><a href="#second3" data-toggle="tab">打印机</a></li>
            <li><a href="#second4" data-toggle="tab">复印机</a></li>
            <li><a href="#second5" data-toggle="tab">车辆</a></li>
            <li><a href="#second6" data-toggle="tab">消耗品</a></li>
        </ul>
        <div id="myTabContent2" class="tab-content">
            <div class="tab-pane fade in active" id="second1">
                <table class="table">
                    <thead>
                    <tr>
                        <th>编号</th><th>物品名称</th><th>购入日期</th><th>状态</th><th>负责人</th><th>类别</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $con=mysqli_connect("localhost","root","123456","test");
                    $sql="select * from tb_office";
                    $result=mysqli_query($con,$sql);
                    $num=10;
                    if($num--){
                        while($row=$result->fetch_assoc()){
                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
                                    <td>'.$row['PIC'].'</td><td>'.$row['class'].'</td>';
                        }
                    }

                    ?>

                    </tbody>
                </table>


            </div>
            <div class="tab-pane fade" id="second2">
                <table class="table">
                    <thead>
                    <tr>
                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql="select no,name,date,state,PIC from tb_office where class='计算机'";
                    $result=mysqli_query($con,$sql);
                    $num=10;
                    if($num--){
                        while($row=$result->fetch_assoc()){
                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
                                    <td>'.$row['PIC'].'</td>';
                        }
                    }

                    ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="second3">
                <table class="table">
                    <thead>
                    <tr>
                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql="select no,name,date,state,PIC from tb_office where class='打印机'";
                    $result=mysqli_query($con,$sql);
                    $num=10;
                    if($num--){
                        while($row=$result->fetch_assoc()){
                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
                                    <td>'.$row['PIC'].'</td>';
                        }
                    }

                    ?>
                    </tbody>
                </table>



            </div>
            <div class="tab-pane fade" id="second4">
                <table class="table">
                    <thead>
                    <tr>
                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql="select no,name,date,state,PIC from tb_office where class='复印机'";
                    $result=mysqli_query($con,$sql);
                    $num=10;
                    if($num--){
                        while($row=$result->fetch_assoc()){
                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
                                    <td>'.$row['PIC'].'</td>';
                        }
                    }

                    ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="second5">
                <table class="table">
                    <thead>
                    <tr>
                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql="select no,name,date,state,PIC from tb_office where class='车辆'";
                    $result=mysqli_query($con,$sql);
                    $num=10;
                    if($num--){
                        while($row=$result->fetch_assoc()){
                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
                                    <td>'.$row['PIC'].'</td>';
                        }
                    }

                    ?>
                    </tbody>
                </table>

            </div>
            <div class="tab-pane fade" id="second6">
                <table class="table">
                    <thead>
                    <tr>
                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql="select no,name,date,state,PIC from tb_office where class='消耗品'";
                    $result=mysqli_query($con,$sql);
                    $num=10;
                    if($num--){
                        while($row=$result->fetch_assoc()){
                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
                                    <td>'.$row['PIC'].'</td>';
                        }
                    }

                    ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

<!--    其他-->
    <div class="tab-pane fade" id="eighth">
        <ul id="myOrder" class="nav nav-tabs">
            <li class="active"><a href="#second1" data-toggle="tab">全部</a></li>
            <li><a href="#second2" data-toggle="tab">计算机</a></li>
            <li><a href="#second3" data-toggle="tab">打印机</a></li>
            <li><a href="#second4" data-toggle="tab">复印机</a></li>
            <li><a href="#second5" data-toggle="tab">车辆</a></li>
            <li><a href="#second6" data-toggle="tab">消耗品</a></li>
        </ul>
        <div id="myTabContent2" class="tab-content">
            <div class="tab-pane fade in active" id="second1">
                <table class="table">
                    <thead>
                    <tr>
                        <th>编号</th><th>物品名称</th><th>购入日期</th><th>状态</th><th>负责人</th><th>类别</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $con=mysqli_connect("localhost","root","123456","test");
                    $sql="select * from tb_office";
                    $result=mysqli_query($con,$sql);
                    $num=10;
                    if($num--){
                        while($row=$result->fetch_assoc()){
                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
                                    <td>'.$row['PIC'].'</td><td>'.$row['class'].'</td>';
                        }
                    }

                    ?>

                    </tbody>
                </table>


            </div>
            <div class="tab-pane fade" id="second2">
                <table class="table">
                    <thead>
                    <tr>
                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql="select no,name,date,state,PIC from tb_office where class='计算机'";
                    $result=mysqli_query($con,$sql);
                    $num=10;
                    if($num--){
                        while($row=$result->fetch_assoc()){
                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
                                    <td>'.$row['PIC'].'</td>';
                        }
                    }

                    ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="second3">
                <table class="table">
                    <thead>
                    <tr>
                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql="select no,name,date,state,PIC from tb_office where class='打印机'";
                    $result=mysqli_query($con,$sql);
                    $num=10;
                    if($num--){
                        while($row=$result->fetch_assoc()){
                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
                                    <td>'.$row['PIC'].'</td>';
                        }
                    }

                    ?>
                    </tbody>
                </table>



            </div>
            <div class="tab-pane fade" id="second4">
                <table class="table">
                    <thead>
                    <tr>
                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql="select no,name,date,state,PIC from tb_office where class='复印机'";
                    $result=mysqli_query($con,$sql);
                    $num=10;
                    if($num--){
                        while($row=$result->fetch_assoc()){
                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
                                    <td>'.$row['PIC'].'</td>';
                        }
                    }

                    ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="second5">
                <table class="table">
                    <thead>
                    <tr>
                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql="select no,name,date,state,PIC from tb_office where class='车辆'";
                    $result=mysqli_query($con,$sql);
                    $num=10;
                    if($num--){
                        while($row=$result->fetch_assoc()){
                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
                                    <td>'.$row['PIC'].'</td>';
                        }
                    }

                    ?>
                    </tbody>
                </table>

            </div>
            <div class="tab-pane fade" id="second6">
                <table class="table">
                    <thead>
                    <tr>
                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql="select no,name,date,state,PIC from tb_office where class='消耗品'";
                    $result=mysqli_query($con,$sql);
                    $num=10;
                    if($num--){
                        while($row=$result->fetch_assoc()){
                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
                                    <td>'.$row['PIC'].'</td>';
                        }
                    }

                    ?>
                    </tbody>
                </table>

            </div>
        </div>
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


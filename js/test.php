<?php
//<!--    公寓-->
//    <div class="tab-pane fade" id="fifth">
//        <ul id="myOrder" class="nav nav-tabs">
//            <li class="active"><a href="#second1" data-toggle="tab">全部</a></li>
//            <li><a href="#second2" data-toggle="tab">计算机</a></li>
//            <li><a href="#second3" data-toggle="tab">打印机</a></li>
//            <li><a href="#second4" data-toggle="tab">复印机</a></li>
//            <li><a href="#second5" data-toggle="tab">车辆</a></li>
//            <li><a href="#second6" data-toggle="tab">消耗品</a></li>
//        </ul>
//        <div id="myTabContent2" class="tab-content">
//            <div class="tab-pane fade in active" id="second1">
//                <table class="table">
//                    <thead>
//                    <tr>
//                        <th>编号</th><th>物品名称</th><th>购入日期</th><th>状态</th><th>负责人</th><th>类别</th>
//                    </tr>
//                    </thead>
//                    <tbody>
//                    <?php
//                    $con=mysqli_connect("localhost","root","123456","test");
//                    $sql="select * from tb_office";
//                    $result=mysqli_query($con,$sql);
//                    $num=10;
//                    if($num--){
//                        while($row=$result->fetch_assoc()){
//                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
//                                    <td>'.$row['PIC'].'</td><td>'.$row['class'].'</td>';
//                        }
//                    }
//
//                    ?>
<!---->
<!--                    </tbody>-->
<!--                </table>-->
<!---->
<!---->
<!--            </div>-->
<!--            <div class="tab-pane fade" id="second2">-->
<!--                <table class="table">-->
<!--                    <thead>-->
<!--                    <tr>-->
<!--                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>-->
<!--                    </tr>-->
<!--                    </thead>-->
<!--                    <tbody>-->
<!--                    --><?php
//                    $sql="select no,name,date,state,PIC from tb_office where class='计算机'";
//                    $result=mysqli_query($con,$sql);
//                    $num=10;
//                    if($num--){
//                        while($row=$result->fetch_assoc()){
//                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
//                                    <td>'.$row['PIC'].'</td>';
//                        }
//                    }
//
//                    ?>
<!--                    </tbody>-->
<!--                </table>-->
<!--            </div>-->
<!--            <div class="tab-pane fade" id="second3">-->
<!--                <table class="table">-->
<!--                    <thead>-->
<!--                    <tr>-->
<!--                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>-->
<!--                    </tr>-->
<!--                    </thead>-->
<!--                    <tbody>-->
<!--                    --><?php
//                    $sql="select no,name,date,state,PIC from tb_office where class='打印机'";
//                    $result=mysqli_query($con,$sql);
//                    $num=10;
//                    if($num--){
//                        while($row=$result->fetch_assoc()){
//                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
//                                    <td>'.$row['PIC'].'</td>';
//                        }
//                    }
//
//                    ?>
<!--                    </tbody>-->
<!--                </table>-->
<!---->
<!---->
<!---->
<!--            </div>-->
<!--            <div class="tab-pane fade" id="second4">-->
<!--                <table class="table">-->
<!--                    <thead>-->
<!--                    <tr>-->
<!--                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>-->
<!--                    </tr>-->
<!--                    </thead>-->
<!--                    <tbody>-->
<!--                    --><?php
//                    $sql="select no,name,date,state,PIC from tb_office where class='复印机'";
//                    $result=mysqli_query($con,$sql);
//                    $num=10;
//                    if($num--){
//                        while($row=$result->fetch_assoc()){
//                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
//                                    <td>'.$row['PIC'].'</td>';
//                        }
//                    }
//
//                    ?>
<!--                    </tbody>-->
<!--                </table>-->
<!--            </div>-->
<!--            <div class="tab-pane fade" id="second5">-->
<!--                <table class="table">-->
<!--                    <thead>-->
<!--                    <tr>-->
<!--                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>-->
<!--                    </tr>-->
<!--                    </thead>-->
<!--                    <tbody>-->
<!--                    --><?php
//                    $sql="select no,name,date,state,PIC from tb_office where class='车辆'";
//                    $result=mysqli_query($con,$sql);
//                    $num=10;
//                    if($num--){
//                        while($row=$result->fetch_assoc()){
//                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
//                                    <td>'.$row['PIC'].'</td>';
//                        }
//                    }
//
//                    ?>
<!--                    </tbody>-->
<!--                </table>-->
<!---->
<!--            </div>-->
<!--            <div class="tab-pane fade" id="second6">-->
<!--                <table class="table">-->
<!--                    <thead>-->
<!--                    <tr>-->
<!--                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>-->
<!--                    </tr>-->
<!--                    </thead>-->
<!--                    <tbody>-->
<!--                    --><?php
//                    $sql="select no,name,date,state,PIC from tb_office where class='消耗品'";
//                    $result=mysqli_query($con,$sql);
//                    $num=10;
//                    if($num--){
//                        while($row=$result->fetch_assoc()){
//                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
//                                    <td>'.$row['PIC'].'</td>';
//                        }
//                    }
//
//                    ?>
<!--                    </tbody>-->
<!--                </table>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--<!--    会议-->-->
<!--    <div class="tab-pane fade" id="sixth">-->
<!--        <ul id="myOrder" class="nav nav-tabs">-->
<!--            <li class="active"><a href="#second1" data-toggle="tab">全部</a></li>-->
<!--            <li><a href="#second2" data-toggle="tab">计算机</a></li>-->
<!--            <li><a href="#second3" data-toggle="tab">打印机</a></li>-->
<!--            <li><a href="#second4" data-toggle="tab">复印机</a></li>-->
<!--            <li><a href="#second5" data-toggle="tab">车辆</a></li>-->
<!--            <li><a href="#second6" data-toggle="tab">消耗品</a></li>-->
<!--        </ul>-->
<!--        <div id="myTabContent2" class="tab-content">-->
<!--            <div class="tab-pane fade in active" id="second1">-->
<!--                <table class="table">-->
<!--                    <thead>-->
<!--                    <tr>-->
<!--                        <th>编号</th><th>物品名称</th><th>购入日期</th><th>状态</th><th>负责人</th><th>类别</th>-->
<!--                    </tr>-->
<!--                    </thead>-->
<!--                    <tbody>-->
<!--                    --><?php
//                    $con=mysqli_connect("localhost","root","123456","test");
//                    $sql="select * from tb_office";
//                    $result=mysqli_query($con,$sql);
//                    $num=10;
//                    if($num--){
//                        while($row=$result->fetch_assoc()){
//                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
//                                    <td>'.$row['PIC'].'</td><td>'.$row['class'].'</td>';
//                        }
//                    }
//
//                    ?>
<!---->
<!--                    </tbody>-->
<!--                </table>-->
<!---->
<!---->
<!--            </div>-->
<!--            <div class="tab-pane fade" id="second2">-->
<!--                <table class="table">-->
<!--                    <thead>-->
<!--                    <tr>-->
<!--                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>-->
<!--                    </tr>-->
<!--                    </thead>-->
<!--                    <tbody>-->
<!--                    --><?php
//                    $sql="select no,name,date,state,PIC from tb_office where class='计算机'";
//                    $result=mysqli_query($con,$sql);
//                    $num=10;
//                    if($num--){
//                        while($row=$result->fetch_assoc()){
//                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
//                                    <td>'.$row['PIC'].'</td>';
//                        }
//                    }
//
//                    ?>
<!--                    </tbody>-->
<!--                </table>-->
<!--            </div>-->
<!--            <div class="tab-pane fade" id="second3">-->
<!--                <table class="table">-->
<!--                    <thead>-->
<!--                    <tr>-->
<!--                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>-->
<!--                    </tr>-->
<!--                    </thead>-->
<!--                    <tbody>-->
<!--                    --><?php
//                    $sql="select no,name,date,state,PIC from tb_office where class='打印机'";
//                    $result=mysqli_query($con,$sql);
//                    $num=10;
//                    if($num--){
//                        while($row=$result->fetch_assoc()){
//                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
//                                    <td>'.$row['PIC'].'</td>';
//                        }
//                    }
//
//                    ?>
<!--                    </tbody>-->
<!--                </table>-->
<!---->
<!---->
<!---->
<!--            </div>-->
<!--            <div class="tab-pane fade" id="second4">-->
<!--                <table class="table">-->
<!--                    <thead>-->
<!--                    <tr>-->
<!--                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>-->
<!--                    </tr>-->
<!--                    </thead>-->
<!--                    <tbody>-->
<!--                    --><?php
//                    $sql="select no,name,date,state,PIC from tb_office where class='复印机'";
//                    $result=mysqli_query($con,$sql);
//                    $num=10;
//                    if($num--){
//                        while($row=$result->fetch_assoc()){
//                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
//                                    <td>'.$row['PIC'].'</td>';
//                        }
//                    }
//
//                    ?>
<!--                    </tbody>-->
<!--                </table>-->
<!--            </div>-->
<!--            <div class="tab-pane fade" id="second5">-->
<!--                <table class="table">-->
<!--                    <thead>-->
<!--                    <tr>-->
<!--                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>-->
<!--                    </tr>-->
<!--                    </thead>-->
<!--                    <tbody>-->
<!--                    --><?php
//                    $sql="select no,name,date,state,PIC from tb_office where class='车辆'";
//                    $result=mysqli_query($con,$sql);
//                    $num=10;
//                    if($num--){
//                        while($row=$result->fetch_assoc()){
//                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
//                                    <td>'.$row['PIC'].'</td>';
//                        }
//                    }
//
//                    ?>
<!--                    </tbody>-->
<!--                </table>-->
<!---->
<!--            </div>-->
<!--            <div class="tab-pane fade" id="second6">-->
<!--                <table class="table">-->
<!--                    <thead>-->
<!--                    <tr>-->
<!--                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>-->
<!--                    </tr>-->
<!--                    </thead>-->
<!--                    <tbody>-->
<!--                    --><?php
//                    $sql="select no,name,date,state,PIC from tb_office where class='消耗品'";
//                    $result=mysqli_query($con,$sql);
//                    $num=10;
//                    if($num--){
//                        while($row=$result->fetch_assoc()){
//                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
//                                    <td>'.$row['PIC'].'</td>';
//                        }
//                    }
//
//                    ?>
<!--                    </tbody>-->
<!--                </table>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--<!--    档案-->-->
<!--    <div class="tab-pane fade" id="seventh">-->
<!--        <ul id="myOrder" class="nav nav-tabs">-->
<!--            <li class="active"><a href="#second1" data-toggle="tab">全部</a></li>-->
<!--            <li><a href="#second2" data-toggle="tab">计算机</a></li>-->
<!--            <li><a href="#second3" data-toggle="tab">打印机</a></li>-->
<!--            <li><a href="#second4" data-toggle="tab">复印机</a></li>-->
<!--            <li><a href="#second5" data-toggle="tab">车辆</a></li>-->
<!--            <li><a href="#second6" data-toggle="tab">消耗品</a></li>-->
<!--        </ul>-->
<!--        <div id="myTabContent2" class="tab-content">-->
<!--            <div class="tab-pane fade in active" id="second1">-->
<!--                <table class="table">-->
<!--                    <thead>-->
<!--                    <tr>-->
<!--                        <th>编号</th><th>物品名称</th><th>购入日期</th><th>状态</th><th>负责人</th><th>类别</th>-->
<!--                    </tr>-->
<!--                    </thead>-->
<!--                    <tbody>-->
<!--                    --><?php
//                    $con=mysqli_connect("localhost","root","123456","test");
//                    $sql="select * from tb_office";
//                    $result=mysqli_query($con,$sql);
//                    $num=10;
//                    if($num--){
//                        while($row=$result->fetch_assoc()){
//                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
//                                    <td>'.$row['PIC'].'</td><td>'.$row['class'].'</td>';
//                        }
//                    }
//
//                    ?>
<!---->
<!--                    </tbody>-->
<!--                </table>-->
<!---->
<!---->
<!--            </div>-->
<!--            <div class="tab-pane fade" id="second2">-->
<!--                <table class="table">-->
<!--                    <thead>-->
<!--                    <tr>-->
<!--                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>-->
<!--                    </tr>-->
<!--                    </thead>-->
<!--                    <tbody>-->
<!--                    --><?php
//                    $sql="select no,name,date,state,PIC from tb_office where class='计算机'";
//                    $result=mysqli_query($con,$sql);
//                    $num=10;
//                    if($num--){
//                        while($row=$result->fetch_assoc()){
//                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
//                                    <td>'.$row['PIC'].'</td>';
//                        }
//                    }
//
//                    ?>
<!--                    </tbody>-->
<!--                </table>-->
<!--            </div>-->
<!--            <div class="tab-pane fade" id="second3">-->
<!--                <table class="table">-->
<!--                    <thead>-->
<!--                    <tr>-->
<!--                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>-->
<!--                    </tr>-->
<!--                    </thead>-->
<!--                    <tbody>-->
<!--                    --><?php
//                    $sql="select no,name,date,state,PIC from tb_office where class='打印机'";
//                    $result=mysqli_query($con,$sql);
//                    $num=10;
//                    if($num--){
//                        while($row=$result->fetch_assoc()){
//                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
//                                    <td>'.$row['PIC'].'</td>';
//                        }
//                    }
//
//                    ?>
<!--                    </tbody>-->
<!--                </table>-->
<!---->
<!---->
<!---->
<!--            </div>-->
<!--            <div class="tab-pane fade" id="second4">-->
<!--                <table class="table">-->
<!--                    <thead>-->
<!--                    <tr>-->
<!--                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>-->
<!--                    </tr>-->
<!--                    </thead>-->
<!--                    <tbody>-->
<!--                    --><?php
//                    $sql="select no,name,date,state,PIC from tb_office where class='复印机'";
//                    $result=mysqli_query($con,$sql);
//                    $num=10;
//                    if($num--){
//                        while($row=$result->fetch_assoc()){
//                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
//                                    <td>'.$row['PIC'].'</td>';
//                        }
//                    }
//
//                    ?>
<!--                    </tbody>-->
<!--                </table>-->
<!--            </div>-->
<!--            <div class="tab-pane fade" id="second5">-->
<!--                <table class="table">-->
<!--                    <thead>-->
<!--                    <tr>-->
<!--                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>-->
<!--                    </tr>-->
<!--                    </thead>-->
<!--                    <tbody>-->
<!--                    --><?php
//                    $sql="select no,name,date,state,PIC from tb_office where class='车辆'";
//                    $result=mysqli_query($con,$sql);
//                    $num=10;
//                    if($num--){
//                        while($row=$result->fetch_assoc()){
//                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
//                                    <td>'.$row['PIC'].'</td>';
//                        }
//                    }
//
//                    ?>
<!--                    </tbody>-->
<!--                </table>-->
<!---->
<!--            </div>-->
<!--            <div class="tab-pane fade" id="second6">-->
<!--                <table class="table">-->
<!--                    <thead>-->
<!--                    <tr>-->
<!--                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>-->
<!--                    </tr>-->
<!--                    </thead>-->
<!--                    <tbody>-->
<!--                    --><?php
//                    $sql="select no,name,date,state,PIC from tb_office where class='消耗品'";
//                    $result=mysqli_query($con,$sql);
//                    $num=10;
//                    if($num--){
//                        while($row=$result->fetch_assoc()){
//                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
//                                    <td>'.$row['PIC'].'</td>';
//                        }
//                    }
//
//                    ?>
<!--                    </tbody>-->
<!--                </table>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--<!--    其他-->-->
<!--    <div class="tab-pane fade" id="eighth">-->
<!--        <ul id="myOrder" class="nav nav-tabs">-->
<!--            <li class="active"><a href="#second1" data-toggle="tab">全部</a></li>-->
<!--            <li><a href="#second2" data-toggle="tab">计算机</a></li>-->
<!--            <li><a href="#second3" data-toggle="tab">打印机</a></li>-->
<!--            <li><a href="#second4" data-toggle="tab">复印机</a></li>-->
<!--            <li><a href="#second5" data-toggle="tab">车辆</a></li>-->
<!--            <li><a href="#second6" data-toggle="tab">消耗品</a></li>-->
<!--        </ul>-->
<!--        <div id="myTabContent2" class="tab-content">-->
<!--            <div class="tab-pane fade in active" id="second1">-->
<!--                <table class="table">-->
<!--                    <thead>-->
<!--                    <tr>-->
<!--                        <th>编号</th><th>物品名称</th><th>购入日期</th><th>状态</th><th>负责人</th><th>类别</th>-->
<!--                    </tr>-->
<!--                    </thead>-->
<!--                    <tbody>-->
<!--                    --><?php
//                    $con=mysqli_connect("localhost","root","123456","test");
//                    $sql="select * from tb_office";
//                    $result=mysqli_query($con,$sql);
//                    $num=10;
//                    if($num--){
//                        while($row=$result->fetch_assoc()){
//                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
//                                    <td>'.$row['PIC'].'</td><td>'.$row['class'].'</td>';
//                        }
//                    }
//
//                    ?>
<!---->
<!--                    </tbody>-->
<!--                </table>-->
<!---->
<!---->
<!--            </div>-->
<!--            <div class="tab-pane fade" id="second2">-->
<!--                <table class="table">-->
<!--                    <thead>-->
<!--                    <tr>-->
<!--                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>-->
<!--                    </tr>-->
<!--                    </thead>-->
<!--                    <tbody>-->
<!--                    --><?php
//                    $sql="select no,name,date,state,PIC from tb_office where class='计算机'";
//                    $result=mysqli_query($con,$sql);
//                    $num=10;
//                    if($num--){
//                        while($row=$result->fetch_assoc()){
//                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
//                                    <td>'.$row['PIC'].'</td>';
//                        }
//                    }
//
//                    ?>
<!--                    </tbody>-->
<!--                </table>-->
<!--            </div>-->
<!--            <div class="tab-pane fade" id="second3">-->
<!--                <table class="table">-->
<!--                    <thead>-->
<!--                    <tr>-->
<!--                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>-->
<!--                    </tr>-->
<!--                    </thead>-->
<!--                    <tbody>-->
<!--                    --><?php
//                    $sql="select no,name,date,state,PIC from tb_office where class='打印机'";
//                    $result=mysqli_query($con,$sql);
//                    $num=10;
//                    if($num--){
//                        while($row=$result->fetch_assoc()){
//                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
//                                    <td>'.$row['PIC'].'</td>';
//                        }
//                    }
//
//                    ?>
<!--                    </tbody>-->
<!--                </table>-->
<!---->
<!---->
<!---->
<!--            </div>-->
<!--            <div class="tab-pane fade" id="second4">-->
<!--                <table class="table">-->
<!--                    <thead>-->
<!--                    <tr>-->
<!--                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>-->
<!--                    </tr>-->
<!--                    </thead>-->
<!--                    <tbody>-->
<!--                    --><?php
//                    $sql="select no,name,date,state,PIC from tb_office where class='复印机'";
//                    $result=mysqli_query($con,$sql);
//                    $num=10;
//                    if($num--){
//                        while($row=$result->fetch_assoc()){
//                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
//                                    <td>'.$row['PIC'].'</td>';
//                        }
//                    }
//
//                    ?>
<!--                    </tbody>-->
<!--                </table>-->
<!--            </div>-->
<!--            <div class="tab-pane fade" id="second5">-->
<!--                <table class="table">-->
<!--                    <thead>-->
<!--                    <tr>-->
<!--                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>-->
<!--                    </tr>-->
<!--                    </thead>-->
<!--                    <tbody>-->
<!--                    --><?php
//                    $sql="select no,name,date,state,PIC from tb_office where class='车辆'";
//                    $result=mysqli_query($con,$sql);
//                    $num=10;
//                    if($num--){
//                        while($row=$result->fetch_assoc()){
//                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
//                                    <td>'.$row['PIC'].'</td>';
//                        }
//                    }
//
//                    ?>
<!--                    </tbody>-->
<!--                </table>-->
<!---->
<!--            </div>-->
<!--            <div class="tab-pane fade" id="second6">-->
<!--                <table class="table">-->
<!--                    <thead>-->
<!--                    <tr>-->
<!--                        <th>编号</th><th>名称</th><th>购入日期</th><th>状态</th><th>负责人</th>-->
<!--                    </tr>-->
<!--                    </thead>-->
<!--                    <tbody>-->
<!--                    --><?php
//                    $sql="select no,name,date,state,PIC from tb_office where class='消耗品'";
//                    $result=mysqli_query($con,$sql);
//                    $num=10;
//                    if($num--){
//                        while($row=$result->fetch_assoc()){
//                            echo '<tr><td>'.$row['no'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['state'].'</td>
//                                    <td>'.$row['PIC'].'</td>';
//                        }
//                    }
//
//                    ?>
<!--                    </tbody>-->
<!--                </table>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
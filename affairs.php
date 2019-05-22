<?php
session_start();
include("conn/conn.php");
?>
<link href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<script src="http://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<ul id="myTab" class="nav nav-tabs">
    <li class="active"><a href="#first" data-toggle="tab">新任务</a></li>
    <li><a href="#second" data-toggle="tab">已完成任务</a></li>
</ul>
<div id="myTabContent" class="tab-content">
    <div class="tab-pane fade in active" id="first">
        <table class="table table-bordered" style="width: 60%";>
            <thead>
            <tr>
                <th>编号</th>
                <th>发布人</th>
                <th>任务主题</th>
            </tr>
            </thead>
            <?php
            $sql = mysqli_query($conne->init_conn(),"select *
               from tb_matter
               where matter_receive = '".$_SESSION["userid"]."'"
            );
            if ($sql) {
            while ($myrow = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
            ?>
            <tbody>
            <tr>
                <td><?php echo $myrow['matter_id']; ?></td>
                <td><?php echo $myrow['matter_publish']; ?></td>
                <td><?php echo $myrow['matter_title']; ?></td>
                <td height="23" align="center" bgcolor="#FFFFFF" class="STYLE4"><input type="button" value="完成" /></td>
            </tr>
            </tbody>
            <?php } }?>
        </table>
    </div>

    <div class="tab-pane fade" id="second">
        hi
    </div>
</div>




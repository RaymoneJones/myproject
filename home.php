<?php
session_start();
include("./conn/conn.php")
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="css/home.css">

    <script type="text/javascript" src="js/solar_lunar.js"></script>
    <title></title>

</head>

<body >

    <div style="height: 100%">
        <div class="left" style="height:100%">
            <div id="newstop">
                新闻动态
                <div style="float: right;font-size:15px;margin-top:15px">
                    <a href="#">更多>>>></a>
                </div>
            </div>
            <div id="newsblock">
                <ul>
                    <?php
                   $con=mysqli_connect("localhost","root","123456","test");
                    $sql="select title,time from tb_news  order by time desc limit 10";
                    $result=mysqli_query($con,$sql);
                    $num=10;
                    if($num--){
                        while($row=$result->fetch_assoc()){
                            echo '<li><a class="tt" target="_blank" href="#">'.$row['title'].'</a>&nbsp;&nbsp;&nbsp;&nbsp;'.$row['time'].'</li>';
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="right" style="height:100%">
            <div class="right1">
                <div id="noticetop">
                    通知公告
                    <div style="float: right;font-size:15px;margin-top:15px">
                        <a href="#">更多>>>></a>
                    </div>
                </div>
                <div id="noticeblock">
                    <ul>
                        <?php
                        $con=mysqli_connect("localhost","root","123456","test");
                        $sql="select * from tb_pcard  order by pcard_id desc limit 10";
                        $result=mysqli_query($con,$sql);
                        $num=10;
                        if($num--){
                            while($row=$result->fetch_assoc()){
                                echo '<li><a class="tt" target="_blank" href="#">'.$row['pcard_subject'].'</a></li>';
                            }
                        }

                        ?>
                    </ul>

                </div>
            </div>

            <div class="right2" style="margin-top: 2px">
                <div id="noticetop">
                    待定修改区域
                    <div style="float: right;font-size:15px;margin-top:15px">
                        <a href="#">更多>>>></a>
                    </div>
                </div>
                <div id="noticeblock">
                    <ul>
<!--                        <script src="js/calendartable.js" type="text/javascript"></script>-->
                        <?php
                        $con=mysqli_connect("localhost","root","123456","test");
                        $sql="select * from tb_user";
                        $result=mysqli_query($con,$sql);
                        $num=10;
                        if($num--){
                            while($row=$result->fetch_assoc()){
                                echo "id：".$row['user_id']."<br>";
                                echo "姓名：".$row['user_name']."<br>";
                                echo "部门：".$row['user_branch']."<br>";
                                echo "职务：".$row['user_job']."<br>";
                                echo "手机号：".$row['user_tel']."<br>";
                                echo "住址：".$row['user_address']."<br>";
                            }
                        }

                        ?>
                    </ul>
<!--                    <h id="ttt"></h>-->

                </div>
            </div>
        </div>

        </div>
    </div>

</body>
</html>

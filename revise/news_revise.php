<?php
session_start();
include("../conn/conn.php");
if(isset($_GET["news_id"])){ //判断所需要的参数是否存在
    $sql=mysqli_query($conne->init_conn(),"select * from tb_news where news_id = '".$_GET["news_id"]."'");
    while ($myrow = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
        //echo $myrow['pcard_content'];
        ?>
        <html>
        <h1 align="center"><?php echo $myrow['news_tittle']; ?></h1>
        <p align="center" class="lead"><?php echo $myrow['news_author']; ?></p>
        <p align="center" class="lead"><?php echo $myrow['news_time']; ?></p>
        <br><br>
        <p align="center" class="lead"><?php echo $myrow['news_content']; ?></p>
        </html>
        <?php
    }
}
if(isset($_GET["pcard_id"])) { //判断所需要的参数是否存在
    $sql = mysqli_query($conne->init_conn(), "select * from tb_pcard where pcard_id = '" . $_GET["pcard_id"] . "'");
    while ($myrow = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
        //echo $myrow['pcard_content'];
        ?>
        <html>
        <h1 align="center"><?php echo $myrow['pcard_subject']; ?></h1>
        <p align="center" class="lead"><?php echo $myrow['pcard_author']; ?></p>
        <p align="center" class="lead"><?php echo $myrow['pcard_time']; ?></p>
        <br><br>
        <p align="center" class="lead"><?php echo $myrow['pcard_content']; ?></p>
        </html>
        <?php
    }
}
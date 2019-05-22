<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<?php
session_start();
include("conn/conn.php");

if(isset($_GET["subject"])) {
   // header("Content-type: text/html; charset=gb2312");
    $hi = $_GET["subject"];
   // echo $hi;

    $sql = mysqli_query($conne->init_conn(),"select *
               from tb_pcard
               where pcard_subject = '$hi'");
        while ($myrow = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
            //echo $myrow['pcard_content'];
            ?>
            <html>
            <h1 align="center"><?php echo $hi; ?></h1>
            <br><br>
            <p align="center" class="lead"><?php echo $myrow['pcard_content']; ?></p>
            </html>
<?php
        }
}

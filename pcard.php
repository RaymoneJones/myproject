<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<body background="beijing.jpg">
<?php
session_start();
include("conn/conn.php");

if(isset($_GET["id"])) {
   // header("Content-type: text/html; charset=gb2312");
    $hi = $_GET["id"];
   // echo $hi;

    $sql = mysqli_query($conne->init_conn(),"select *
               from tb_pcard
               where pcard_id = '$hi'");
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
?>
</body>

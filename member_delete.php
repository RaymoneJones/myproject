<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<?php
session_start();
include("conn/conn.php");
if($_GET["id"] == "" && $_GET["name"] == "" && $_GET["sex"] == "" && $_GET["password"] == "" && $_GET["branch"] == "" &&
    $_GET["job"] == "" && $_GET["address"] == "" && $_GET["foundtime"] == "" && $_GET["tel"] == "" ){
    echo "<script>alert('输入为空，请输入您想要删除的信息索引');</script>";
}else {
    $sql = mysqli_query($conne->init_conn(), "delete
                            from tb_user
                            where user_id = '" . $_GET["id"] . "'
                            ");
    echo "<script>alert('删除成功');</script>";
    echo '<script>window.close();</script>';
}
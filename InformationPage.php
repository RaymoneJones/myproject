<?php
session_start();
include("conn/conn.php");

if($_POST["submit"] == "修改"){      //判断提交的按钮名称是否为“修改”
    $sql=mysqli_query($conne->init_conn(), "update tb_user set user_name = '".$_POST["name"]."', user_branch = '".$_POST["branch"]."',
     user_job = '".$_POST["job"]."', user_sex = '".$_POST["sex"]."', user_tel = '".$_POST["tel"]."', user_address = '".$_POST["address"]."', 
      user_foundtime = '".$_POST["foundtime"]."' where user_name = '".$_SESSION["username"]."' and user_password = '".$_SESSION["userpassword"]."' 
     and user_id = '".$_SESSION["userid"]."'");
    $_SESSION["username"] = $_POST["name"];
    $_SESSION["userbranch"] = $_POST["branch"];
    $_SESSION["userjob"] = $_POST["job"];
    $_SESSION["usersex"] = $_POST["sex"];
    $_SESSION["usertel"] = $_POST["tel"];
    $_SESSION["useraddress"] = $_POST["address"];
    $_SESSION["userfoundtime"] = $_POST["foundtime"];
    echo "<script>alert('修改成功');window.location.href = 'ModifyInformation.php';</script>";
}

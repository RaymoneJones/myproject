<?php
session_start();
include("conn/conn.php");

if($_POST["submit"] == "添加"){      //判断提交的按钮名称是否为“添加”
    $sql = mysqli_query($conne->init_conn(),"select *
               from tb_user
               where user_id = '" . $_POST['id'] . "'");
    if($_POST["id"] == "" || $_POST["name"] == "" || $_POST["sex"] == "" || $_POST["pwd"] == "" || $_POST["branch"] == "" ||
        $_POST["job"] == "" || $_POST["address"] == "" || $_POST["foundtime"] == "" || $_POST["tel"] == "" ){
        echo "<script>alert('输入信息不完整');</script>";
    }else if(!is_numeric($_POST["id"]) || strlen($_POST["id"])!=9) {
        echo "<script>alert('职工号只能为9位数字');</script>";
    }else if(strlen($_POST["pwd"])<9 || strlen($_POST["pwd"])>18) {
        echo "<script>alert('密码长度只能为9到18位');</script>";
    }else if (mysqli_num_rows($sql)>0)
    {
        echo "<script>alert('职工号已存在！');</script>";
    }else{
        $sql = mysqli_query($conne->init_conn(), "insert into tb_user
                            values('" . $_POST["id"] . "', '" . $_POST["name"] . "', '" . $_POST["pwd"] . "', '" . $_POST["branch"] . "', '" . $_POST["job"] . "', '" . $_POST["sex"] . "', 
                            '" . $_POST["tel"] . "', '" . $_POST["address"] . "', '" . $_POST["foundtime"] . "')
                            ");
        echo "<script>alert('添加成功');</script>";
    }
    echo "<script>window.location.href = 'member.php';</script>";
}

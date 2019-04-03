<?php
session_start();
include("conn/conn.php");

if($_POST["submit"] == "确认修改"){      //判断提交的按钮名称是否为“确认修改”
    if($_SESSION["userpassword"] == $_POST["OldPassword"]){       //输入的旧密码正确
        if($_POST["NewPassword1"] == $_POST["NewPassword2"]){     //两次输入的新密码一致则提示修改成功并修改数据库
            $sql=mysqli_query($conne->init_conn(), "update tb_user set user_password = '".$_POST["NewPassword2"]."' where user_name = '".$_SESSION["username"]."'
                    and user_password = '".$_SESSION["userpassword"]."' and user_id = '".$_SESSION["userid"]."'");
            $_SESSION["userpassword"] = $_POST["NewPassword1"];
            echo "<script>alert('修改成功');window.location.href='ModifyPassword.php';</script>";
        }else{       //两次输入的新密码不一致则提示修改失败
            echo "<script>alert('两次输入不一致，密码修改失败');window.location.href = 'ModifyPassword.php';</script>";
        }
    }else{       //输入的旧密码错误
        echo "<script>alert('原始密码错误，请重新输入');window.location.href = 'ModifyPassword.php';</script>";
    }
}

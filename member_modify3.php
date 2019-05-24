<?php
session_start();
include("conn/conn.php");
$member_modify_id = $_SESSION["member_modify_id"];
@$_POST['id'] = $_POST['id']+" ";
$sql = mysqli_query($conne->init_conn(),"select *
               from tb_user
               where user_id = '" . $_POST['id'] . "'");
if($_POST["id"] == "" || $_POST["name"] == "" || $_POST["sex"] == "" || $_POST["pwd"] == "" || $_POST["branch"] == "" || $_POST["job"] == "" ||
    $_POST["address"] == "" || $_POST["foundtime"] == "" || $_POST["tel"] == "" ){
    echo "<script>alert('输入信息不完整！');</script>";
}else if(!is_numeric($_POST["id"]) || strlen($_POST["id"])!=9) {
    echo "<script>alert('职工号只能为9位数字');</script>";
}else if(strlen($_POST["pwd"])<9 || strlen($_POST["pwd"])>18) {
    echo "<script>alert('密码长度只能为9到18位');</script>";
}else if((@$member_modify_id != $_POST['id']) && (mysqli_num_rows($sql)>0)) {
    echo $member_modify_id;echo $_POST['id'];echo $member_modify_id;echo mysqli_num_rows($sql);   //检验输出
    echo "<script>alert('职工号已存在！');</script>";
}else{
    // echo $_SESSION["modify_id"];echo $_SESSION["modify_id"];     //检验输出
    $sql = mysqli_query($conne1->init_conn(), "update tb_user
                        set user_id = '".$_POST['id']."' , user_name = '".$_POST['name']."' , user_sex = '".$_POST['sex']."' , user_password = '".$_POST['pwd']."'
                            ,  user_branch = '".$_POST['branch']."' , user_job = '".$_POST['job']."' , user_address = '".$_POST['address']."' , 
                            user_tel = '".$_POST['tel']."', user_foundtime = '".$_POST['foundtime']."'
                        where user_id = '".$_SESSION["member_modify_id"]."'
                            ");

    echo "<script>alert('修改成功');</script>";
}
echo '<script>window.close();</script>';

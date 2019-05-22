<?php
session_start();
include("conn/conn.php");
if(isset($_POST['radio'])&&$_POST['radio']==1)
{
	if(isset($_POST['userid'])&&isset($_POST['password']))	{
			$check="select * from tb_user where user_id='".$_POST['userid']."'and user_password='".$_POST['password']."'";
			if($conne->getRowsNum($check) == 1){
				$_SESSION["userid"]=$conne->getFields($check,'user_id');     //定义职工号的全局变量
				$_SESSION["username"]=$conne->getFields($check,'user_name');  //定义姓名的全局变量
				$_SESSION["userpassword"]=$conne->getFields($check,'user_password');  //定义密码的全局变量
				$_SESSION["userbranch"]=$conne->getFields($check,'user_branch');  //定义部门的全局变量
				$_SESSION["userjob"]=$conne->getFields($check,'user_job');  //定义工作的全局变量
				$_SESSION["usersex"]=$conne->getFields($check,'user_sex');  //定义性别的全局变量
				$_SESSION["usertel"]=$conne->getFields($check,'user_tel');  //定义电话的全局变量
				$_SESSION["useraddress"]=$conne->getFields($check,'user_address');  //定义地址的全局变量
				$_SESSION["userfoundtime"]=$conne->getFields($check,'user_foundtime');  //定义入职日期的全局变量
				echo "<script>window.location.href='backstage.php';</script>";
			}else{
				echo "<script>alert('登录失败');window.location.href='index.php';</script>";		
			}
	}else{
		echo "<script>alert('账号不能为空');window.location.href='index.php';</script>";		
	}
}else{
	if(isset($_POST['userid'])&&isset($_POST['password']))	{
			$check="select user_name from tb_root where user_id='".$_POST['userid']."'and user_password='".$_POST['password']."'";
			if($conne->getRowsNum($check) == 1){
				$_SESSION["username"]=$conne->getFields($check,'user_name');  
				echo "<script>window.location.href='admin.php';</script>";
			}else{
				echo "<script>alert('登录失败');window.location.href='index.php';</script>";		
			}
	}else{
		echo "<script>alert('账号不能为空');window.location.href='index.php';</script>";		
	}
	
}
?>
 
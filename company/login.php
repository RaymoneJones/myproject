<?php
session_start();
include("conn/conn.php");

if(isset($_POST['username'])&&isset($_POST['password']))	{					
		$check="select user_name from tb_user where user_name='".$_POST['username']."'and user_password='".$_POST['password']."'";									
   	 	if($conne->getRowsNum($check) == 1){
			$_SESSION["username"]=$conne->getFields($check,'user_name');  
      		echo "<script>alert('登录成功');window.location.href='backstage.php';</script>";
		}else{
			echo "<script>alert('登录失败');window.location.href='index.php';</script>";		
		}
}else{
	echo "<script>alert('账号不能为空');window.location.href='index.php';</script>";		
}

?>
 
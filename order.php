<?php
session_start();
include("conn/conn.php");
if(isset($_POST['orderid'])&&isset($_POST['product']))	{					
		$sql = "INSERT INTO tb_order ".
        "(id,product,ordertime,state,charge) ".
        "VALUES ".
        "('".$_POST['orderid']."','".$_POST['product']."','".$_POST['ordertime']."',
		'待发货','".$_SESSION["username"]."')";
		if($conne2->uidRst($sql)==1){
			echo "<script>alert('提交成功');window.location.href='market.php?type=26';</script>";
		}else{
			echo "<script>alert('提交失败');</script>";
		}
		
}else{
	echo "<script>alert('发生错误');</script>";		
}

?>
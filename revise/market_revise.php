<?php
	session_start();
	include("../conn/conn.php");
	if(isset($_GET["id"])&&$_GET["state"]==1){ //判断所需要的参数是否存在
		$sql="UPDATE tb_order SET state='待确定' WHERE id='".$_GET["id"]."'";
		if($conne-> uidRst($sql) == 1){ 
				echo "<script>window.location.href='../market.php?type=25';</script>";
		}				
	}else if(isset($_GET["id"])&&$_GET["state"]==2){ //判断所需要的参数是否存在
		$sql="DELETE FROM tb_order WHERE id='".$_GET["id"]."'";
		if($conne-> uidRst($sql) == 1){ 
				echo "<script>window.location.href='../market.php?type=25';</script>";
		}				
	}else if(isset($_GET["id"])&&$_GET["state"]==3){ //判断所需要的参数是否存在
		$sql="UPDATE tb_order SET state='已确定' WHERE id='".$_GET["id"]."'";
		if($conne-> uidRst($sql) == 1){ 
				echo "<script>window.location.href='../market.php?type=25';</script>";
		}				
	}
?>
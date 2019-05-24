<?php
	session_start();
	include("../conn/conn.php");
	
	if(isset($_GET["news_id"])){ //判断所需要的参数是否存在
		$sql="DELETE FROM tb_news WHERE news_id='".$_GET["news_id"]."'";
		if($conne-> uidRst($sql) == 1){ 
				echo "<script>window.location.href='../message.php';</script>";
			}else{
				echo "<script>alert('删除失败');>window.location.href='../message.php';</script>";		
		}				
	}
	if(isset($_GET["pcard_id"])){ //判断所需要的参数是否存在
		$sql="DELETE FROM tb_pcard WHERE pcard_id='".$_GET["pcard_id"]."'";
		if($conne-> uidRst($sql) == 1){ 
				echo "<script>window.location.href='../message.php?type=2';</script>";
			}else{
				echo "<script>alert('删除失败');>window.location.href='../message.php?type=2';</script>";		
		}				
	}
?>
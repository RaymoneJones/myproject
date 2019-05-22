<?php
	session_start();
	include("../conn/conn.php");
	if(isset($_GET["matter_id"])){ //判断所需要的参数是否存在
		$sql="UPDATE tb_matter SET matter_state='已完成' WHERE matter_id='".$_GET["matter_id"]."'";
		if($conne-> uidRst($sql) == 1){ 
				echo "<script>window.location.href='../personal.php';</script>";
			}else{
				echo "<script>alert('确认失败');</script>";		
		}				
	}
?>
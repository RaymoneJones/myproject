<?php
	session_start();
	include("../conn/conn.php");
	if(isset($_GET["table"])&&$_GET["table"]=='new1'){ //判断所需要的参数是否存在
		$sql="select * from tb_news";
		$row=$conne->getRowsArray($sql);
		echo json_encode($row);
	}
	if(isset($_GET["table"])&&$_GET["table"]=='pcr1'){ //判断所需要的参数是否存在
		$sql="select * from tb_pcard";
		$row=$conne->getRowsArray($sql);
		echo json_encode($row);
	}
	
?>

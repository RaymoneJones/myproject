<?php
	session_start();
	include("../conn/conn.php");
	if(isset($_GET["table"])&&$_GET["table"]=='mar1'){ //判断所需要的参数是否存在
		$sql="select * from tb_order";
		$row=$conne->getRowsArray($sql);
		echo json_encode($row);
	}else if(isset($_GET["table"])&&$_GET["table"]=='mar2'){ //判断所需要的参数是否存在
		$sql="select * from tb_order where state='已确定'";
		$row=$conne->getRowsArray($sql);
		echo json_encode($row);
	}else if(isset($_GET["table"])&&$_GET["table"]=='mar3'){ //判断所需要的参数是否存在
		$sql="select * from tb_order where state='待发货'";
		$row=$conne->getRowsArray($sql);
		echo json_encode($row);
	}else if(isset($_GET["table"])&&$_GET["table"]=='mar4'){ //判断所需要的参数是否存在
		$sql="select * from tb_order where state='待确定'";
		$row=$conne->getRowsArray($sql);
		echo json_encode($row);
	}else if(isset($_GET["table"])&&$_GET["table"]=='mar5'){ //判断所需要的参数是否存在
		$sql="select * from tb_order where charge='".$_SESSION["username"]."'";
		$row=$conne->getRowsArray($sql);
		echo json_encode($row);
	}
	
?>

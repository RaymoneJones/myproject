<?php
	session_start();
	include("../conn/conn.php");
	if(isset($_GET["table"])&&$_GET["table"]=='per1'){ //判断所需要的参数是否存在
		$sql="select * from tb_matter where matter_receive='".$_SESSION["username"]."' and matter_state='未完成'";
		$row=$conne->getRowsArray($sql);
		echo json_encode($row);

	
	}else if(isset($_GET["table"])&&$_GET["table"]=='per2'){
		$sql="select * from tb_matter where matter_receive='".$_SESSION["username"]."' and matter_state='已完成'";
		$row=$conne->getRowsArray($sql);
		echo json_encode($row);

	}
	
?>

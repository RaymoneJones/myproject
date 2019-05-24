<?php
session_start();
include("conn/conn.php");
if(isset($_POST['orderid'])&&isset($_POST['product']))	{
    if($_POST['orderid']==""||$_POST['product']==""){
        echo "<script>alert('内容不能为空');window.location.href='market.php?type=26';</script>";
    } else {
        $sql = "INSERT INTO tb_order " .
            "(id,product,ordertime,state,charge) " .
            "VALUES " .
            "('" . $_POST['orderid'] . "','" . $_POST['product'] . "','" . $_POST['ordertime'] . "',
		'待发货','" . $_SESSION["username"] . "')";
        if ($conne2->uidRst($sql) == 1) {
            echo "<script>alert('提交成功');window.location.href='market.php?type=26';</script>";
        } else {
            echo "<script>alert('提交失败,订单号已存在');window.location.href='market.php?type=26';</script>";
        }
    }
}else if(isset($_POST['matterreceive'])&&isset($_POST['mattercontent']))	{
    if($_POST['matterreceive']==""||$_POST['mattercontent']==""){
        echo "<script>alert('内容不能为空');window.location.href='matter.php?type=2';</script>";
    }else{
        $sql = "INSERT INTO tb_matter ".
            "(matter_title,matter_publish,matter_receive,matter_content,matter_state,matter_assess) ".
            "VALUES ".
            "('".$_POST['mattertitle']."','".$_POST['matterpublish']."','".$_POST['matterreceive']."','".$_POST['mattercontent']."',
		'未完成','未评价')";
        if($conne1->uidRst($sql)==1){
            echo "<script>alert('提交成功');window.location.href='matter.php?type=2';</script>";
        }else{
            echo "<script>alert('提交失败');</script>";
        }
    }

}else if(isset($_POST['newstittle'])&&isset($_POST['newscontent']))	{
    if($_POST['newstittle']==""||$_POST['newscontent']==""){
        echo "<script>alert('标题或内容不能为空');window.location.href='message.php?type=12';</script>";
    }else{
        $sql = "INSERT INTO tb_news ".
            "(news_tittle,news_author,news_content,news_time) ".
            "VALUES ".
            "('".$_POST['newstittle']."','".$_POST['newsauthor']."','".$_POST['newscontent']."',
		'".$_POST['newstime']."')";
        if($conne1->uidRst($sql)==1){
            echo "<script>alert('提交成功');window.location.href='message.php?type=12';</script>";
        }else{
            echo "<script>alert('提交失败');window.location.href='message.php?type=12';</script>";
        }
    }
}else if(isset($_POST['pcardsubject'])&&isset($_POST['pcardcontent']))	{
    if($_POST['pcardsubject']==""||$_POST['pcardcontent']==""){
        echo "<script>alert('主题或内容不能为空');window.location.href='message.php?type=22';</script>";
    }else{
        $sql = "INSERT INTO tb_pcard ".
            "(pcard_subject,pcard_author,pcard_content,pcard_time) ".
            "VALUES ".
            "('".$_POST['pcardsubject']."','".$_POST['pcardauthor']."','".$_POST['pcardcontent']."',
		'".$_POST['pcardtime']."')";
        if($conne1->uidRst($sql)==1){
            echo "<script>alert('提交成功');window.location.href='message.php?type=22';</script>";
        }else{
            echo "<script>alert('提交失败');window.location.href='message.php?type=22';</script>";
        }
    }
}

?>
<?php
session_start();
include("conn/conn.php");

if($_SESSION["userbranch"] == "财务部")
    echo "<script>window.location.href = 'caiwu.php';</script>";
else if($_SESSION["userbranch"] == "人力资源部")
    echo "<script>window.location.href = 'renliziyuan.php';</script>";
else if($_SESSION["userbranch"] == "后勤部")
    echo "<script>window.location.href = 'houqin.php';</script>";
else if($_SESSION["userbranch"] == "营销中心")
    echo "<script>window.location.href = 'yingxiao.php';</script>";
else if($_SESSION["userbranch"] == "研发中心")
    echo "<script>window.location.href = 'yanfa.php';</script>";
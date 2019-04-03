<?php
include("conn/conn.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head></head>

<body>
<form name = "information" method = "post" action = "InformationPage.php">
     <!-- 职工号：
      <input type = "text" name = "id">
      <br><br>   -->
      姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：
      <input type = "text" name = "name">
      <br><br>
     <!-- 密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码：
      <input type = "text" name = "password">
      <br><br>-->
      部&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;门：
      <input type = "text" name = "branch">   <!-- </html><?php echo $_SESSION["userbranch"] ?><html> -->
      <br><br>
      工&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;作：
      <input type = "text" name = "job">
      <br><br>
      性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别：
      <input type = "text" name = "sex">
      <br><br>
      电&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;话：
      <input type = "text" name = "tel">
      <br><br>
      住&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;址：
      <input type = "text" name = "address">
      <br><br>
      入职时间：
      <input type = "text" name = "foundtime">
      <br><br>
      <input name = "submit" type = "submit" id = "submit" value = "修改">
</form>

</body>
</html>
<?php
session_start();
include("conn/conn.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head></head>

<body>
<form name = "information" method = "post" action = "InformationPage.php">
     <div style="text-align:center;">
      姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：
      <input type = "text" name = "name" value = <?php echo $_SESSION["username"] ?>>
      <br><br>
     <!-- 密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码：
      <input type = "text" name = "password">
      <br><br>-->
      部&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;门：
      <input type = "text" align=" name = "branch" value = <?php echo $_SESSION["userbranch"] ?>>
      <br><br>
      工&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;作：
      <input type = "text" name = "job" value = <?php echo $_SESSION["userjob"] ?>>
      <br><br>
      性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别：
      <input type = "text" name = "sex" value = <?php echo $_SESSION["usersex"] ?>>
      <br><br>
      电&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;话：
      <input type = "text" name = "tel" value = <?php echo $_SESSION["usertel"] ?>>
      <br><br>
      住&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;址：
      <input type = "text" name = "address" value = <?php echo $_SESSION["useraddress"] ?>>
      <br><br>
      入职时间：
      <input type = "text" name = "foundtime" value = <?php echo $_SESSION["userfoundtime"] ?>>
      <br><br>
      <input name = "submit" type = "submit" id = "submit" value = "修改">
     </div>
</form>

</body>
</html>
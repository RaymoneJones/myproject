<?php
session_start();
include("conn/conn.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<script src="http://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
    <script src="http://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>

<body background="beijing.jpg">

<?php
if(@!is_null($_GET['trans_data'])) {
    $_SESSION["modify_id"] = $_GET['trans_data'];
    $id = $_SESSION["modify_id"];
    //echo $_SESSION["modify_id"];    //检验输出

    $out = mysqli_query($conne->init_conn(),"select *
               from tb_user
               where user_id LIKE $id");
    $out1 = mysqli_fetch_array($out, MYSQLI_ASSOC);
}
?>

<form  name = "information" class="form-horizontal" role="form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <div class="form-group">
        <label for="id" class="col-sm-2 control-label">职工号</label>
        <div class="col-sm-10">
            <input type="text" style="width:30%"; class="form-control" id="id" name="id" placeholder="请输入职工号" size="20" maxlength="20" value=<?php echo @$out1['user_id']; ?>>
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">姓名</label>
        <div class="col-sm-10">
            <input type="text" style="width:30%"; class="form-control" id="name" name="name" placeholder="请输入姓名" size="20" maxlength="100" value=<?php echo @$out1['user_name']; ?>>
        </div>
    </div>
    <div class="form-group">
        <label for="pwd" class="col-sm-2 control-label">密码</label>
        <div class="col-sm-10">
            <input type="text" style="width:30%"; class="form-control" id="pwd" name="pwd" placeholder="请输入密码" size="20" maxlength="20" value=<?php echo @$out1['user_password']; ?>>
        </div>
    </div>
    <div class="form-group">
        <label for="branch" class="col-sm-2 control-label">部门</label>
        <div class="col-sm-10">
            <select name="branch" id="branch" style="width:30%"; class="form-control">
                <option value=<?php echo @$out1['user_branch']; ?> ><?php echo @$out1['user_branch']; ?></option>
                <option value="财务部" >财务部</option>
                <option value="后勤部">后勤部</option>
                <option value="人力资源部">人力资源部</option>
                <option value="营销中心">营销中心</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="job" class="col-sm-2 control-label">职位</label>
        <div class="col-sm-10">
            <select name="job" id="job" style="width:30%"; class="form-control">
                <option value=<?php echo @$out1['user_job']; ?> ><?php echo @$out1['user_job']; ?></option>
                <option value="职员">职员</option>
                <option value="经理">经理</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="sex" class="col-sm-2 control-label">性别</label>
        <div class="col-sm-10">
            <select name="sex" id="sex" style="width:30%"; class="form-control">
                <option value=<?php echo @$out1['user_sex']; ?> ><?php echo @$out1['user_sex']; ?></option>
                <option value="男">男</option>
                <option value="女">女</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for=tel" class="col-sm-2 control-label">电话</label>
        <div class="col-sm-10">
            <input type="text" style="width:30%"; class="form-control" id="tel" name="tel" placeholder="请输入电话" size="20" maxlength="20" value=<?php echo @$out1['user_tel']; ?>>
        </div>
    </div>
    <div class="form-group">
        <label for="address" class="col-sm-2 control-label">地址</label>
        <div class="col-sm-10">
            <input type="text" style="width:30%"; class="form-control" id="address" name="address" placeholder="请输入地址" size="20" maxlength="20" value=<?php echo @$out1['user_address']; ?>>
        </div>
    </div>
    <div class="form-group">
        <label for="foundtime" class="col-sm-2 control-label">入职时间</label>
        <div class="col-sm-10">
            <input type="text" style="width:30%"; class="form-control" id="foundtime" name="foundtime" placeholder="请输入入职时间" size="20" maxlength="20" value=<?php echo @$out1['user_foundtime']; ?>>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <input name = "submit" type = "submit" id = "add" class="btn btn-default" value = "添加">
            <input name = "submit" type = "submit" id = "delete" class="btn btn-default" value = "删除">
            <input name = "submit" type = "submit" id = "find" class="btn btn-default" value = "查找">
            <input name = "submit" type = "submit" id = "modify" class="btn btn-default" value = "修改">
        </div>
</form>
<br><br>
<table class="table table-striped" id = "infor" width = "800" >
    <tr>
        <td width="100" align="center" bgcolor="#FFFFFF" class="STYLE4">职工号</td>
        <td width="102" align="center" bgcolor="#FFFFFF" class="STYLE4">姓名</td>
        <td width="119" align="center" bgcolor="#FFFFFF" class="STYLE4">密码</td>
        <td width="169" align="center" bgcolor="#FFFFFF" class="STYLE4">部门</td>
        <td width="119" align="center" bgcolor="#FFFFFF" class="STYLE4">职位</td>
        <td width="119" align="center" bgcolor="#FFFFFF" class="STYLE4">性别</td>
        <td width="119" align="center" bgcolor="#FFFFFF" class="STYLE4">电话</td>
        <td width="282" height="25" align="center" bgcolor="#FFFFFF" class="STYLE4">地址</td>
        <td width="150" align="center" bgcolor="#FFFFFF" class="STYLE4">入职时间</td>
        <!-- <td height="23" align="center" bgcolor="#FFFFFF" class="STYLE4"><input width = "20" type="button" value="确定" /></td> -->
    </tr>
    <?php
    if(isset($_POST['submit'])) {
       if($_REQUEST['submit'] == "添加") {
           $sql = mysqli_query($conne->init_conn(),"select *
               from tb_user
               where user_id LIKE '%" . $_POST['id'] . "%'");
           if($_POST["id"] == "" || $_POST["name"] == "" || $_POST["sex"] == "" || $_POST["pwd"] == "" || $_POST["branch"] == "" ||
               $_POST["job"] == "" || $_POST["address"] == "" || $_POST["foundtime"] == "" || $_POST["tel"] == "" ){
               echo "<script>alert('输入信息不完整');</script>";
           }else if(!is_numeric($_POST["id"]) || strlen($_POST["id"])!=9) {
               echo "<script>alert('职工号只能为9位数字');</script>";
           }else if(strlen($_POST["pwd"])<9 || strlen($_POST["pwd"])>18) {
               echo "<script>alert('密码长度只能为9到18位');</script>";
           }else if (mysqli_num_rows($sql)>0)
           {
               echo "<script>alert('职工号已存在！');</script>";
           }else{
               $sql = mysqli_query($conne->init_conn(), "insert into tb_user
                            values('" . $_POST["id"] . "', '" . $_POST["name"] . "', '" . $_POST["pwd"] . "', '" . $_POST["branch"] . "', '" . $_POST["job"] . "', '" . $_POST["sex"] . "', 
                            '" . $_POST["tel"] . "', '" . $_POST["address"] . "', '" . $_POST["foundtime"] . "')
                            ");
               echo "<script>alert('添加成功');</script>";
           }
       }
       if($_REQUEST['submit'] == "删除") {
           if($_POST["id"] == "" && $_POST["name"] == "" && $_POST["sex"] == "" && $_POST["pwd"] == "" && $_POST["branch"] == "" &&
               $_POST["job"] == "" && $_POST["address"] == "" && $_POST["foundtime"] == "" && $_POST["tel"] == "" ){
               echo "<script>alert('输入为空，请输入您想要删除的信息索引');</script>";
           }else {
               $sql = mysqli_query($conne->init_conn(), "delete
                            from tb_user
                            where user_id LIKE '%" . $_POST["id"] . "%' AND user_name LIKE '%" . $_POST["name"] . "%' AND user_sex LIKE '%" . $_POST["sex"] . "%' AND
                                user_password LIKE '%" . $_POST["pwd"] . "%' AND user_branch LIKE '%" . $_POST["branch"] . "%'  AND user_job LIKE '%" . $_POST["job"] . "%' AND 
                                user_address LIKE '%" . $_POST["address"] . "%' AND user_foundtime LIKE '%" . $_POST["foundtime"] . "%' AND user_tel LIKE '%" . $_POST["tel"] . "%'
                            ");
               echo "<script>alert('删除成功');</script>";
           }
       }
       if($_REQUEST['submit'] == "查找") {
           $sql = mysqli_query($conne->init_conn(),"select *
               from tb_user
               where user_id LIKE '%" . $_POST['id'] . "%' and user_name LIKE '%" . $_POST['name'] . "%' and user_sex LIKE '%" . $_POST['sex'] . "%' and 
                     user_password LIKE '%" . $_POST['pwd'] . "%' and user_branch LIKE '%" . $_POST['branch'] . "%' and user_job LIKE '%" . $_POST['job'] . "%' and 
                     user_address LIKE '%" . $_POST['address'] . "%' and user_foundtime LIKE '%" . $_POST['foundtime'] . "%' and user_tel LIKE '%" . $_POST['tel'] . "%'"
           );

           if ($sql) {
               while ($myrow = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
                   ?>
                   <tr>
                       <td align="center" bgcolor="#FFFFFF" class="STYLE4"><span
                                   class="STYLE2"><?php echo $myrow['user_id']; ?></span></td>
                       <td align="center" bgcolor="#FFFFFF" class="STYLE4"><span
                                   class="STYLE2"><?php echo $myrow['user_name']; ?></span></td>
                       <td height="23" align="center" bgcolor="#FFFFFF" class="STYLE4"><span
                                   class="STYLE2"><?php echo $myrow['user_password']; ?></span></td>
                       <td height="23" align="center" bgcolor="#FFFFFF" class="STYLE4"><span
                                   class="STYLE2"><?php echo $myrow['user_branch']; ?></span></td>
                       <td height="23" align="center" bgcolor="#FFFFFF" class="STYLE4"><span
                                   class="STYLE2"><?php echo $myrow['user_job']; ?></span></td>
                       <td height="23" align="center" bgcolor="#FFFFFF" class="STYLE4"><span
                                   class="STYLE2"><?php echo $myrow['user_sex']; ?></span></td>
                       <td height="23" align="center" bgcolor="#FFFFFF" class="STYLE4"><span
                                   class="STYLE2"><?php echo $myrow['user_tel']; ?></span></td>
                       <td height="23" align="center" bgcolor="#FFFFFF" class="STYLE4"><span
                                   class="STYLE2"><?php echo $myrow['user_address']; ?></span></td>
                       <td height="23" align="center" bgcolor="#FFFFFF" class="STYLE4"><span
                                   class="STYLE2"><?php echo $myrow['user_foundtime']; ?></span></td>
                       <td height="23" align="center" bgcolor="#FFFFFF" class="STYLE4"><input type="button" value="确定" /></td>
                   </tr>
                   <?php
               }
           }
       }
        if($_REQUEST['submit'] == "修改") {
            $sql = mysqli_query($conne->init_conn(),"select *
               from tb_user
               where user_id = '" . $_POST['id'] . "'");
            if($_POST["id"] == "" || $_POST["name"] == "" || $_POST["sex"] == "" || $_POST["pwd"] == "" || $_POST["branch"] == "" || $_POST["job"] == "" ||
                $_POST["address"] == "" || $_POST["foundtime"] == "" || $_POST["tel"] == "" ){
                echo "<script>alert('输入信息不完整！');</script>";
            }else if(!is_numeric($_POST["id"]) || strlen($_POST["id"])!=9) {
                echo "<script>alert('职工号只能为9位数字');</script>";
            }else if(strlen($_POST["pwd"])<9 || strlen($_POST["pwd"])>18) {
                echo "<script>alert('密码长度只能为9到18位');</script>";
            }else if($_SESSION["modify_id"]!=$_POST['id'] && (mysqli_num_rows($sql)>0)) {
                //echo $_SESSION["modify_id"];echo $_POST['id'];     //检验输出
                echo "<script>alert('职工号已存在！');</script>";
            }else{
                   // echo $_SESSION["modify_id"];echo $_SESSION["modify_id"];     //检验输出
                    $sql = mysqli_query($conne->init_conn(), "update tb_user
                        set user_id = '".$_POST['id']."' , user_name = '".$_POST['name']."' , user_sex = '".$_POST['sex']."' , user_password = '".$_POST['pwd']."'
                            ,  user_branch = '".$_POST['branch']."' , user_job = '".$_POST['job']."' , user_address = '".$_POST['address']."' , 
                            user_tel = '".$_POST['tel']."', user_foundtime = '".$_POST['foundtime']."'
                        where user_id = '".$_SESSION["modify_id"]."'
                            ");

                    echo "<script>alert('修改成功');</script>";
            }
        }

    }
    ?>
</table>
</body>
</html>

<script type="text/javascript">
        $(function(){
            $("#infor").on("click", ":button", function(event){
                var my_data=$(this).closest("tr").find("td").eq(0).text();   //把职工号传给php，作为修改时对象的依据
                $.ajax({
                    url:   "renliziyuan.php",
                    type: "POST",
                    data:{trans_data:my_data},
                    error: function(){
                        alert('Error loading XML document');
                    },
                    success:function(){
                       // $("#modify").html();     //只刷新“修改”按键
                       // alert('S');
                    },
                    complete:function()
                    {
                        location.href = "renliziyuan.php?trans_data=" + my_data;
                       // $("#modify").load( "renliziyuan.php" + " #modify")
                       //  $("#modify").html();     //只刷新“修改”按键

                    }
                });

                $("#id").val($(this).closest("tr").find("td").eq(0).text());
                $("#name").val($(this).closest("tr").find("td").eq(1).text());
                $("#pwd").val($(this).closest("tr").find("td").eq(2).text());
                $("#branch").val($(this).closest("tr").find("td").eq(3).text());
                $("#job").val($(this).closest("tr").find("td").eq(4).text());
                $("#sex").val($(this).closest("tr").find("td").eq(5).text());
                $("#tel").val($(this).closest("tr").find("td").eq(6).text());
                $("#address").val($(this).closest("tr").find("td").eq(7).text());
                $("#foundtime").val($(this).closest("tr").find("td").eq(8).text());


            });
        });

</script>

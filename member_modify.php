<?php
session_start();
include("conn/conn.php");
/*
if($_POST["submit"] == "修改"){      //判断提交的按钮名称是否为“修改”
    $sql = mysqli_query($conne->init_conn(),"select *
               from tb_user
               where user_id = '" . $_POST['id'] . "'");
    if($_POST["id"] == "" || $_POST["name"] == "" || $_POST["sex"] == "" || $_POST["pwd"] == "" || $_POST["branch"] == "" || $_POST["job"] == "" ||
        $_POST["address"] == "" || $_POST["foundtime"] == "" || $_POST["tel"] == "" ){
        echo "<script>alert('输入信息不完整！');</script>";
    }else if($_SESSION["modify_id"]!=$_POST['id'] && (mysqli_num_rows($sql)>0)) {
        echo "<script>alert('职工号已存在！');</script>";
    }else{
        // echo $_SESSION["modify_id"];echo $_SESSION["modify_id"];     //检验输出
        $sql = mysqli_query($conne->init_conn(), "update tb_user
                        set user_id = '".$_POST['id']."' , user_name = '".$_POST['name']."' , user_sex = '".$_POST['sex']."' , user_password = '".$_POST['pwd']."'
                            ,  user_branch = '".$_POST['branch']."' , user_job = '".$_POST['job']."' , user_address = '".$_POST['address']."' , 
                            user_tel = '".$_POST['tel']."', user_foundtime = '".$_POST['foundtime']."'
                        where user_id = '".$_POST['id']."'
                            ");

        echo "<script>alert('修改成功');</script>";
    }
    echo "<script>window.location.href = 'member.php';</script>";
}*/

if($_POST["submit"] == "查找"){      //判断提交的按钮名称是否为“查找”
$sql = mysqli_query($conne1->init_conn(), "select *
               from tb_user
               where user_id LIKE '%" . $_POST['id'] . "%' and user_name LIKE '%" . $_POST['name'] . "%' and user_sex LIKE '%" . $_POST['sex'] . "%' and 
                     user_password LIKE '%" . $_POST['pwd'] . "%' and user_branch LIKE '%" . $_POST['branch'] . "%' and user_job LIKE '%" . $_POST['job'] . "%' and 
                     user_address LIKE '%" . $_POST['address'] . "%' and user_foundtime LIKE '%" . $_POST['foundtime'] . "%' and user_tel LIKE '%" . $_POST['tel'] . "%'"
);
if ($sql) {
    while ($myrow = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
        ?>
        <table>
            <br><br><br><br><br><br><br><br>
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
            <!--<td height="23" align="center" bgcolor="#FFFFFF" class="STYLE4"><input type="button" value="确定" /></td>-->
            <?php echo '<td><a class="tt" href="member_modify2.php?id='.$myrow['user_id'].' && name='.$myrow['user_name'].' &&
                    password='.$myrow['user_password'].' &&branch='.$myrow['user_branch'].' &&job='.$myrow['user_job'].' &&sex='.$myrow['user_sex'].' &&
                    tel='.$myrow['user_tel'].' &&address='.$myrow['user_address'].' &&foundtime='.$myrow['user_foundtime'].'">'."修改".'</a></td>' ?>
            <?php echo '<td><a class="tt" href="member_delete.php?id='.$myrow['user_id'].' && name='.$myrow['user_name'].' &&
                    password='.$myrow['user_password'].' &&branch='.$myrow['user_branch'].' &&job='.$myrow['user_job'].' &&sex='.$myrow['user_sex'].' &&
                    tel='.$myrow['user_tel'].' &&address='.$myrow['user_address'].' &&foundtime='.$myrow['user_foundtime'].'">'."删除".'</a></td>' ?>
        </tr>
        </table>
        <?php
    }
}}


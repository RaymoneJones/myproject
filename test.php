<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script src="http://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(function()
        {
            $("#btn").click(function()
            {
                var my_data="前台变量";
                var userName = "How ";
                var userAge = "are ";
                var userSex = "you";
                $.ajax({
                    url:   "test.php",
                    type: "POST",
                   // dataType:"json",
                    data:{trans_data:my_data},
                    //data:{"user_name":userName,"user_age":userAge,"user_sex":userSex},
                   // data: "{user_name:'" + userName + "',user_age:'" + userAge + "',user_sex:'" + userSex + "'}",
                    error: function(){
                        alert('Error loading XML document');
                    },
                    complete:function()
                    {
                        location.href = "test.php?trans_data=" + my_data;
                    }
                });
            });
        });

    </script>
</head>
<body>
<form action="test.php" method="post">
    <input type="text" name="title" value="标题"/>
    <input  type="submit" value="提交"/>
    <input id="btn" type="button" value="点击"/>
</form>


</body>
</html>
<?php

header('Content-Type: text/html; charset=UTF8');
$backValue=$_GET['trans_data'];
//$back=$_GET['trans'];
echo $backValue;
//echo $back;


/*
    //获取从客户端传过来的数据
    $userName = $_GET['user_name'];
    $userAge = $_GET['user_age'];
    $userSex = $_GET['user_sex'];
echo $userName;
echo $userAge;
echo $userSex;
*/

?>
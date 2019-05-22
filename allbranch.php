<?php
session_start();
include("conn/conn.php");
?>
<link href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<script src="http://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<ul id="myTab" class="nav nav-tabs">
	<li class="active"><a href="#first" data-toggle="tab">营销中心</a></li>
	<li><a href="#second" data-toggle="tab">人力资源部</a></li>
	<li><a href="#third" data-toggle="tab">后勤部</a></li>
    <li><a href="#forth" data-toggle="tab">财务部</a></li>
</ul>
<?php
	if(isset($_GET["type"])){ //判断所需要的参数是否存在
		if($_GET["type"]==2){
			echo '<script>$(function () {$("#myTab  li:eq(1) a").tab("show");})</script>';
		}else if($_GET["type"]==22){
			echo '<script>$(function () {$("#myTab  li:eq(1) a").tab("show");$("#myOrder  li:eq(1) a").tab("show");})</script>';
		}else if($_GET["type"]==23){
			echo '<script>$(function () {$("#myTab  li:eq(1) a").tab("show");$("#myOrder  li:eq(2) a").tab("show");})</script>';
		}else if($_GET["type"]==24){
			echo '<script>$(function () {$("#myTab  li:eq(1) a").tab("show");$("#myOrder  li:eq(3) a").tab("show");})</script>';
		}else if($_GET["type"]==25){
			echo '<script>$(function () {$("#myTab  li:eq(1) a").tab("show");$("#myOrder  li:eq(4) a").tab("show");})</script>';
		}else if($_GET["type"]==26){
			echo '<script>$(function () {$("#myTab  li:eq(1) a").tab("show");$("#myOrder  li:eq(5) a").tab("show");})</script>';
		}
						
	}


?>
<div id="myTabContent" class="tab-content">
	<div class="tab-pane fade in active" id="first">
		<div>
        	<h2>部门简介</h2>
            <p>营销部门负责对公司产品价值实现过程中各销售环节实行管理、监督、协调、服务，主要职责
            是制定营销战略及实施的策略，包括资源的调配，人员的分工及激励，客户的关系协调，另
            外可能还有一部分技术的支持。制定具体的实施细则，包括区域的划分，营销人员的配置，
            公司相应资源的调配，如资金、人员、技术服务、售后维护等；再有一部分就是可能也是贵公
            司营销部的主要职责，针对不同客户制定实施方案，主要是技术方面的，比如制定seo工作流
            程，考核方案，用户满意度调查，售后服务等。</p>
        </div>
        <div>
        	<h2>成员信息</h2>
            <table class="table">
               <thead>
                  <tr>
                     <th>职员号</th>
                     <th>职员</th>
                  </tr>
               </thead>
               <tbody>
               	  <?php
				  	$k=5;
					$sql="select * from tb_user where user_branch='营销中心'";
					$row=$conne->getRowsArray($sql);
					$ber=$conne->getRowsNum($sql);
					$total_page=ceil($ber/$k);
					if(isset($_GET["id"])){ //判断所需要的参数是否存在
						$now = $_GET['id'];
						
					} else{
						$now=1;
					}
                  if($now == $total_page)
                  {
                      $k = $ber % 5;
                      for($i=0;$i<$k;$i++){
                          echo '<tr><td>'. @$row[$now*$k-$k+$i]['user_id'] .'</td><td>'. @$row[$now*$k-$k+$i]['user_name'] .'</td></tr>';
                      }
                  }
                  else {
                      for ($i = 0; $i < $k; $i++) {
                          echo '<tr><td>' . @$row[$now * $k - $k + $i]['user_id'] . '</td><td>' . @$row[$now * $k - $k + $i]['user_name'] . '</td></tr>';
                      }
                  }
				?>
               </tbody>
            </table>
          <?php 
		  			$page=0;
		  			echo '<ul class="pagination">
						';
					while($page++<$total_page){
						echo '<li><a href="'.$_SERVER['PHP_SELF'].'?type=1&&id='.$page.'">'.$page.'</a></li>';
					}
					echo '</ul>';
			?>
        </div>
	</div>

	<div class="tab-pane fade" id="second">
            <div>
                <h2>部门简介</h2>
                <p>人力资源部门</p>
            </div>
            <div>
                <h2>成员信息</h2>
                <table class="table">
                    <thead>
                    <tr>
                        <th>职员号</th>
                        <th>职员</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                   //$conne->init_conn();
                    $k=5;
                    $sql="select * from tb_user where user_branch='人力资源部'";
                    $row=$conne1->getRowsArray($sql);
                    $ber=$conne1->getRowsNum($sql);
                    $total_page=ceil($ber/$k);
                    if(isset($_GET["id1"])){ //判断所需要的参数是否存在
                        $now = $_GET['id1'];

                    } else{
                        $now=1;
                    }
                    if($now == $total_page)
                    {
                        $k = $ber % 5;
                        for($i=0;$i<$k;$i++){
                            echo '<tr><td>'. @$row[$now*$k-$k+$i]['user_id'] .'</td><td>'. @$row[$now*$k-$k+$i]['user_name'] .'</td></tr>';
                        }
                    }
                    else {
                        for ($i = 0; $i < $k; $i++) {
                            echo '<tr><td>' . @$row[$now * $k - $k + $i]['user_id'] . '</td><td>' . @$row[$now * $k - $k + $i]['user_name'] . '</td></tr>';
                        }
                    }
                    ?>
                    </tbody>
                </table>
                <?php
                $page=0;
                echo '<ul class="pagination">
						';
                while($page++<$total_page){
                    echo '<li><a href="'.$_SERVER['PHP_SELF'].'?type=1&&id1='.$page.'">'.$page.'</a></li>';
                }
                echo '</ul>';
                ?>

            </div>
    </div>
	<div class="tab-pane fade" id="third">
            <div>
                <h2>部门简介</h2>
                <p>后勤部门</p>
            </div>
            <div>
                <h2>成员信息</h2>
                <table class="table">
                    <thead>
                    <tr>
                        <th>职员号</th>
                        <th>职员</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $k=5;
                    $sql="select * from tb_user where user_branch='后勤部'";
                    $row=$conne2->getRowsArray($sql);
                    $ber=$conne2->getRowsNum($sql);
                    $total_page=ceil($ber/$k);
                    if(isset($_GET["id2"])){ //判断所需要的参数是否存在
                        $now = $_GET['id2'];

                    } else{
                        $now=1;
                    }
                    if($now == $total_page)
                    {
                        $k = $ber % 5;
                        for($i=0;$i<$k;$i++){
                            echo '<tr><td>'. @$row[$now*$k-$k+$i]['user_id'] .'</td><td>'. @$row[$now*$k-$k+$i]['user_name'] .'</td></tr>';
                        }
                    }
                    else {
                        for ($i = 0; $i < $k; $i++) {
                            echo '<tr><td>' . @$row[$now * $k - $k + $i]['user_id'] . '</td><td>' . @$row[$now * $k - $k + $i]['user_name'] . '</td></tr>';
                        }
                    }
                    ?>
                    </tbody>
                </table>
                <?php
                $page=0;
                echo '<ul class="pagination">
						';
                while($page++<$total_page){
                    echo '<li><a href="'.$_SERVER['PHP_SELF'].'?type=1&&id2='.$page.'">'.$page.'</a></li>';
                }
                echo '</ul>';
                ?>

            </div>
	</div>
	<div class="tab-pane fade" id="forth">
            <div>
                <h2>部门简介</h2>
                <p>财务部门</p>
            </div>
            <div>
                <h2>成员信息</h2>
                <table class="table">
                    <thead>
                    <tr>
                        <th>职员号</th>
                        <th>职员</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $k=5;
                    $sql="select * from tb_user where user_branch='财务部'";
                    $row=$conne3->getRowsArray($sql);
                    $ber=$conne3->getRowsNum($sql);
                    $total_page=ceil($ber/$k);
                    if(isset($_GET["id3"])){ //判断所需要的参数是否存在
                        $now = $_GET['id3'];

                    } else{
                        $now=1;
                    }
                    if($now == $total_page)
                    {
                        $k = $ber % 5;
                        for($i=0;$i<$k;$i++){
                            echo '<tr><td>'. @$row[$now*$k-$k+$i]['user_id'] .'</td><td>'. @$row[$now*$k-$k+$i]['user_name'] .'</td></tr>';
                        }
                    }
                    else {
                        for ($i = 0; $i < $k; $i++) {
                            echo '<tr><td>' . @$row[$now * $k - $k + $i]['user_id'] . '</td><td>' . @$row[$now * $k - $k + $i]['user_name'] . '</td></tr>';
                        }
                    }
                    ?>
                    </tbody>
                </table>
                <?php
                $page=0;
                echo '<ul class="pagination">
						';
                while($page++<$total_page){
                    echo '<li><a href="'.$_SERVER['PHP_SELF'].'?type=1&&id3='.$page.'">'.$page.'</a></li>';
                }
                echo '</ul>';
                ?>

            </div>
	</div>
    
</div>
<script>
$("#order").click(function(){
		
		formsub2();
});
function formsub2(){
		if($("#orderid").val() == ""){
			alert("订单号不能为空!");

		}else if($("#product").val() ==""){
			alert("产品名称不能为空!");
		}else{
			$("#order-form").submit();
		}
}
</script>

 
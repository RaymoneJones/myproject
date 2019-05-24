<?php
session_start();
include("conn/conn.php");
?>
<link href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<script src="http://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<body background="beijing.jpg">
<ul id="myTab" class="nav nav-tabs">
	<li class="active"><a href="#first" data-toggle="tab">营销中心</a></li>
	<li><a href="#second" data-toggle="tab">人力资源部</a></li>
	<li><a href="#third" data-toggle="tab">后勤部</a></li>
    <li><a href="#forth" data-toggle="tab">财务部</a></li>
</ul>
</body>
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
                <p>负责单位人力资源的管理，为单位提供和培养合格的人才，根据单位实际情况和发展规划拟定单位人力资源计划，经批准后组织实施，制订人力资源部年度工作目标和工作计划，
                    按月做出预算及工作计划，经批准后施行 ，组织制订单位用工制度、人事管理制度、劳动工资制度、人事档案管理制度、员工手册、培训大纲等规章制度、实施细则和人力资源
                    部工作程序，经批准后组织实施， 制订人力资源部专业培训计划并协助培训部实施、考核，加强与单位外同行之间的联系。</p>
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
                <p>主要从事人事档案管理；宿舍房间，床位管理，宿舍物品租借管理，宿舍水电表记录及水电费的计算等；办公用品管理，档案管理，印信管理，资产管理，车辆管理，
                    办公秩序及行为管理，前台管理，电话管理，计算机管理，打印室、复印室管理，环保安全健康，员工培训，会议管理，公司物品租借，员工借贷款，出差管理，差费报销，
                    内部通知及公司访客记录等。固定资产管理，图书管理。</p>
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
                <p>起草公司年度经营计划；组织编制公司年度财务预算；执行、监督、检查、总结经营计划和预算的执行情况，提出调整建议，执行国家的财务会计政策、税收政策和法规；
                    制订和执行公司会计政策、纳税政策及其管理政策；整合公司业务体系资源，发挥公司综合优势，实现公司整体利益的最大化；公司的会计核算、会计监督工作；公司会计
                    档案管理及合同（协议）、有价证券、抵（质）押法律凭证的保管；编写公司经营管理状况的财务分析报告。</p>
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

 
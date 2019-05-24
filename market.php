<?php
session_start();
include("conn/conn.php");
?>
<link href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.bootcss.com/bootstrap-table/1.11.1/bootstrap-table.min.css" rel="stylesheet">
<script src="http://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<!-- bootstrap-table.min.js -->
<script src="https://cdn.bootcss.com/bootstrap-table/1.11.1/bootstrap-table.min.js"></script>
<!-- 引入中文语言包 -->
<script src="https://cdn.bootcss.com/bootstrap-table/1.11.1/locale/bootstrap-table-zh-CN.min.js"></script>
<body background="beijing.jpg">
<ul id="myTab" class="nav nav-tabs">
	<li class="active"><a href="#first" data-toggle="tab">部门</a></li>
	<li><a href="#second" data-toggle="tab">订单</a></li>
</ul>
<?php
	if(isset($_GET["type"])){ //判断所需要的参数是否存在
		if($_GET["type"]==25){
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
					for($i=0;$i<$k;$i++){
						echo '<tr><td>'. @$row[$now*$k-$k+$i]['user_id'] .'</td><td>'. @$row[$now*$k-$k+$i]['user_name'] .'</td></tr>';
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
		<ul id="myOrder" class="nav nav-tabs">
            <li class="active"><a href="#first_s" data-toggle="tab">全部</a></li>
            <li><a href="#second_s" data-toggle="tab">已确定</a></li>
            <li><a href="#third_s" data-toggle="tab">待发货</a></li>
            <li><a href="#forth_s" data-toggle="tab">待确定</a></li>
            <li><a href="#fifth_s" data-toggle="tab">个人处理</a></li>
            <li><a href="#sixth_s" data-toggle="tab">新订单</a></li>
        </ul>
        <div id="myOrderContent" class="tab-content">
            <div class="tab-pane fade in active" id="first_s">
                <table id="market_table1" class="table"></table>
            </div>
            <div class="tab-pane fade" id="second_s">
                <table id="market_table2" class="table"></table>
            </div>
            <div class="tab-pane fade" id="third_s">
                 <table id="market_table3" class="table"></table>
            </div>
           	<div class="tab-pane fade" id="forth_s">
                 <table id="market_table4" class="table"></table>
            </div>
            <div class="tab-pane fade" id="fifth_s">
                 <table id="market_table5" class="table"></table>
            </div>
            <div class="tab-pane fade" id="sixth_s">
                <h1>新订单</h1>
            	<form id="order-form" action="form.php" role="form" method="post">
                    <div class="form-group">
                        <label for="orderid">订单号</label>
                        <input type="text" class="form-control" id="orderid"  name="orderid"
                               placeholder="请输入订单号">
                    </div>
                     <div class="form-group">
                        <label for="product">产品</label>
                        <input type="text" class="form-control" id="product" name="product" 
                               placeholder="请输入产品名称">
                    </div>
                    <div class="form-group">
                        <label for="ordertime">付款日期</label>
                        <input type="text" class="form-control" id="ordertime" name="ordertime" 
                               placeholder="请输入付款日期">
                    </div>
                    <button id="order" type="submit" class="btn btn-default">提交</button>
                </form>
            
            </div>
         </div>
	</div>
	<div class="tab-pane fade" id="third">
		<h1>活动介绍</h1>
	</div>
	<div class="tab-pane fade" id="forth">
		<h1>产品介绍</h1>
	</div>
    
</div>
</body>
<script>
var market_table = new Array($('#market_table1'),$('#market_table2'), $('#market_table3'),$('#market_table4'));
var mar = new Array("mar1", "mar2", "mar3","mar4");
for(var i=0;i<4;i++){
	market_table[i].bootstrapTable({
		url: 'data/market_data.php?table='+mar[i],
		method: "post",
		dataType: "json",
		height: 470, 
		striped: true, //是否显示行间隔色
		pagination: true,                   //是否显示分页（*）
		sidePagination: "client",           //分页方式：client客户端分页，server服务端分页（*）
		pageNumber: 1,                       //初始化加载第一页，默认第一页
		pageSize: 8,                       //每页的记录行数（*）
		pageList: [8,16, 24,32],        //可供选择的每页的行数（*）
		showRefresh : true,//刷新按钮
		showToggle:true,//显示一行是否改成竖着
		showPaginationSwitch:true,//是否显示 下面的分页框
		uniqueId: "matter_id",                     //每一行的唯一标识，一般为主键列
		toolbal:'#toolbar',
		columns: [{
			field: 'id',
			title: '订单号',
			align: 'center'
		}, {
			field: 'product',
			title: '产品',
			align: 'center'
		}, {
			field: 'ordertime',
			title: '付款日期',
			align: 'center'
		}, {
			field: 'state',
			title: '状态',
			align: 'center'
		}, {
			field: 'charge',
			title: '负责人',
			align: 'center'
		}],
		onLoadSuccess: function () {
		},
		onLoadError: function () {
			  showTips("数据加载失败！");
		}	
	});
}
$('#market_table5').bootstrapTable({
	url: 'data/market_data.php?table=mar5',
	method: "post",
	dataType: "json",
	height: 470, 
	striped: true, //是否显示行间隔色
	pagination: true,                   //是否显示分页（*）
	sidePagination: "client",           //分页方式：client客户端分页，server服务端分页（*）
	pageNumber: 1,                       //初始化加载第一页，默认第一页
	pageSize: 8,                       //每页的记录行数（*）
	pageList: [8,16, 24,32],        //可供选择的每页的行数（*）
	showRefresh : true,//刷新按钮
	showToggle:true,//显示一行是否改成竖着
	showPaginationSwitch:true,//是否显示 下面的分页框
	uniqueId: "matter_id",                     //每一行的唯一标识，一般为主键列
	toolbal:'#toolbar',
	columns: [{
		field: 'id',
		title: '订单号',
		align: 'center'
	}, {
		field: 'product',
		title: '产品',
		align: 'center'
	}, {
		field: 'ordertime',
		title: '付款日期',
		align: 'center'
	}, {
		field: 'state',
		title: '状态',
		align: 'center'
	}, {
		field: 'caozuo',
		title: '操作',
		align: 'center',
		formatter : aFormatter
	}],
	onLoadSuccess: function () {
	},
	onLoadError: function () {
		  showTips("数据加载失败！");
	}	
});
function aFormatter(value, row, index) {
	if(row.state=="待发货"){
		return ['<a class="btn btn-warning btn-xs" href="revise/market_revise.php?id='+row.id+'&state=2">已取消</a>'+
		'&nbsp;&nbsp;<a class="btn btn-info btn-xs" href="revise/market_revise.php?id='+row.id+'&state=1">已发货</a>'].join("")
	}else if(row.state=="待确定"){
		return ['<a class="btn btn-warning btn-xs" href="revise/market_revise.php?id='+row.id+'&state=2">已退货</a>'+
		'&nbsp;&nbsp;<a class="btn btn-success btn-xs" href="revise/market_revise.php?id='+row.id+'&state=3">已确定</a>'].join("")
	}
		
}
</script>

 
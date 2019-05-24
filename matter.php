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
<ul id="myTab2" class="nav nav-tabs">
	<li class="active"><a href="#first2" data-toggle="tab">事项记录</a></li>
	<li><a href="#second2" data-toggle="tab">事项发布</a></li>
	<li><a href="#third2" data-toggle="tab">事项评价</a></li>
</ul>
<?php
	if(isset($_GET["type"])){ //判断所需要的参数是否存在
		if($_GET["type"]==3){
			echo '<script>$(function () {$("#myTab2  li:eq(2) a").tab("show");})</script>';
		}	else if($_GET["type"]==2){
            echo '<script>$(function () {$("#myTab2  li:eq(1) a").tab("show");})</script>';
        }

    }


?>
<div id="myTabContent2" class="tab-content">
    <div class="tab-pane fade in active" id="first2">

            <table id="matter_tablea" class="table">
            </table>
         
    </div>
    <div class="tab-pane fade" id="second2">
     		<h1>新事项</h1>
            	<form id="matter-form" action="form.php" role="form" method="post">
                    <div class="form-group">
                        <label for="matterpublish">事项发布者</label>
                        <input type="text" class="form-control" id="matterpublish"  name="matterpublish"
                               value="<?php echo $_SESSION["username"];?>"  readonly="readonly">
                    </div>
                     <div class="form-group">
                        <label for="matterreceive">接受者</label>
                        <input type="text" class="form-control" id="matterreceive" name="matterreceive" 
                               placeholder="请输入接受者">
                    </div>
                    <div class="form-group">
                        <label for="mattertitle">主题</label>
                        <input type="text" class="form-control" id="mattertitle" name="mattertitle"
                               placeholder="请输入任务主题">
                    </div>
                    <div class="form-group">
                        <label for="mattercontent">内容</label>
                        <input type="text" class="form-control" id="mattercontent" name="mattercontent" 
                               placeholder="请输入内容">
                    </div>
                    <button id="matter" type="submit" class="btn btn-default">提交</button>
                </form>
    </div>
    <div class="tab-pane fade" id="third2">
		<table id="matter_tableb" class="table">
         </table>
    </div>
  
</div>
</body>
<script>

$('#matter_tablea').bootstrapTable({
	url: 'data/matter_data.php?table=mat1',
	method: "post",
	dataType: "json",
	height: 500, 
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
        field: 'matter_id',
        title: '事项id',
        align: 'center'
    }, {
        field: 'matter_publish',
        title: '发布者',
        align: 'center'
    }, {
        field: 'matter_receive',
        title: '接受者',
        align: 'center'
    }, {
        field: 'matter_content',
        title: '内容',
        align: 'center'
    }, {
        field: 'matter_state',
        title: '状态',
		align: 'center'
    }, {
        field: 'matter_assess',
        title: '评价',
		align: 'center'
    }],
	onLoadSuccess: function () {
	},
    onLoadError: function () {
          showTips("数据加载失败！");
    }	
}

);

$('#matter_tableb').bootstrapTable({
	url: 'data/matter_data.php?table=mat2',
	method: "post",
	dataType: "json",
	height: 500, 
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
        field: 'matter_id',
        title: '事项id',
        align: 'center'
    }, {
        field: 'matter_publish',
        title: '发布者',
        align: 'center'
    }, {
        field: 'matter_receive',
        title: '接受者',
        align: 'center'
    }, {
        field: 'matter_content',
        title: '内容',
        align: 'center'
    }, {
        field: 'assess',
        title: '评价',
		align: 'center',
		formatter : aFormatter
    }],
	onLoadSuccess: function () {
	},
    onLoadError: function () {
          showTips("数据加载失败！");
    }	
}

);
function aFormatter(value, row, index) {
	
		return ['<a class="btn btn-warning btn-xs" href="revise/matter_revise.php?id='+row.matter_id+'&assess=1">优秀</a>'+
		'&nbsp;&nbsp;<a class="btn btn-info btn-xs" href="revise/matter_revise.php?id='+row.matter_id+'&assess=2">良好</a>'+
		'&nbsp;&nbsp;<a class="btn btn-success btn-xs" href="revise/matter_revise.php?id='+row.matter_id+'&assess=3">一般</a>'].join("")
		
}
</script>
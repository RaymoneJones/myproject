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
<ul id="myTab3" class="nav nav-tabs">
	<li class="active"><a href="#first3" data-toggle="tab">新闻管理</a></li>
	<li><a href="#second3" data-toggle="tab">公告管理</a></li>
</ul>
<?php
	if(isset($_GET["type"])){ //判断所需要的参数是否存在
		if($_GET["type"]==22){
			echo '<script>$(function () {$("#myTab3  li:eq(1) a").tab("show");$("#myTab3b  li:eq(1) a").tab("show");})</script>';
		}else if($_GET["type"]==2){
			echo '<script>$(function () {$("#myTab3  li:eq(1) a").tab("show");})</script>';
		}else if($_GET["type"]==12){
			echo '<script>$(function () {$("#myTab3  li:eq(0) a").tab("show");$("#myTab3a  li:eq(1) a").tab("show");})</script>';
		}					
	}


?>
<div id="myTabContent3" class="tab-content">
    <div class="tab-pane fade in active" id="first3">
        <ul id="myTab3a" class="nav nav-tabs">
            <li class="active"><a href="#first3a" data-toggle="tab">所有新闻</a></li>
            <li><a href="#second3a" data-toggle="tab">新闻发布</a></li>
        </ul>
        <div id="myTabContent3a" class="tab-content">
            <div class="tab-pane fade in active" id="first3a">
                <table id="news_table" class="table"></table>
            </div>
            <div class="tab-pane fade" id="second3a">
            	<form id="news-form" action="form.php" role="form" method="post">
                    <div class="form-group">
                        <label for="newsauthor">作者</label>
                        <input type="text" class="form-control" id="newsauthor"  name="newsauthor"
                               value="<?php echo $_SESSION["username"];?>"  readonly="readonly">
                    </div>
                     <div class="form-group">
                        <label for="newstittle">标题</label>
                        <input type="text" class="form-control" id="newstittle" name="newstittle" 
                               placeholder="请输入标题">
                    </div>
                    <div class="form-group">
                        <label for="newscontent">内容</label>
                        <input type="text" class="form-control" id="newscontent" name="newscontent" 
                               placeholder="请输入内容">
                    </div>
                    <div class="form-group">
                        <label for="newstime">时间</label>
                        <input type="text" class="form-control" id="newstime" name="newstime" 
                               placeholder="请输入时间">
                    </div>
                    <button id="news" type="submit" class="btn btn-default">提交</button>
                </form>
            </div>
          
        </div>
    </div>
    <div class="tab-pane fade" id="second3">
    	 <ul id="myTab3b" class="nav nav-tabs">
            <li class="active"><a href="#first3b" data-toggle="tab">所有公告</a></li>
            <li><a href="#second3b" data-toggle="tab">公告发布</a></li>
        </ul>
        <div id="myTabContent3b" class="tab-content">
            <div class="tab-pane fade in active" id="first3b">
                <table id="pcard_table" class="table"></table>
            </div>
            <div class="tab-pane fade" id="second3b">
            	<form id="pcard-form" action="form.php" role="form" method="post">
                    <div class="form-group">
                        <label for="pcardauthor">作者</label>
                        <input type="text" class="form-control" id="pcardauthor"  name="pcardauthor"
                               value="<?php echo $_SESSION["username"];?>"  readonly="readonly">
                    </div>
                     <div class="form-group">
                        <label for="pcardsubject">主题</label>
                        <input type="text" class="form-control" id="pcardsubject" name="pcardsubject" 
                               placeholder="请输入主题">
                    </div>
                    <div class="form-group">
                        <label for="pcardcontent">内容</label>
                        <input type="text" class="form-control" id="pcardcontent" name="pcardcontent" 
                               placeholder="请输入内容">
                    </div>
                    <div class="form-group">
                        <label for="pcardtime">时间</label>
                        <input type="text" class="form-control" id="pcardtime" name="pcardtime" 
                               placeholder="请输入时间">
                    </div>
                    <button id="pcard" type="submit" class="btn btn-default">提交</button>
                </form>
            </div>
          
        </div>
    </div>
  
</div>
</body>
<script>
$('#news_table').bootstrapTable({
	url: 'data/message_data.php?table=new1',
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
	uniqueId: "news_id",                     //每一行的唯一标识，一般为主键列
 
    toolbal:'#toolbar',
	columns: [{
        field: 'news_id',
        title: '新闻id',
        align: 'center'
    }, {
        field: 'news_tittle',
        title: '标题',
        align: 'center'
    }, {
        field: 'news_author',
        title: '作者',
        align: 'center'
    }, {
        field: 'news_time',
        title: '时间',
		align: 'center'
    },{
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
}

);

function aFormatter(value, row, index) {
	return [
		'<a class="btn btn-danger btn-xs" href="revise/message_revise.php?news_id='+row.news_id+'">删除</a>'
	].join("")
}
$('#pcard_table').bootstrapTable({
	url: 'data/message_data.php?table=pcr1',
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
	uniqueId: "pcard_id",                     //每一行的唯一标识，一般为主键列
 
    toolbal:'#toolbar',
	columns: [{
        field: 'pcard_id',
        title: '公告id',
        align: 'center'
    }, {
        field: 'pcard_subject',
        title: '主题',
        align: 'center'
    }, {
        field: 'pcard_author',
        title: '作者',
        align: 'center'
    }, {
        field: 'pcard_time',
        title: '时间',
		align: 'center'
    },{
        field: 'caozuo',
        title: '操作',
        align: 'center',
		formatter : bFormatter

    }],
	onLoadSuccess: function () {
    },
    onLoadError: function () {
          showTips("数据加载失败！");
    }	
}

);

function bFormatter(value, row, index) {
	return [
		'<a class="btn btn-danger btn-xs" href="revise/message_revise.php?pcard_id='+row.pcard_id+'">删除</a>'
	].join("")
}

</script>

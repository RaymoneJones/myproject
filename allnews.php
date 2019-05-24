<?php
session_start();
include("conn/conn.php");
?>
<link href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.bootcss.com/bootstrap-table/1.11.1/bootstrap-table.min.css" rel="stylesheet">   <!--  -->
<script src="http://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<!-- bootstrap-table.min.js -->
<script src="https://cdn.bootcss.com/bootstrap-table/1.11.1/bootstrap-table.min.js"></script>   <!--  -->
<!-- 引入中文语言包 -->
<script src="https://cdn.bootcss.com/bootstrap-table/1.11.1/locale/bootstrap-table-zh-CN.min.js"></script>  <!--  -->
<body background="beijing.jpg">
<ul id="myTabP" class="nav nav-tabs">
    <li class="active"><a href="#firstP" data-toggle="tab">新闻动态</a></li>
    <li><a href="#secondP" data-toggle="tab">通知公告</a></li>
</ul>
<div id="myTabContent3" class="tab-content" >
    <div class="tab-pane fade in active" id="firstP" >
        <table id="matter_table1" class="table table-bordered">
        </table>
    </div>
    <div class="tab-pane fade" id="secondP">
        <table id="matter_table2" class="table">
        </table>
    </div>
</div>
</body>

<script>
    $('#matter_table1').bootstrapTable({
            url: 'data/news_data.php?table=per1',
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
                field: 'news_tittle',
                title: '新闻动态',
                align: 'center',
                formatter : aFormatter1
            }],
            onLoadSuccess: function () {
            },
            onLoadError: function () {
                showTips("数据加载失败！");
            }
        }

    );

    $('#matter_table2').bootstrapTable({
            url: 'data/news_data.php?table=per2',
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
                field: 'pcard_subject',
                title: '通知公告',
                align: 'center',
                formatter : aFormatter2
            }],
            onLoadSuccess: function () {

            },
            onLoadError: function () {
                showTips("数据加载失败！");
            }
        }

    );



    function aFormatter1(value, row, index) {
        return [
            '<a class="tt" target="_blank" href="revise/news_revise.php?news_id='+row.news_id+'">'+row.news_tittle+'</a>'
        ].join("")
    }
    function aFormatter2(value, row, index) {
        return [
            '<a class="tt" target="_blank"  href="revise/news_revise.php?pcard_id='+row.pcard_id+'">'+row.pcard_subject+'</a>'
        ].join("")
    }
</script>
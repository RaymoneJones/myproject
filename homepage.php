<?php
session_start();
include("conn/conn.php");
?>
<body background="beijing.jpg">
<link rel="stylesheet" type="text/css" href="css/homepage.css">
<div class="left" style="height:100%">
	<div id="newstop">
		新闻动态
		<div style="float: right;font-size:15px;margin-top:15px">
			<a href="allnews.php">更多>>>></a>
		</div>
	</div>
	<div id="newsblock">
		<ul>
			<?php
				$sql="select * from tb_news  order by news_id desc limit 10";
				$row=$conne->getRowsArray($sql);
				$num=-1;
				$ber=$conne->getRowsNum($sql);
				while($num++<8&&$ber-->0){
                    $id0 = $row[$num]['news_id'];
					echo '<li><a class="tt" target="_blank" href="news.php?id0='.$id0.'">'. $row[$num]['news_tittle'] .'</a>&nbsp;&nbsp;&nbsp;&nbsp;'.$row[$num]['news_time'].'</li>';
				}
			?>
			
		</ul>
	</div>
</div>
<div class="right" style="height:100%">
		<div id="noticetop">
			通知公告
			<div style="float: right;font-size:15px;margin-top:15px">
				<a href="allnews.php">更多>>>></a>
			</div>
		</div>

		<div id="noticeblock">
			<ul>
				<?php
					$sql1="select * from tb_pcard  order by pcard_id desc limit 10";
					$row1=$conne1->getRowsArray($sql1);
					$num1=-1;
					$ber1=$conne1->getRowsNum($sql1);
					while($num1++<8&&$ber1-->0){
					    $id = $row1[$num1]['pcard_id'];
						echo '<li><a class="tt" target="_blank" href="pcard.php?id='.$id.'">'. $row1[$num1]['pcard_subject'] .'</a>&nbsp;&nbsp;&nbsp;&nbsp;'.$row1[$num1]['pcard_time'].'</li>';

					}
				?>
			</ul>
		</div>
</div>
</body>

       

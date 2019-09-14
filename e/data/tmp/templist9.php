<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="Pragma" content="no-cache">
		<meta http-equiv="Cache-Control" content="no-cache">
		<meta http-equiv="Expires" content="0">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<script type="text/javascript" src="/templets/youxi/js/rem.js"></script>
		<link href="/templets/youxi/css/swiper-3.4.1.min.css" rel="stylesheet">
		<link rel="stylesheet" href="/templets/youxi/css/common.css" />
		<link rel="stylesheet" type="text/css" href="/templets/youxi/css/read.css" />
      <link rel="apple-touch-icon" href="/images/wjj.png" type="image/png">
      <link rel="shortcut icon" href="/images/wjj.png" type="image/png">  
		<title>[!--pagetitle--]_<?=$public_r[sitename]?></title>
	</head>
	<body class="body">
		<div class="read-body">
			<div class="read-list" >
             <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo',1000,0,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<a class="platform-a" href="<?=$bqr['down']?>" >
				<div class="read">
					<div class="read-top">
						<div class="read-icon">
							<img src="<?=$bqr['titlepic']?>" />
						</div>
						<div class="read-title">
							<div class="read-title-text fs16"><strong><?=$bqr['title']?></strong></div>
							<div class="read-buttont fs13">立即下载</div>
						</div>
					</div>
					<div class="read-title-intro fs13"><?=$bqr['miaoshu']?></div>
				</div>
			</a>
             <?php
}
}
?>
			</div>
		</div>
		<div class="footer">
			<div class="navbar">
				<a class="navbar-item navbar-index"> <i class="navbar-icon icon-index"></i>
					<p class="navbar-desc">
						苹果赚钱
					</p>
				</a>
				<a class="navbar-item navbar-recommend"> <i class="navbar-icon icon-recommend"></i>
					<p class="navbar-desc">
						安卓赚钱
					</p>
				</a>
				<a class="navbar-item navbar-read"> <i class="navbar-icon icon-reads"></i>
					<p class="navbar-descs">
						阅读赚钱
					</p>
				</a>
			</div>
		</div>
	</body>
	<script type="text/javascript" src="/templets/youxi/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="/templets/youxi/js/utils.js"></script>
	<script type="text/javascript" src="/templets/youxi/js/common.js"></script>
</html>
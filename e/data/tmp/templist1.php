<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="Pragma" content="no-cache">
		<meta http-equiv="Cache-Control" content="no-cache">
		<meta http-equiv="Expires" content="0">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<script type="text/javascript" src="/js/rem.js"></script>
		<link rel="stylesheet" href="/css/common.css" />
		<link rel="stylesheet" href="/css/gonglue.css" />
      <link rel="apple-touch-icon" href="/images/wjj.png" type="image/png">
      <link rel="shortcut icon" href="/images/wjj.png" type="image/png">  
		<title>攻略</title>
	</head>
	<body class="body">
		<header class="header">
			<div class="back"></div>
			<div class="title">攻略</div>
			<div class="tool"></div>
		</header>
		<div class="gl-top">
			<div class="kf-img">
				<img class="kf-icon" src="/images/kftx.jpg" />
			</div>
			<div class="kf-name fs16">客服_<?=$public_r['add_muban_la_kf']?></div>
			<div class="kf-wx fs14">微信号：<?=$public_r['add_muban_la_wx']?></div>
			<div class="kf-code-img"></div>
		</div>
		<div class="video-out">
			<img src="/images/video-out.png">
        </div>
		<div class="gl-top2">
			<div class="gl-top2-title">
				<div class="gl-top2-title-img"></div>
				<div class="gl-top2-title-text fs16">试玩攻略</div>
			</div>
			<div class="gl-fist">
				<div class="gl-fist-img"></div>
				<div class="gl-fist-text">
					<div class="gl-fist-title fs15">任务更新</div>
					<div class="gl-fist-intro fs13">苹果所有试玩平台每天下午15:00以后准时更新任务（除了部分有任务通知平台）</div>
				</div>
			</div>
			<div class="gl-second">
				<div class="gl-second-img"></div>
				<div class="gl-second-text">
					<div class="gl-second-title fs15">赚更多钱</div>
					<div class="gl-second-intro fs13">每个试玩平台更新任务有限，想赚更多？在此提供的所有平台都可以做哦，轻轻松松日赚上百元！</div>
				</div>
			</div>
		</div>
		
				<div class="middle-body">
			<div class="gl-middle">
				<div class="gl-more">
					<div class="gl-more-img"></div>
					<div class="gl-more-text fs14">更多攻略</div>
				</div>
				<div class="item-list">
				<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo',1000,0,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<a href="<?=$bqsr['titleurl']?>">
					<div class="gl-item">
						<div class="gl-item-img">
						<img src="<?=$bqr['titlepic']?>">
						</div>
						<div class="gl-item-detail">
							<div class="gl-item-title"><?=$bqr['title']?></div>
							<div class="gl-item-readnum">阅读量：<?=$bqr['onclick']+5210?></div>
						</div>
					</div>
					</a>
					<?php
}
}
?>
				</div>
			</div>
		</div>
		<br /><br />
		
		<div class="kf-code">
			<div class="kf-code-body">
				<div class="kf-code-close"></div>
				<div class="kf-erweima">
					<img src="/images/weixin.jpg" />
				</div>
				<div class="kf-code-text1 fs14">长按并储存二维码图片</div>
				<div class="kf-code-text2 fs14">打开微信扫一扫识别该二维码</div>
				<div class="kf-code-text3 fs14">添加客服微信号</div>
			</div>
		</div>
	</body>	
	<script type="text/javascript" src="/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="/js/utils.js"></script>
	<script type="text/javascript" src="/js/gonglue.js"></script>
</html>
<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
		<title>试客玩_<?=$public_r[sitename]?></title>
		<meta name="keywords" content="试客玩app试玩赚钱试玩app苹果试玩赚" />
		<meta name="description" content="试客玩app试玩赚钱试玩app苹果试玩赚" />        
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<script type="text/javascript" src="/templets/youxi/js/rem.js"></script>
		<script type="text/javascript" src="/templets/youxi/js/jquery-1.7.2.min.js"></script>
		<link href="/templets/youxi/css/swiper-3.4.1.min.css" rel="stylesheet">
		<link rel="stylesheet" href="/templets/youxi/css/common.css" />
		<link rel="stylesheet" type="text/css" href="/templets/youxi/css/index.css" />
        
</head>
<body class="body">
		<div class="switch-top">
			<div class="switch">
				<div class="switch-left switch-sm fs18"><?=$public_r[sitename]?><span class="plate-arrow"></span></div>
				<div class="switch-right fs16"><span class="weather-city"></span><img class="weather-icon" src="/images/cond-icon-heweather100.png" /><span class="weather-tem"></span> ℃</div>
			</div>
		</div>
		<div class="switch-popup">
			<div class="switch">
				<div class="switch-left switch-big fs18"><?=$public_r[sitename]?><span class="plate-arrow"></span></div>
				<div class="switch-right fs16"><span class="weather-city"></span><img class="weather-icon" /><span class="weather-tem"></span> ℃</div>
			</div>
			<div class="system system-first system-ios">
				<div class="system-left fs15"><?=$public_r[sitename]?>-苹果版</div>
				<div class="system-now system-now-ios fs12"><span>当前</span></div>
			</div>
			<div class="system system-android">
				<div class="system-left fs15"><?=$public_r[sitename]?>-安卓版</div>
				<div class="system-now system-now-android fs12"><span>当前</span></div>
			</div>
		</div>
		<div class="index-top-body">
			<div class="top-img swiper-container">
				<!--轮播图-->
				<div class="swiper-wrapper" id="bannerList">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('news1',10,18,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<a href="<?=$bqr['link']?>" class="banner swiper-slide" style="height: 100%;width: 100%;">
			<img src="<?=$bqr['titlepic']?>" width="100%" height="100%">
		</a>
<?php
}
}
?>
				</div>
				<div class="swiper-pagination"></div>
			</div>
			<div class="top-text">
				<div class="top-text-icon"></div>
				<!--公告文字-->
				<div class="scroll-text top-text-notice fs14" id="scroll-text">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('news1',10,18,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<div class="scroll-auto scroll-text"><?=$bqr['title']?></div>
<?php
}
}
?>  
				</div>
			</div>
			<div class="gonlue-button"></div>
		</div>
		<!--<div class="index-blank"></div>-->
		<div class="index-middle-body">
			<div class="middle-title">
				<div class="middle-title-text fs16">苹果赚钱优选</div>
				<div class="middle-title-count fs14"><span id="checkPeopleNum"></span>人正在试玩</div>
			</div>
			<div class="index-list">
	<!--列表模板-->
    <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,1000,0,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
    <?php
	$type=$bqr[type];
	switch ($type){
	case 1:
	$typename='最佳';
	break;
	case 2:
	$typename='推荐';
	break;
	case 3:
	$typename='必做';
	break;
	case 4:
	$typename='最新';
	break;
	case 5:
	$typename='活多';
	break;
	}
	?>
<a class="platform-a" href="<?=$bqsr['titleurl']?>" >
			<div class="platform">
				<div class="platform-icon">
					<img src="<?=$bqr['titlepic']?>" />
				</div>
				<div class="platform-title">
					<div class="platform-title-text fs17"><span class="platform-name"><strong><?=$bqr['title']?></strong></span>					
					<div class="label label<?=$bqr['type']?> fs10"><?=$typename?></div> 				
					</div>
					<div class="platform-title-intro fs13">
						试玩每单收入<?=$bqr['rew']?>元
					</div>
				</div>
				<div class="platform-buttont fs14">去赚钱</div>
			</div>
		</a>
<?php
}
}
?>
      
			</div>	
			<!--更多赚钱平台正在更新中-->
			<div class="more-plat fs12">
				<div class="more-plat-title">更多赚钱平台正在更新中</div>
				<div class="more-plat-intro">请持续关注哦~</div>
			</div>
		</div>				
		<!-- 描述：首页引导-->
		<div class="guide-index">
			<div class="guide-index-text"></div>
			<div class="guide-index-template">			
	      <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,1,1,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
    <?php
	$type=$bqr[type];
	switch ($type){
	case 1:
	$typename='最佳';
	break;
	case 2:
	$typename='推荐';
	break;
	case 3:
	$typename='必做';
	break;
	case 4:
	$typename='最新';
	break;
	case 5:
	$typename='活多';
	break;
	}
	?>
<a class="platform-a" href="<?=$bqsr['titleurl']?>" >
<div class="guide-index-item">
			<div class="platform">
				<div class="platform-icon">
					<img src="<?=$bqr['titlepic']?>" />
				</div>
				<div class="platform-title">
					<div class="platform-title-text fs17"><span class="platform-name"><strong><?=$bqr['title']?></strong></span>					
					<div class="label label<?=$bqr['type']?> fs10"><?=$typename?></div> 				
					</div>
					<div class="platform-title-intro fs13">
						试玩每单收入<?=$bqr['rew']?>元
					</div>
				</div>
				<div class="platform-buttont fs14">去赚钱</div>
			</div>
</div>
		</a>
<?php
}
}
?>
			
			</div>			
		</div>
		<!--底部的添加到桌面-->
		<div class="index-bottom-guide-fa">
			<div class="index-bottom-guide">
				<img id="enterImg" src="" />
				<div class="index-bottom-guide-text">
					<div class="index-bottom-guide-text1" id="enterTitle"></div>
					<div class="index-bottom-guide-text2" id="enterDiscribe"></div>
				</div>
				<div class="index-bottom-guide-button-down">立即安装</div>
				<div class="index-bottom-guide-button-close">以后再说</div>
			</div>
		</div>
		<!--添加到桌面新方式-->
		<div class="add-to-desk-mask">
			<div class="add-to-desk">
				<div class="add-header">
					<div class="add-back"></div>
					<div class="add-title">添加到主屏幕</div>
				</div>
				<div class="add-item">
					<div class="add-item-title">
						<span class="add-order">1</span>点击底部“ <span class="add-desk-intro"></span> ”按钮
					</div>
					<div class="add-item-img add-item-img1"></div>
				</div>
				<div class="add-item">
					<div class="add-item-title">
						<span class="add-order">2</span>点击添加到主屏幕
					</div>
					<div class="add-item-img add-item-img2"></div>
				</div>
				<div class="add-item">
					<div class="add-item-title">
						<span class="add-order">3</span>点击右上角添加
					</div>
					<div class="add-item-img add-item-img3">
						<div class="add-icon"><img class="add-icon-img" src=''/></div>
						<div class="add-titles"><?=$public_r[sitename]?></div>
						<div class="add-link"></div>
					</div>
				</div>
				<div class="add-item add-item-b">
					<div class="add-item-img add-item-bottom">
						<div class="add-icon-little"><img class="add-icon-img" src=''/></div>
						<div class="add-icon-little-name"></div>
						<div class="add-finger"></div>
					</div>
				</div>
			</div>
		</div>
		<!--添加到桌面老方式-->
		<div class="add-desk"><div class="add-desk-img"></div></div>
		<div class="open-safari"><div class="open-safari-img-new"></div></div>
		<!--新手视频教程-->
		<div class="video-button"><div class="video-button-close"></div></div>
		<div class="video">
			<div class="video-out">
			 	<img src="http://img.shoushanghuo.com/video-out.png">
			</div>
		</div>
		<!--支付宝红包-->
		<div class="hongbao-button trans"></div>
		<div class="get-hongbao">
			<div class="hongbao-body">
				<div class="hongbao-body-l1 fs13">每次付款前都可以来领一次哦</div>
				<div class="hongbao-body-l2 fs18">您的领取码已生成</div>
				<div class="hongbao-body-code fs20"><span class="hongbao-code"><?=$public_r[add_muban_la_zfb]?></span></div>
				<div class="hongbao-body-l4 fs14">打开支付宝搜索“<span class="hongbao-code"></span>”</div>
				<div class="hongbao-body-l5 fs14">即可领取红包</div>
				<div class="hongbao-body-l6 fs16">红包线下付款可用</div>
				<div class="hongbao-body-l7 fs16">余额宝支付补贴最大</div>
				<button class="hongbao-body-b1 fs16 shareHongbao" onclick="" id="hongbao" type="button" data-clipboard-target="#copyhongbao" aria-label="复制成功！">一键复制</button>
				<div class="hongbao-body-b2 fs14 open-ali">去支付宝粘贴</div>
				<div class="hongbao-close"></div>
				<input class="copytext" id="copyhongbao" value="<?=$public_r[add_muban_la_zfb]?>">
			</div>
		</div>

		<div class="footer">
			<div class="navbar">
				<a class="navbar-item navbar-index"> <i class="navbar-icon icon-indexs"></i>
					<p class="navbar-descs">
						苹果赚钱
					</p>
				</a>
				<a class="navbar-item navbar-recommend"> <i class="navbar-icon icon-recommend"></i>
					<p class="navbar-desc">
						安卓赚钱
					</p>
				</a>
				<a class="navbar-item navbar-read"> <i class="navbar-icon icon-read"></i>
					<p class="navbar-desc">
						阅读赚钱
					</p>
				</a>
			</div>
		</div>
	</body>
	<!-- 滚动公告列表以及顶部点击事件 -->
	<script type="text/javascript">
   function get_query_val2(name) {
	var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
	var r = window.location.search.substr(1).match(reg);
	if(r != null) return unescape(r[2]);
	return null;
}	
		function autoScroll(obj) {
			$(obj).find("#scroll-text").animate({
				marginTop: "-35px"
			}, 500, function() {
				$(this).css({
					marginTop: "0px"
				}).find(".scroll-auto:first").appendTo(this);
			})
		}
		$(function() {
			setInterval('autoScroll(".top-text")', 2500);
		})
		
	$(".switch-sm").click(function(){
		$(".switch-popup").show();
		var nowType2 = '<?=$GLOBALS[navclassid]?>';
	    if(nowType2==2){
		$(".system-now-android").show();				
		}else{
		$(".system-now-ios").show();}		
	});		
		$(".switch-big").click(function(){
		$(".switch-popup").hide();
	});	
		
		
	</script>
        <script src="/templets/youxi/js/clipboard.min.js"></script>
	    <script type="text/javascript" src="/templets/youxi/js/swiper-3.4.1.min.js"></script>
	    <script type="text/javascript" src="/templets/youxi/js/utils.js"></script>
		<script type="text/javascript" src="/templets/youxi/js/common.js"></script>
		<script type="text/javascript" src="/templets/youxi/js/index.js"></script>	
</html>
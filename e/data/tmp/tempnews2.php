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
		<script type="text/javascript" src="/templets/youxi/js/rem.js"></script>
		<script type="text/javascript" src="/templets/youxi/js/jquery-1.7.2.min.js"></script>
		<link rel="stylesheet" href="/templets/youxi/css/common.css" />
		<link rel="stylesheet" type="text/css" href="/templets/youxi/css/platformDetail.css" />
		<link href="/templets/youxi/css/swiper-3.4.1.min.css" rel="stylesheet">
      <link rel="apple-touch-icon" href="/images/wjj.png" type="image/png">
      <link rel="shortcut icon" href="/images/wjj.png" type="image/png">  
		<title><?=$grpagetitle?></title>
	</head>
	<body class="body">
		<header class="header">
			<div class="back"></div>
			<div class="title">平台详情</div>
			<div class="tool"></div>
		</header>
		<!--右上角分享按钮-->
		<div class="plat-share"></div>
		<div id="detailCon">		
			<div class="plat-top">
			<div class="plat-top-money fs14"><span class="fs50 to-user-price"><?=$ecms_gr[rew]?></span>元起</div>
			<button class="plat-top-ok fs12">试玩任务奖励</button>
			<div class="top-condition">	
            <?php
			$sup=$navinfor[sup];
	if(strpos($sup,'1') !== false){ 
			?>
        <div class="top-condition-item">
					<div class="condition-item-img condition-item-img-alipay"></div>
					<span class="condition-item-text fs12">支付宝</span>
				    </div>
            <?php }?> 
            <?php
			$sup=$navinfor[sup];
	if(strpos($sup,'2') !== false){ 
			?>       
        <div class="top-condition-item">
					<div class="condition-item-img condition-item-img-wxpay"></div>
					<span class="condition-item-text fs12">微信</span>
				         </div>	
                <?php }?>          		
				<div class="top-condition-item">
					<div class="condition-item-img condition-item-img-tx"></div>
					<span class="condition-item-text fs12"><?=$ecms_gr[cash]?>元提现</span>
				</div>
			</div>
		</div>
		<!--下载安装试玩平台-->
		<div class="plat-main">
			<div class="plat-main-title fs15">下载安装试玩平台</div>
			<div class="plat-main-body">
				<div class="plat-main-icon">
					<img class="plat-img" src="<?=empty($ecms_gr[titlepic])?$public_r[newsurl].'e/data/images/notimg.gif':$ecms_gr[titlepic]?>" alt="">
				</div>
				<div class="plat-main-name fs16">
					<?=$ecms_gr[title]?>
				</div>
				<div class="plat-main-button fs16">开始赚钱</div>
				<div class="plat-main-intro fs13">任务更新时间集中在15:00～18:00</div>
			</div>
		</div>
		<!--视频教程-->
		<?php 
		if($navinfor[video]){ ?>
		<div class="shipinjc">		
		<div class="shipinjc_title fs15">视频教程</div>			
		<div class="shipinjc_body"> 
    <?=$ecms_gr[video]?>
		</div>				
		</div>
        <?php }?>					
		<!--平台介绍-->
		<div class="plat-detail">
			<div class="plat-detail-title fs15">平台介绍</div>
			<div class="plat-detail-body">
				<div class="plat-detail-intro fs13">
                <?=$ecms_gr[intro]?>
				</div>
			</div>
		</div>
		<!--特别注意-->
		<?php 
		if($navinfor[attention]){ ?>
		<div class="plat-middle">
			<div class="plat-middle-title fs15">特别注意</div>
			<div class="plat-middle-body">
				<?=$ecms_gr[attention]?>
			</div>
		</div>
        <?php }?>	
		<div class="plat-recommend fs14">- 下载此平台的人也下载了 -</div>
		<div class="recommend-list">
        <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,3,1,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
			<a class="recommend-item" href="<?=$bqsr['titleurl']?>" >
				<div class="recommend-item-icon">
					<img class="recommend-plat-img" src="<?=$bqr['titlepic']?>" />
				</div>
				<div class="recommend-item-name fs14">
					<strong><?=$bqr['title']?></strong>
				</div>
			</a>
            <?php
}
}
?>
		</div>
		</div>
		
		<!-- 描述：分享引导-->
		<div class="guide-share">
			<div class="guide-share-icon"></div>
			<div class="guide-share-text"></div>
		</div>
		<!-- 描述：开始赚钱引导-->
		<div class="guide-plate">
			<div class="guide-plate-text"></div>
			<div class="guide-plate-start fs16">开始赚钱</div>
			<div class="guide-plate-button fs16">知道了</div>
		</div>
		<!-- 复制弹窗-->
		<div class="mask"></div>
		<div class="copydiv" id="copydiv">
			<div style="padding: 10% 7% 8% 7%;">
				<p class="shareToText">复制链接分享至你想发布的任何地方， 让好友和你一起赚钱！
				</p>
				<p class="shareToLink" id="shareToLink"><?=$ecms_gr[down]?></p>
				<input class="copytext" id="copytext" value="<?=$ecms_gr[down]?>">
				<button onclick="" id="shareBtn" type="button" class="btn shareBtn" data-clipboard-target="#copytext" aria-label="复制成功！">
            		复制
        		</button>
			</div>
		</div>
		<div class="sharediv" id="sharediv">
			<div class="sharediv-body">
				<div class="sharediv-img">
					<img id="shareImg" src="" />
				</div>
				<div class="sharediv-title fs16">扫码加入</div>
				<div class="sharediv-intro fs12">分享二维码，让好友和你一起赚钱</div>
				<div class="sharediv-save fs15">长按保存或邀请朋友当面扫码</div>
				<div class="sharediv-close"></div>
			</div>
		</div>
	</body>	
	<script type="text/javascript">
$(function () {
       $('.plat-main-button,.guide-plate-start').on('click',function () {
                window.location.href ="<?=$ecms_gr[down]?>";
            });
});
</script>
	<script src="/templets/youxi/js/swiper-3.4.1.min.js"></script>
	<script src="/templets/youxi/js/clipboard.min.js"></script>
	<script type="text/javascript" src="/templets/youxi/js/utils.js?v=001"></script>
	<script type="text/javascript" src="/templets/youxi/js/platformDetail.js?v=001"></script>	
</html>
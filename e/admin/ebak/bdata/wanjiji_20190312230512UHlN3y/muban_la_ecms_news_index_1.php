<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `muban_la_ecms_news_index`;");
E_C("CREATE TABLE `muban_la_ecms_news_index` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `checked` (`checked`),
  KEY `newstime` (`newstime`),
  KEY `truetime` (`truetime`,`id`),
  KEY `havehtml` (`classid`,`truetime`,`havehtml`,`checked`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `muban_la_ecms_news_index` values('1','4','1','1550637330','1550637369','1555131352','1');");
E_D("replace into `muban_la_ecms_news_index` values('2','4','1','1555126618','1555126759','1555131763','1');");
E_D("replace into `muban_la_ecms_news_index` values('3','4','1','1555127194','1555127357','1555131185','1');");
E_D("replace into `muban_la_ecms_news_index` values('4','4','1','1555131877','1555132046','1555132112','1');");
E_D("replace into `muban_la_ecms_news_index` values('5','4','1','1555132188','1555132290','1555132290','1');");
E_D("replace into `muban_la_ecms_news_index` values('6','4','1','1554970583','1555143486','1555143486','1');");

@include("../../inc/footer.php");
?>
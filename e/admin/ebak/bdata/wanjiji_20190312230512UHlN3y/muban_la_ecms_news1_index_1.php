<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `muban_la_ecms_news1_index`;");
E_C("CREATE TABLE `muban_la_ecms_news1_index` (
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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `muban_la_ecms_news1_index` values('1','5','1','1555144174','1550637872','1555143855','1');");
E_D("replace into `muban_la_ecms_news1_index` values('2','5','1','1550650784','1550650844','1555143612','1');");
E_D("replace into `muban_la_ecms_news1_index` values('3','5','1','1555140810','1555140950','1555140950','1');");
E_D("replace into `muban_la_ecms_news1_index` values('4','5','1','1555142066','1555142130','1555144786','1');");

@include("../../inc/footer.php");
?>
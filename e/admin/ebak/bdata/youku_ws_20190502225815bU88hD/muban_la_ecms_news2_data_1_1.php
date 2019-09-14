<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `muban_la_ecms_news2_data_1`;");
E_C("CREATE TABLE `muban_la_ecms_news2_data_1` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keyid` varchar(255) NOT NULL DEFAULT '',
  `dokey` tinyint(1) NOT NULL DEFAULT '0',
  `newstempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `closepl` tinyint(1) NOT NULL DEFAULT '0',
  `haveaddfen` tinyint(1) NOT NULL DEFAULT '0',
  `infotags` varchar(80) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `muban_la_ecms_news2_data_1` values('1','3','','0','0','0','0','');");
E_D("replace into `muban_la_ecms_news2_data_1` values('2','3','','0','0','0','0','');");
E_D("replace into `muban_la_ecms_news2_data_1` values('3','3','','0','0','0','0','');");

@include("../../inc/footer.php");
?>
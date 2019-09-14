<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `muban_la_ecms_download_data_1`;");
E_C("CREATE TABLE `muban_la_ecms_download_data_1` (
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
E_D("replace into `muban_la_ecms_download_data_1` values('60','1','','0','0','0','0','');");
E_D("replace into `muban_la_ecms_download_data_1` values('61','1','','0','0','0','0','');");
E_D("replace into `muban_la_ecms_download_data_1` values('63','1','','0','0','0','0','');");
E_D("replace into `muban_la_ecms_download_data_1` values('65','1','','0','0','0','0','');");
E_D("replace into `muban_la_ecms_download_data_1` values('90','1','','0','0','0','0','');");
E_D("replace into `muban_la_ecms_download_data_1` values('67','1','','0','0','0','0','');");
E_D("replace into `muban_la_ecms_download_data_1` values('68','1','','0','0','0','0','');");
E_D("replace into `muban_la_ecms_download_data_1` values('69','1','','0','0','0','0','');");
E_D("replace into `muban_la_ecms_download_data_1` values('70','1','','0','0','0','0','');");
E_D("replace into `muban_la_ecms_download_data_1` values('71','1','','0','0','0','0','');");
E_D("replace into `muban_la_ecms_download_data_1` values('72','1','','0','0','0','0','');");
E_D("replace into `muban_la_ecms_download_data_1` values('73','1','','0','0','0','0','');");
E_D("replace into `muban_la_ecms_download_data_1` values('75','1','','0','0','0','0','');");
E_D("replace into `muban_la_ecms_download_data_1` values('76','1','','0','0','0','0','');");
E_D("replace into `muban_la_ecms_download_data_1` values('78','1','','0','0','0','0','');");
E_D("replace into `muban_la_ecms_download_data_1` values('80','1','','0','0','0','0','');");
E_D("replace into `muban_la_ecms_download_data_1` values('81','1','','0','0','0','0','');");
E_D("replace into `muban_la_ecms_download_data_1` values('82','1','','0','0','0','0','');");
E_D("replace into `muban_la_ecms_download_data_1` values('91','2','','0','0','0','0','');");
E_D("replace into `muban_la_ecms_download_data_1` values('89','1','','0','0','0','0','');");
E_D("replace into `muban_la_ecms_download_data_1` values('85','1','','0','0','0','0','');");
E_D("replace into `muban_la_ecms_download_data_1` values('86','1','','0','0','0','0','');");
E_D("replace into `muban_la_ecms_download_data_1` values('87','1','','0','0','0','0','');");
E_D("replace into `muban_la_ecms_download_data_1` values('88','1','','0','0','0','0','');");

@include("../../inc/footer.php");
?>
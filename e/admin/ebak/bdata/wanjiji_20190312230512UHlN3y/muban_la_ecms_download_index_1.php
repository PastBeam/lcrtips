<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `muban_la_ecms_download_index`;");
E_C("CREATE TABLE `muban_la_ecms_download_index` (
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
) ENGINE=MyISAM AUTO_INCREMENT=92 DEFAULT CHARSET=utf8");
E_D("replace into `muban_la_ecms_download_index` values('87','1','1','1550660379','1550654303','1555150617','1');");
E_D("replace into `muban_la_ecms_download_index` values('86','1','1','1550656722','1550654302','1555150645','1');");
E_D("replace into `muban_la_ecms_download_index` values('85','1','1','1550656300','1550654302','1555150664','1');");
E_D("replace into `muban_la_ecms_download_index` values('89','1','1','1555151461','1555151632','1555208054','1');");
E_D("replace into `muban_la_ecms_download_index` values('91','2','1','1555211191','1555211667','1555211667','1');");
E_D("replace into `muban_la_ecms_download_index` values('82','1','1','1550656241','1550654301','1555150681','1');");
E_D("replace into `muban_la_ecms_download_index` values('81','1','1','1550654262','1550654301','1555150305','1');");
E_D("replace into `muban_la_ecms_download_index` values('80','1','1','1550656605','1550654300','1555150713','1');");
E_D("replace into `muban_la_ecms_download_index` values('78','1','1','1550654263','1550654300','1555150742','1');");
E_D("replace into `muban_la_ecms_download_index` values('76','1','1','1550654264','1550654300','1555150755','1');");
E_D("replace into `muban_la_ecms_download_index` values('75','1','1','1550654264','1550654299','1555150770','1');");
E_D("replace into `muban_la_ecms_download_index` values('73','1','1','1550654265','1550654299','1555150784','1');");
E_D("replace into `muban_la_ecms_download_index` values('72','1','1','1550656488','1550654298','1555150804','1');");
E_D("replace into `muban_la_ecms_download_index` values('71','1','1','1550654267','1550654298','1555150821','1');");
E_D("replace into `muban_la_ecms_download_index` values('70','1','1','1550654266','1550654298','1555150908','1');");
E_D("replace into `muban_la_ecms_download_index` values('69','1','1','1550656605','1550654298','1555150927','1');");
E_D("replace into `muban_la_ecms_download_index` values('68','1','1','1550654267','1550654298','1555150941','1');");
E_D("replace into `muban_la_ecms_download_index` values('67','1','1','1550654268','1550654297','1555150968','1');");
E_D("replace into `muban_la_ecms_download_index` values('90','1','1','1555152716','1555152850','1555208314','1');");
E_D("replace into `muban_la_ecms_download_index` values('65','1','1','1550654269','1550654297','1555150983','1');");
E_D("replace into `muban_la_ecms_download_index` values('63','1','1','1550654271','1550654296','1555150998','1');");
E_D("replace into `muban_la_ecms_download_index` values('61','1','1','1550656359','1550654295','1555151012','1');");
E_D("replace into `muban_la_ecms_download_index` values('60','1','1','1550654260','1550654295','1555151036','1');");
E_D("replace into `muban_la_ecms_download_index` values('88','1','1','1550656780','1550654303','1555150563','1');");

@include("../../inc/footer.php");
?>
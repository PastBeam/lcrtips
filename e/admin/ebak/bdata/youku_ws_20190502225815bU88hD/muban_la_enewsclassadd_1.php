<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `muban_la_enewsclassadd`;");
E_C("CREATE TABLE `muban_la_enewsclassadd` (
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classtext` mediumtext NOT NULL,
  `ttids` text NOT NULL,
  `eclasspagetext` mediumtext NOT NULL,
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `muban_la_enewsclassadd` values('1','','','');");
E_D("replace into `muban_la_enewsclassadd` values('2','','','');");
E_D("replace into `muban_la_enewsclassadd` values('3','','','');");
E_D("replace into `muban_la_enewsclassadd` values('4','','','');");
E_D("replace into `muban_la_enewsclassadd` values('5','','','');");

@include("../../inc/footer.php");
?>
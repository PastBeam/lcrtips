<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `muban_la_enewstempgroup`;");
E_C("CREATE TABLE `muban_la_enewstempgroup` (
  `gid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `gname` varchar(60) NOT NULL DEFAULT '',
  `isdefault` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`gid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `muban_la_enewstempgroup` values('1',0xe9bb98e8aea4e6a8a1e69dbfe7bb84,'1');");

@include("../../inc/footer.php");
?>
<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `muban_la_enewsloginfail`;");
E_C("CREATE TABLE `muban_la_enewsloginfail` (
  `ip` varchar(20) NOT NULL DEFAULT '',
  `num` tinyint(4) NOT NULL DEFAULT '0',
  `lasttime` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ip`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `muban_la_enewsloginfail` values(0x3132372e302e302e31,'1','1550487344');");

@include("../../inc/footer.php");
?>
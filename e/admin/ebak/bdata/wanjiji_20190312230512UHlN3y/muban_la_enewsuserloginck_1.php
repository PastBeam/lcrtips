<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `muban_la_enewsuserloginck`;");
E_C("CREATE TABLE `muban_la_enewsuserloginck` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `andauth` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `muban_la_enewsuserloginck` values('1',0x6335653930356262663834303861386164613862623062393331663563633962);");

@include("../../inc/footer.php");
?>
<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `muban_la_enewspubvar`;");
E_C("CREATE TABLE `muban_la_enewspubvar` (
  `varid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `myvar` varchar(60) NOT NULL DEFAULT '',
  `varname` varchar(20) NOT NULL DEFAULT '',
  `varvalue` text NOT NULL,
  `varsay` varchar(255) NOT NULL DEFAULT '',
  `myorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `tocache` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`varid`),
  UNIQUE KEY `varname` (`varname`),
  KEY `classid` (`classid`),
  KEY `tocache` (`tocache`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `muban_la_enewspubvar` values('1',0x6d7562616e5f6c615f7a6662,0xe694afe4bb98e5ae9de6909ce7b4a2e7a081,0x353733333438323832,0xe694afe4bb98e5ae9de9a286e7baa2e58c85e6909ce7b4a2e7a081,'0','0','1');");
E_D("replace into `muban_la_enewspubvar` values('2',0x6d7562616e5f6c615f6b66,0xe5beaee4bfa1e5aea2e69c8de5908de7a7b0,0xe5b08fe8a1a8e5a6b9,0xe694bbe795a5e58897e8a1a8e4b8ade5beaee4bfa1e5aea2e69c8de5908de7a7b0,'0','0','1');");
E_D("replace into `muban_la_enewspubvar` values('3',0x6d7562616e5f6c615f7778,0xe5beaee4bfa1e58fb7,0x646171692d2d2d2d2d,0xe99885e8afbbe58897e8a1a8e4b8ade5beaee4bfa1e58fb7,'0','0','1');");
E_D("replace into `muban_la_enewspubvar` values('4',0xe68e92e5ba8f,0xe5898de58fb0e68e92e5ba8fe8afb4e6988e,0xe5898de58fb0e68e92e5ba8fe698afe68c89e785a7e58f91e5b883e697b6e997b4e58092e5ba8fe68e92e5ba8fefbc8ce5b0b1e698afe8afb4e58f91e5b883e697b6e997b4e8b68ae6999ae79a84e68e92e59ca8e8b68ae5898de99da2,'','0','0','0');");

@include("../../inc/footer.php");
?>
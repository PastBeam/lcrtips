<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `muban_la_enewsuser`;");
E_C("CREATE TABLE `muban_la_enewsuser` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `rnd` varchar(20) NOT NULL DEFAULT '',
  `adminclass` mediumtext NOT NULL,
  `groupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `styleid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `filelevel` tinyint(1) NOT NULL DEFAULT '0',
  `salt` varchar(8) NOT NULL DEFAULT '',
  `loginnum` int(10) unsigned NOT NULL DEFAULT '0',
  `lasttime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastip` varchar(20) NOT NULL DEFAULT '',
  `truename` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(120) NOT NULL DEFAULT '',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `pretime` int(10) unsigned NOT NULL DEFAULT '0',
  `preip` varchar(20) NOT NULL DEFAULT '',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `addip` varchar(20) NOT NULL DEFAULT '',
  `userprikey` varchar(50) NOT NULL DEFAULT '',
  `salt2` varchar(20) NOT NULL DEFAULT '',
  `lastipport` varchar(6) NOT NULL DEFAULT '',
  `preipport` varchar(6) NOT NULL DEFAULT '',
  `addipport` varchar(6) NOT NULL DEFAULT '',
  `uprnd` varchar(32) NOT NULL DEFAULT '',
  `wname` varchar(60) NOT NULL DEFAULT '',
  `tel` varchar(20) NOT NULL DEFAULT '',
  `wxno` varchar(80) NOT NULL DEFAULT '',
  `qq` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `muban_la_enewsuser` values('1',0x6d7562616e,0x3930363062616263336533633832613135653630376539343061633538373838,0x754d324e426f584d71456a486a5132725a714f68,'','1','0','1','0',0x313158613341385a,'13','1555235718',0x3132352e34332e38362e323033,'',0x6d7562616e,'0','1555206606',0x3132352e34332e38362e323033,'1550487335',0x3132372e302e302e31,0x333658486c566a743768717666356d6b6e374e50505368684f6c41476e4342566341585346397a5832655a49624d6c6b,0x6d6355374e3766753534754636576d696e6a6b36,0x3232383233,0x3233333237,0x3631333537,'','','','','');");

@include("../../inc/footer.php");
?>
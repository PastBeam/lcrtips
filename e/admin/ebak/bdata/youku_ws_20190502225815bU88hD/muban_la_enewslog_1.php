<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `muban_la_enewslog`;");
E_C("CREATE TABLE `muban_la_enewslog` (
  `loginid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `logintime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `loginip` varchar(20) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(30) NOT NULL DEFAULT '',
  `loginauth` tinyint(1) NOT NULL DEFAULT '0',
  `ipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`loginid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8");
E_D("replace into `muban_la_enewslog` values('1',0x726f6f74,'2019-02-18 18:55:44',0x3132372e302e302e31,'0','','0',0x3631333835);");
E_D("replace into `muban_la_enewslog` values('2',0x6d7562616e,'2019-02-18 18:55:55',0x3132372e302e302e31,'1','','0',0x3631343335);");
E_D("replace into `muban_la_enewslog` values('3',0x6d7562616e,'2019-02-18 20:53:00',0x3132372e302e302e31,'1','','0',0x3536343231);");
E_D("replace into `muban_la_enewslog` values('4',0x6d7562616e,'2019-02-26 11:57:32',0x3132372e302e302e31,'1','','0',0x3439363237);");
E_D("replace into `muban_la_enewslog` values('5',0x6d7562616e,'2019-02-28 21:51:38',0x3132372e302e302e31,'1','','0',0x3530323939);");
E_D("replace into `muban_la_enewslog` values('6',0x6d7562616e,'2019-03-01 23:18:02',0x3132372e302e302e31,'1','','0',0x3439343231);");
E_D("replace into `muban_la_enewslog` values('7',0x6d7562616e,'2019-03-02 21:59:24',0x3132372e302e302e31,'1','','0',0x3538333036);");
E_D("replace into `muban_la_enewslog` values('8',0x6d7562616e,'2019-03-12 22:06:08',0x3132372e302e302e31,'1','','0',0x3439323538);");
E_D("replace into `muban_la_enewslog` values('9',0x6d7562616e,'2019-04-12 13:59:30',0x34322e3232382e3232352e323137,'1','','0',0x35383932);");
E_D("replace into `muban_la_enewslog` values('10',0x6d7562616e,'2019-04-12 16:51:51',0x34322e3232382e3232352e323137,'1','','0',0x36363337);");
E_D("replace into `muban_la_enewslog` values('11',0x6d7562616e,'2019-04-13 10:50:12',0x34322e3232382e3232352e323137,'1','','0',0x36373337);");
E_D("replace into `muban_la_enewslog` values('12',0x6d7562616e,'2019-04-13 13:27:31',0x34322e3232382e3232352e323137,'1','','0',0x36333239);");
E_D("replace into `muban_la_enewslog` values('13',0x6d7562616e,'2019-04-14 09:50:06',0x3132352e34332e38362e323033,'1','','0',0x3233333237);");
E_D("replace into `muban_la_enewslog` values('14',0x6d7562616e,'2019-04-14 17:55:18',0x3132352e34332e38362e323033,'1','','0',0x3232383233);");
E_D("replace into `muban_la_enewslog` values('15',0x6d7562616e,'2019-05-02 22:56:11',0x3232322e3133382e3232322e3232,'1','','0',0x34323630);");

@include("../../inc/footer.php");
?>
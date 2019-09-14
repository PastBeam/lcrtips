<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `muban_la_enewsclass`;");
E_C("CREATE TABLE `muban_la_enewsclass` (
  `classid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `bclassid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classname` varchar(50) NOT NULL DEFAULT '',
  `sonclass` text NOT NULL,
  `is_zt` tinyint(1) NOT NULL DEFAULT '0',
  `lencord` smallint(6) NOT NULL DEFAULT '0',
  `link_num` tinyint(4) NOT NULL DEFAULT '0',
  `newstempid` smallint(6) NOT NULL DEFAULT '0',
  `onclick` int(11) NOT NULL DEFAULT '0',
  `listtempid` smallint(6) NOT NULL DEFAULT '0',
  `featherclass` text NOT NULL,
  `islast` tinyint(1) NOT NULL DEFAULT '0',
  `classpath` text NOT NULL,
  `classtype` varchar(10) NOT NULL DEFAULT '',
  `newspath` varchar(20) NOT NULL DEFAULT '',
  `filename` tinyint(1) NOT NULL DEFAULT '0',
  `filetype` varchar(10) NOT NULL DEFAULT '',
  `openpl` tinyint(1) NOT NULL DEFAULT '0',
  `openadd` tinyint(1) NOT NULL DEFAULT '0',
  `newline` int(11) NOT NULL DEFAULT '0',
  `hotline` int(11) NOT NULL DEFAULT '0',
  `goodline` int(11) NOT NULL DEFAULT '0',
  `classurl` varchar(200) NOT NULL DEFAULT '',
  `groupid` smallint(6) NOT NULL DEFAULT '0',
  `myorder` smallint(6) NOT NULL DEFAULT '0',
  `filename_qz` varchar(20) NOT NULL DEFAULT '',
  `hotplline` tinyint(4) NOT NULL DEFAULT '0',
  `modid` smallint(6) NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `firstline` tinyint(4) NOT NULL DEFAULT '0',
  `bname` varchar(50) NOT NULL DEFAULT '',
  `islist` tinyint(1) NOT NULL DEFAULT '0',
  `searchtempid` smallint(6) NOT NULL DEFAULT '0',
  `tid` smallint(6) NOT NULL DEFAULT '0',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `maxnum` int(11) NOT NULL DEFAULT '0',
  `checkpl` tinyint(1) NOT NULL DEFAULT '0',
  `down_num` tinyint(4) NOT NULL DEFAULT '0',
  `online_num` tinyint(4) NOT NULL DEFAULT '0',
  `listorder` varchar(50) NOT NULL DEFAULT '',
  `reorder` varchar(50) NOT NULL DEFAULT '',
  `intro` text NOT NULL,
  `classimg` varchar(255) NOT NULL DEFAULT '',
  `jstempid` smallint(6) NOT NULL DEFAULT '0',
  `addinfofen` int(11) NOT NULL DEFAULT '0',
  `listdt` tinyint(1) NOT NULL DEFAULT '0',
  `showclass` tinyint(1) NOT NULL DEFAULT '0',
  `showdt` tinyint(1) NOT NULL DEFAULT '0',
  `checkqadd` tinyint(1) NOT NULL DEFAULT '0',
  `qaddlist` tinyint(1) NOT NULL DEFAULT '0',
  `qaddgroupid` text NOT NULL,
  `qaddshowkey` tinyint(1) NOT NULL DEFAULT '0',
  `adminqinfo` tinyint(1) NOT NULL DEFAULT '0',
  `doctime` smallint(6) NOT NULL DEFAULT '0',
  `classpagekey` varchar(255) NOT NULL DEFAULT '',
  `dtlisttempid` smallint(6) NOT NULL DEFAULT '0',
  `classtempid` smallint(6) NOT NULL DEFAULT '0',
  `nreclass` tinyint(1) NOT NULL DEFAULT '0',
  `nreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `nrejs` tinyint(1) NOT NULL DEFAULT '0',
  `nottobq` tinyint(1) NOT NULL DEFAULT '0',
  `ipath` varchar(255) NOT NULL DEFAULT '',
  `addreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `haddlist` tinyint(4) NOT NULL DEFAULT '0',
  `sametitle` tinyint(1) NOT NULL DEFAULT '0',
  `definfovoteid` smallint(6) NOT NULL DEFAULT '0',
  `wburl` varchar(255) NOT NULL DEFAULT '',
  `qeditchecked` tinyint(1) NOT NULL DEFAULT '0',
  `wapstyleid` smallint(6) NOT NULL DEFAULT '0',
  `repreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `pltempid` smallint(6) NOT NULL DEFAULT '0',
  `cgroupid` text NOT NULL,
  `yhid` smallint(6) NOT NULL DEFAULT '0',
  `wfid` smallint(6) NOT NULL DEFAULT '0',
  `cgtoinfo` tinyint(1) NOT NULL DEFAULT '0',
  `bdinfoid` varchar(25) NOT NULL DEFAULT '',
  `repagenum` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keycid` smallint(6) NOT NULL DEFAULT '0',
  `allinfos` int(10) unsigned NOT NULL DEFAULT '0',
  `infos` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `oneinfo` tinyint(1) NOT NULL DEFAULT '0',
  `addsql` varchar(255) NOT NULL DEFAULT '',
  `wapislist` tinyint(1) NOT NULL DEFAULT '0',
  `fclast` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`classid`),
  KEY `bclassid` (`bclassid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `muban_la_enewsclass` values('1','0',0xe88bb9e69e9c,'','0','25','10','2','0','2','','1',0x70696e6767756f,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','2','1','10',0xe88bb9e69e9c,'0','0','2',0x646f776e6c6f6164,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','2','1','0','0','0','0','','1','0','1','0','','0','0','0','0','','0','0','0','','0','0','23','23','1550522857','0','','0','1550522857');");
E_D("replace into `muban_la_enewsclass` values('2','0',0xe5ae89e58d93,'','0','25','10','2','0','2','','1',0x616e7a68756f,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','2','1','10',0xe5ae89e58d93,'0','0','2',0x646f776e6c6f6164,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','2','1','0','0','0','0','','1','0','1','0','','0','0','0','0','','0','0','0','','0','0','1','1','1550522919','0','','0','1550522919');");
E_D("replace into `muban_la_enewsclass` values('3','0',0xe99885e8afbbe8b59ae992b1,'','0','25','10','2','0','9','','1',0x7975656475,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','10','1','10',0xe99885e8afbbe8b59ae992b1,'0','0','10',0x6e65777332,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','1','0','0','','1','0','1','0','','0','0','0','0','','0','0','0','','0','0','3','3','1550633378','0','','0','1550634590');");
E_D("replace into `muban_la_enewsclass` values('4','0',0xe8af95e78ea9e694bbe795a5,'','0','25','10','1','0','1','','1',0x676f6e676c7565,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','1','1','10',0xe694bbe795a5,'0','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','','1','0','1','0','','0','0','0','0','','0','0','0','','0','0','6','6','1550635415','0','','0','1550635415');");
E_D("replace into `muban_la_enewsclass` values('5','0',0xe9a696e9a1b5e6bb9ae58aa8e59bbee78987,'','0','25','10','1','0','1','','1',0x73686f75796567756e646f6e6774757069616e,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','9','1','10',0xe9a696e9a1b5e6bb9ae58aa8e59bbee78987,'0','0','9',0x6e65777331,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','1','1','1','1','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','4','4','1550637777','0','','0','1550637777');");

@include("../../inc/footer.php");
?>
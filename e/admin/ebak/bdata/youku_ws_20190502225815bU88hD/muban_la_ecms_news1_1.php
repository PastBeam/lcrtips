<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `muban_la_ecms_news1`;");
E_C("CREATE TABLE `muban_la_ecms_news1` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ttid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `plnum` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `totaldown` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `newspath` char(20) NOT NULL DEFAULT '',
  `filename` char(36) NOT NULL DEFAULT '',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` char(20) NOT NULL DEFAULT '',
  `firsttitle` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `isgood` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ispic` tinyint(1) NOT NULL DEFAULT '0',
  `istop` tinyint(1) NOT NULL DEFAULT '0',
  `isqf` tinyint(1) NOT NULL DEFAULT '0',
  `ismember` tinyint(1) NOT NULL DEFAULT '0',
  `isurl` tinyint(1) NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  `groupid` smallint(6) NOT NULL DEFAULT '0',
  `userfen` smallint(5) unsigned NOT NULL DEFAULT '0',
  `titlefont` char(14) NOT NULL DEFAULT '',
  `titleurl` char(200) NOT NULL DEFAULT '',
  `stb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `fstb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `restb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `keyboard` char(80) NOT NULL DEFAULT '',
  `title` char(100) NOT NULL DEFAULT '',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `titlepic` char(120) NOT NULL DEFAULT '',
  `eckuid` int(11) NOT NULL DEFAULT '0',
  `link` mediumtext NOT NULL,
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `newstime` (`newstime`),
  KEY `ttid` (`ttid`),
  KEY `firsttitle` (`firsttitle`),
  KEY `isgood` (`isgood`),
  KEY `ispic` (`ispic`),
  KEY `useridis` (`userid`,`ismember`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `muban_la_ecms_news1` values('1','5','0','0','0','0','',0x31,'1',0x6d7562616e,'0','0','1','0','0','0','0','1550637872','1555143855','1','0','0','',0x2f73686f75796567756e646f6e6774757069616e2f312e68746d6c,'1','1','1','',0xe6aca2e8bf8ee8bf9be585a5e8af95e5aea2e78ea92ce6898be8b59a415050e6b187e680bbe5b9b3e58fb07e,'1555144174',0x2f642f66696c652f702f323031392f30322d32302f35383238626333333635643637386165336461663532663732633162363737392e706e67,'0',0x2f676f6e676c75652f);");
E_D("replace into `muban_la_ecms_news1` values('2','5','0','0','0','0','',0x32,'1',0x6d7562616e,'0','0','1','0','0','0','0','1550650844','1555143612','1','0','0','',0x2f73686f75796567756e646f6e6774757069616e2f322e68746d6c,'1','1','1','',0xe789a2e8aeb0e68891e4bbace79a84e7bd91e59d807368696b6577616e2e746f702ce4b88de8b5b0e4b8a2efbc81,'1550650784',0x2f642f66696c652f702f323031392f30342d31332f34313735343161626161306632343433303637386462303237623833636235302e706e67,'0',0x687474703a2f2f7777772e7368696b6577616e2e746f70);");
E_D("replace into `muban_la_ecms_news1` values('3','5','0','0','0','0','',0x33,'1',0x6d7562616e,'0','0','1','0','0','0','0','1555140950','1555140950','1','0','0','',0x2f73686f75796567756e646f6e6774757069616e2f332e68746d6c,'1','1','1','',0xe68980e69c89e5b9b3e58fb0e4b880e8b5b7e5819aefbc8ce694b6e585a5e6898de883bde69bb4e9ab98efbc81,'1555140810',0x2f642f66696c652f702f323031392f30342d31332f35313063353434383865373732616134653464636661613962663939663364642e706e67,'0',0x687474703a2f2f7777772e7368696b6577616e2e746f702f74656d706c6574732f797168792e68746d6c);");
E_D("replace into `muban_la_ecms_news1` values('4','5','0','0','0','0','',0x34,'1',0x6d7562616e,'0','0','1','0','0','0','0','1555142130','1555144786','1','0','0','',0x2f73686f75796567756e646f6e6774757069616e2f342e68746d6c,'1','1','1','',0xe6b7bbe58aa0e5aea2e69c8de5beaeefbc8ce9a286e58f96e5bdb1e8a786e4bc9ae59198,'1555142066',0x2f642f66696c652f702f323031392f30342d31332f63306166623462373638326132343364323936356438363933346364303335342e706e67,'0',0x687474703a2f2f7777772e7368696b6577616e2e746f702f676f6e676c75652f362e68746d6c);");

@include("../../inc/footer.php");
?>
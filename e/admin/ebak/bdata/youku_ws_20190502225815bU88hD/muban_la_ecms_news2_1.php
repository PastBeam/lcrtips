<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `muban_la_ecms_news2`;");
E_C("CREATE TABLE `muban_la_ecms_news2` (
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
  `ftitle` char(120) NOT NULL DEFAULT '',
  `down` mediumtext NOT NULL,
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `newstime` (`newstime`),
  KEY `ttid` (`ttid`),
  KEY `firsttitle` (`firsttitle`),
  KEY `isgood` (`isgood`),
  KEY `ispic` (`ispic`),
  KEY `useridis` (`userid`,`ismember`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `muban_la_ecms_news2` values('1','3','0','0','0','0','',0x31,'1',0x6d7562616e,'0','0','1','0','0','0','0','1550634919','1555132846','1','0','0','',0x2f79756564752f312e68746d6c,'1','1','1','',0xe4bb8ae697a5e5a4b4e69da1e69e81e9809fe78988,'1550634597',0x2f642f66696c652f702f323031392f30322d32302f66373861306538306232353837363962343331663461326364393633326531612e6a7067,'0',0xe4b88be8bdbde79bb4e68ea5e68f90e78eb031e58583efbc8ce99885e8afbbe696b0e997bbe8b584e8aeafe8b59ae992b1,0x68747470733a2f2f636f696e2e746f757469616f31322e636f6d2f73636f72655f7461736b2f706167652f6c616e64696e672f696e766974652f3f757365725f69643d313032383035313137343131267461736b5f69643d323035266169643d333526656e7465725f66726f6d3d7172636f64655f696e766974652661637469766974795f6e616d653d616c697061795f7363616e5f636f6465);");
E_D("replace into `muban_la_ecms_news2` values('2','3','0','0','0','0','',0x32,'1',0x6d7562616e,'0','0','1','0','0','0','0','1555137429','1555137909','1','0','0','',0x2f79756564752f322e68746d6c,'1','1','1','',0xe8b6a3e5a4b4e69da1,'1555137283',0x2f642f66696c652f702f323031392f30342d31332f62306666373731313230346665663134613964333338353734333364303864392e706e67,'0',0xe4b88be8bdbde799bbe5bd95e7ab8be5be9732e58583efbc8ce99885e8afbbe696b0e997bbe8b584e8aeafe8b59ae992b1,0x687474703a2f2f762e6265696c6138382e636f6d2f31343536393732342e68746d6c);");
E_D("replace into `muban_la_ecms_news2` values('3','3','0','0','0','0','',0x33,'1',0x6d7562616e,'0','0','1','0','0','0','0','1555137603','1555144001','1','0','0','',0x2f79756564752f332e68746d6c,'1','1','1','',0xe4b89ce696b9e5a4b4e69da1,'1555137439',0x2f642f66696c652f702f323031392f30342d31332f37653730613066373263363766363032633837333861303538313132633361382e706e67,'0',0xe4b88be8bdbde79bb4e68ea5e68f90e78eb031e58583efbc8ce99885e8afbbe696b0e997bbe8b584e8aeafe8b59ae992b1,0x687474703a2f2f61732e7370767231372e636e2f39786438376e70632f67792f72686d646d7837302f70632e68746d6c3f6e7877756945515537393d);");

@include("../../inc/footer.php");
?>
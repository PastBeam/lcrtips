<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `muban_la_ecms_news`;");
E_C("CREATE TABLE `muban_la_ecms_news` (
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
  `smalltext` char(255) NOT NULL DEFAULT '',
  `diggtop` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `newstime` (`newstime`),
  KEY `ttid` (`ttid`),
  KEY `firsttitle` (`firsttitle`),
  KEY `isgood` (`isgood`),
  KEY `ispic` (`ispic`),
  KEY `useridis` (`userid`,`ismember`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `muban_la_ecms_news` values('1','4','0','4','0','0','',0x31,'1',0x6d7562616e,'0','0','1','0','0','0','0','1550637369','1555131352','1','0','0','',0x2f676f6e676c75652f312e68746d6c,'1','1','1','',0xe38090e696b0e6898be694bbe795a5e38091e8af95e78ea9415050e79c9fe79a84e883bde8b59ae992b1e59097efbc9fe5ae89e585a8e59097efbc9f,'1550637330',0x2f642f66696c652f702f323031392f30322d32302f65643430306337643133356566316134316361643265323037643334616665632e706e67,'0','',0xe696b0e6898be9a1bbe79fa50d0ae68891e4bbace68f90e4be9be69c893230e5a49ae4b8aae4bbbbe58aa1e6b8a0e98193e5b9b3e58fb0e38082e6af8fe4b8aae5b9b3e58fb0e983bde698afe78bace7ab8be79a84efbc8ce6af8fe4b8aae5b9b3e58fb0e983bde69c89e4b88de5908ce79a84e4bbbbe58aa1efbc8ce585a8e983a8e5b9b3e58fb0e4b880e8b5b7e8af95e78ea9efbc8ce6af8fe5a4a9e69c80e5b091e58fafe4bba5e694b6e585a5e4b88ae799bee58583efbc810d0ae4b8bae4bb80e4b988e68891e4bbace58ebbe88bb9e69e9ce59586e5ba97e4b88be8bdbde8bdafe4bbb6e8bf98e883bde69c89e4bda3e98791e68bbfefbc9f,'0');");
E_D("replace into `muban_la_ecms_news` values('2','4','0','1','0','0','',0x32,'1',0x6d7562616e,'0','0','1','0','0','0','0','1555126759','1555131763','1','0','0','',0x2f676f6e676c75652f322e68746d6c,'1','1','1','',0xe38090e4b88be8bdbde79a84e58aa9e6898b417070e68993e4b88de5bc80e6808ee4b988e58a9eefbc9fe38091e58aa9e6898be587bae78eb0e997aae98080e5a682e4bd95e5a484e79086efbc9f,'1555126618',0x2f642f66696c652f702f323031392f30342d31332f61666230636261653538633638333665636532383133323463633064353738342e706e67,'0','',0xe5b091e695b0e8af95e78ea9e5b9b3e58fb0e59ca84170702053746f7265e698afe6b2a1e69c89e58aa9e6898be79a84efbc8ce8808ce8bf99e7b1bbe5ba94e794a8e7a7b0e4b8bae4bc81e4b89ae7baa7e5ba94e794a8efbc8ce99c80e8a681e4bfa1e4bbbbe68f8fe8bfb0e69687e4bbb6e4b98be5908ee6898de883bde6ada3e5b8b8e4bdbfe794a8e38082e585b6e6aca1e8afa5e7b1bbe58aa9e6898be587bae78eb0e997aae98080e698afe59ba0e4b8bae4bfa1e4bbbbe79a84e68f8fe8bfb0e69687e4bbb6e8bf87e69c9fefbc8ce99c80e8a681e58db8e8bdbde58aa9e6898be5908eefbc8ce9878de5a48de4bba5e4b88b,'0');");
E_D("replace into `muban_la_ecms_news` values('3','4','0','1','0','0','',0x33,'1',0x6d7562616e,'0','0','1','0','0','0','0','1555127357','1555131185','1','0','0','',0x2f676f6e676c75652f332e68746d6c,'1','1','1','',0xe4b88be8bdbd417070e587bae78eb0e9aa8ce8af81e7a081e79a84e8a7a3e586b3e696b9e6a188e38082,'1555127194',0x2f642f66696c652f702f323031392f30342d31332f33373464303861646636363236666437346438666432393063323437623630612e706e67,'0','',0xe5b08fe4bc99e4bcb4e59ca8e4b88be8bdbd417070e79a84e697b6e58099efbc8ce69c89e697b6e580994170702053746f7265e4bc9ae5bcb9e587bae5a682e4b88be59bbee68980e7a4bae79a84e9aa8ce8af81e7a081efbc88e4bc9ae587bae78eb0e9aa8ce8af81e7a081e698afe59ba0e4b8bae8bf99e4b8aa417070e59ca8e69f90e4b880e697b6e997b4e6aeb5e8a2abe5a4a7e9878fe4b88be8bdbde68896e88085e5908ce4b880e8aebee5a487e59ca8e69f90e697b6e997b4e6aeb5e58685e4b88be8bdbde5a4a7e9878fe79a84417070efbc89efbc8ce8bf99e4b8aae697b6e58099e58faae69c89e8be93e585a5,'0');");
E_D("replace into `muban_la_ecms_news` values('4','4','0','1','0','0','',0x34,'1',0x6d7562616e,'0','0','1','0','0','0','0','1555132046','1555132112','1','0','0',0x2c627c,0x2f676f6e676c75652f342e68746d6c,'1','1','1','',0xe4b8bae4bb80e4b988e68993e5bc80e983bde698afe88081e4bbbbe58aa1efbc9fe5b9b3e58fb0e4bbbbe58aa1e588b0e5ba95e4bb80e4b988e697b6e58099e69bb4e696b0e591a2efbc9f,'1555131877',0x2f642f66696c652f702f323031392f30342d31332f30323264656161333862323864313161626263623461356165356330653063632e706e67,'0','',0x20202020e8af95e78ea9e5b9b3e58fb0e79a84e4bbbbe58aa1e69bb4e696b0e4b880e888ace983bde59ca8e4b88be58d883135e782b9e588b03139e782b9e4b98be997b4efbc8c3136e782b9e4bbbbe58aa1e69bb4e696b0e69c80e5a49aefbc8ce585b6e4bb96e697b6e997b4e4b99fe4bc9ae4b88de5ae9ae697b6e69bb4e696b0e38082e8af95e78ea9e5b9b3e58fb0e79a84e59586e58aa1e6ada3e59ca8e7a7afe69e81e79a84e68b93e5b195e6b8a0e98193efbc8ce4b8bae5a4a7e5aeb6e4ba89e58f96e69bb4e5a49ae79a84e5ba94e794a8e8af95e78ea9e38082e68891e4bbace4b99fe59ca8e4b8bae5a4a7e5aeb6,'0');");
E_D("replace into `muban_la_ecms_news` values('5','4','0','1','0','0','',0x35,'1',0x6d7562616e,'0','0','1','0','0','0','0','1555132290','1555132290','1','0','0',0x2c627c,0x2f676f6e676c75652f352e68746d6c,'1','1','1','',0xe8af95e78ea9e5b9b3e58fb0e6808ee4b988e68f90e78eb0efbc9fe69c89e4bb80e4b988e99990e588b6e59097,'1555132188',0x2f642f66696c652f702f323031392f30342d31332f62353139653235326237313061386265343031386262646639663038326265332e706e67,'0','',0x31e38081e59ca8e6af8fe4b8aae8af95e78ea9e5b9b3e58fb0e5ae8ce68890e4bbbbe58aa1e5908ee88eb7e5be97e79a84e5a596e58ab1e983bde698afe5ad98e694bee59ca8e5b9b3e58fb0e58685e79a84efbc8ce4b880e888ace983bde698afe59ca8e68f90e78eb0e4b8ade5bf83e9878ce68f90e78eb0e380820d0a0d0a32e38081e68f90e78eb0e694afe68c81e5beaee4bfa1e992b1e58c85e5928ce694afe4bb98e5ae9defbc8ce586b2e8af9de8b4b951e5b881e983bde58fafe4bba5e380820d0a0d0a0d0a0d0a33e38081e794b3e8afb7e68f90e78eb0e5908ee4b880e888ace59ca831efbd9e33e4b8aae5b7a5e4bd9ce697a5,'0');");
E_D("replace into `muban_la_ecms_news` values('6','4','0','2','0','0','',0x36,'1',0x6d7562616e,'0','0','1','0','0','0','0','1555143486','1555143486','1','0','0','',0x2f676f6e676c75652f362e68746d6c,'1','1','1','',0x3132e5aeb6e5bdb1e8a786e5b9b4e8b4b9766970efbc8ce6b7bbe58aa0e5aea2e69c8de5beaee9a286e58f96,'1554970583',0x2f642f66696c652f702f323031392f30342d31332f36333761383863336538646165626465626332643330663735363666623433662e6a7067,'0','','','0');");

@include("../../inc/footer.php");
?>
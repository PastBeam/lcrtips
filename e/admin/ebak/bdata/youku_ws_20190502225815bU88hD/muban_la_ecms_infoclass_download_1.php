<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `muban_la_ecms_infoclass_download`;");
E_C("CREATE TABLE `muban_la_ecms_infoclass_download` (
  `classid` int(10) unsigned NOT NULL DEFAULT '0',
  `zz_title` text NOT NULL,
  `z_title` varchar(255) NOT NULL DEFAULT '',
  `qz_title` varchar(255) NOT NULL DEFAULT '',
  `save_title` varchar(10) NOT NULL DEFAULT '',
  `zz_titlepic` text NOT NULL,
  `z_titlepic` varchar(255) NOT NULL DEFAULT '',
  `qz_titlepic` varchar(255) NOT NULL DEFAULT '',
  `save_titlepic` varchar(10) NOT NULL DEFAULT '',
  `zz_newstime` text NOT NULL,
  `z_newstime` varchar(255) NOT NULL DEFAULT '',
  `qz_newstime` varchar(255) NOT NULL DEFAULT '',
  `save_newstime` varchar(10) NOT NULL DEFAULT '',
  `zz_rew` text NOT NULL,
  `z_rew` varchar(255) NOT NULL,
  `qz_rew` varchar(255) NOT NULL,
  `save_rew` varchar(10) NOT NULL,
  `zz_sup` text NOT NULL,
  `z_sup` varchar(255) NOT NULL,
  `qz_sup` varchar(255) NOT NULL,
  `save_sup` varchar(10) NOT NULL,
  `zz_cash` text NOT NULL,
  `z_cash` varchar(255) NOT NULL,
  `qz_cash` varchar(255) NOT NULL,
  `save_cash` varchar(10) NOT NULL,
  `zz_down` text NOT NULL,
  `z_down` varchar(255) NOT NULL,
  `qz_down` varchar(255) NOT NULL,
  `save_down` varchar(10) NOT NULL,
  `zz_video` text NOT NULL,
  `z_video` varchar(255) NOT NULL,
  `qz_video` varchar(255) NOT NULL,
  `save_video` varchar(10) NOT NULL,
  `zz_intro` text NOT NULL,
  `z_intro` varchar(255) NOT NULL,
  `qz_intro` varchar(255) NOT NULL,
  `save_intro` varchar(10) NOT NULL,
  `zz_attention` text NOT NULL,
  `z_attention` varchar(255) NOT NULL,
  `qz_attention` varchar(255) NOT NULL,
  `save_attention` varchar(10) NOT NULL,
  `zz_type` text NOT NULL,
  `z_type` varchar(255) NOT NULL,
  `qz_type` varchar(255) NOT NULL,
  `save_type` varchar(10) NOT NULL,
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>
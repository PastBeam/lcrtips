<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `muban_la_enewssearchtemp`;");
E_C("CREATE TABLE `muban_la_enewssearchtemp` (
  `tempid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tempname` varchar(60) NOT NULL DEFAULT '',
  `temptext` mediumtext NOT NULL,
  `subnews` smallint(6) NOT NULL DEFAULT '0',
  `isdefault` tinyint(1) NOT NULL DEFAULT '0',
  `listvar` text NOT NULL,
  `rownum` smallint(6) NOT NULL DEFAULT '0',
  `modid` smallint(6) NOT NULL DEFAULT '0',
  `showdate` varchar(50) NOT NULL DEFAULT '',
  `subtitle` smallint(6) NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `docode` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`tempid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `muban_la_enewssearchtemp` values('1',0xe9bb98e8aea4e6909ce7b4a2e6a8a1e69dbf,0x3c21444f43545950452068746d6c205055424c4943205c222d2f2f5733432f2f445444205848544d4c20312e30205472616e736974696f6e616c2f2f454e5c22205c22687474703a2f2f7777772e77332e6f72672f54522f7868746d6c312f4454442f7868746d6c312d7472616e736974696f6e616c2e6474645c223e0d0a3c68746d6c20786d6c6e733d5c22687474703a2f2f7777772e77332e6f72672f313939392f7868746d6c5c223e0d0a3c686561643e0d0a3c6d65746120687474702d65717569763d5c22436f6e74656e742d547970655c2220636f6e74656e743d5c22746578742f68746d6c3b20636861727365743d7574662d385c22202f3e0d0a3c7469746c653e5b212d2d6b6579626f6172642d2d5d20e6909ce7b4a2e7bb93e69e9c202d20506f776572656420627920456d70697265434d533c2f7469746c653e0d0a3c6c696e6b20687265663d5c225b212d2d6e6577732e75726c2d2d5d736b696e2f64656661756c742f6373732f7374796c652e6373735c222072656c3d5c227374796c6573686565745c2220747970653d5c22746578742f6373735c22202f3e0d0a3c73637269707420747970653d5c22746578742f6a6176617363726970745c22207372633d5c225b212d2d6e6577732e75726c2d2d5d736b696e2f64656661756c742f6a732f746162732e6a735c223e3c2f7363726970743e0d0a3c7374796c6520747970653d5c22746578742f6373735c223e0d0a3c212d2d0d0a2e72207b0d0a646973706c61793a696e6c696e653b0d0a666f6e742d7765696768743a6e6f726d616c3b0d0a6d617267696e3a303b0d0a666f6e742d73697a653a313670783b0d0a6d617267696e2d746f703a313070783b0d0a7d0d0a2e617b636f6c6f723a677265656e7d0d0a2e666c7b636f6c6f723a233737637d0d0a2d2d3e0d0a3c2f7374796c653e0d0a3c2f686561643e0d0a3c626f647920636c6173733d5c226c697374706167655c223e0d0a5b212d2d74656d702e64746865616465722d2d5d0d0a3c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c73706163696e673d5c2231305c222063656c6c70616464696e673d5c22305c223e0d0a093c74722076616c69676e3d5c22746f705c223e0d0a09093c746420636c6173733d5c226c6973745f636f6e74656e745c223e3c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c73706163696e673d5c22305c222063656c6c70616464696e673d5c22305c2220636c6173733d5c22706f736974696f6e5c223e0d0a090909093c74723e0d0a09090909093c74643ee78eb0e59ca8e79a84e4bd8de7bdaeefbc9a3c6120687265663d5c225b212d2d6e6577732e75726c2d2d5d5c2220636c6173733d5c22636c6173736c696e6b636c6173735c223ee9a696e9a1b53c2f613e266e6273703b3e266e6273703b3c6120687265663d5c225b212d2d6e6577732e75726c2d2d5d7365617263682f5c2220636c6173733d5c22636c6173736c696e6b636c6173735c223ee9ab98e7baa7e6909ce7b4a23c2f613e266e6273703b3e266e6273703be6909ce7b4a2e7bb93e69e9c3c2f74643e0d0a090909093c2f74723e0d0a0909093c2f7461626c653e0d0a0909093c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c73706163696e673d5c22305c222063656c6c70616464696e673d5c22305c2220636c6173733d5c22626f785c223e0d0a090909093c74723e0d0a09090909093c74643e3c666f726d20616374696f6e3d5c272e2e2f2e2e2f7365617263682f696e6465782e7068705c27206d6574686f643d5c22706f73745c22206e616d653d5c227365617263685f6e6577735c222069643d5c227365617263685f6e6577735c223e0d0a090909090909093c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c73706163696e673d5c22365c222063656c6c70616464696e673d5c22305c223e0d0a09090909090909093c696e70757420747970653d5c2268696464656e5c22206e616d653d5c2273686f775c222076616c75653d5c227469746c655c22202f3e0d0a09090909090909093c74723e0d0a0909090909090909093c7464206865696768743d5c2233325c223ee585b3e994aee5ad97efbc9a0d0a090909090909090909093c696e707574206e616d653d5c226b6579626f6172645c2220747970653d5c22746578745c222069643d5c226b6579626f6172645c222076616c75653d5c225b212d2d6b6579626f6172642d2d5d5c222073697a653d5c2234325c22202f3e0d0a090909090909090909093c696e70757420747970653d5c227375626d69745c22206e616d653d5c225375626d697432325c222076616c75653d5c22e6909ce7b4a25c22202f3e0d0a09090909090909090909266e6273703b0d0a090909090909090909093c696e70757420747970653d5c22627574746f6e5c22206e616d653d5c225375626d69745c222076616c75653d5c22e9ab98e7baa7e6909ce7b4a25c22206f6e636c69636b3d5c2273656c662e6c6f636174696f6e2e687265663d5c272e2e2f2e2e2f2e2e2f7365617263682f5c275c22202f3e0d0a0909090909090909090928e5a49ae4b8aae585b3e994aee5ad97e8afb7e794a82671756f743be7a9bae6a0bc2671756f743be99a94e5bc8029203c2f74643e0d0a09090909090909093c2f74723e0d0a090909090909093c2f7461626c653e0d0a0909090909093c2f666f726d3e0d0a0909090909093c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c70616464696e673d5c22305c222063656c6c73706163696e673d5c22365c223e0d0a090909090909093c74723e0d0a09090909090909093c74643ee7b3bbe7bb9fe6909ce7b4a2e588b0e7baa6e69c893c7374726f6e673e5b212d2d65636d732e6e756d2d2d5d3c2f7374726f6e673ee9a1b9e7aca6e590883c7374726f6e673e5b212d2d6b6579626f6172642d2d5d3c2f7374726f6e673ee79a84e69fa5e8afa2e7bb93e69e9c3c2f74643e0d0a090909090909093c2f74723e0d0a0909090909093c2f7461626c653e0d0a0909090909095b212d2d656d706972656e6577732e6c69737474656d702d2d5d0d0a0909090909093c212d2d6c6973742e766172312d2d3e0d0a0909090909095b212d2d656d706972656e6577732e6c69737474656d702d2d5d0d0a0909090909093c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c73706163696e673d5c22305c222063656c6c70616464696e673d5c22305c2220636c6173733d5c226c6973745f706167655c223e0d0a090909090909093c74723e0d0a09090909090909093c74643e5b212d2d73686f772e706167652d2d5d3c2f74643e0d0a090909090909093c2f74723e0d0a0909090909093c2f7461626c653e3c2f74643e0d0a090909093c2f74723e0d0a0909093c2f7461626c653e3c2f74643e0d0a093c2f74723e0d0a3c2f7461626c653e0d0a5b212d2d74656d702e666f6f7465722d2d5d0d0a3c2f626f64793e0d0a3c2f68746d6c3e,'180','1',0x3c683220636c6173733d5c22725c223e3c7370616e3e5b212d2d6e6f2e6e756d2d2d5d2e3c2f7370616e3e203c6120636c6173733d5c226c5c2220687265663d5c225b212d2d7469746c6575726c2d2d5d5c22207461726765743d5c225f626c616e6b5c223e5b212d2d7469746c652d2d5d3c2f613e3c2f68323e0d0a3c7461626c652077696474683d5c223830255c2220626f726465723d5c22305c222063656c6c70616464696e673d5c22305c222063656c6c73706163696e673d5c22305c223e0d0a093c74626f64793e0d0a09093c74723e0d0a0909093c74643e5b212d2d736d616c6c746578742d2d5d3c2f74643e0d0a09093c2f74723e0d0a09093c74723e0d0a0909093c74643e3c7370616e20636c6173733d5c22615c223e5b212d2d7469746c6575726c2d2d5d202d205b212d2d6e65777374696d652d2d5d3c2f7370616e3e202d203c6120636c6173733d5c22666c5c2220687265663d5c225b212d2d746869732e636c6173736c696e6b2d2d5d5c22207461726765743d5c225f626c616e6b5c223e5b212d2d746869732e636c6173736e616d652d2d5d3c2f613e3c2f74643e0d0a09093c2f74723e0d0a09093c74723e0d0a0909093c74643e266e6273703b3c2f74643e0d0a09093c2f74723e0d0a093c2f74626f64793e0d0a3c2f7461626c653e0d0a,'1','1',0x592d6d2d64,'0','0','0');");

@include("../../inc/footer.php");
?>
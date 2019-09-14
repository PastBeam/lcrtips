<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `muban_la_enewsbqtemp`;");
E_C("CREATE TABLE `muban_la_enewsbqtemp` (
  `tempid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tempname` varchar(60) NOT NULL DEFAULT '',
  `modid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `temptext` text NOT NULL,
  `showdate` varchar(50) NOT NULL DEFAULT '',
  `listvar` text NOT NULL,
  `subnews` smallint(5) unsigned NOT NULL DEFAULT '0',
  `rownum` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `docode` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`tempid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8");
E_D("replace into `muban_la_enewsbqtemp` values('1',0xe5ad90e6a08fe79baee5afbce888aae6a087e7adbee6a8a1e69dbf,'1',0x7c205b212d2d656d706972656e6577732e6c69737474656d702d2d5d3c212d2d6c6973742e766172312d2d3e5b212d2d656d706972656e6577732e6c69737474656d702d2d5d,0x592d6d2d6420483a693a73,0x3c6120687265663d5c225b212d2d636c61737375726c2d2d5d5c223e5b212d2d636c6173736e616d652d2d5d3c2f613e207c20,'0','1','0','0');");
E_D("replace into `muban_la_enewsbqtemp` values('2',0xe6a087e9a298e58897e8a1a8e6a8a1e69dbf,'1',0x5b212d2d656d706972656e6577732e6c69737474656d702d2d5d3c212d2d6c6973742e766172312d2d3e5b212d2d656d706972656e6577732e6c69737474656d702d2d5d,0x592d6d2d6420483a693a73,0x3c6c693e3c6120687265663d225b212d2d7469746c6575726c2d2d5d22207469746c653d225b212d2d6f6c647469746c652d2d5d223e5b212d2d7469746c652d2d5d3c2f613e3c2f6c693e,'0','1','0','0');");
E_D("replace into `muban_la_enewsbqtemp` values('3',0xe6a087e9a2982be7ae80e4bb8b,'1',0x5b212d2d656d706972656e6577732e6c69737474656d702d2d5d3c212d2d6c6973742e766172312d2d3e5b212d2d656d706972656e6577732e6c69737474656d702d2d5d,0x6d2d64,0x3c6c693e3c703e3c7374726f6e673e3c6120687265663d225b212d2d7469746c6575726c2d2d5d22207469746c653d225b212d2d6f6c647469746c652d2d5d223e5b212d2d7469746c652d2d5d3c2f613e3c2f7374726f6e673e5b212d2d736d616c6c746578742d2d5d203c2f703e3c2f6c693e,'60','1','0','0');");
E_D("replace into `muban_la_enewsbqtemp` values('4',0xe5a4b4e69da1e79bb8e585b3,'1',0x5b212d2d656d706972656e6577732e6c69737474656d702d2d5d3c212d2d6c6973742e766172312d2d3ee380803c212d2d6c6973742e766172322d2d3e5b212d2d656d706972656e6577732e6c69737474656d702d2d5d,0x592d6d2d6420483a693a73,0x3c6120687265663d225b212d2d7469746c6575726c2d2d5d22207469746c653d225b212d2d6f6c647469746c652d2d5d223ec2b75b212d2d7469746c652d2d5d3c2f613e,'0','2','0','0');");
E_D("replace into `muban_la_enewsbqtemp` values('5',0xe59bbee789872be6a087e9a2982be7ae80e4bb8b,'1',0x5b212d2d656d706972656e6577732e6c69737474656d702d2d5d0d0a3c212d2d6c6973742e766172312d2d3e0d0a5b212d2d656d706972656e6577732e6c69737474656d702d2d5d,0x592d6d2d6420483a693a73,0x3c7461626c652077696474683d5c223934255c2220626f726465723d5c22305c2220616c69676e3d5c2263656e7465725c222063656c6c70616464696e673d5c22305c222063656c6c73706163696e673d5c22365c2220636c6173733d5c22706963546578745c223e0d0a3c74722076616c69676e3d5c22746f705c223e0d0a3c74643e3c6120687265663d5c225b212d2d7469746c6575726c2d2d5d5c22207461726765743d5c225f626c616e6b5c223e3c696d672077696474683d5c2237305c22206865696768743d5c2237385c22207372633d5c225b212d2d7469746c657069632d2d5d5c2220616c743d5c225b212d2d6f6c647469746c652d2d5d5c22202f3e3c2f613e3c2f74643e0d0a3c74643e3c7374726f6e673e3c6120687265663d5c225b212d2d7469746c6575726c2d2d5d5c22207469746c653d5c225b212d2d6f6c647469746c652d2d5d5c223e5b212d2d7469746c652d2d5d3c2f613e3c2f7374726f6e673e5b212d2d736d616c6c746578742d2d5d3c2f74643e0d0a3c2f74723e0d0a3c2f7461626c653e,'56','1','0','0');");
E_D("replace into `muban_la_enewsbqtemp` values('7',0xe5beaae78eafe5ad90e6a08fe79baee6a087e7adbe,'1',0x3c7461626c652077696474683d22313030252220626f726465723d2230222063656c6c73706163696e673d2230222063656c6c70616464696e673d22302220636c6173733d227469746c65223e0d0a3c74723e0d0a3c74643e3c7374726f6e673e5b212d2d7468652e636c6173736e616d652d2d5d3c2f7374726f6e673e3c2f74643e0d0a3c746420616c69676e3d227269676874223e3c6120687265663d225b212d2d7468652e636c61737375726c2d2d5d223ee69bb4e5a49a2667743b2667743b3c2f613e3c2f74643e0d0a3c2f74723e0d0a3c2f7461626c653e0d0a3c7461626c652077696474683d22313030252220626f726465723d2230222063656c6c73706163696e673d2230222063656c6c70616464696e673d22302220636c6173733d22626f78223e0d0a3c74723e0d0a3c74643e3c756c3e0d0a202020202020205b212d2d656d706972656e6577732e6c69737474656d702d2d5d0d0a202020202020203c212d2d6c6973742e766172312d2d3e0d0a202020202020205b212d2d656d706972656e6577732e6c69737474656d702d2d5d0d0a3c2f756c3e0d0a3c2f74643e0d0a3c2f74723e0d0a3c2f7461626c653e,0x592d6d2d64,0x3c6c693e3c6120687265663d225b212d2d7469746c6575726c2d2d5d22207469746c653d225b212d2d6f6c647469746c652d2d5d223e5b212d2d7469746c652d2d5d3c2f613e203c7370616e3e5b212d2d6e65777374696d652d2d5d3c2f7370616e3e3c2f6c693e,'0','1','0','0');");
E_D("replace into `muban_la_enewsbqtemp` values('8',0xe5a4b4e69da1e6a087e9a298,'1',0x5b212d2d656d706972656e6577732e6c69737474656d702d2d5d0d0a3c212d2d6c6973742e766172312d2d3e0d0a5b212d2d656d706972656e6577732e6c69737474656d702d2d5d,0x592d6d2d6420483a693a73,0x3c7374726f6e673e3c6120687265663d225b212d2d7469746c6575726c2d2d5d223e5b212d2d7469746c652d2d5d3c2f613e3c2f7374726f6e673e0d0a3c703ee38080e380805b212d2d736d616c6c746578742d2d5d3c2f703e,'150','1','0','0');");
E_D("replace into `muban_la_enewsbqtemp` values('9',0xe6a087e9a2982be8bdafe4bbb6e7ae80e4bb8b,'2',0x5b212d2d656d706972656e6577732e6c69737474656d702d2d5d3c212d2d6c6973742e766172312d2d3e5b212d2d656d706972656e6577732e6c69737474656d702d2d5d,0x592d6d2d6420483a693a73,0x3c6c693e3c703e3c7374726f6e673e3c6120687265663d5c225b212d2d7469746c6575726c2d2d5d5c22207469746c653d5c225b212d2d6f6c647469746c652d2d5d5c223e5b212d2d7469746c652d2d5d3c2f613e3c2f7374726f6e673e5b212d2d736f66747361792d2d5d3c2f703e3c2f6c693e,'50','1','0','0');");
E_D("replace into `muban_la_enewsbqtemp` values('10',0xe68e92e8a18ce58897e8a1a8,'1',0x5b212d2d656d706972656e6577732e6c69737474656d702d2d5d3c212d2d6c6973742e766172312d2d3e5b212d2d656d706972656e6577732e6c69737474656d702d2d5d,0x592d6d2d6420483a693a73,0x3c6c6920636c6173733d226e6f5b212d2d6e6f2e6e756d2d2d5d223e3c6120687265663d225b212d2d7469746c6575726c2d2d5d22207469746c653d225b212d2d6f6c647469746c652d2d5d223e5b212d2d7469746c652d2d5d3c2f613e3c2f6c693e,'0','1','0','0');");
E_D("replace into `muban_la_enewsbqtemp` values('11',0xe59bbee78987e99b86e58886e9a1b5e6a8a1e69dbf,'1',0x3c73637269707420747970653d5c22746578742f6a6176617363726970745c223e0d0a20202020202020207661722070686f746f73723d6e657720417272617928293b0d0a20202020202020205b212d2d70686f746f722d2d5d0d0a202020202020202066756e6374696f6e20476f746f5068506167652870616765297b0d0a20202020202020202020202020202020706167653d7061727365496e742870616765293b0d0a20202020202020202020202020202020646f63756d656e742e676574456c656d656e7442794964285c2273686f777061676570686f746f5c22292e696e6e657248544d4c3d70686f746f73725b706167655d3b0d0a20202020202020202020202020202020646f63756d656e742e5669657750686f746f466f726d2e746869737068706167652e76616c75653d706167653b0d0a20202020202020202020202020202020646f63756d656e742e5669657750686f746f466f726d2e746f7468657068706167652e6f7074696f6e735b706167652d315d2e73656c65637465643d747275653b0d0a20202020202020207d0d0a20202020202020202f2fe4b88ae4b880e9a1b50d0a202020202020202066756e6374696f6e2050726950685061676528297b0d0a202020202020202020202020202020207661722074686973706167653d7061727365496e7428646f63756d656e742e5669657750686f746f466f726d2e746869737068706167652e76616c7565293b0d0a20202020202020202020202020202020766172206e756d3d70686f746f73722e6c656e6774683b0d0a2020202020202020202020202020202069662874686973706167653c3d31290d0a202020202020202020202020202020207b0d0a20202020202020202020202020202020202020202020202072657475726e2066616c73653b0d0a202020202020202020202020202020207d0d0a20202020202020202020202020202020476f746f5068506167652874686973706167652d31293b0d0a20202020202020207d0d0a20202020202020202f2fe4b88be4b880e9a1b50d0a202020202020202066756e6374696f6e204e65787450685061676528297b0d0a202020202020202020202020202020207661722074686973706167653d7061727365496e7428646f63756d656e742e5669657750686f746f466f726d2e746869737068706167652e76616c7565293b0d0a20202020202020202020202020202020766172206e756d3d70686f746f73722e6c656e6774683b0d0a2020202020202020202020202020202069662874686973706167653e3d6e756d2d31290d0a202020202020202020202020202020207b0d0a20202020202020202020202020202020202020202020202072657475726e2066616c73653b0d0a202020202020202020202020202020207d0d0a20202020202020202020202020202020476f746f5068506167652874686973706167652b31293b0d0a20202020202020207d0d0a202020202020202066756e6374696f6e2050684175746f506c617928297b0d0a20202020202020202020202020202020766172207365633d7061727365496e7428646f63756d656e742e5669657750686f746f466f726d2e6175746f706c61797365632e76616c7565293b0d0a2020202020202020202020202020202076617220693b0d0a20202020202020202020202020202020766172206e756d3d70686f746f73722e6c656e6774683b0d0a20202020202020202020202020202020666f7228693d313b693c3d7365633b692b2b290d0a202020202020202020202020202020207b0d0a202020202020202020202020202020202020202020202020696628646f63756d656e742e5669657750686f746f466f726d2e6175746f706873746f702e76616c75653d3d30290d0a2020202020202020202020202020202020202020202020207b0d0a202020202020202020202020202020202020202020202020202020202020202077696e646f772e73657454696d656f7574285c2250684175746f506c6179457865285c222b692b5c222c5c222b7365632b5c22295c222c692a31303030293b0d0a2020202020202020202020202020202020202020202020207d0d0a202020202020202020202020202020202020202020202020656c73650d0a2020202020202020202020202020202020202020202020207b0d0a2020202020202020202020202020202020202020202020202020202020202020627265616b3b0d0a2020202020202020202020202020202020202020202020207d0d0a202020202020202020202020202020207d0d0a20202020202020207d0d0a202020202020202066756e6374696f6e2050684175746f506c6179457865286e756d2c736563297b0d0a2020202020202020202020202020202076617220743b0d0a20202020202020202020202020202020696628646f63756d656e742e5669657750686f746f466f726d2e6175746f706873746f702e76616c75653d3d31290d0a202020202020202020202020202020207b0d0a20202020202020202020202020202020202020202020202072657475726e205c225c223b0d0a202020202020202020202020202020207d0d0a202020202020202020202020202020206966286e756d3d3d73656329200d0a202020202020202020202020202020207b0d0a202020202020202020202020202020202020202020202020743d4e65787450685061676528293b0d0a202020202020202020202020202020202020202020202020696628743d3d66616c7365290d0a2020202020202020202020202020202020202020202020207b0d0a2020202020202020202020202020202020202020202020202020202020202020476f746f5068506167652831293b0d0a2020202020202020202020202020202020202020202020207d0d0a20202020202020202020202020202020202020202020202050684175746f506c617928293b0d0a202020202020202020202020202020207d200d0a20202020202020207d0d0a20202020202020203c2f7363726970743e0d0a20202020202020200d0a3c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c2220616c69676e3d5c2263656e7465725c222063656c6c70616464696e673d5c22335c222063656c6c73706163696e673d5c22315c223e0d0a20203c74723e200d0a202020203c7464206865696768743d5c2232355c222069643d5c2273686f777061676570686f746f5c2220616c69676e3d5c2263656e7465725c223e200d0a2020202020203c212d2d6c6973742e766172312d2d3e0d0a202020203c2f74643e0d0a20203c2f74723e0d0a20203c666f726d206e616d653d5c225669657750686f746f466f726d5c222069643d5c225669657750686f746f466f726d5c22206d6574686f643d5c22504f53545c2220616374696f6e3d5c225c223e0d0a202020203c74723e200d0a2020202020203c7464206865696768743d5c2232355c223e203c64697620616c69676e3d5c2263656e7465725c223e200d0a202020202020202020203c696e70757420747970653d5c22627574746f6e5c22206e616d653d5c225375626d69745c222076616c75653d5c22e4b88ae4b880e9a1b55c22206f6e636c69636b3d5c2250726950685061676528293b5c223e0d0a20202020202020202020266e6273703b266e6273703b200d0a202020202020202020203c73656c656374206e616d653d5c22746f7468657068706167655c22206f6e6368616e67653d5c22476f746f50685061676528746869732e6f7074696f6e735b746869732e73656c6563746564496e6465785d2e76616c7565295c223e0d0a2020202020202020202020205b212d2d73656c6563742d2d5d0d0a202020202020202020203c2f73656c6563743e0d0a20202020202020202020266e6273703b266e6273703b200d0a202020202020202020203c696e70757420747970653d5c22627574746f6e5c22206e616d653d5c225375626d6974325c222076616c75653d5c22e4b88be4b880e9a1b55c22206f6e636c69636b3d5c224e65787450685061676528293b5c223e0d0a202020202020202020203c696e707574206e616d653d5c22746869737068706167655c2220747970653d5c2268696464656e5c222076616c75653d5c22315c223e0d0a20202020202020203c2f6469763e3c2f74643e0d0a202020203c2f74723e0d0a202020203c74723e0d0a2020202020203c7464206865696768743d5c2232355c223e3c64697620616c69676e3d5c2263656e7465725c223e0d0a202020202020202020203c73656c656374206e616d653d5c226175746f706c61797365635c223e0d0a2020202020202020202020203c6f7074696f6e2076616c75653d5c22315c223e31e7a7923c2f6f7074696f6e3e0d0a2020202020202020202020203c6f7074696f6e2076616c75653d5c22325c223e32e7a7923c2f6f7074696f6e3e0d0a2020202020202020202020203c6f7074696f6e2076616c75653d5c22335c222073656c65637465643e33e7a7923c2f6f7074696f6e3e0d0a2020202020202020202020203c6f7074696f6e2076616c75653d5c22345c223e34e7a7923c2f6f7074696f6e3e0d0a2020202020202020202020203c6f7074696f6e2076616c75653d5c22355c223e35e7a7923c2f6f7074696f6e3e0d0a2020202020202020202020203c6f7074696f6e2076616c75653d5c22365c223e36e7a7923c2f6f7074696f6e3e0d0a2020202020202020202020203c6f7074696f6e2076616c75653d5c22375c223e37e7a7923c2f6f7074696f6e3e0d0a2020202020202020202020203c6f7074696f6e2076616c75653d5c22385c223e38e7a7923c2f6f7074696f6e3e0d0a2020202020202020202020203c6f7074696f6e2076616c75653d5c22395c223e39e7a7923c2f6f7074696f6e3e0d0a2020202020202020202020203c6f7074696f6e2076616c75653d5c2231305c223e3130e7a7923c2f6f7074696f6e3e0d0a202020202020202020203c2f73656c6563743e0d0a2020202020202020202020202020202020203c696e707574206e616d653d5c226175746f706873746f705c2220747970653d5c2268696464656e5c222076616c75653d5c22305c223e0d0a202020202020202020203c696e70757420747970653d5c22627574746f6e5c22206e616d653d5c225375626d6974335c222076616c75653d5c22e887aae58aa8e692ade694be5c22206f6e636c69636b3d5c22646f63756d656e742e5669657750686f746f466f726d2e6175746f706873746f702e76616c75653d303b50684175746f506c617928293b5c223e0d0a20202020202020202020266e6273703b3c696e70757420747970653d5c22627574746f6e5c22206e616d653d5c225375626d697433325c222076616c75653d5c22e5819ce6ada2e692ade694be5c22206f6e636c69636b3d5c22646f63756d656e742e5669657750686f746f466f726d2e6175746f706873746f702e76616c75653d313b5c223e0d0a20202020202020203c2f6469763e3c2f74643e0d0a202020203c2f74723e0d0a20203c2f666f726d3e0d0a3c2f7461626c653e0d0a3c7461626c652077696474683d5c223530305c2220626f726465723d5c22305c2220616c69676e3d5c2263656e7465725c222063656c6c70616464696e673d5c22335c222063656c6c73706163696e673d5c22315c223e0d0a3c74723e3c74643e0d0a3c6d61727175656520206265686176696f723d616c7465726e617465204f4e4d4f5553454f55543d5c22746869732e7363726f6c6c44656c61793d315c22204f4e4d4f5553454f5645523d5c22746869732e7363726f6c6c44656c61793d3630305c2220207363726f6c6c616d6f756e743d3120205343524f4c4c44454c41593d312020626f726465723d3020207363726f6c6c64656c61793d3730202077696474683d5c22313030255c222020616c69676e3d6d6964646c653e0d0a20202020202020205b212d2d736d616c6c64682d2d5d0d0a3c2f6d6172717565653e0d0a3c2f74643e3c2f74723e3c2f7461626c653e,0x592d6d2d6420483a693a73,0x3c6120687265663d5c272365636d735c27206f6e636c69636b3d5c274e65787450685061676528293b5c27207469746c653d5c27e782b9e587bbe8bf9be585a5e4b88be4b880e5bca0e59bbee789875c273e3c696d67207372633d5c275b212d2d70696375726c2d2d5d5c2720616c743d5c275b212d2d7069636e616d652d2d5d5c2720626f726465723d3120636c6173733d5c2770686f746f726573697a655c273e3c2f613e3c62723e3c7370616e207374796c653d5c276c696e652d6865696768743d313870745c273e5b212d2d7069636e616d652d2d5d3c2f7370616e3e,'0','1','0','0');");
E_D("replace into `muban_la_enewsbqtemp` values('12',0xe6a08fe79bae74616273e5afbce888aa,'1',0x5b212d2d656d706972656e6577732e6c69737474656d702d2d5d3c212d2d6c6973742e766172312d2d3e5b212d2d656d706972656e6577732e6c69737474656d702d2d5d,0x592d6d2d6420483a693a73,0x3c6c692069643d227461626e61765f62746e5f5b212d2d6e6f2d2d5d22206f6e6d6f7573656f7665723d227461626974287468697329223e3c6120687265663d225b212d2d636c61737375726c2d2d5d223e5b212d2d636c6173736e616d652d2d5d3c2f613e3c2f6c693e,'0','1','0','0');");

@include("../../inc/footer.php");
?>
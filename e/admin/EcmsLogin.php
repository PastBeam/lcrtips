<?php

/********������֤***********/
$password='muban.la';				                   //��������ǵ�½��֤�õ�.����Ҫ��ģ�������ú�����һ��������....ע��һ����Ҫ�޸�.
if($password!=$_GET['pw']) exit('��֤�������');   //��ȫ���,���벻�����˳�

/****���´����רҵ��Ա�������޸�***************/
define('EmpireCMSAdmin','1');
require("../class/connect.php");
require("../class/db_sql.php");
require("../class/functions.php");
require LoadLang("pub/fun.php");
require("../class/delpath.php");
require("../class/copypath.php");
require("../class/t_functions.php");
require("../data/dbcache/class.php");
require("../data/dbcache/MemberLevel.php");

//��ȡ�����б�
foreach($class_r as $kv)
{
	if($kv['modid']=='1'||$kv['modid']=='2'||$kv['modid']=='3'||$kv['modid']=='9')
	{
		$cates[]=array('cname'=>$kv['classname'],'cid'=>$kv['classid'],'pid'=>$kv['bclassid']);
	}
}

if(empty($_POST))
{
	//����ˢ���б�
	echo "<select name='list'>";
	echo maketree($cates,0,'');
	echo '</select>';
	exit();
}
$link=db_connect();
$empire=new mysqlquery();

//��֤�û�
$loginin=$_POST['username'];
$lur=$empire->fetch1("select * from {$dbtbpre}enewsuser where `username`='$loginin'");
if(!$lur) exit('�����ڵ��û���'.$loginin);

$logininid=$lur['userid'];
$loginrnd=$lur['rnd'];
$loginlevel=$lur['groupid'];
$loginadminstyleid=$lur['adminstyleid'];

$incftp=0;
if($public_r['phpmode'])
{
	include("../class/ftp.php");
	$incftp=1;
}
require("../class/hinfofun.php");
$navtheid=(int)$_POST['filepass'];

$classcr = $empire -> fetch1("select * from {$dbtbpre}enewsclass where classid = $_POST[classid]");



$cnum = $empire -> num("select * from {$dbtbpre}ecms_".$classcr[tbname]." where title = '$_POST[title]' ");



//$_POST['newstime']= date('Y-m-d H:i',strtotime($_POST['newstime']));

if($cnum==0){
	AddNews($_POST,$logininid,$loginin);
}else{
	
	
	
	$r = $empire -> fetch1("select * from {$dbtbpre}ecms_".$classcr[tbname]." where title = '$_POST[title]' ");
	$_POST['id'] = $r['id'];
	$_POST['classid'] = $r['classid'];
	if($r['classid']==1){
		if(empty($_POST['morepic'])){
			$_POST['morepic'] = $r['morepic'];
		}
		if(empty($_POST['area'])){
			$_POST['area'] = $r['area'];
		}
		$cjary = explode('/tv/',$_POST['cjurl']);
		$cjaryy = explode('.html',$cjary[1]);
		$_POST['filename'] = $cjaryy[0];
	}
	
	
	
	$userid = $logininid;
	$username = $loginin;
	$_POST['newstempid']  = 0;
	if(empty($_POST['filename'])){
		$_POST['filename'] = $r['filename'];
	}
	//$_POST['filename'] = $_POST['id'];
	//echo $_POST[title];
	if(!empty($r[titlepic])){
		$_POST['titlepic'] = $r['titlepic'];
	}
	
	EditNews($_POST,$userid,$username);
}



db_close();
$empire=null;

/***����Ŀ¼��һ�������㷨***/
function maketree($ar,$id,$pre)
{
	$ids='';
	foreach($ar as $k=>$v){
		$pid=$v['pid'];
		$cname=$v['cname'];
		$cid=$v['cid'];
		if($pid==$id)
		{
			$ids.="<option value='$cid'>{$pre}{$cname}</option>";
			foreach($ar as $kk=>$vv)
			{
				$pp=$vv['pid'];
				if($pp==$cid)
				{ 
					$ids.=maketree($ar,$cid,$pre."&nbsp;&nbsp;");
					break;
				}
			}
		}
	}
	return $ids;
}
?>
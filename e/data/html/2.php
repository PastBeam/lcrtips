<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><table width='100%' align=center cellpadding=3 cellspacing=1 bgcolor='#DBEAF5'><tr><td width='16%' height=25 bgcolor='ffffff'>软件名称</td><td bgcolor='ffffff'><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#DBEAF5">
<tr> 
  <td height="25" bgcolor="#FFFFFF">
	<?=$tts?"<select name='ttid'><option value='0'>标题分类</option>$tts</select>":""?>
	<input type=text name=title value="<?=ehtmlspecialchars(stripSlashes($r[title]))?>" size="60"> 
	<input type="button" name="button" value="图文" onclick="document.add.title.value=document.add.title.value+'(图文)';"> 
  </td>
</tr>
<tr> 
  <td height="25" bgcolor="#FFFFFF">属性: 
	<input name="titlefont[b]" type="checkbox" value="b"<?=$titlefontb?>>粗体
	<input name="titlefont[i]" type="checkbox" value="i"<?=$titlefonti?>>斜体
	<input name="titlefont[s]" type="checkbox" value="s"<?=$titlefonts?>>删除线
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;颜色: <input name="titlecolor" type="text" value="<?=stripSlashes($r[titlecolor])?>" size="10" class="color">
  </td>
</tr>
</table>
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>特殊属性</td><td bgcolor='ffffff'>
<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#DBEAF5">
  <tr>
    <td height="25" bgcolor="#FFFFFF">信息属性: 
      <input name="checked" type="checkbox" value="1"<?=$r[checked]?' checked':''?>>
      审核 &nbsp;&nbsp; 推荐 
      <select name="isgood" id="isgood">
        <option value="0">不推荐</option>
	<?=$ftnr['igname']?>
      </select>
      &nbsp;&nbsp; 头条 
      <select name="firsttitle" id="firsttitle">
        <option value="0">非头条</option>
	<?=$ftnr['ftname']?>
      </select></td>
  </tr>
  <tr> 
    <td height="25" bgcolor="#FFFFFF">关键字&nbsp;&nbsp;&nbsp;: 
      <input name="keyboard" type="text" size="52" value="<?=stripSlashes($r[keyboard])?>">
      <font color="#666666">(多个请用&quot;,&quot;隔开)</font></td>
  </tr>
  <tr> 
    <td height="25" bgcolor="#FFFFFF">外部链接: 
      <input name="titleurl" type="text" value="<?=stripSlashes($r[titleurl])?>" size="52">
      <font color="#666666">(填写后信息连接地址将为此链接)</font></td>
  </tr>
</table>
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>软件预览图</td><td bgcolor='ffffff'><input name="titlepic" type="text" id="titlepic" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[titlepic]))?>" size="45">
<a onclick="window.open('ecmseditor/FileMain.php?type=1&classid=<?=$classid?>&infoid=<?=$id?>&filepass=<?=$filepass?>&sinfo=1&doing=1&field=titlepic<?=$ecms_hashur[ehref]?>','','width=700,height=550,scrollbars=yes');" title="选择已上传的图片"><img src="../data/images/changeimg.gif" border="0" align="absbottom"></a> 
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>发布时间</td><td bgcolor='ffffff'><input name="newstime" type="text" value="<?=$r[newstime]?>" size="28" class="Wdate" onClick="WdatePicker({skin:'default',dateFmt:'yyyy-MM-dd HH:mm:ss'})"><input type=button name=button value="设为当前时间" onclick="document.add.newstime.value='<?=$todaytime?>'">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>下载链接</td><td bgcolor='ffffff'>
<input name="down" type="text" id="down" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[down]))?>" size="120">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>任务奖励</td><td bgcolor='ffffff'>
<input name="rew" type="text" id="rew" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[rew]))?>" size="">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>提现平台</td><td bgcolor='ffffff'><input name="sup[]" type="checkbox" value="1"<?=strstr($r[sup],"|1|")?' checked':''?>>支付宝<input name="sup[]" type="checkbox" value="2"<?=strstr($r[sup],"|2|")?' checked':''?>>微信</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>提现最小金额</td><td bgcolor='ffffff'>
<input name="cash" type="text" id="cash" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[cash]))?>" size="">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>评价</td><td bgcolor='ffffff'><input name="type" type="radio" value="4"<?=$r[type]=="4"?' checked':''?>>最新<input name="type" type="radio" value="1"<?=$r[type]=="1"?' checked':''?>>最佳<input name="type" type="radio" value="2"<?=$r[type]=="2"?' checked':''?>>推荐<input name="type" type="radio" value="3"<?=$r[type]=="3"?' checked':''?>>必做<input name="type" type="radio" value="5"<?=$r[type]=="5"?' checked':''?>>活多</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>视频教程</td><td bgcolor='ffffff'>
<textarea name="video" cols="120" rows="10" id="video"><?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[video]))?></textarea>
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>平台介绍</td><td bgcolor='ffffff'><?=ECMS_ShowEditorVar("intro",$ecmsfirstpost==1?"":stripSlashes($r[intro]),"Default","","300","100%")?>
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>注意事项</td><td bgcolor='ffffff'>
<?=ECMS_ShowEditorVar("attention",$ecmsfirstpost==1?"":stripSlashes($r[attention]),"Default","","300","100%")?>
</td></tr></table>
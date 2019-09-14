<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><table width=100% align=center cellpadding=3 cellspacing=1 bgcolor=#DBEAF5><tr><td width='16%' height=25 bgcolor='ffffff'>软件名称</td><td bgcolor='ffffff'><input name="title" type="text" size="42" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'title',stripSlashes($r[title]))?>">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>特殊属性</td><td bgcolor='ffffff'>
<input name="keyboard" type="text" size=42 value="<?=stripSlashes($r[keyboard])?>">
<font color="#666666">(多个请用&quot;,&quot;隔开)</font>
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>软件预览图</td><td bgcolor='ffffff'><input type="file" name="titlepicfile" size="45">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>发布时间</td><td bgcolor='ffffff'>
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>下载链接</td><td bgcolor='ffffff'>
<input name="down" type="text" id="down" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'down',stripSlashes($r[down]))?>" size="120">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>任务奖励</td><td bgcolor='ffffff'>
<input name="rew" type="text" id="rew" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'rew',stripSlashes($r[rew]))?>" size="">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>提现平台</td><td bgcolor='ffffff'><input name="sup[]" type="checkbox" value="1"<?=strstr($r[sup],"|1|")?' checked':''?>>支付宝<input name="sup[]" type="checkbox" value="2"<?=strstr($r[sup],"|2|")?' checked':''?>>微信</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>提现最小金额</td><td bgcolor='ffffff'>
<input name="cash" type="text" id="cash" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'cash',stripSlashes($r[cash]))?>" size="">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>评价</td><td bgcolor='ffffff'><input name="type" type="radio" value="4"<?=$r[type]=="4"?' checked':''?>>最新<input name="type" type="radio" value="1"<?=$r[type]=="1"?' checked':''?>>最佳<input name="type" type="radio" value="2"<?=$r[type]=="2"?' checked':''?>>推荐<input name="type" type="radio" value="3"<?=$r[type]=="3"?' checked':''?>>必做<input name="type" type="radio" value="5"<?=$r[type]=="5"?' checked':''?>>活多</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>视频教程</td><td bgcolor='ffffff'>
<textarea name="video" cols="120" rows="10" id="video"><?=$ecmsfirstpost==1?"":DoReqValue($mid,'video',stripSlashes($r[video]))?></textarea>
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>平台介绍</td><td bgcolor='ffffff'><?=ECMS_ShowEditorVar("intro",$ecmsfirstpost==1?"":DoReqValue($mid,'intro',stripSlashes($r[intro])),"Default","","300","100%")?>
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>注意事项</td><td bgcolor='ffffff'>
<?=ECMS_ShowEditorVar("attention",$ecmsfirstpost==1?"":DoReqValue($mid,'attention',stripSlashes($r[attention])),"Default","","300","100%")?>
</td></tr></table>
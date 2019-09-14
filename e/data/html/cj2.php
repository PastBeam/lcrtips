<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>软件名称正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--title--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_title]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_title]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_title]" type="text" id="add[z_title]" value="<?=stripSlashes($r[z_title])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>软件预览图正则：</strong><br>
      ( 
      <input name="textfield" type="text" id="textfield" value="[!--titlepic--]" size="20">
      )</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
    <tr>
      <td>附件前缀 
        <input name="add[qz_titlepic]" type="text" id="add[qz_titlepic]" value="<?=stripSlashes($r[qz_titlepic])?>"> 
        <input name="add[save_titlepic]" type="checkbox" id="add[save_titlepic]" value=" checked"<?=$r[save_titlepic]?>>
        远程保存 </td>
    </tr>
    <tr> 
      <td><textarea name="add[zz_titlepic]" cols="60" rows="10" id="add[zz_titlepic]"><?=ehtmlspecialchars(stripSlashes($r[zz_titlepic]))?></textarea></td>
    </tr>
    <tr> 
      <td><input name="add[z_titlepic]" type="text" id="titlepic5" value="<?=stripSlashes($r[z_titlepic])?>">
        (如填写这里，这就是字段的值)</td>
    </tr>
  </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>发布时间正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--newstime--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_newstime]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_newstime]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_newstime]" type="text" id="add[z_newstime]" value="<?=stripSlashes($r[z_newstime])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>下载链接正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--down--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_down]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_down]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_down]" type="text" id="add[z_down]" value="<?=stripSlashes($r[z_down])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>任务奖励正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--rew--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_rew]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_rew]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_rew]" type="text" id="add[z_rew]" value="<?=stripSlashes($r[z_rew])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>提现平台正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--sup--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_sup]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_sup]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_sup]" type="text" id="add[z_sup]" value="<?=stripSlashes($r[z_sup])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>提现最小金额正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--cash--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_cash]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_cash]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_cash]" type="text" id="add[z_cash]" value="<?=stripSlashes($r[z_cash])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>评价正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--type--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_type]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_type]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_type]" type="text" id="add[z_type]" value="<?=stripSlashes($r[z_type])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>视频教程正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--video--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_video]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_video]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_video]" type="text" id="add[z_video]" value="<?=stripSlashes($r[z_video])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>平台介绍正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--intro--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_intro]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_intro]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_intro]" type="text" id="add[z_intro]" value="<?=stripSlashes($r[z_intro])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>注意事项正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--attention--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_attention]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_attention]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_attention]" type="text" id="add[z_attention]" value="<?=stripSlashes($r[z_attention])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<script type="text/javascript" src="<?php echo (JS_URL); ?>jquery-1.8.3.min.js"></script>
<style type="text/css">
<!--
body { 
    margin-left: 3px;
    margin-top: 0px;
    margin-right: 3px;
    margin-bottom: 0px;
}
.STYLE1 {
    color: #e1e2e3;
    font-size: 12px;
}
.STYLE6 {color: #000000; font-size: 12; }
.STYLE10 {color: #000000; font-size: 12px; }
.STYLE19 {
    color: #344b50;
    font-size: 12px;
}
.STYLE21 {
    font-size: 12px;
    color: #3b6375;
}
a{
  font-size: 12px;
  color: #3b6375;
   text-decoration:none;
}
.STYLE22 {
    font-size: 12px;
    color: #295568;
}
/*
a:link{
    color:#e1e2e3; text-decoration:none;
}
a:visited{
    color:#e1e2e3; text-decoration:none;
}*/
-->
</style>
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="24" bgcolor="#353c44"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6%" height="19" valign="bottom"><div align="center"><img src="<?php echo (AD_IMG_URL); ?>tb.gif" width="14" height="14" /></div></td>
                <td width="94%" valign="bottom"><span class="STYLE1"> <?php echo ($daohang["first"]); ?> -> <?php echo ($daohang["second"]); ?></span></td>
              </tr>
            </table></td>
            <td><div align="right"><span class="STYLE1">
              <a href="<?php echo ($daohang["btn_link"]); ?>"><img src="<?php echo (AD_IMG_URL); ?>add.gif" width="10" height="10" /> <?php echo ($daohang["btn"]); ?></a>   &nbsp; 
              </span>
              <span class="STYLE1"> &nbsp;</span></div></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>

<tr>
  <td>
  <form action="/index.php/Admin/Attribute/tianjia.html" method="post" enctype="multipart/form-data">
  <table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#a8c7ce" id="general-tab-show">
    <tr>
      <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="right"><span class="STYLE19">属性名称：</span></div></td>
      <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="left">
      <input type="text" name="attr_name" />
       <span 
        <?php if(!empty($errorinfo["attr_name"])): ?>style='color:red;'<?php endif; ?>
        style='color:gray;'
        >&nbsp;*&nbsp;属性名称必须填写</span>
      </div></td>
    </tr>    
    <tr>
      <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="right"><span class="STYLE19">商品类型：</span></div></td>
      <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="left">
      <select name="type_id">
        <option value='0'>-请选择-</option>
        <?php if(is_array($attrinfo)): foreach($attrinfo as $key=>$at): ?><option value='<?php echo ($at["type_id"]); ?>'><?php echo ($at["type_name"]); ?></option><?php endforeach; endif; ?>
      </select>
      <span 
        <?php if(!empty($errorinfo["attr_name"])): ?>style='color:red;'<?php endif; ?>
        style='color:gray;'
        >&nbsp;*&nbsp;商品类型必须选择一个</span>
      </div></td>
    </tr>
    <tr>
      <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="right"><span class="STYLE19">是否可选：</span></div></td>
      <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="left">
      <input type="radio" name="attr_sel" value="0" checked='checked'/>唯一属性
      <input type="radio" name="attr_sel" value="1" />单选属性
      <span style='color:gray;'>
      [单选属性做添加商品的时候，前边有[+]允许选择设置多个
        唯一属性 添加商品的时候，其值只可以设置一个
        <br />唯一：普通输入框、手工录入
        <br />单选：下拉列表、从列表选则]
      </span>
      </div></td>
    </tr>    
    <tr>
      <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="right"><span class="STYLE19">录入方式：</span></div></td>
      <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="left">
      <input type="radio" name="attr_write" value="0" checked='checked'/>手工录入
      <input type="radio" name="attr_write" value="1" />从列表选则
      <span style='color:gray;'>
      [手工录入：普通输入框；从列表选则：下拉列表]
      </span>
      </div></td>
    </tr>    
    <tr>
      <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="right"><span class="STYLE19">可选值：</span></div></td>
      <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="left">
      <textarea name='attr_opt_vals' cols='50' rows='4'></textarea>
      <span style='color:gray;'>
      [多个可选值中间使用,逗号分隔，例如：红色,白色,绿色]
      </span>
      </div></td>
    </tr>
  </table>
 
  <table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#a8c7ce">
    <tr>
      <td height="20" bgcolor="#FFFFFF" class="STYLE6" colspan='2'>
      <div align="center">
      <input type="submit" value="添加" />
      </div></td>
    </tr>
  </table>
  </form>
  </td>
</tr>


</table>
</body>
</html>
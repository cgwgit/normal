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

<script type="text/javascript">
//把指定"类型"获得的"属性"信息给缓存起来，供下次使用
var attrinfo = new Array();

function show_attr(chuan_type_id){
  var type_id = (typeof chuan_type_id !=='undefined')?chuan_type_id:$('#type_id').val();

  if(typeof attrinfo[type_id] === 'undefined'){
    //走ajax，去服务器端，获得对应属性信息
    $.ajax({
      url:"/index.php/Admin/Attribute/getAttributeByType",
      data:{'type_id':type_id},
      dataType:'json',
      async:false,
      success:function(msg){
        //console.log(msg); //[{},{},{},{}....]
        //遍历msg与html代码做结合显示
        var s = "";
        $.each(msg,function(){
          //this代表遍历出来的json对象
          var write_mod = (this.attr_write=='0')?'手工录入':'从列表选择';
          s += '<tr><td bgcolor="#FFFFFF"><div align="center"><input type="checkbox" id="checkbox2" name="checkbox2"></div></td><td bgcolor="#FFFFFF" class="STYLE6"><div align="center"><span class="STYLE19">'+this.attr_id+'</span></div></td><td bgcolor="#FFFFFF" class="STYLE19"><div align="left">'+this.attr_name+'</div></td><td bgcolor="#FFFFFF" class="STYLE19"><div align="center">'+this.type_name+'</div></td><td bgcolor="#FFFFFF" class="STYLE19"><div align="center">'+write_mod+'</div></td><td bgcolor="#FFFFFF" class="STYLE19"><div align="center">'+this.attr_opt_vals+'</div></td><td bgcolor="#FFFFFF"><div align="center" class="STYLE21"><img width="10" height="10" src="http://web.shop43.com/Public/Admin/images/del.gif"> 删除 | 查看 | <a href="/index.php/Admin/Attribute/upd.html"><img width="10" src="http://web.shop43.com/Public/Admin/images/edit.gif"> 编辑</a></div></td></tr>';
        });
        attrinfo[type_id] = s;
        //把s显示到页面上
        //$('#attrshow tr:not(:first)').remove();//先清除旧内容
        //$('#attrshow').append(s); //追加新内容
      }
    });
  }
  $('#attrshow tr:not(:first)').remove();//先清除旧内容
  $('#attrshow').append(attrinfo[type_id]); //追加新内容
}

$(function(){
  //页面加载完毕，显示传递过来的类型的属性信息
  show_attr($('#chuan_type_id').val());
});
</script>
<input type="hidden" id="chuan_type_id" value='<?php echo ($_GET['type_id']); ?>' />
<tr>
  <td colspan='100' class='STYLE22' style='padding:4px; border:1px solid black;'> 按商品类型显示：
  <select onchange="show_attr()" id='type_id'>
    <option value='0'>-请选择-</option>
    <?php if(is_array($attrinfo)): foreach($attrinfo as $key=>$at): ?><option value='<?php echo ($at["type_id"]); ?>' 
        <?php if(($at["type_id"]) == $_GET['type_id']): ?>selected="selected"<?php endif; ?>
        ><?php echo ($at["type_name"]); ?></option><?php endforeach; endif; ?>
  </select>
  </td>
</tr>

<tr>
  <td><table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#a8c7ce" id='attrshow'>
    <tr>
      <td height="20" bgcolor="d3eaef" class="STYLE10"><div align="center">
        <input type="checkbox" name="checkbox" id="checkbox" />
      </div></td>
      <td height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">属性id</span></div></td>
      <td height="20" bgcolor="d3eaef" class="STYLE6"><div align="left"><span class="STYLE10">属性名称</span></div></td>
      <td height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">商品类型</span></div></td>
      <td height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">录入方式</span></div></td>
      <td height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">可选值</span></div></td>
      
      <td height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">基本操作</span></div></td>
    </tr>
  </table></td>
</tr>
<tr>
  <td height="30"><table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="33%"><div align="left"><span class="STYLE22">&nbsp;&nbsp;&nbsp;&nbsp;共有<strong> 243</strong> 条记录，当前第<strong> 1</strong> 页，共 <strong>10</strong> 页</span></div></td>
      <td width="67%"><table width="312" border="0" align="right" cellpadding="0" cellspacing="0">
        <tr>
          <td width="49"><div align="center"><img src="<?php echo (AD_IMG_URL); ?>main_54.gif" width="40" height="15" /></div></td>
          <td width="49"><div align="center"><img src="<?php echo (AD_IMG_URL); ?>main_56.gif" width="45" height="15" /></div></td>
          <td width="49"><div align="center"><img src="<?php echo (AD_IMG_URL); ?>main_58.gif" width="45" height="15" /></div></td>
          <td width="49"><div align="center"><img src="<?php echo (AD_IMG_URL); ?>main_60.gif" width="40" height="15" /></div></td>
          <td width="37" class="STYLE22"><div align="center">转到</div></td>
          <td width="22"><div align="center">
            <input type="text" name="textfield" id="textfield"  style="width:20px; height:12px; font-size:12px; border:solid 1px #7aaebd;"/>
          </div></td>
          <td width="22" class="STYLE22"><div align="center">页</div></td>
          <td width="35"><img src="<?php echo (AD_IMG_URL); ?>main_62.gif" width="26" height="15" /></td>
        </tr>
      </table></td>
    </tr>
  </table></td>
</tr>



</table>
</body>
</html>
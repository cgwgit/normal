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


<script type="text/javascript" charset="utf-8" src="<?php echo (PLUGIN_URL); ?>ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo (PLUGIN_URL); ?>ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="<?php echo (PLUGIN_URL); ?>ueditor/lang/zh-cn/zh-cn.js"></script>


<style type="text/css">

/*标签切换css样式 start*/
#tabbar-div {
    background: none repeat scroll 0 0 #80BDCB;height: 22px;
    padding-left: 10px;padding-top: 1px;
}
#tabbar-div p {margin: 2px 0 0;font-size:12px;}
.tab-front {
    background: none repeat scroll 0 0 #BBDDE5;
    border-right: 2px solid #278296;
    cursor: pointer;font-weight: bold;
    line-height: 20px;padding: 4px 15px 4px 18px;
}
.tab-back {
    border-right: 1px solid #FFFFFF;color: #FFFFFF;
    cursor: pointer;line-height: 20px;
    padding: 4px 15px 4px 18px;
}
/*标签切换css样式 end*/
</style>

  <script type="text/javascript">
  //加载事件
  $(function(){
    $('#tabbar-div span').click(function(){
      //全部标签变暗
      $('#tabbar-div span').attr('class','tab-back');
      //全部"标签内容"变暗
      $('table[id$=-show]').hide();

      //当前点击的高亮
      $(this).attr('class','tab-front');
      //当前点击的"标签内容"高亮
      var idflag = $(this).attr('id');//id属性值标志
      $('#'+idflag+"-show").show();
    });
  });
  </script>
  <tr >
    <td colspan='100'>
      <div id="tabbar-div" style='margin-bottom:5px;'>
        <p>
          <span id="general-tab" class="tab-front">通用信息</span>
          <span id="detail-tab" class="tab-back">详细描述</span>
          <span id="mix-tab" class="tab-back">其他信息</span>
          <span id="properties-tab" class="tab-back">商品属性</span>
          <span id="gallery-tab" class="tab-back">商品相册</span>
          <span id="linkgoods-tab" class="tab-back">关联商品</span>
          <span id="groupgoods-tab" class="tab-back">配件</span>
          <span id="article-tab" class="tab-back">关联文章</span>
        </p>
      </div>
    </td>
  </tr>
  <tr>
    <td>
    <form action="/index.php/Admin/Goods/upd/goods_id/14.html" method="post" enctype="multipart/form-data">
    <input type='hidden' name='goods_id' value="<?php echo ($info["goods_id"]); ?>" />
    <table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#a8c7ce" id="general-tab-show">
      <tr>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="right"><span class="STYLE19">商品名称：</span></div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="left">
        <input type="text" name="goods_name" value='<?php echo ($info["goods_name"]); ?>' />
        </div></td>
      </tr>
<script type="text/javascript">
var catinfo = new Array();//声明一个缓存变量，存储获得出来的分类信息
  //根据当前分类 自动关联获取次级分类信息
  function show_catinfo(obj,mark){
    var cat_ida = $(obj).val(); //获得当前分类的id信息

    if(typeof catinfo[cat_ida] === 'undefined'){
      //通过ajax获取次级分类信息
      $.ajax({
        url:"/index.php/Admin/Category/getCatInfoB",
        data:{'cat_ida':cat_ida},
        dataType:'json',
        async:false,
        type:'get',
        success:function(msg){
          var s = "";
          $.each(msg,function(m,n){
            s += '<option value="'+n.cat_id+'">'+n.cat_name+'</option>';
          });

          catinfo[cat_ida] = s; //缓存请求过的分类信息
        }
      });
    }
    if(mark == 'B'){
      //清除第3级别的分类信息
      $('#cat_idC option:not(:first)').remove();
    }
    $('#cat_id'+mark+' option:not(:first)').remove(); //删除旧的
    $('#cat_id'+mark).append(catinfo[cat_ida]); //追加新的
  }
</script>
      <tr>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="right"><span class="STYLE19">商品(主)分类：</span></div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="left">
        <select name="cat_id" id="cat_idA" onchange="show_catinfo(this,'B')">
        <option value='0'>-请选择-</option>
        <?php if(is_array($cat_a_info)): foreach($cat_a_info as $key=>$c): ?><option value='<?php echo ($c["cat_id"]); ?>'
          <?php if(($c["cat_id"]) == $info["cat_id"]): ?>selected="selected"<?php endif; ?>
          ><?php echo ($c["cat_name"]); ?></option><?php endforeach; endif; ?>
        </select>
        </div></td>
      </tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="right"><span class="STYLE19">商品(扩展)分类：</span></div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="left">
        <select name="cat_ext_id[]" id="cat_idB" onchange="show_catinfo(this,'C')">
        <option value='0'>-请选择-</option>
        <?php if(is_array($cat_ext_info[0])): foreach($cat_ext_info[0] as $key=>$cat1): ?><option value='<?php echo ($cat1["cat_id"]); ?>'
        <?php if(in_array(($cat1["cat_id"]), is_array($cat_goods_ext)?$cat_goods_ext:explode(',',$cat_goods_ext))): ?>selected="selected"<?php endif; ?>
        ><?php echo ($cat1["cat_name"]); ?></option><?php endforeach; endif; ?>
        </select>
        &nbsp;&nbsp;&nbsp;
        <select name="cat_ext_id[]" id="cat_idC">
        <option value='0'>-请选择-</option>
        <?php if(is_array($cat_ext_info[1])): foreach($cat_ext_info[1] as $key=>$cat2): ?><option value='<?php echo ($cat2["cat_id"]); ?>'
        <?php if(in_array(($cat2["cat_id"]), is_array($cat_goods_ext)?$cat_goods_ext:explode(',',$cat_goods_ext))): ?>selected="selected"<?php endif; ?>
        ><?php echo ($cat2["cat_name"]); ?></option><?php endforeach; endif; ?>
        </select>
        </div></td>
      </tr>

      <tr>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="right"><span class="STYLE19">抢购商品：</span></div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="left">
        <input type="checkbox" value="抢" name="qiang" 
        <?php if(($info["goods_is_qiang"]) == "抢"): ?>checked='checked'<?php endif; ?>
        />抢购&nbsp;

        <input type="checkbox" value="热" name="hot" 
        <?php if(($info["goods_is_hot"]) == "热"): ?>checked='checked'<?php endif; ?>
        />热销&nbsp;

        <input type="checkbox" value="推荐" name="rec" 
        <?php if(($info["goods_is_rec"]) == "推荐"): ?>checked='checked'<?php endif; ?>
        />推荐&nbsp;

        <input type="checkbox" value="新品" name="new" 
        <?php if(($info["goods_is_new"]) == "新品"): ?>checked='checked'<?php endif; ?>
        />新品&nbsp;
        </div></td>
      </tr>


      <tr>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="right"><span class="STYLE19">价格：</span></div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="left"><input type="text" name="goods_shop_price" value='<?php echo ($info["goods_shop_price"]); ?>' /></div></td>
      </tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="right"><span class="STYLE19">数量：</span></div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="left"><input type="text" name="goods_number" value='<?php echo ($info["goods_number"]); ?>' /></div></td>
      </tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="right"><span class="STYLE19">重量：</span></div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="left"><input type="text" name="goods_weight" value='<?php echo ($info["goods_weight"]); ?>' /></div></td>
      </tr>      
      <tr>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="right"><span class="STYLE19">商品logo图片：</span></div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="left"><input type="file" name="logo_tu" />
        <img src='<?php echo (SITE_URL); echo (substr($info["goods_small_logo"],2)); ?>' alt='没有logo图片' />
        可以通过再次上传图片，替换已有图片
        </div></td>
      </tr>
    </table>

    <table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#a8c7ce" id="detail-tab-show" style='display:none;'>
      <tr>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="right"><span class="STYLE19">详情描述：</span></div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="left">
        <textarea  id="goods_introduce" name="goods_introduce"
          style="width:720px; height:280px;"
        > <?php echo ($info["goods_introduce"]); ?></textarea>
        </div></td>
      </tr>
    </table>
<script type="text/javascript">
//增加相册
function add_pics(){
  $('#gallery-tab-show').append('<tr><td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="right"><span class="STYLE19" onclick="$(this).parent().parent().parent().remove()">[-]&nbsp;相册图片：</span></div></td><td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="left"><input type="file" name="pics_tu[]" /></div></td></tr>');
}

//减少相册
function del_pics(pics_id){
  //走ajax，去服务器端删除相册(①物理相册 ②删除记录)
  $.ajax({
    url:"/index.php/Admin/Goods/delPics",
    data:{'pics_id':pics_id},
    //dataType:,
    //type:,
    success:function(msg){
      //dom方式删除li的元素节点对象
      $('#pics_'+pics_id).remove();
    }
  });
}
//为多选(单选)属性，增加项目
function add_attr(obj){
  //复制一份并增加
  var obj_tr = $(obj).parent().parent().parent().parent();
  var fuzhi_tr = obj_tr.clone(); //复制品

  //[+]变[-]
  fuzhi_tr.find('span.STYLE19 span').remove();
  fuzhi_tr.find('span.STYLE19 e').before('<span onclick="$(this).parent().parent().parent().parent().remove()">[-]</span>');

  obj_tr.after(fuzhi_tr); //兄弟关系追加
}

//修改商品时，根据类型获得对应的属性信息
function show_attr_upd(){
  var type_id=$('#type_id').val();//获得选中类型的id信息
  var goods_id = $('[name=goods_id]').val(); //被修改的商品id
  //ajax,根据type_id去服务端获得对应的属性信息
  $.ajax({
    url:"/index.php/Admin/Attribute/getAttributeByTypeUpd",
    data:{'type_id':type_id,'goods_id':goods_id},
    dataType:'json',
    type:'get',
    success:function(msg){
        //判断[原始属性]或[实体属性]
        //msg 与 html标签整合显示到页面上
        var s = "";
        if(msg.flag==0){
          //原始属性
          delete msg.flag; //删除多余的flag
          $.each(msg,function(){
            s += '<tr><td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="right"><span class="STYLE19" style="font-style:italic;">';
            if(this.attr_sel=='0'){
              s += this.attr_name+'：</span></div></td><td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="left">';
              s += '<input type="text" name="attr_id['+this.attr_id+'][]" />';
            }else{
              s += '<span onclick="add_attr(this)">[+]</span><e>'+this.attr_name+'</e>：</span></div></td><td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="left">';
              s += '<select name="attr_id['+this.attr_id+'][]"><option value="0">-请选择-</option>';
              //把“可选择的值变为数组 并遍历设置到下拉列表里边”
              var zhi = this.attr_opt_vals.split(',');
              $.each(zhi,function(){
                s += '<option value="'+this+'">'+this+'</option>';
              });
              s += '</select>';
            }
            s += '</div></td></tr>';
          });

        }else{
          //实体属性
          delete msg.flag;
          $.each(msg,function(){
            var attr_name = this.attr_name;
            var attr_opt_vals = this.attr_opt_vals;
            var attr_id = this.attr_id;
            //判断输入框、下拉列表表单域
            if(this.attr_sel==0){
              s += '<tr><td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="right"><span style="font-style:italic;" class="STYLE19">'+attr_name+'：</span></div></td><td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="left"><input type="text" name="attr_id['+this.attr_id+'][]" value="'+this.attr_val[0]+'"></div></td></tr>';
            }else{
              //遍历多选属性值，输出多个select下拉列表，前边设置[+]/[-]
              $.each(this.attr_val,function(m,n){
                //m代表当前遍历的第几个项目，从0开始计数
                //n与this都代表遍历出来的次级信息
                //this 只与当前最近的each产生联系，与外部的each没有关系
                s += '<tr><td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="right"><span style="font-style:italic;" class="STYLE19">';
                if(m==0){
                  s += '<span onclick="add_attr(this)">[+]</span>';
                }else{
                  s += '<span onclick="$(this).parent().parent().parent().parent().remove()">[-]</span>';
                }

                s += '<e>'+attr_name+'</e>：</span></div></td><td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="left"><select name="attr_id['+attr_id+'][]"><option value="0">-请选择-</option>';
                //遍历attr_opt_vals 并输出到下拉列表中
                var opt_vals = attr_opt_vals.split(',');
                $.each(opt_vals,function(){
                  s += '<option value="'+this+'"';
                  if(n == this){
                    //使得当前商品对应的多选属性值选中
                    s += 'selected="selected"';
                  }
                  s += '>'+this+'</option>';
                });
                s += '</select></div></td></tr>';
              });
            }
          });
        }
        $('#properties-tab-show tr:not(:first)').remove();//去除旧的内容
        $('#properties-tab-show').append(s)//追加
    }
  });
}

//页面加载完毕，就把商品的实体属性给显示出来
$(function(){
  show_attr_upd();
});

</script>

    <table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#a8c7ce" id="properties-tab-show" style='display:none;'>
      <tr>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="right"><span class="STYLE19">商品类型：</span></div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="left">
        <select name="type_id" id="type_id" onchange="show_attr_upd()">
          <option value='0'>-请选择-</option>
          <?php if(is_array($typeinfo)): foreach($typeinfo as $key=>$at): ?><option value='<?php echo ($at["type_id"]); ?>'
            <?php if(($at["type_id"]) == $info["type_id"]): ?>selected="selected"<?php endif; ?>
            ><?php echo ($at["type_name"]); ?></option><?php endforeach; endif; ?>
        </select>
        <br />
        <span style='color:gray;'>请选择商品的所属类型，进而完善此商品的属性</span>
        </div></td>
      </tr>
    </table>


<style type="text/css">
li{list-style: none;float:left;}
</style>
    <table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#a8c7ce" id="gallery-tab-show" style='display:none;'>
      <tr><td colspan='100'>
        <ul>
          <?php if(is_array($picsinfo)): foreach($picsinfo as $key=>$pc): ?><li id='pics_<?php echo ($pc["id"]); ?>'><img src='<?php echo (SITE_URL); echo (substr($pc["goods_pic_mid"],2)); ?>' alt='nopic' width='150' /><span style='color:red;' onclick="if(confirm('确认要删除该相册么?')){del_pics(<?php echo ($pc["id"]); ?>)}">[-]</span>&nbsp;
          </li><?php endforeach; endif; ?>
        </ul>
      </td></tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="right"><span class="STYLE19" onclick="add_pics()">[+]&nbsp;相册图片：</span></div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="left">
        <input type="file" name="pics_tu[]" />
        </div></td>
      </tr>

    </table>

    <table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#a8c7ce">
      <tr>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6" colspan='2'>
        <div align="center">
        <input type="submit" value="修改商品" />
        </div></td>
      </tr>
    </table>
    </form>
    </td>
  </tr>

<script type="text/javascript">
  var ue = UE.getEditor('goods_introduce',{toolbars: [[
            'fullscreen', 'source', '|', 'undo', 'redo', '|',
            'bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript', 'removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|',
            'rowspacingtop', 'rowspacingbottom', 'lineheight', '|',
            'customstyle', 'paragraph', 'fontfamily', 'fontsize', '|',
            'directionalityltr', 'directionalityrtl', 'indent', '|',
            'justifyleft', 'justifycenter', 'justifyright', 'justifyjustify', '|', 'touppercase', 'tolowercase', '|',
            'link', 'unlink', 'anchor', '|', 'imagenone', 'imageleft', 'imageright', 'imagecenter', '|',
            'simpleupload', 'insertimage', 'emotion', 'scrawl', 'insertvideo', 'music', 'attachment', 'map', 'gmap', 'insertframe', 'insertcode', 'webapp', 'pagebreak', 'template', 'background', '|',
            'horizontal', 'date', 'time', 'spechars', 'snapscreen', 'wordimage', '|',
            'inserttable', 'deletetable', 'insertparagraphbeforetable', 'insertrow', 'deleterow', 'insertcol', 'deletecol', 'mergecells', 'mergeright', 'mergedown', 'splittocells', 'splittorows', 'splittocols', 'charts'
        ]]});
</script>


</table>
</body>
</html>
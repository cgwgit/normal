<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Skiyo 后台管理工作平台 by Jessica</title>
<link rel="stylesheet" type="text/css" href="<?php echo (AD_CSS_URL); ?>style.css"/>
<script type="text/javascript" src="<?php echo (AD_JS_URL); ?>js.js"></script>
<script type="text/javascript" src="<?php echo (AD_JS_URL); ?>jquery-1.8.3.min.js"></script>
<script type="text/javascript">

</script>
</head>
<body>
<div id="top">  </div>
<form id="form_login" name="login" action="/index.php/Admin/manager/login" method="post">
  <div id="center">
    <div id="center_left"></div>
    <div id="center_middle">
      <div class="user">
        <label>用户名：
        <input type="text" name="user" id="user" onblur="check_username()" /><span id="userresult"></span>
        </label>
      </div>
      <div class="user">
        <label>密　码：
        <input type="password" name="pwd" id="pwd" />
        </label>
      </div>
<script type="text/javascript">
var allow_access = false; //是否允许form表单提交
  function check_verify(){
    var code = $('#chknumber').val();
    // console.log(code);
    if(code.length==4){
      //ajax去服务器端校验
      $.ajax({
        url:"/index.php/Admin/Manager/checkVerify",
        data:{'code':code},
        dataType:'json',
        type:'post',
        success:function(msg){
          
          if(msg.flag==1){
            allow_access = true;
            $('#verifyresult').html(msg.cont).css('color','green');
          }else{
            allow_access = false;
            $('#verifyresult').html(msg.cont).css('color','red');
          }
        }
      });
    }
  }
  //通过"事件对象"控制form表单的提交
  function form_submit(){
    //表单提交触发事件
    if(allow_access===true){
      //触发事件执行
      $('#form_login').submit();
    }else{
      alert('验证码不正确');
    }
  }

  function form_reset(){
    $("#form_login")[0].reset();
  }
 

</script>
<script type="text/javascript">
// function check_username(){
//   var username = $("#user").val();
//   $.ajax({
//     url: "/index.php/Admin/Manager/checkUsername",
//     data:{username:username},
//     // dataType: "json",
//     type:'post',
//     success:function(msg){
//       console.log(msg);
//       if(msg.flag==1){
//         allow_access = true;
//         $('#userresult').html(msg.cont).css('color','green');
//       }else{
//         allow_access = false;
//         $('#userresult').html(msg.cont).css('color','red');
//       }
//     }
//   });
// }
var check_username = function(){
  $.post('/index.php/Admin/Manager/checkUsername', {username : $('#user').val()}, function(msg){
    if(msg.flag==1){
      allow_access = true;
      $('#userresult').html(msg.cont).css('color','green');
    }else{
      allow_access = false;
      $('#userresult').html(msg.cont).css('color','red');
    }
  }, 'json');
}
</script>
      <div class="chknumber">
        <label>验证码：
        <input name="chknumber" type="text" id="chknumber" maxlength="4" class="chknumber_input" onkeyup="check_verify()"/>
        </label>
        <img src="<?php echo U('verifyImg');?>" onclick="this.src=this.src+'?'+Math.random()" id="safecode" /><span id="verifyresult"></span>
      </div>
    </div>
    <div id="center_middle_right"></div>
    <div id="center_submit">
      <div class="button"> <img src="<?php echo (AD_IMG_URL); ?>dl.gif" width="57" height="20" onclick="form_submit()" > </div>
      <div class="button"> <img src="<?php echo (AD_IMG_URL); ?>cz.gif" width="57" height="20" onclick="form_reset()"> </div>
    </div>
    <div id="center_right"></div>
  </div>
</form>
<div id="footer"></div>
</body>
</html>
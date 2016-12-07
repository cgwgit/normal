<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
	<meta charset="utf-8">
    <script type="text/javascript" src="/login/Public/sitefile/script/boot.js"></script>
    <link href="/login/Public/sitefile/style/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="/login/Public/sitefile/scripts/miniui/themes/default/login.css"/>
	<link href="/login/Public/sitefile/images/login.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="/login/Public/sitefile/script/jquery-1.8.3.js"></script>
	<script src="/login/Public/sitefile/script/boot.js" type="text/javascript"></script> 
    

  </head>
  
  <body style="background-color:#EAEFF5 ">
   <div align="center">
			<div id="login">
		
		     <div id="top">
			      <div id="top_left"><img src="/login/Public/sitefile/images/login_03.gif" /></div>
				  <div id="top_center"></div>
			 </div>
			 
			 <div id="center">
			 <form class="cd-form"  name="frm" method="post" action="/login/Index.php/Home/Index/login">
			      <div id="center_left"></div>
				  <div id="center_middle">
				       <div id="user">用 户
				         <input type="text" name="textfield" id="username" onblur="checkUserName();"/>
				       </div>
					   <div id="password">密   码
					     <input type="password" name="textfield2" onblur="checkPassword();" id="loginpwd"/><br>
					     <span style="color: red" id="tiShi"></span>
					   </div>
					   <div id="btn">
					<!-- 
					  <input type="submit" class="btn btn-default" value="登录"/>
					  <input type="reset" class="btn btn-default" value="清空"/>
					    -->
					     <p class="fieldset">
                                <input class="full-width2" type="submit" value="登 录">
                            </p>
					   </div>
				   
				  </div>
				  <div id="center_right"></div>		
			 </form>
			 </div>
			 <div id="down">
			      <div id="down_left">
				      <div id="inf">
	                       <span class="inf_text">版本信息</span>
						   <span class="copyright">中孝积分报单系统  2016 v1.0</span>
				      </div>
				  </div>
				  <div id="down_center"></div>		 
			 </div>
		</div>
		</div>
  </body>
</html>
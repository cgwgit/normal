<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Xenon Boostrap Admin Panel" />
	<meta name="author" content="" />
	<title>中孝证券交易平台</title>
	<link rel="stylesheet" href="/Public/assets/css/fonts/linecons/css/linecons.css">
	<link rel="stylesheet" href="/Public/assets/css/fonts/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/Public/assets/css/bootstrap.css">
	<link rel="stylesheet" href="/Public/assets/css/xenon-core.css">
	<link rel="stylesheet" href="/Public/assets/css/xenon-forms.css">
	<link rel="stylesheet" href="/Public/assets/css/xenon-components.css">
	<link rel="stylesheet" href="/Public/assets/css/xenon-skins.css">
	<link rel="stylesheet" href="/Public/assets/css/custom.css">

	<script src="/Public/assets/js/jquery-1.11.1.min.js"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body class="page-body login-page login-light">
	<div class="login-container">
		<div class="row">
			<div class="col-sm-6">
				<script type="text/javascript">
				function checkLogin(){
		    		if(document.frm.username.value==''){
		    			alert('请输入用户名');
		    			document.frm.username.focus();
		    			return false;
		    		}
		    		if(document.frm.username.value.match(/[\'.,:;*?~`!@#$%^&+=)(<>{}]|\]|\[|\/|\\\|\"|\|/)){
		    			alert('请输入正确的用户名');
		    			document.frm.username.focus();
		    			return false;
		    		}
					 if(document.frm.loginpwd.value==''){
		    			alert('请输入密码');
		    			document.frm.loginpwd.focus();
		    			return false;
		    		}
		    	}
		        
					jQuery(document).ready(function($)
					{
						// Reveal Login form
						setTimeout(function(){ $(".fade-in-effect").addClass('in'); }, 1);
						// Validation and Ajax action
						$("form#login").validate({
							rules: {
								username: {
									required: true
								},
								passwd: {
									required: true
								}
							},
							messages: {
								username: {
									required: '用户名不可为空.'
								},
								passwd: {
									required: '密码不可为空.'
								}
							},
							// Form Processing via AJAX
							submitHandler: function(form)
							{
								show_loading_bar(70); // Fill progress bar to 70% (just a given value)
								var opts = {
									"closeButton": true,
									"debug": false,
									"positionClass": "toast-top-full-width",
									"onclick": null,
									"showDuration": "300",
									"hideDuration": "1000",
									"timeOut": "5000",
									"extendedTimeOut": "1000",
									"showEasing": "swing",
									"hideEasing": "linear",
									"showMethod": "fadeIn",
									"hideMethod": "fadeOut"
								};
								$.ajax({
									url: "data/login-check.php",
									method: 'POST',
									dataType: 'json',
									data: {
										do_login: true,
										username: $(form).find('#username').val(),
										passwd: $(form).find('#passwd').val(),
									},
									success: function(resp)
									{
										show_loading_bar({
											delay: .5,
											pct: 100,
											finish: function(){
												// Redirect after successful login page (when progress bar reaches 100%)
												if(resp.accessGranted)
												{
													window.location.href = '/index.php/Home/Index/index';
												}
																						}
										});
																			
										// Remove any alert
										$(".errors-container .alert").slideUp('fast');
										
										// Show errors
										if(resp.accessGranted == false)
										{
											$(".errors-container").html('<div class="alert alert-danger">\
												<button type="button" class="close" data-dismiss="alert">\
													<span aria-hidden="true">&times;</span>\
													<span class="sr-only">Close</span>\
												</button>\
												' + resp.errors + '\
											</div>');
											$(".errors-container .alert").hide().slideDown();
											$(form).find('#passwd').select();
										}
									}
								});
							}
						});
						// Set Form focus
						$("form#login .form-group:has(.form-control):first .form-control").focus();
					});
				</script>
				
				<!-- Errors container -->
				<div class="errors-container">
									
				</div>
				<!-- Add class "fade-in-effect" for login form effect -->
				<form method="post" name="frm"  class="login-form fade-in-effect" id="fm">
					<div class="login-header">
						<a  class="logo">
							<img src="/Public/assets/images/logo-white-bg@2x.png" alt="" width="80" />
							<span>找回密码</span>
						</a>
						<!--p>Dear user, log in to access the admin area!</p-->
					</div>
					<div class="form-group">
						用户名：<input type="text"  name="name" id='name'  onblur='phone()'/>
					</div>
					<div class="form-group">
						手机号：<input type="text"  name="telephone" id='telephone'  disabled />
					</div>
					<div class="form-group">
						验证码：<input type='text' name='code' id='code'>
						<input type="button" id="btn" value="获取验证码" />
					</div>
					<div class="form-group">
						 <a href="javascript:;" onclick="checkcode()"  class="btn btn-red btn-icon">
                            <span>确认</span>
                                                 </a>
					</div>
					<a href="/index.php/Home/Login/index"><span>返回登录</span></a>
					<div class="login-footer">
						<div class="info-links">
							<a >中孝科技（北京）有限公司</a> -
							<a >京ICP备16046744号</a>
						</div>
					</div>
				</form>
				<form  name="frm1"  class="login-form fade-in-effect" style="display: none" id="fm1">
					<div class="login-header">
						<a  class="logo">
							<img src="/Public/assets/images/logo-white-bg@2x.png" alt="" width="80" />
							<span>找回密码</span>
						</a>
						<!--p>Dear user, log in to access the admin area!</p-->
					</div>
					<div class="form-group">
						用户名：<input type='text' style="color:#333333;" name='uname' id='uname' value='' disabled>
					</div>
					<div class="form-group">
						新密码：<input type='password' style="color:#333333;" name='password' id='password'>
					</div>
<!--					<div class="form-group">
						验证码：<input type='text' name='code' id='code'>
						<input type="button" id="btn" value="获取验证码" />
					</div>-->
					<div class="form-group">
						<a href="javascript:;" onclick="sure()"  class="btn btn-red btn-icon">
						<span>确认</span>
						</a>
					</div>
					<a href="/index.php/Home/Login/index"><span>返回登录</span></a>
					<div class="login-footer">
						<div class="info-links">
							<a >中孝科技（北京）有限公司</a> -
							<a >京ICP备16046744号</a>
						</div>
					</div>
				</form>
				<!-- External login -->
			</div>
		</div>
	</div>
<script>
    // 通过输入用户名得到用户的手机号
	function phone(){
		var name=document.getElementById("name").value;
		$.ajax( {  
			url:'/index.php/Home/Change/chaxun',// 跳转到 action  
			data:{ name:name, }, 
			 
			type:'post',  
			dataType:'json',  
			success:function(result) {
                            if(result.code==1){
                                $(".errors-container").html('<div class="alert alert-danger">\
					<button type="button" class="close" data-dismiss="alert">\
						<span aria-hidden="true">&times;</span>\
						<span class="sr-only">Close</span>\
					</button>\
					' + result.message + '\
					</div>');
					$(".errors-container .alert").hide().slideDown();
					$(frm).find('#name').select();
                            }else{
				document.getElementById("telephone").value=result.member_mobile;
                                 $(".errors-container").html('');
                            }
			}
		});
	}
	var wait=60;  
	function time(o) {  
		if (wait == 0) {  
			o.removeAttribute("disabled");            
			o.value="免费获取验证码";  
			wait = 60;  
		} else {  
			o.setAttribute("disabled", true);  
			o.value="重新发送(" + wait + "s)";  
			wait--;  
			setTimeout(function() {  
				time(o)  
			},  
			1000)  
		}  
	}  
	document.getElementById("btn").onclick=function(){
		time(this);
		$(".errors-container .alert").slideUp('fast');
		var name=document.getElementById("name").value;
		//alert(name);
		$.ajax( {  
			url:'/index.php/Home/Change/pwd',// 跳转到 action  
			data:{ name:name
			},  
			type:'post',  
			dataType:'json',  
			success:function(result) {  
				if(result.code==0){
					 $(".errors-container").html('<div class="alert alert-success">\
					<button type="button" class="close" data-dismiss="alert">\
						<span aria-hidden="true">&times;</span>\
						<span class="sr-only">Close</span>\
					</button>\
					' + result.message + '\
					</div>');
					$(".errors-container .alert").hide().slideDown();
					$(frm).find('#name').select();
				}else{
					$(".errors-container").html('<div class="alert alert-danger">\
					<button type="button" class="close" data-dismiss="alert">\
						<span aria-hidden="true">&times;</span>\
						<span class="sr-only">Close</span>\
					</button>\
					' + result.message + '\
					</div>');
					$(".errors-container .alert").hide().slideDown();
					$(frm).find('#name').select();
				}
			}
		});
	}  

	 function checkcode(){
		// Remove any alert
		$(".errors-container .alert").slideUp('fast');
		var name=document.getElementById("name").value;
		var code=document.getElementById("code").value;
		document.getElementById("uname").value=name;
		$.ajax( {  
			url:'/index.php/Home/Change/check',// 跳转到 action  
			data:{ name:name, 
					code:code
			},  
			type:'post',  
			dataType:'json',  
			success:function(result) {  
			if(result.code==0){
			document.getElementById('fm').style.display='none'
			document.getElementById('fm1').style.display=''
			}else{
			 $(".errors-container").html('<div class="alert alert-danger">\
				<button type="button" class="close" data-dismiss="alert">\
						<span aria-hidden="true">&times;</span>\
						<span class="sr-only">Close</span>\
				</button>\
				' + result.message + '\
			</div>');

			$(".errors-container .alert").hide().slideDown();
			$(frm).find('#name').select();
			}
				
			}
		});
	}

	function sure(){
		var name=document.getElementById("uname").value;
		
		var password=document.getElementById("password").value;
		if(password.length < 6 || password.length >15 || password.match(/^\s*$/)){
			alert("密码长度为6至15位");return false;
		}
		$.ajax( {  
			url:'/index.php/Home/Change/sure',// 跳转到 action  
			data:{ name:name, 
					password:password
			},  
			type:'post',  
			dataType:'json',  
			success:function(result) {  
				if(result.code==0){
					$(".errors-container").html('<div class="alert alert-success">\
					<button type="button" class="close" data-dismiss="alert">\
						<span aria-hidden="true">&times;</span>\
						<span class="sr-only">Close</span>\
					</button>\
					' + result.message + '\
					</div>');
					$(".errors-container .alert").hide().slideDown();
					$(frm).find('#name').select();
					location.href="/index.php/Home/Login/index";
				}else{
					$(".errors-container").html('<div class="alert alert-danger">\
					<button type="button" class="close" data-dismiss="alert">\
						<span aria-hidden="true">&times;</span>\
						<span class="sr-only">Close</span>\
					</button>\
					' + result.message + '\
					</div>');
					$(".errors-container .alert").hide().slideDown();
					$(frm).find('#name').select();
				}	
			}
		});
	}
</script>
<!-- Bottom Scripts -->
<script src="/Public/assets/js/bootstrap.min.js"></script>
<script src="/Public/assets/js/TweenMax.min.js"></script>
<script src="/Public/assets/js/resizeable.js"></script>
<script src="/Public/assets/js/joinable.js"></script>
<script src="/Public/assets/js/xenon-api.js"></script>
<script src="/Public/assets/js/xenon-toggles.js"></script>
<script src="/Public/assets/js/jquery-validate/jquery.validate.min.js"></script>
<script src="/Public/assets/js/toastr/toastr.min.js"></script>

<!-- JavaScripts initializations and stuff -->
<script src="/Public/assets/js/xenon-custom.js"></script>
<div class="modal fade" id="modal-3">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="" method="post" name="form2">
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12"> 
							<div class="form-group">
								<label for="field-1" style="color:#333333;" class="control-label">用户名：</label>
								<input type='text' style="color:#333333;" name='uname' id='uname' value='' disabled>
							</div>	
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="field-1" style="color:#333333;" class="control-label">新密码：</label>
								<input type='password' style="color:#333333;" name='password' id='password'>
							</div>	
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-white" data-dismiss="modal">取消</button>
						<a href="javascript:;" onclick="sure()"  class="btn btn-red btn-icon">
						<span>确认</span>
						</button></a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>
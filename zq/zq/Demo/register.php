<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="Xenon Boostrap Admin Panel" />
		<meta name="author" content="" />
		<title>中孝证券交易平台</title>
		<link rel="stylesheet" href="assets/css/fonts/linecons/css/linecons.css">
		<link rel="stylesheet" href="assets/css/fonts/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/bootstrap.css">
		<link rel="stylesheet" href="assets/css/xenon-core.css">
		<link rel="stylesheet" href="assets/css/xenon-forms.css">
		<link rel="stylesheet" href="assets/css/xenon-components.css">
		<link rel="stylesheet" href="assets/css/xenon-skins.css">
		<link rel="stylesheet" href="assets/css/custom.css">

		<script src="assets/js/jquery-1.11.1.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

	</head>

	<body class="page-body register-page login-light">
		<div class="register-container">
			<div class="row">
				<div class="col-sm-6"></div>
				<div class="col-sm-6">
					<script type="text/javascript">
						$(document).ready(function($) {
							// Reveal Login form
							setTimeout(function() {
								$(".fade-in-effect").addClass('in');
							}, 1);
							// Validation and Ajax action
							$("form#login").validate({
								rules: {
									username: {
										required: true
									},
									code: {
										required: true
									},
									newpwd: {
										required: true
									},
									confirmpwd: {
										required: true
									}
								},
								messages: {
									username: {
										required: '用户名不可为空.'
									},
									code: {
										required: '验证码不可为空.'
									},
									newpwd: {
										required: '新密码不可为空.'
									},
									confirmpwd: {
										required: '请确认新密码.'
									},
								},
								// Form Processing via AJAX
								submitHandler: function(form) {
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

									//window.location = "index.php";
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
					<form method="post" role="form" id="login" class="register-form fade-in-effect">
						<div class="login-header">
							<a class="logo">
								<span><b style="color:#333">立即注册</b></span>
							</a>
						</div>
						<div class="form-group" id="form-group-register">
							<label class="control-label" for="username">用户名：</label>
							<input type="text" class="form-control" name="username" id="username" autocomplete="off" placeholder="请输入用户名" />
						</div>
						<div class="form-group" id="form-group-register">
							<label class="control-label" for="password">密码：</label>
							<input type="text" class="form-control" name="loginpwd" id="password" autocomplete="off" placeholder="请输入密码" />
						</div>
						<div class="form-group" id="form-group-register">
							<label class="control-label" for="name">姓名：</label>							
							<input type="password" class="form-control" name="newpwd" id="name" autocomplete="off" placeholder="请输入姓名" />
						</div>
						<div class="form-group" id="form-group-register">
							<P>性别：</P>						
							<select class="form-register" name="sex" id="sexx">
								<option value="0">- - - -</option>
								<option value="1">男</option>
								<option value="2">女</option>
								<option value="3">保密</option>
							</select>
						</div>
						<div class="form-group" id="form-group-register">
							<label class="control-label" for="idcard">身份证号：</label>							
							<input type="password" class="form-control"  id="idcard" autocomplete="off" placeholder="请输入身份证号" />
						</div>
						<div class="form-group" id="form-group-register">
							<label class="control-label" for="area">地区：</label>							
							<input type="password" class="form-control" name="confirmpwd" id="area" autocomplete="off" placeholder="请输入地区" />
						</div>
						<div class="form-group" id="form-group-register">
							<label class="control-label" for="adress">家庭住址：</label>							
							<input type="password" class="form-control" name="confirmpwd" id="adress" autocomplete="off" placeholder="请输入家庭住址" />
						</div>
						<div class="form-group" id="form-group-register">
							<label class="control-label" for="email">电子邮箱：</label>							
							<input type="password" class="form-control" name="confirmpwd" id="email" autocomplete="off" placeholder="请输入电子邮箱" />
						</div>
						<div class="form-group" id="form-group-register">
							
							<p>开户银行：</p>
							<select class="form-register" name="bankname">
								<option value="中国工商银行">中国工商银行</option>
								<option value="中国邮政储蓄银行">中国邮政储蓄银行</option>
								<option value="北京银行">北京银行</option>
								<option value="天津银行">天津银行</option>
							</select>
						</div>
						<div class="form-group" id="form-group-register">								
							<P>卡片类型：</P>						
							<div class="col-sm-10" id="save">
										<label class="cbr-inline">
											<div class="cbr-replaced cbr-radio cbr-checked"><div class="cbr-input"><input type="radio" name="cardtype" class="cbr cbr-done" value="储蓄卡" checked=""></div><div class="cbr-state"><span></span></div></div>储蓄卡
										</label>
										<label class="cbr-inline">
											<div class="cbr-replaced cbr-radio"><div class="cbr-input"><input type="radio" name="cardtype" value="信用卡" class="cbr cbr-done"></div><div class="cbr-state"><span></span></div></div>信用卡
										</label>
						    </div>
						</div>
						<div class="form-group" id="form-group-register">
							<label class="control-label" for="bank">银行卡号：</label>							
							<input type="password" class="form-control" name="confirmpwd" id="bank" autocomplete="off" placeholder="请输入银行卡号" />
						</div>
						<div class="form-group" id="form-group-register">
							<label class="control-label" for="referee">推荐人ID：</label>							
							<input type="password" class="form-control" name="confirmpwd" id="referee" autocomplete="off" placeholder="请输入推荐人ID" />
						</div>
						<div class="form-group" id="form-group-register">
							<label class="control-label" for="number">手机号码：</label>							
							<input type="password" class="form-control" name="confirmpwd" id="number" autocomplete="off" placeholder="请输入手机号码" />
						</div>
                        
                        <div class="form-group" id="form-group-forget-code">
                            <label class="control-label" for="acode">验证码：</label>                                                 
                                    <button id="codesub" class="btn btn-red btn-icon btn-icon-standalone">							
							               获取验证码
						            </button>
                            <input type="password" class="form-control" name="acode" id="acode" autocomplete="off" placeholder="输入验证码" style="float: right;">
                        </div>
                        
						<div class="form-group" id="form-group-register">
							<button type="submit" class="btn btn-primary  btn-block text-left">
                                <i class="fa-lock"></i>
                                                                 立即注册
                            </button>
						</div>
						<div class="login-footer">
							已有账户？
							<a href="login.php">返回登录</a>
							<div class="info-links">
								<a>中孝科技（北京）有限公司</a> -
								<a>京ICP备16046744号</a>
							</div>
						</div>
					</form>
					<!-- External login -->
				</div>
			</div>
		</div>
		<!-- Bottom Scripts -->
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/TweenMax.min.js"></script>
		<script src="assets/js/resizeable.js"></script>
		<script src="assets/js/joinable.js"></script>
		<script src="assets/js/xenon-api.js"></script>
		<script src="assets/js/xenon-toggles.js"></script>
		<script src="assets/js/jquery-validate/jquery.validate.min.js"></script>
		<script src="assets/js/toastr/toastr.min.js"></script>

		<!-- JavaScripts initializations and stuff -->
		<script src="assets/js/xenon-custom.js"></script>
	</body>
	<script>
		$('.cbr-inline').click(function(){
			$('.cbr-checked').removeClass('cbr-checked');
			$(this).find('div').addClass('cbr-checked');
		});
	</script>
</html>
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="Xenon Boostrap Admin Panel" />
		<meta name="author" content="" />

		<title>Xenon - Login Light</title>

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

	<body class="page-body forget-page login-light">
        <div class="forget-container">
            <div class="row">
				<div class="col-sm-6"></div>
                <div class="col-sm-6">
                    <script type="text/javascript">
                        $(document).ready(function ($)
                        {
                            // Reveal Login form
                            setTimeout(function () {
                                $(".fade-in-effect").addClass('in');
                            }, 1);
                            // Validation and Ajax action
                            $("form#login").validate({
                                rules: {
                                    username: {
                                        required: true
                                    },
                                    loginpwd: {
                                        required: true
                                    }
                                },
                                messages: {
                                    username: {
                                        required: '用户名不可为空.'
                                    },
                                    loginpwd: {
                                        required: '密码不可为空.'
                                    }
                                },
                                // Form Processing via AJAX
                                submitHandler: function (form)
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

                                   window.location = "index.php";
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
                    <form method="post" role="form" id="login" class="forget-form fade-in-effect in" novalidate="novalidate">
                        <div class="login-header">
                            <a class="logo">
                                <span><b style="color:#333">修改密码</b></span>
                            </a>
                        </div>
                        <div class="form-group" id="form-group-forget">
                            <label class="control-label" for="username">用户名：</label>                                                 
                            <input type="text" class="form-control" name="username" id="username" autocomplete="off" placeholder="请输入用户名">
                        </div>
                        <div class="form-group" id="form-group-forget-yanzheng">
                            <label class="control-label" for="code">验证码：</label>                                                 
                                    <button id="codebutton" class="btn btn-red btn-icon btn-icon-standalone">						
							                     获取验证码
						            </button>
                            <input type="password" class="form-control" name="aa" id="code" autocomplete="off" placeholder="输入验证码" style="float: right;">
                        </div>
						 <div class="form-group" id="form-group-forget">
                            <label class="control-label" for="revise">修改密码：</label>                                                 
                            <input type="text" class="form-control" name="loginpwd" id="revise" autocomplete="off" placeholder="请输入密码">
                        </div>
						<div class="form-group" id="form-group-forget">
                            <label class="control-label" for="passwd">确认密码：</label>                                                 
                            <input type="password" class="form-control" name="loginpwd" id="passwd" autocomplete="off" placeholder="确认密码">
                        </div>
                        <div class="form-group" id="form-group-forget">
                            <button type="submit" class="btn btn-primary  btn-block text-left">
                                <i class="fa-lock"></i>
                                                          确认修改
                            </button>
                        </div>
                        <div class="login-footer">
                            还没有账户？<a href="register.php">立即注册</a> 
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
</html>
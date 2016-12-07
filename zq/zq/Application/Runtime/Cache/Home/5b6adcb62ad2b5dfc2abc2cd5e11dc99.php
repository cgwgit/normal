<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Xenon Boostrap Admin Panel" />
        <meta name="author" content="" />
        <title>中孝证券</title>
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

                                     var username = document.getElementById("username").value;
                                    var passwd = document.getElementById("passwd").value;
                                   
                                    $.ajax({
                                        url: '/index.php/Home/Login/login', // 跳转到 action  
                                        data: {username: username,
                                            loginpwd: passwd

                                        },
                                        type: 'post',
                                        dataType: 'json',
                                        success: function (result) {
                                             show_loading_bar({
                                                        delay: .5,
                                                        pct: 100,
                                                        finish: function() {
                                                            // Redirect after successful login page (when progress bar reaches 100%)
                                                           if (result.status == 0) {
//                    alert('/index.php/Home/Index/index')
                                                window.location = "/index.php/Home/Index/index";
                                            } 
                                                        }
                                                    });
                                           $(".errors-container .alert").slideUp('fast');

                                                    // Show errors
                                                    if (result.status != 0)
                                                    {
                                                        $(".errors-container").html('<div class="alert alert-danger">\
                                                                                    <button type="button" class="close" data-dismiss="alert">\
                                                                                            <span aria-hidden="true">&times;</span>\
                                                                                            <span class="sr-only">Close</span>\
                                                                                    </button>\
                                                                                    ' + result.content + '\
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
                    <form method="post" role="form" id="login" class="login-form fade-in-effect">

                        <div class="login-header">
                            <a  class="logo">
                                <img src="/Public/assets/images/logo-white-bg@2x.png" alt="" width="80" />
                                <span>积分证券后台管理</span>
                            </a>
                        </div>


                        <div class="form-group">
                            <label class="control-label" for="username">用户名</label>
                            <input type="text" class="form-control" name="username" id="username" autocomplete="off" />
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="passwd">密码</label>
                            <input type="password" class="form-control" name="loginpwd" id="passwd" autocomplete="off" />
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary  btn-block text-left">
                                <i class="fa-lock"></i>
                                登录
                            </button>
                        </div>

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
    </body>
</html>
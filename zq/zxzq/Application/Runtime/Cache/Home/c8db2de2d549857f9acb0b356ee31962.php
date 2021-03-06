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
        <style>
            img#code {
                position:absolute;
                display:none;
                cursor: pointer;
            }
            span.error{
                font:13px Arial;
                margin: 0 0 0 5px;
                background:url('/Public/images/error.gif') no-repeat left center;
                padding: 0 0 0 15px;
            }
            span.right {
                font:13px Arial;
                margin: 0 0 0 5px;
                background:url('/Public/images/right.gif') no-repeat left center;
                padding: 0 0 0 15px;
            }
        </style>
        <script src="/Public/assets/js/jquery-1.11.1.min.js"></script>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
                        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body class="page-body skin-white ">
        <div class="page-container">
            <div class="main-content" >
                <div class="page-title">
                    <div class="title-env">
                        <h1 class="title">用户注册</h1>
                        <p class="description"></p>
                    </div>
                    <div class="breadcrumb-env">
                        <ol class="breadcrumb bc-1">
                            <li>
                                <a href="/index.php/Home/Login/index"><i class="fa-home"></i>返回登录</a>
                            </li>
                        </ol>	
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <div class="panel panel-default"><!-- Add class "collapsed" to minimize the panel -->
                            <script type="text/javascript">
                                jQuery(document).ready(function ($)
                                {
                                    // Remove any alert
                                    $(".errors-container .alert").slideUp('fast');
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
                                            $.ajax({
                                                url: "/index.php/Home/Regist/res",
                                                method: 'post',
                                                dataType: 'json',
                                                data: {
                                                    username: username,
                                                    loginpwd: passwd,
                                                    email: email,
                                                    idcard: idcard,
                                                    name: name,
                                                    inviter: inviterid,
                                                    address: address,
                                                    mobile: mobile,
                                                    bankName: bankname,
                                                    bankcard: bankcard
                                                },
                                                success: function (result)
                                                {
                                                    show_loading_bar({
                                                        delay: .5,
                                                        pct: 100,
                                                        finish: function () {
                                                            // Redirect after successful login page (when progress bar reaches 100%)
                                                            if (result.code == 0) {
                                                                //	alert('/index.php/Home/Index/index')
                                                                window.location = "/index.php/Home/Index/index";
                                                            }
                                                        }
                                                    });

                                                    // Remove any alert
                                                    $(".errors-container .alert").slideUp('fast');

                                                    // Show errors
                                                    if (resp.accessGranted == false)
                                                    {

                                                        $(".errors-container").html('<div class="alert alert-danger">\
                                                                                                                                        ton" class="close" data-dismiss="alert">\
                                                                                                                                                               an>\
                                                                                                                                            '  '\
                                                                                                                            </div>');

                                                        $(".errors-container .alert").hide().slideDown();
                                                        $(frm).find('#passwd').select();
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
                            <div class="errors-container" id='content'>

                            </div>
                            <div class="panel-body">
                                <form name="frm" id="frm" class="form-horizontal" method="post" action="">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" >用户名：</label>
                                        <div class="col-sm-6">
                                            <span><input type="text" name="username" id="username"  class="form-control"  placeholder="请输入用户名" ></span>
                                        </div>
                                    </div>
                                    <div class="form-group-separator"></div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">密码：</label>
                                        <div class="col-sm-6">
                                            <span><input type="password" name="loginpwd" id="loginpwd" class="form-control"  placeholder="请输入密码" ></span>
                                        </div>
                                    </div>
                                    <div class="form-group-separator"></div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" >姓名：</label>
                                        <div class="col-sm-6">
                                            <span><input type="text" name="name" id="name" class="form-control"  placeholder="请输入姓名" ></span>
                                        </div>
                                    </div>
                                    <div class="form-group-separator"></div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">性别：</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="sex" id="sex">

                                                <option value="0">- - - -</option>
                                                <option value="1">男</option>
                                                <option value="2">女</option>
                                                <option value="3">保密</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group-separator"></div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" >身份证号：</label>
                                        <div class="col-sm-6">
                                            <span><input type="text" name="idcard"  id="idcard" class="form-control" placeholder="请输入身份证号" ></span>
                                        </div>
                                    </div>
                                    <div class="form-group-separator"></div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" >地区：</label>
                                        <div class="col-sm-6">
                                            <span><input type="text" class="form-control" name="area"  placeholder="请输入地区"  ></span>
                                        </div>
                                    </div>
                                    <div class="form-group-separator"></div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" >家庭住址：</label>
                                        <div class="col-sm-6">
                                            <span><input type="text" class="form-control" name="address" id="address" placeholder="请输入家庭住址" ></span>
                                        </div>
                                    </div>
                                    <div class="form-group-separator"></div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" >电子邮箱：</label>
                                        <div class="col-sm-6">
                                            <span><input type="text" class="form-control" name="email" id="email"  placeholder="请输入邮箱" ></span>
                                        </div>
                                    </div>
                                    <div class="form-group-separator"></div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">开户银行：</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="bankname">
                                                <?php if(is_array($bnametype)): foreach($bnametype as $key=>$vo): ?><option value="<?php echo ($vo["bank_name"]); ?>"><?php echo ($vo["bank_name"]); ?></option><?php endforeach; endif; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group-separator"></div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">卡片类型：</label>
                                        <div class="col-sm-10">
                                            <label class="cbr-inline">
                                                <input type="radio" name="cardtype" class="cbr"  value="储蓄卡" checked>储蓄卡
                                            </label>
                                            <label class="cbr-inline">
                                                <input type="radio"  name="cardtype" value="信用卡" class="cbr">信用卡
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group-separator"></div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" >银行卡号：</label>
                                        <div class="col-sm-6">
                                            <span><input type="text" id="bankcard"  name="bankcard" class="form-control"  placeholder="请输入银行卡号" ></span>
                                        </div>
                                    </div>
                                    <div class="form-group-separator"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" >推荐人ID：</label>
                                        <div class="col-sm-6">
                                            <span><input type="text" id="inviterid" name="inviterid" class="form-control"  placeholder="请输入推荐人ID" ></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" >管理者ID：</label>
                                        <div class="col-sm-6">
                                            <span><input type="text" id="network_id" name="network_id" class="form-control"  placeholder="请输入管理者ID" ></span>
                                        </div>
                                    </div>
                                    <div class="form-group-separator"></div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" >手机号码：</label>
                                        <div class="col-sm-6">
                                            <span><input type="text" id="mobile" name="mobile" class="form-control"  placeholder="请输入手机号码" ></span>
                                        </div>
                                    </div>

                                    <div class="form-group-separator"></div>
                                    <label class="col-sm-4 control-label" ><a href="javascript:;" onclick="ff()"  class="btn btn-red btn-icon">
                                            <span>立即注册</span>
											</a></label>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modal-3">
                <div class="modal-dialog">
                    <form action="" method="post" name="form2">
                        <!-- Errors container -->
                        <div class="errors-container-mobile">

                        </div>
                        <div class="modal-content">
                            <div class="row">
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        用户名：<input type='text' name='uname' id='uname' value='' disabled>
                                    </div>	
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        手机号：<input type='text' name='phone' id='phone' value='' disabled>
                                    </div>	
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        验证码：<input type='text' name='code' id='code'><input type="button" id="btn" value="获取验证码" />
                                    </div>
                                </div>	
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-white" data-dismiss="modal" onclick="fff()">取消</button>
                                <a href="javascript:;" onclick="sure()"  class="btn btn-red btn-icon">
                                    <span>确认注册</span>
									</a>
                            </div>
                        </div>
                        <script >
                            function sure() {
                                var mobile = document.frm.mobile.value;
                                var code = document.getElementById("code").value;
                                // Remove any alert
                                var username = document.getElementById("username").value;
                                var loginpwd = document.getElementById("loginpwd").value;
                                var name = document.getElementById("name").value;
                                var sex = document.getElementById("sex").value;
                                var idcard = document.getElementById("idcard").value;
                                var area =document.frm.area.value;
                                var address = document.frm.address.value;
                                var email = document.frm.email.value;
                                var bankname = document.frm.bankname.value;
                                var cardtype = document.frm.cardtype.value;
                                var bankcard = document.getElementById("bankcard").value;
                                var inviterid = document.getElementById("inviterid").value;
                                var network_id = document.getElementById("network_id").value;
                                $(".errors-container-mobile .alert").slideUp('fast');
                                $.ajax({
                                url: '/index.php/Home/Code/code', // 跳转到 action  
                                        data: {phone: mobile,
                                                code: code,
                                                username: username,
                                                loginpwd: loginpwd,
                                                name: name,
                                                sex: sex,
                                                idcard: idcard,
                                                area: area,
                                                address: address,
                                                email: email,
                                                bankname: bankname,
                                                cardtype: cardtype,
                                                bankcard: bankcard,
                                                inviterid: inviterid,
                                                network_id: network_id,
                                        },
                                        type: 'post',
                                        dataType: 'json',
                                        success: function (result) {
                                            if (result.code == 0) {
                                            $(".errors-container-mobile").html('<div class="alert alert-success">\
                                                                <button type="button" class="close" data-dismiss="alert">\
                                                                        <span aria-hidden="true">&times;</span>\
                                                                        <span class="sr-only">Close</span>\
                                                                </button>\
                                                                ' + result.message + '\
                                                                </div>');
                                                                location.href='/index.php/Home/Login/index'
                                            } else {
                                            $(".errors-container-mobile").html('<div class="alert alert-danger">\
                                                                <button type="button" class="close" data-dismiss="alert">\
                                                                        <span aria-hidden="true">&times;</span>\
                                                                        <span class="sr-only">Close</span>\
                                                                </button>\
                                                                ' + result.message + '\
                                                                </div>');

                                            $(".errors-container-mobile .alert").hide().slideDown();
                                            $(frm).find('#passwd').select();
                                        }
                                        }
                                });
                            }
                        </script>
                </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        var wait = 60;
        function time(o) {
            if (wait == 0) {
                o.removeAttribute("disabled");
                o.value = "免费获取验证码";
                wait = 60;
            } else {
                o.setAttribute("disabled", true);
                o.value = "重新发送(" + wait + "s)";
                wait--;
                setTimeout(function () {
                    time(o)
                },
                        1000)
            }
        }
        document.getElementById("btn").onclick = function () {
            time(this);
            // Remove any alert
            $(".errors-container .alert").slideUp('fast');
            var mobile = document.getElementById("mobile").value;
            $.ajax({
                url: '/index.php/Home/Code/pwd', // 跳转到 action  
                data: {mobile: mobile
                },
                type: 'post',
                dataType: 'json',
                success: function (result) {
                    if (result.code == 0) {
                        $(".errors-container-mobile").html('<div class="alert alert-success">\
                                                                <button type="button" class="close" data-dismiss="alert">\
                                                                        <span aria-hidden="true">&times;</span>\
                                                                        <span class="sr-only">Close</span>\
                                                                </button>\
                                                                ' + result.message + '\
                                                                </div>');

                        $(".errors-container .alert").hide().slideDown();
                    } else {
                        $(".errors-container-mobile").html('<div class="alert alert-success">\
                                                                <button type="button" class="close" data-dismiss="alert">\
                                                                        <span aria-hidden="true">&times;</span>\
                                                                        <span class="sr-only">Close</span>\
                                                                </button>\
                                                                ' + result.message + '\
                                                                </div>');

                        $(".errors-container .alert").hide().slideDown();
                    }
                }
            });
        }

        function ff() {
            // Remove any alert
            $(".errors-container .alert").slideUp('fast');
			$("#content").css("display", ""); 
            var mobile = document.frm.mobile.value;
            var username = document.frm.username.value;
            var loginpwd = document.frm.loginpwd.value;
            var idcard = document.frm.idcard.value;
            var name = document.frm.name.value;
            var address = document.frm.address.value;
            var email = document.frm.email.value;
            var bankcard = document.frm.bankcard.value;
            var inviterid = document.frm.inviterid.value;
            var network_id=document.frm.network_id.value;
            document.getElementById("uname").value = username;
            document.getElementById("phone").value = mobile;

            if (username.match(/[\'.,:;*?~`!@#$%^&+=)(<>{}]|\]|\[|\/|\\\|\"|\|/) || username.match(/^\s*$/)) {
                // alert("包含非法字符");return false;
                $(".errors-container").html('<div class="alert alert-danger">\
                            <button type="button" class="close" data-dismiss="alert">\
                                    <span aria-hidden="true">&times;</span>\
                                    <span class="sr-only">Close</span>\
                            </button>\
                            ' + "包含非法字符 " + '\
                            </div>');

                $(".errors-container .alert").hide().slideDown();
                $(frm).find('#username').select();
                return false;
            }

            if (loginpwd.length < 6 || loginpwd.length > 15) {
                //$("#banknoInfo").html("银行卡号长度必须在16到19之间");
                //     alert("密码长度必须在6到15之间");return false;
                $(".errors-container").html('<div class="alert alert-danger">\
                            <button type="button" class="close" data-dismiss="alert">\
                                    <span aria-hidden="true">&times;</span>\
                                    <span class="sr-only">Close</span>\
                            </button>\
                            ' + "密码长度必须在6到15之间 " + '\
                            </div>');

                $(".errors-container .alert").hide().slideDown();
                $(frm).find('#loginpwd').select();
                return false;
            }

            if (name.match(/^\s*$/)) {
                //    alert("姓名不能为空");return false;
                $(".errors-container").html('<div class="alert alert-danger">\
                            <button type="button" class="close" data-dismiss="alert">\
                                    <span aria-hidden="true">&times;</span>\
                                    <span class="sr-only">Close</span>\
                            </button>\
                            ' + "姓名不能为空 " + '\
                            </div>');
                $(".errors-container .alert").hide().slideDown();
                $(frm).find('#name').select();
                return false;
            }

            if (!idcard.match(/^[1-9]\d{7}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{3}$|^[1-9]\d{5}[1-9]\d{3}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{3}([0-9]|X)$/)) {
                //   alert("请输入有效的身份证号");return false;
                $(".errors-container").html('<div class="alert alert-danger">\
                            <button type="button" class="close" data-dismiss="alert">\
                                    <span aria-hidden="true">&times;</span>\
                                    <span class="sr-only">Close</span>\
                            </button>\
                            ' + "请输入有效的身份证号" + '\
                            </div>');
                $(".errors-container .alert").hide().slideDown();
                $(frm).find('#idcard').select();
                return false;
            }

            if (address.match(/^\s*$/)) {
                // alert("地址不能为空");return false;
                $(".errors-container").html('<div class="alert alert-danger">\
                            <button type="button" class="close" data-dismiss="alert">\
                                    <span aria-hidden="true">&times;</span>\
                                    <span class="sr-only">Close</span>\
                            </button>\
                            ' + "地址不能为空" + '\
                            </div>');

                $(".errors-container .alert").hide().slideDown();
                $(frm).find('#address').select();
                return false;
            }

            if (!email.match(/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/)) {
                //   alert("您输入的邮箱格式不正确");return false;
                $(".errors-container").html('<div class="alert alert-danger">\
                                    <button type="button" class="close" data-dismiss="alert">\
                                            <span aria-hidden="true">&times;</span>\
                                            <span class="sr-only">Close</span>\
                                    </button>\
                                    ' + "您输入的邮箱格式不正确" + '\
                            </div>');
                $(".errors-container .alert").hide().slideDown();
                $(frm).find('#email').select();
                return false;
            }
            if (!bankcard.match(/^\d*$/) || bankcard.length != 19 && bankcard.length != 16 && bankcard.length != 17) {
                //  alert("请输入有效的银行卡号");return false;
                $(".errors-container").html('<div class="alert alert-danger">\
                            <button type="button" class="close" data-dismiss="alert">\
                                    <span aria-hidden="true">&times;</span>\
                                    <span class="sr-only">Close</span>\
                            </button>\
                            ' + "请输入有效的银行卡号" + '\
                            </div>');
                $(".errors-container .alert").hide().slideDown();
                $(frm).find('#bankcard').select();
                return false;
            }
            if (inviterid.match(/^\s*$/)) {
                // alert("推荐人不能为空");return false;
                $(".errors-container").html('<div class="alert alert-danger">\
                                    <button type="button" class="close" data-dismiss="alert">\
                                            <span aria-hidden="true">&times;</span>\
                                            <span class="sr-only">Close</span>\
                                    </button>\
                                    ' + "推荐人不能为空" + '\
                                    </div>');
                $(".errors-container .alert").hide().slideDown();
                $(frm).find('#inviterid').select();
                return false;
            }
            
            if (network_id.match(/^\s*$/)) {
                // alert("推荐人不能为空");return false;
                $(".errors-container").html('<div class="alert alert-danger">\
                                    <button type="button" class="close" data-dismiss="alert">\
                                            <span aria-hidden="true">&times;</span>\
                                            <span class="sr-only">Close</span>\
                                    </button>\
                                    ' + "管理者不能为空" + '\
                                    </div>');
                $(".errors-container .alert").hide().slideDown();
                $(frm).find('#network_id').select();
                return false;
            }

            if (!mobile.match(/^\d*$/) || mobile.length != 11) {
                //$("#banknoInfo").html("银行卡号长度必须在16到19之间");
                //   alert("请输入有效的手机号");return false;
                $(".errors-container").html('<div class="alert alert-danger">\
                                            <button type="button" class="close" data-dismiss="alert">\
                                                    <span aria-hidden="true">&times;</span>\
                                                    <span class="sr-only">Close</span>\
                                            </button>\
                                            ' + "请输入有效的手机号" + '\
                                    </div>');

                $(".errors-container .alert").hide().slideDown();
                $(frm).find('#mobile').select();
                return false;
            }
			$("#content").css("display", "none");  
            return jQuery('#modal-3').modal('show', {backdrop: 'fade'});
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
</body>
</html>
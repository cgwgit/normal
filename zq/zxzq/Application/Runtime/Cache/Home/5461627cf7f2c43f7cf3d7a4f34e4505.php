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
    <body class="page-body">
        <nav class="navbar horizontal-menu navbar-fixed-top"><!-- set fixed position by adding class "navbar-fixed-top" -->
            <div class="navbar-inner">
                <!-- Navbar Brand -->
				<div class="navbar-brand">
					<a href="/Public/" class="logo">
						中孝证券交易平台
						<!--
							<img src="assets/images/logo-white-bg@2x.png" width="80" alt="" class="hidden-xs" />
							<img src="assets/images/logo@2x.png" width="80" alt="" class="visible-xs" />
						-->
					</a>
				</div>
                <!-- Mobile Toggles Links -->
                <div class="nav navbar-mobile">
                    <!-- This will toggle the mobile menu and will be visible only on mobile devices -->
                    <div class="mobile-menu-toggle">
                        <!-- data-toggle="mobile-menu-horizontal" will show horizontal menu links only -->
                        <!-- data-toggle="mobile-menu" will show sidebar menu links only -->
                        <!-- data-toggle="mobile-menu-both" will show sidebar and horizontal menu links -->
                        <a href="#" data-toggle="mobile-menu-horizontal">
                            <i class="fa-bars"></i>
                        </a>
						<!-- This will open the popup with user profile settings, you can use for any purpose, just be creative -->
                        <a href="/index.php/Home/Login/logout">
                            <i class="fa fa-sign-out"></i>
                        </a>
                    </div>
                </div>
                <div class="navbar-mobile-clear"></div>
                <!-- main menu -->
                <ul class="navbar-nav">
					<li>
                        <a href="/index.php/Home/Index/index">
							<i class="fa-home"></i>
                            <span class="title">首页</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-user"></i>
                            <span class="title">我的账户</span>
                        </a>
                        <ul>
                            <li>
                                <a href="/index.php/Home/Index/userInfo">
                                    <span class="title">查看个人信息</span>
                                </a>
                            </li>
                            <li>
                                <a href="/index.php/Home/Index/accountProfile">
                                    <span class="title">修改个人信息</span>
                                </a>
                            </li>
                            <li>
                                <a href="/index.php/Home/Index/accountpwd">
                                    <span class="title">修改登录密码</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-plus-square"></i>
                            <span class="title">证券交易</span>
                        </a>
                        <ul>
							<li>
                                <a href="/index.php/Home/Unit/recharge">
                                    <span class="title">钱包充值</span>
                                </a>
                            </li>
							<!--li>
                                <a href="/index.php/Home/Unit/recharge">
                                    <span class="title">钱包提现</span>
                                </a>
                            </li-->
                            <li>
                                <a href="/index.php/Home/Unit/subScription">
                                    <span class="title">证券购买</span>
                                </a>
                            </li>
							<li>
                                <a href="/index.php/Home/Unit/extractWallet">
                                    <span class="title">转账至钱包</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/index.php/Home/Team/myTeam">
                           <i class=" fa-users"></i>
                            <span class="title">我的团队</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa-reorder"></i>
                            <span class="title">交易明细</span>
                        </a>
                        <ul>
							<li>
                                <a href="/index.php/Home/List/rechargeList">
                                    <span class="title">账户充值明细</span>
                                </a>
                            </li>
                            <li>
                                <a href="/index.php/Home/List/tradeList">
                                    <span class="title">证券交易明细</span>
                                </a>
                            </li>
                            <li>
                                <a href="/index.php/Home/List/incomeList">
                                    <span class="title">证券收益明细</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-institution"></i>
                            <span class="title">交易平台</span>
							
                        </a>
                        <ul>
                            <li>
                                <a href="/index.php/Home/Trading/platform">
                                    <span class="title">交易平台</span>
                                </a>
                            </li>
                            <li>
                                <a href="/index.php/Home/Trading/dictate">
                                    <span class="title">现行指令</span>
                                </a>
                            </li>
                            <li>
                                <a href="/index.php/Home/Trading/details">
                                    <span class="title">交易历史</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-file-word-o"></i>
                            <span class="title">协议书和证书</span>
							
                        </a>
                        <ul>
                            <li>
                                <a href="/index.php/Home/Agreement/info">
                                    <span class="title">协议书</span>
                                </a>
                            </li>
                            <li>
                                <a href="/index.php/Home/Agreement/certificate">
                                    <span class="title">证书</span>
                                </a>
                            </li><li>
                                <a href="/index.php/Home/Agreement/certificatelist">
                                    <span class="title">申请证书清单</span>
                                </a>
                            </li>
                            <li>
                                <a href="/index.php/Home/Agreement/apply">
                                    <span class="title">申请协议书清单</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-envelope-o"></i>
                            <span class="title">布告栏</span>
							
                        </a>
                        <ul>
                            <li>
                                <a href="/index.php/Home/Bulletin/bulletinlist">
                                    <span class="title">布告栏查询</span>
                                </a>
                            </li>
                            <li>
                                <a href="/index.php/Home/Bulletin/download">
                                    <span class="title">下载</span>
                                </a>
                            </li>
                            <li>
                                <a href="/index.php/Home/Bulletin/demand">
                                    <span class="title">需求单列表</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-briefcase"></i>
                            <span class="title">资产</span>
							
                        </a>
                        <ul>
                            <li>
                                <a href="/index.php/Home/Coupons/auctionInfo">
                                    <span class="title">中孝拍卖</span>
                                </a>
                            </li>
                            <li>
                                <a href="/index.php/Home/Coupons/auctionDetails">
                                    <span class="title">拍卖交易记录</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-download"></i>
                            <span class="title">下载类别</span>
							
                        </a>
                        <ul>
                            <li>
                                <a href="/index.php/Home/Performance/zx_courseware">
                                    <span class="title">中孝课件</span>
                                </a>
                            </li>
                            <li>
                                <a href="/index.php/Home/Performance/zx_video">
                                    <span class="title">中孝视频</span>
                                </a>
                            </li>
                            <li>
                                <a href="/index.php/Home/Performance/zx_instructional">
                                    <span class="title">中孝教学视频</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-line-chart"></i>
                            <span class="title">报表</span>
							
                        </a>
                        <ul>
                            <li>
                                <a href="/index.php/Home/Performance/performance_reports">
                                    <span class="title">个人业绩报表</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- 顶部菜单结束 -->
                </ul>
                <!-- notifications and other links -->
				<ul class="nav nav-userinfo navbar-right">
					<li class="dropdown user-profile">
						<a href="/index.php/Home/Login/logout">
							<span>
								登出
								<i class="fa-sign-out"></i>
							</span>
						</a>
					</li>
				</ul>
            </div>
        </nav>
        <div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
            <div class="main-content">
                
<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title">转账至钱包</div>
            </div>
            <div class="panel-body">
                <div class="errors-container"></div>
                <form role="form" class="form-horizontal" >
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="field-1">可提取证券数量</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control"  id="money" name='money' value="<?php echo $money['securities'] ? $money['securities'] : '0.00'; ?>" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="field-1">当前证券兑换率</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control"  id="rate" name='rate' value="<?php echo ($rate["money"]); ?>" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="field-6">扣除手续费(5%)</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="poundage" name='poundage' value="<?php echo ($poundage); ?>" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="field-6">实际到帐金额</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="trueMoney" name='trueMoney' value="<?php echo ($trueMoney); ?>" disabled>
                        </div>
                    </div>
                    <div class="form-group-separator"></div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"></label>
                        <a href="javascript:void(0)" id="sub" class="btn btn-red btn-icon btn-icon-standalone"  >
                            <i class="fa-magic"></i>
                            <span>确认提取</span>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){
    $('#sub').click(function(){var money = $("#money").val();
//        alert(money)
        if (money <= 0) {
            $(".errors-container").html('<div class="alert alert-danger">\
                        <button type="button" class="close" data-dismiss="alert">\
                                <span aria-hidden="true">&times;</span>\
                                <span class="sr-only">Close</span>\
                        </button>\
                        暂无可提现证券\
                </div>');
            $(".errors-container .alert").hide().slideDown();
            return false;
        }
        jQuery('#confirmOrder').modal('show');
            $('.subbuy').click(function(){
            $.post('/index.php/Home/Unit/withdraw', {money: $("#money").val()}, function (res) {
                //                console.log(res.code);
                if (res.code == 0) {
                    window.location.href = '/index.php/Home/Index/index';
                } else {
                     $(".errors-container").html('<div class="alert alert-danger">\
                            <button type="button" class="close" data-dismiss="alert">\
                                    <span aria-hidden="true">&times;</span>\
                                    <span class="sr-only">Close</span>\
                            </button>\
                            ' + res.message + '&nbsp;&nbsp;\
                    </div>');
                    $(".errors-container .alert").hide().slideDown();
                }
                jQuery('#confirmOrder').modal('hide');
                
            }, 'json');
            return false;
        })
    });
        
});

</script>
<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-9">
        <div class="panel panel-default">
            <div class="panel-heading-footer">
                <div class="panel-title"><i class="fa fa-link"></i>&nbsp;&nbsp;快速链接</div>
            </div>
            <div class="panel-body">
                <a href="/index.php/Home/Index/userInfo">
                    <div class="col-sm-2">
                        <div class="xe-widget xe-vertical-counter xe-vertical-counter-fastlink" data-count=".num" data-from="0" data-to="128" data-duration="4">
                            <div class="xe-label">个人信息</div>
							<div class="xe-icon">
                                <i class="fa-user"></i>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="/index.php/Home/Unit/subScription">
                    <div class="col-sm-2">
                        <div class="xe-widget xe-vertical-counter xe-vertical-counter-fastlink" data-count=".num" data-from="0" data-to="128" data-duration="4">
                            <div class="xe-label">证券购买</div>
                            <div class="xe-icon">
                                <i class="fa-key"></i>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="/index.php/Home/Unit/recharge">
                    <div class="col-sm-2">
                        <div class="xe-widget xe-vertical-counter xe-vertical-counter-fastlink" data-count=".num" data-from="0" data-to="128" data-duration="4">
                            <div class="xe-label">钱包充值</div>
                            <div class="xe-icon">
                                <i class="fa-ticket"></i>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="col-sm-2">
                        <div class="xe-widget xe-vertical-counter xe-vertical-counter-fastlink" data-count=".num" data-from="0" data-to="128" data-duration="4">
                            <div class="xe-label">下载</div>
                            <div class="xe-icon">
                                <i class="fa-download"></i>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="col-sm-2">
                        <div class="xe-widget xe-vertical-counter xe-vertical-counter-fastlink" data-count=".num" data-from="0" data-to="128" data-duration="4">
                            <div class="xe-label">交易平台</div>
                            <div class="xe-icon">
                                <i class="fa-bar-chart"></i>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="col-sm-2">
                        <div class="xe-widget xe-vertical-counter xe-vertical-counter-fastlink" data-count=".num" data-from="0" data-to="128" data-duration="4">
                            <div class="xe-label">布告板查询</div>
                            <div class="xe-icon">
                                <i class="fa-ticket"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Main Footer -->
<!-- Choose between footer styles: "footer-type-1" or "footer-type-2" -->
<!-- Add class "sticky" to  always stick the footer to the end of page (if page contents is small) -->
<!-- Or class "fixed" to  always fix the footer to the end of page -->
	</div>
</div>
<footer class="main-footer sticky footer-type-1">
	<div class="footer-inner">
		<div class="col-sm-8"></div>
		<!-- Add your copyright text here -->
		<div class="footer-text">
			&copy; 2016
			<strong>中孝科技（北京）有限公司</strong>&nbsp;&nbsp;&nbsp;&nbsp;京ICP备16046744号
		</div>
		<!-- Go to Top Link, just add rel="go-top" to any link to add this functionality -->
		<div class="go-up">
			<a href="#" rel="go-top">
				<i class="fa-angle-up"></i>
			</a>
		</div>
	</div>
</footer>
<!-- Imported styles on this page -->
<link rel="stylesheet" href="/Public/assets/js/datatables/dataTables.bootstrap.css">
<link rel="stylesheet" href="/Public/assets/js/daterangepicker/daterangepicker-bs3.css">

<!-- Bottom Scripts -->
<script src="/Public/assets/js/bootstrap.min.js"></script>
<script src="/Public/assets/js/TweenMax.min.js"></script>
<script src="/Public/assets/js/resizeable.js"></script>
<script src="/Public/assets/js/joinable.js"></script>
<script src="/Public/assets/js/xenon-api.js"></script>
<script src="/Public/assets/js/xenon-toggles.js"></script>
<script src="/Public/assets/js/datatables/js/jquery.dataTables.min.js"></script>
<script src="/Public/assets/js/moment.min.js"></script>

<!-- Imported scripts on this page -->
<script src="/Public/assets/js/datatables/dataTables.bootstrap.js"></script>
<script src="/Public/assets/js/datatables/yadcf/jquery.dataTables.yadcf.js"></script>
<script src="/Public/assets/js/datatables/tabletools/dataTables.tableTools.min.js"></script>
<script src="/Public/assets/js/daterangepicker/daterangepicker.js"></script>

<!-- JavaScripts initializations and stuff -->
<script src="/Public/assets/js/xenon-custom.js"></script>

</body>
</html>
<div class="modal fade" id="confirmOrder" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">确认提现</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="field-1" class="control-label">可提取证券数量：</label>
                            <label for="field-1" id="zqsl" class="control-label-content"><?php echo $money['securities'] ? $money['securities'] : '0.00'; ?></label>
                        </div>
                        <div class="form-group">
                            <label for="field-1" class="control-label">当前证券兑换率：</label>
                            <label for="field-1" id="ggl" class="control-label-content"><?php echo ($rate["money"]); ?></label>
                        </div>
                        <div class="form-group">
                            <label for="field-1" class="control-label">扣除手续费(5%)：</label>
                            <label for="field-1" id="sjzq" class="control-label-content"><?php echo ($poundage); ?></label>
                        </div>
                        <div class="form-group">
                            <label for="field-1" class="control-label">实际到帐金额：</label>
                            <label for="field-1" id="zfje" class="control-label-content"><?php echo ($trueMoney); ?></label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">取消</button>
                    <button type="button" class="btn btn-info subbuy" data-dismiss="modal">确认支付</button>
                </div>
            </div>
        </div>
    </div>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Xenon Boostrap Admin Panel" />
	<meta name="author" content="" />
	
	<title>中孝证券</title>

	<link rel="stylesheet" href="/zheng/Public/assets/css/fonts/linecons/css/linecons.css">
	<link rel="stylesheet" href="/zheng/Public/assets/css/fonts/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/zheng/Public/assets/css/bootstrap.css">
	<link rel="stylesheet" href="/zheng/Public/assets/css/xenon-core.css">
	<link rel="stylesheet" href="/zheng/Public/assets/css/xenon-forms.css">
	<link rel="stylesheet" href="/zheng/Public/assets/css/xenon-components.css">
	<link rel="stylesheet" href="/zheng/Public/assets/css/xenon-skins.css">
	<link rel="stylesheet" href="/zheng/Public/assets/css/custom.css">

	<script src="/zheng/Public/assets/js/jquery-1.11.1.min.js"></script>

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
				<a href="" class="logo">
					中孝证券
				</a>
				<a href="#" data-toggle="settings-pane" data-animate="true">
					<i class="linecons-cog"></i>
				</a>
			</div>
			<!-- Mobile Toggles Links -->
			<div class="nav navbar-mobile">
				<!-- This will toggle the mobile menu and will be visible only on mobile devices -->
				<div class="mobile-menu-toggle">
					<!-- This will open the popup with user profile settings, you can use for any purpose, just be creative -->
					<a href="#" data-toggle="settings-pane" data-animate="true">
						<i class="linecons-cog"></i>
					</a>
					<a href="#" data-toggle="user-info-menu-horizontal">
						<i class="fa-bell-o"></i>
						<span class="badge badge-success">7</span>
					</a>
					<!-- data-toggle="mobile-menu-horizontal" will show horizontal menu links only -->
					<!-- data-toggle="mobile-menu" will show sidebar menu links only -->
					<!-- data-toggle="mobile-menu-both" will show sidebar and horizontal menu links -->
					<a href="#" data-toggle="mobile-menu-horizontal">
						<i class="fa-bars"></i>
					</a>
				</div>
			</div>
			<div class="navbar-mobile-clear"></div>
			<!-- main menu -->
			<ul class="navbar-nav">
				<li>
					<a href="#">
						<i class="linecons-cog"></i>
						<span class="title">我的账户</span>
					</a>
					<ul>
						<li>
							<a href="/zheng/index.php/Home/Index/index">
								<span class="title">查看个人信息</span>
							</a>
						</li>
						<li>
							<a href="/zheng/index.php/Home/Index/accountProfile">
								<span class="title">修改个人信息</span>
							</a>
						</li>
						<li>
							<a href="/zheng/index.php/Home/Index/accountpwd">
								<span class="title">修改登录密码</span>
							</a>
						</li>
						<li>
							<a href="">
								<span class="title">修改交易密码</span>
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#">
						<i class="linecons-cog"></i>
						<span class="title">证券购买</span>
					</a>
					<ul>
						<li>
							<a href="subscription_unit.php">
								<span class="title">证券购买</span>
							</a>
						</li>
						<li>
							<a href="subscription_recharge.php">
								<span class="title">钱包充值</span>
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#">
						<i class="linecons-cog"></i>
						<span class="title">私人图</span>
					</a>
					<ul>
						<li>
							<a href="figure_extension.php">
								<span class="title">推广图</span>
							</a>
						</li>
						<li>
							<a href="figure_expand.php">
								<span class="title">发展图</span>
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#">
						<i class="linecons-cog"></i>
						<span class="title">优先交易计划</span>
					</a>
					<ul>
						<li>
							<a href="plan_extension.php">
								<span class="title">推广计划</span>
							</a>
						</li>
						<li>
							<a href="plan_develop.php">
								<span class="title">发展计划</span>
							</a>
						</li><li>
							<a href="plan_raic.php">
								<span class="title">代数计划</span>
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#">
						<i class="linecons-cog"></i>
						<span class="title">积分</span>
					</a>
					<ul>
						<li>
							<a href="#">
								<span class="title">购券分</span>
							</a>
							<ul>
								<li>
									<a href="coupons_details.php">
										<span class="title">查看交易明细</span>
									</a>
								</li>
								<li>
									<a href="coupons_transfer.php">
										<span class="title">转让</span>
									</a>
								</li>
								<li>
									<a href="coupons_recharge.php">
										<span class="title">银联充值列表</span>
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#">
								<span class="title">优券分</span>
							</a>
							<ul>
								<li>
									<a href="coupon_details.php">
										<span class="title">查看交易明细</span>
									</a>
								</li>
								<li>
									<a href="coupon_withdrawals.php">
										<span class="title">提款</span>
									</a>
								</li>
								<li>
									<a href="coupon_transfer.php">
										<span class="title">转让</span>
									</a>
								</li>
								<li>
									<a href="coupon_tradetails.php">
										<span class="title">提款明细</span>
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#">
								<span class="title">售券分</span>
							</a>
							<ul>
								<li>
									<a href="couponsale_details.php">
										<span class="title">查看交易明细</span>
									</a>
								</li>
								<li>
									<a href="couponsale_withdrawals.php">
										<span class="title">提款</span>
									</a>
								</li>
								<li>
									<a href="couponsale_transfer.php">
										<span class="title">转让</span>
									</a>
								</li>
								<li>
									<a href="couponsale_tradetails.php">
										<span class="title">提款明细</span>
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#">
								<span class="title">普通证券</span>
							</a>
							<ul>
								<li>
									<a href="general_details.php">
										<span class="title">查看交易明细</span>
									</a>
								</li>
							</ul>
							
						</li>
						<li>
							<a href="#">
								<span class="title">特殊优券分</span>
							</a>
							<ul>
								<li>
									<a href="spacialcoupon_details.php">
										<span class="title">查看交易明细</span>
									</a>
								</li>
								<li>
									<a href="spacialcoupon_withdrawals.php">
										<span class="title">提款</span>
									</a>
								</li>
								<li>
									<a href="spacialcoupon_transfer.php">
										<span class="title">转让</span>
									</a>
								</li>
								<li>
									<a href="spacialcoupon_tradetails.php">
										<span class="title">提款明细</span>
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#">
								<span class="title">特殊售券分</span>
							</a>
							<ul>
								<li>
									<a href="spacialcouponsale_details.php">
										<span class="title">查看交易明细</span>
									</a>
								</li>
								<li>
									<a href="spacialcouponsale_withdrawals.php">
										<span class="title">提款</span>
									</a>
								</li>
								<li>
									<a href="spacialcouponsale_transfer.php">
										<span class="title">转让</span>
									</a>
								</li>
								<li>
									<a href="spacialcouponsale_tradetails.php">
										<span class="title">提款明细</span>
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#">
								<span class="title">中孝特殊证券</span>
							</a>
							<ul>
								<li>
									<a href="zxspacialcoupon_details.php">
										<span class="title">查看交易明细</span>
									</a>
								</li>
							</ul>
						</li>
						
					</ul>
				</li>
				<li>
					<a href="#">
						<i class="linecons-cog"></i>
						<span class="title">交易平台</span>
					</a>
					<ul>
						<li>
							<a href="trading_platform.php">
								<span class="title">交易平台</span>
							</a>
						</li>
						<li>
							<a href="trading_dictate.php">
								<span class="title">现行指令</span>
							</a>
						</li>
						<li>
							<a href="trading_details.php">
								<span class="title">交易历史</span>
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#">
						<i class="linecons-cog"></i>
						<span class="title">协议书和证书</span>
					</a>
					<ul>
						<li>
							<a href="agreement_info.php">
								<span class="title">协议书</span>
							</a>
						</li>
						<li>
							<a href="agreement_certificate.php">
								<span class="title">证书</span>
							</a>
						</li><li>
							<a href="agreement_certificatelist.php">
								<span class="title">申请证书清单</span>
							</a>
						</li>
						<li>
							<a href="agreement_apply.php">
								<span class="title">申请协议书清单</span>
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#">
						<i class="linecons-cog"></i>
						<span class="title">布告栏</span>
					</a>
					<ul>
						<li>
							<a href="bulletin_list.php">
								<span class="title">布告栏查询</span>
							</a>
						</li>
						<li>
							<a href="bulletin_download.php">
								<span class="title">下载</span>
							</a>
						</li>
						<li>
							<a href="bulletin_demand.php">
								<span class="title">需求单列表</span>
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#">
						<i class="linecons-cog"></i>
						<span class="title">资产</span>
					</a>
					<ul>
						<li>
							<a href="auction_info.php">
								<span class="title">中孝拍卖</span>
							</a>
						</li>
						<li>
							<a href="auction_details.php">
								<span class="title">拍卖交易记录</span>
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#">
						<i class="linecons-cog"></i>
						<span class="title">下载类别</span>
					</a>
					<ul>
						<li>
							<a href="zx_courseware.php">
								<span class="title">中孝课件</span>
							</a>
						</li>
						<li>
							<a href="zx_video.php">
								<span class="title">中孝视频</span>
							</a>
						</li>
						<li>
							<a href="zx_instructional.php">
								<span class="title">中孝教学视频</span>
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#">
						<i class="linecons-cog"></i>
						<span class="title">报表</span>
					</a>
					<ul>
						<li>
							<a href="performance_reports.php">
								<span class="title">个人业绩报表</span>
							</a>
						</li>
					</ul>
				</li>
				<!-- 顶部菜单结束 -->
			</ul>
			<!-- notifications and other links -->
			<ul class="nav nav-userinfo navbar-right">
				<li class="">
					<a href="/zheng/index.php/Home/Login/logout" data-toggle="">
						<span>
							登出							
						</span>
					</a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
		<div class="main-content">
			<div class="row">
				<div class="col-sm-4">	
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title">欢迎</div>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">
									<blockquote>
										<p>
											<strong><?php echo ($_SESSION['userData']['member_name']); ?></strong>
											<br>
											<br>
											<br>
											最后登录时间：<?php echo date("Y-m-d H:i:s",$_SESSION['userData']['member_old_login_time']); ?>
										</p>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-8">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title">会员资料</div>
						</div>
						<div class="panel-body">
							<form role="form" class="form-horizontal">
								<div class="form-group">
									<label class="col-sm-1 control-label" for="field-1">会员编号</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" id="field-1" placeholder="<?php echo ($_SESSION['userData']['member_id']); ?>" disabled="true">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-1 control-label" for="field-1">钱包余额</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" id="field-1" placeholder="2,570.00" disabled="true">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-1 control-label" for="field-1">可提现证券</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" id="field-1" placeholder="2,570.00" disabled="true">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
<div class="panel panel-default">
	<div class="panel-heading">
		<div class="panel-title">修改登录密码</div>
	</div>
	<div class="panel-body">
		<form role="form" class="form-horizontal" method='post' action='/zheng/index.php/Home/Index/doAccountPwd'>
			<div class="form-group">
				<label class="col-sm-1 control-label" for="field-1">旧登录密码：</label>
				<div class="col-sm-6">
					<input type="password" class="form-control" name='oldpwd' id="field-1" placeholder="" >
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-1 control-label" for="field-1">输入新密码：</label>
				<div class="col-sm-6">
					<input type="password" class="form-control" name='loginpwd' id="field-1" placeholder="" >
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-1 control-label" for="field-1">确认新密码：</label>
				<div class="col-sm-6">
					<input type="password" name='password' class="form-control" id="field-1" placeholder="" >
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-1 control-label" for="field-1"></label>
				&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-success"  style="width: 80px; background: #ccc; color:#515151;">确认修改</button>
			</div>
		</form>
	</div>
</div>
<div class="row">
				<div class="col-sm-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title">快速链接</div>
						</div>
						<div class="panel-body">
							<div class="col-sm-2">
								<div class="xe-widget xe-vertical-counter xe-vertical-counter-primary">
									<div class="xe-icon">
										<i class="linecons-videocam"></i>
									</div>
									<div class="xe-label">
										<strong>个人档案查询</strong>
									</div>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="xe-widget xe-vertical-counter xe-vertical-counter-primary">
									<div class="xe-icon">
										<i class="linecons-videocam"></i>
									</div>
									<div class="xe-label">
										<strong>购买单位配套</strong>
									</div>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="xe-widget xe-vertical-counter xe-vertical-counter-primary">
									<div class="xe-icon">
										<i class="linecons-videocam"></i>
									</div>
									<div class="xe-label">
										<strong >单位充值</strong>
									</div>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="xe-widget xe-vertical-counter xe-vertical-counter-primary">
									<div class="xe-icon">
										<i class="linecons-videocam"></i>
									</div>
									<div class="xe-label">
										<strong>下载</strong>
									</div>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="xe-widget xe-vertical-counter xe-vertical-counter-primary">
									<div class="xe-icon">
										<i class="linecons-videocam"></i>
									</div>
									<div class="xe-label">
										<strong>交易平台</strong>
									</div>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="xe-widget xe-vertical-counter xe-vertical-counter-primary">
									<div class="xe-icon">
										<i class="linecons-videocam"></i>
									</div>
									<div class="xe-label">
										<strong>布告板查询</strong>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Main Footer -->
			<!-- Choose between footer styles: "footer-type-1" or "footer-type-2" -->
			<!-- Add class "sticky" to  always stick the footer to the end of page (if page contents is small) -->
			<!-- Or class "fixed" to  always fix the footer to the end of page -->
			<footer class="main-footer sticky footer-type-1">
				<div class="footer-inner">
					<!-- Add your copyright text here -->
					<div class="footer-text">
						&copy; 2016 
						<strong>中孝科技（北京）有限公司</strong> 
					</div>
					<!-- Go to Top Link, just add rel="go-top" to any link to add this functionality -->
					<div class="go-up">
						<a href="#" rel="go-top">
							<i class="fa-angle-up"></i>
						</a>
					</div>
				</div>
			</footer>
		</div>
	</div>
	<!-- Bottom Scripts -->
	<script src="/zheng/Public/assets/js/bootstrap.min.js"></script>
	<script src="/zheng/Public/assets/js/TweenMax.min.js"></script>
	<script src="/zheng/Public/assets/js/resizeable.js"></script>
	<script src="/zheng/Public/assets/js/joinable.js"></script>
	<script src="/zheng/Public/assets/js/xenon-api.js"></script>
	<script src="/zheng/Public/assets/js/xenon-toggles.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="/zheng/Public/assets/js/xenon-custom.js"></script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Xenon Boostrap Admin Panel" />
	<meta name="author" content="" />
	
	<title>中孝证券</title>

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
<body class="page-body">
	<nav class="navbar horizontal-menu navbar-fixed-top"><!-- set fixed position by adding class "navbar-fixed-top" -->
		<div class="navbar-inner">
			<!-- Navbar Brand -->
			<div class="navbar-brand">
				<a href="index.php" class="logo">
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
					<a href="login.php">
						<i class="fa fa-sign-out"></i>
					</a>
				</div>
			</div>
			<div class="navbar-mobile-clear"></div>
			<!-- main menu -->
			<ul class="navbar-nav">
				<li>
                        <a href="index.php">
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
							<a href="account_profile.php">
								<span class="title">查看个人信息</span>
							</a>
						</li>
						<li>
							<a href="account_updateprofile.php">
								<span class="title">修改个人信息</span>
							</a>
						</li>
						<li>
							<a href="account_pwd.php">
								<span class="title">修改登录密码</span>
							</a>
						</li>
						<li>
							<a href="account_tradepwd.php">
								<span class="title">修改交易密码</span>
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
							<a href="subscription_recharge.php">
								<span class="title">钱包充值</span>
							</a>
						</li>
						<li>
							<a href="subscription_extract.php">
								<span class="title">钱包提现</span>
							</a>
						</li>
						<li>
							<a href="subscription_unit.php">
								<span class="title">证券购买</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="title">转账至钱包</span>
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="my_team.php">						
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
							<a href="rechargeList.php">
								<span class="title">账户充值明细</span>
							</a>
						</li>
						<li>
							<a href="tradeList.php">
								<span class="title">证券订单明细</span>
							</a>
						</li>
						<li>
							<a href="incomeList.php">
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
						<i class="fa-file-word-o"></i>
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
						<i class="fa-envelope-o"></i>
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
						<i class="fa-briefcase"></i>
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
						<i class="fa-download"></i>
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
						<i class="fa-line-chart"></i>
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
				<li class="dropdown user-profile">
					<a href="login.php">
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
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Xenon Boostrap Admin Panel" />
	<meta name="author" content="" />
	<title>中孝社区-后台管理系统</title>
	<link rel="stylesheet" href="/baodan/Public/assets/css/fonts/linecons/css/linecons.css">
	<link rel="stylesheet" href="/baodan/Public/assets/css/fonts/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/baodan/Public/assets/css/bootstrap.css">
	<link rel="stylesheet" href="/baodan/Public/assets/css/xenon-core.css">
	<link rel="stylesheet" href="/baodan/Public/assets/css/xenon-forms.css">
	<link rel="stylesheet" href="/baodan/Public/assets/css/xenon-components.css">
	<link rel="stylesheet" href="/baodan/Public/assets/css/xenon-skins.css">
	<link rel="stylesheet" href="/baodan/Public/assets/css/custom.css">

	<script src="/baodan/Public/assets/js/jquery-1.11.1.min.js"></script>
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->	
</head>
<body class="page-body skin-custom " style="background-color:#E4D1B1;">
	<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->			
		<!-- Add "fixed" class to make the sidebar fixed always to the browser viewport. -->
		<!-- Adding class "toggle-others" will keep only one menu item open at a time. -->
		<!-- Adding class "collapsed" collapse sidebar root elements and show only icons. -->
		<div class="sidebar-menu toggle-others fixed">			
			<div class="sidebar-menu-inner">		
				<!-- 首页导航 -->
				<header class="logo-env">					
					<!-- LOGO -->
					<div class="logo">
						<a href="index.html" class="logo-expanded">
							<img src="assets/images/logo@2x.png" width="80" alt="" />
						</a>						
						<a href="index.html" class="logo-collapsed">
							<img src="assets/images/logo-collapsed@2x.png" width="40" alt="" />
						</a>
					</div>
					<!-- 移动端菜单显示 -->
					<div class="mobile-menu-toggle visible-xs">
						<a href="#" data-toggle="mobile-menu">
							<i class="fa-bars"></i>
						</a>
					</div>
				</header>
				<!-- 左侧菜单 -->
				<ul id="main-menu" class="main-menu">
					<!-- add class "multiple-expanded" to allow multiple submenus to open -->
					<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
					<li class="active">
						<a href="/baodan/index.php/Home/Index/index">
							<i class="linecons-desktop"></i>
							<span class="title">个人信息</span>
						</a>
					</li>
					<!--li class="has-sub">
						<a href="">
							<i class="linecons-desktop"></i>
							<span class="title">会员注册</span>
						</a>
						<ul>
							<li><a href=""><span class="title">新会员注册</span></a></li>
							<li><a href=""><span class="title">我要升级加购</span></a></li>
							<li><a href=""><span class="title">注册历史记录</span></a></li>
						</ul>
					</li-->
                                        <li class="">
						<a href="/baodan/index.php/Home/Money/index">
							<i class="linecons-desktop"></i>
							<span class="title">奖金收益</span>
						</a>
					</li>
					<!--li class="has-sub">
						<a href="">
							<i class="linecons-desktop"></i>
							<span class="title">奖金收益</span>
						</a>
						<ul>
							<li><a href="/baodan/index.php/Home/Money/index"><span class="title">推荐奖金</span></a></li>
							<li><a href="/baodan/index.php/Home/Money/edit"><span class="title">管理奖金</span></a></li>
							<li><a href="/baodan/index.php/Home/Money/Dividend"><span class="title">分红奖金</span></a></li>
							<li><a href="/baodan/index.php/Home/Money/Benefit"><span class="title">福利奖金</span></a></li>
							
						</ul>
					</li-->
					<li class="has-sub">
						<a href="">
							<i class="linecons-desktop"></i>
							<span class="title">钱包查询</span>
						</a>
						<ul>
							<li><a href="/baodan/index.php/Home/Wallet/index"><span class="title">中孝钱包</span></a></li>
							<!--li><a href="qbcx_zcjf.php"><span class="title">注册积分</span></a></li-->
							<li><a href="/baodan/index.php/Home/Wallet/integral"><span class="title">中孝积分</span></a></li>
							<li><a href="/baodan/index.php/Home/Wallet/consume"><span class="title">消费积分</span></a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="">
							<i class="linecons-desktop"></i>
							<span class="title">转账提现</span>
						</a>
						<ul>
							<li><a href="/baodan/index.php/Home/Withdraw/index"><span class="title">钱包转账</span></a></li>
							<li><a href="/baodan/index.php/Home/Withdraw/record"><span class="title">转账记录</span></a></li>
							<li><a href="/baodan/index.php/Home/Withdraw/apply"><span class="title">提现申请</span></a></li>
							<li><a href="/baodan/index.php/Home/Withdraw/txjl"><span class="title">提现记录</span></a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="">
							<i class="linecons-desktop"></i>
							<span class="title">市场推广</span>
						</a>
						<ul>
							<li><a href="/baodan/index.php/Home/Generalize/index"><span class="title">直接推荐查询</span></a></li>
							<!--li><a href="sctg_tjwl.php"><span class="title">推荐网络查询</span></a></li>
							<li><a href="sctg_jdwl.php"><span class="title">接点网络查询</span></a></li-->
							<li><a href="/baodan/index.php/Home/Generalize/statistics"><span class="title">市场业绩统计</span></a></li>
						</ul>
					</li>
					<!--li class="has-sub">
						<a href="">
							<i class="linecons-desktop"></i>
							<span class="title">理财消费服务</span>
						</a>
						<ul>
							<li><a href=""><span class="title">钱包积分商城</span></a></li>
							<li><a href=""><span class="title">我的订单管理</span></a></li>
							<li><a href=""><span class="title">商品兑换区</span></a></li>
							<li><a href=""><span class="title">认购积分交换平台</span></a></li>
						</ul>
					</li-->
					<li class="has-sub">
						<a href="">
							<i class="linecons-desktop"></i>
							<span class="title">公司服务</span>
						</a>
						<ul>
							<li><a href=""><span class="title">最新消息</span></a></li>
							<li><a href=""><span class="title">线上留言</span></a></li>
							<li><a href=""><span class="title">联络客服</span></a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<div class="main-content">
			<!-- User Info, Notifications and Menu Bar -->
			<nav class="navbar user-info-navbar" role="navigation">
				<!-- Left links for user info navbar -->
				<ul class="user-info-menu left-links list-inline list-unstyled">
					<!-- 菜单隐藏与显示 -->
					<li class="hidden-sm hidden-xs">
						<a href="#" data-toggle="sidebar">
							<i class="fa-bars"></i>
						</a>
					</li>				
					<li class="dropdown hover-line" style="min-height: 77px;">
						<a href="#" data-toggle="dropdown">
							<i class="<!--fa-envelope-o-->">当前用户：<?php echo ($_SESSION['userData']['name']); ?></i>
							<span class="badge badge-green"></span>
						</a>
					</li>
					<li class="dropdown hover-line" style="min-height: 77px;">
						<a href="#" data-toggle="dropdown">
							<i class="<!--fa-bell-o-->">注册时间 ： <?php echo ($_SESSION['userData']['createtime']); ?></i>
							<span class="badge badge-purple"></span>
						</a>
					</li>
					<li class="dropdown hover-line" style="min-height: 77px;">
						<a href="#" data-toggle="dropdown">
							<i class="<!--fa-bell-o-->">距离注册 <?php echo (session('time')); ?>天</i>
							<span class="badge badge-purple"></span>
						</a>
					</li>
					<li class="dropdown hover-line" style="min-height: 77px;">
						<a href="#" data-toggle="dropdown">
							<i class="<!--fa-bell-o-->">[现在位置 ：<?php echo (session('server')); ?>]</i>
							<span class="badge badge-purple"></span>
						</a>
					</li>
				</ul>
				<!-- 检索 -->
				<ul class="user-info-menu right-links list-inline list-unstyled">
					<!--
					<li class="search-form">
						<form method="get" action="extra-search.html">
							<input type="text" name="s" class="form-control search-field" placeholder="Type to search..." />
							<button type="submit" class="btn btn-link">
								<i class="linecons-search"></i>
							</button>
						</form>
					</li>
					 -->
					<!-- 用户信息 -->
					<li class="dropdown user-profile">
						<a href="/baodan/index.php/Home/Login/logout" >
							<span>
								安全退出
								<i class="fa-lock"></i>
							</span>
						</a>
					</li>
				</ul>
			</nav>
<div class="page-title">
				<div class="title-env">
					<h1 class="title">市场业绩统计 </h1>
					<p class="description"></p>
				</div>
				<div class="breadcrumb-env">
						<ol class="breadcrumb bc-1">
							<li>
								<a href="dashboard.php"><i class="fa-home"></i>Home</a>
							</li>
							<li class="active">
								<strong>市场业绩统计 </strong>
							</li>
						</ol>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="row">
					<div class="col-md-10">
						<form role="form" class="form-horizontal">
							<div class="panel-body">
								<div class="form-group">
									<label class="col-sm-1 control-label" for="finishdate">查询团队新增会员名单</label>
									<div class="col-sm-3">
										<input type="text" id="finishdate" class="form-control daterange" data-format="YYYY-MM-DD" data-start-date="2016-09-01" data-end-date="2016-09-30" data-separator=" 至 ">
									</div>
									<button class="btn btn-secondary col-sm-1">查询</button>
									<button class="btn btn-secondary col-sm-1">重置</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- Basic Setup -->
			<div class="row">
				<div class="col-sm-6">
					
					<div class="chart-item-bg">
						<div class="chart-label">
							<div class="h3 text-secondary text-bold" data-count="this" data-from="0.00" data-to="14.85" data-suffix="%" data-duration="1">14.85%</div>
							<span class="text-medium text-muted">市场团队推广业绩</span>
						</div>
						<div id="pageviews-visitors-chart" style="height: 298px; -webkit-user-select: none;" class="dx-visibility-change-handler"><svg width="503" height="298" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" stroke="none" stroke-width="0" fill="none" class="dxc dxc-chart" direction="ltr" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: block; overflow: hidden;"><defs><clipPath id="DevExpress_1"><rect x="0" y="0" width="503" height="298" rx="0" ry="0" fill="none" stroke="none" stroke-width="0"></rect></clipPath><clipPath id="DevExpress_2"><rect x="0" y="0" width="503" height="298" rx="0" ry="0" fill="none" stroke="none" stroke-width="0"></rect></clipPath><pattern id="DevExpress_45" width="5" height="5" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="5" height="5" rx="0" ry="0" fill="#68b828" opacity="0.75"></rect><path stroke-width="2" stroke="#68b828" d="M 2.5 -2.5 L -2.5 2.5M 0 5 L 5 0 M 7.5 2.5 L 2.5 7.5"></path></pattern><pattern id="DevExpress_46" width="5" height="5" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="5" height="5" rx="0" ry="0" fill="#68b828" opacity="0.5"></rect><path stroke-width="2" stroke="#68b828" d="M 2.5 -2.5 L -2.5 2.5M 0 5 L 5 0 M 7.5 2.5 L 2.5 7.5"></path></pattern><pattern id="DevExpress_47" width="5" height="5" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="5" height="5" rx="0" ry="0" fill="#eeeeee" opacity="0.75"></rect><path stroke-width="2" stroke="#eeeeee" d="M 2.5 -2.5 L -2.5 2.5M 0 5 L 5 0 M 7.5 2.5 L 2.5 7.5"></path></pattern><pattern id="DevExpress_48" width="5" height="5" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="5" height="5" rx="0" ry="0" fill="#eeeeee" opacity="0.5"></rect><path stroke-width="2" stroke="#eeeeee" d="M 2.5 -2.5 L -2.5 2.5M 0 5 L 5 0 M 7.5 2.5 L 2.5 7.5"></path></pattern><filter id="DevExpress_42" x="-50%" y="-50%" width="200%" height="200%"><feGaussianBlur in="SourceGraphic" result="gaussianBlurResult" stdDeviation="2"></feGaussianBlur><feOffset in="gaussianBlurResult" result="offsetResult" dx="0" dy="4"></feOffset><feFlood result="floodResult" flood-color="#000000" flood-opacity="0.4"></feFlood><feComposite in="floodResult" in2="offsetResult" operator="in" result="compositeResult"></feComposite><feComposite in="SourceGraphic" in2="compositeResult" operator="over"></feComposite></filter></defs><g class="dxc-background"></g><g class="dxc-strips-group"><g class="dxc-h-strips" clip-path="url(#DevExpress_2)"></g><g class="dxc-v-strips" clip-path="url(#DevExpress_2)"></g></g><g class="dxc-axes-group"><g class="dxc-h-axis" clip-path="url(#DevExpress_1)"><g class="dxc-grid"><path stroke-width="1" stroke="#f9f9f9" d="M 56.5 0 L 56.5 298"></path><path stroke-width="1" stroke="#f9f9f9" d="M 126.5 0 L 126.5 298"></path><path stroke-width="1" stroke="#f9f9f9" d="M 196.5 0 L 196.5 298"></path><path stroke-width="1" stroke="#f9f9f9" d="M 265.5 0 L 265.5 298"></path><path stroke-width="1" stroke="#f9f9f9" d="M 335.5 0 L 335.5 298"></path><path stroke-width="1" stroke="#f9f9f9" d="M 405.5 0 L 405.5 298"></path><path stroke-width="1" stroke="#f9f9f9" d="M 475.5 0 L 475.5 298"></path></g><g class="dxc-elements"></g><g class="dxc-line"></g><g class="dxc-title"></g></g><g class="dxc-v-axis" clip-path="url(#DevExpress_1)"><g class="dxc-grid"><path stroke-width="1" stroke="#f9f9f9" d="M 0 298.5 L 503 298.5"></path><path stroke-width="1" stroke="#f9f9f9" d="M 0 265.5 L 503 265.5"></path><path stroke-width="1" stroke="#f9f9f9" d="M 0 233.5 L 503 233.5"></path><path stroke-width="1" stroke="#f9f9f9" d="M 0 200.5 L 503 200.5"></path><path stroke-width="1" stroke="#f9f9f9" d="M 0 167.5 L 503 167.5"></path><path stroke-width="1" stroke="#f9f9f9" d="M 0 135.5 L 503 135.5"></path><path stroke-width="1" stroke="#f9f9f9" d="M 0 102.5 L 503 102.5"></path><path stroke-width="1" stroke="#f9f9f9" d="M 0 70.5 L 503 70.5"></path><path stroke-width="1" stroke="#f9f9f9" d="M 0 37.5 L 503 37.5"></path><path stroke-width="1" stroke="#f9f9f9" d="M 0 4.5 L 503 4.5"></path></g><g class="dxc-elements"></g><g class="dxc-line"></g><g class="dxc-title"></g></g></g><g class="dxc-constant-lines-group"><g class="dxc-h-constant-lines"></g><g class="dxc-v-constant-lines"></g></g><g class="dxc-strips-labels-group"><g class="dxc-axis-labels"></g><g class="dxc-axis-labels"></g></g><g class="dxc-border"></g><g class="dxc-series-group"><g class="dxc-series"><g class="dxc-elements" stroke="#68b828" stroke-width="1" clip-path="url(#DevExpress_2)"><path stroke-width="1" d="M 0 254 L 14 244.5 L 28 244.5 L 42 254 L 56 265.5 L 70 265.5 L 84 244 L 98 222 L 112 200 L 126 222.5 L 140 222.5 L 154 178 L 168 189 L 182 200 L 196 211.5 L 210 211.5 L 224 211.5 L 238 211.5 L 252 135 L 265 189 L 279 200.5 L 293 200.5 L 307 211.5 L 321 211.5 L 335 200 L 349 211.5 L 363 211.5 L 377 222.5 L 391 222.5 L 405 233 L 419 222.5 L 433 222.5 L 447 211 L 461 233 L 475 244.5 L 489 244.5 L 503 233"></path></g><g fill="#68b828" stroke="#68b828" stroke-width="0" r="2.5" visibility="visible" class="dxc-markers" opacity="1"><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(0,254)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(14,244)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(28,244)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(42,254)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(56,265)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(70,265)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(84,244)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(98,222)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(112,200)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(126,222)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(140,222)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(154,178)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(168,189)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(182,200)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(196,211)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(210,211)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(224,211)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(238,211)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(252,135)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(265,189)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(279,200)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(293,200)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(307,211)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(321,211)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(335,200)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(349,211)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(363,211)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(377,222)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(391,222)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(405,233)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(419,222)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(433,222)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(447,211)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(461,233)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(475,244)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(489,244)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(503,233)"></circle></g></g><g class="dxc-series"><g class="dxc-elements" stroke="#eeeeee" stroke-width="1" clip-path="url(#DevExpress_2)"><path stroke-width="1" d="M 0 276 L 14 265.5 L 28 265.5 L 42 276 L 56 287 L 70 276 L 84 265 L 98 254 L 112 244 L 126 254 L 140 265 L 154 233 L 168 211 L 182 222.5 L 196 222.5 L 210 222.5 L 224 222.5 L 238 233 L 252 244.5 L 265 244.5 L 279 233 L 293 265 L 307 244 L 321 254 L 335 244 L 349 233 L 363 244 L 377 233 L 391 244.5 L 405 244.5 L 419 233 L 433 244.5 L 447 244.5 L 461 244.5 L 475 254 L 489 265.5 L 503 265.5"></path></g><g fill="#eeeeee" stroke="#eeeeee" stroke-width="0" r="2.5" visibility="visible" class="dxc-markers" opacity="1"><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(0,276)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(14,265)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(28,265)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(42,276)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(56,287)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(70,276)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(84,265)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(98,254)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(112,244)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(126,254)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(140,265)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(154,233)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(168,211)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(182,222)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(196,222)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(210,222)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(224,222)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(238,233)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(252,244)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(265,244)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(279,233)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(293,265)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(307,244)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(321,254)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(335,244)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(349,233)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(363,244)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(377,233)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(391,244)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(405,244)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(419,233)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(433,244)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(447,244)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(461,244)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(475,254)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(489,265)"></circle><circle cx="0" cy="0" r="2.5" stroke-width="0" transform="translate(503,265)"></circle></g></g></g><g class="dxc-labels-group"><g class="dxc-labels" visibility="hidden" clip-path="url(#DevExpress_2)"></g><g class="dxc-labels" visibility="hidden" clip-path="url(#DevExpress_2)"></g></g><g class="dxc-crosshair-cursor"></g><g class="dxc-trackers" opacity="0.0001" stroke="gray" fill="gray"><g class="dxc-crosshair-trackers" stroke="none" fill="grey"></g><g class="dxc-series-trackers"><g class="dxc-pane-tracker"><g clip-path="url(#DevExpress_2)"><path stroke-width="20" fill="none" d="M 0 254 L 14 244 L 28 244 L 42 254 L 56 265 L 70 265 L 84 244 L 98 222 L 112 200 L 126 222 L 140 222 L 154 178 L 168 189 L 182 200 L 196 211 L 210 211 L 224 211 L 238 211 L 252 135 L 265 189 L 279 200 L 293 200 L 307 211 L 321 211 L 335 200 L 349 211 L 363 211 L 377 222 L 391 222 L 405 233 L 419 222 L 433 222 L 447 211 L 461 233 L 475 244 L 489 244 L 503 233"></path></g><g clip-path="url(#DevExpress_2)"><path stroke-width="20" fill="none" d="M 0 276 L 14 265 L 28 265 L 42 276 L 56 287 L 70 276 L 84 265 L 98 254 L 112 244 L 126 254 L 140 265 L 154 233 L 168 211 L 182 222 L 196 222 L 210 222 L 224 222 L 238 233 L 252 244 L 265 244 L 279 233 L 293 265 L 307 244 L 321 254 L 335 244 L 349 233 L 363 244 L 377 233 L 391 244 L 405 244 L 419 233 L 433 244 L 447 244 L 461 244 L 475 254 L 489 265 L 503 265"></path></g></g></g><g class="dxc-markers-trackers" stroke="none" fill="grey"><g class="dxc-pane-tracker"><g><circle cx="0" cy="254" r="6"></circle><circle cx="14" cy="244" r="6"></circle><circle cx="28" cy="244" r="6"></circle><circle cx="42" cy="254" r="6"></circle><circle cx="56" cy="265" r="6"></circle><circle cx="70" cy="265" r="6"></circle><circle cx="84" cy="244" r="6"></circle><circle cx="98" cy="222" r="6"></circle><circle cx="112" cy="200" r="6"></circle><circle cx="126" cy="222" r="6"></circle><circle cx="140" cy="222" r="6"></circle><circle cx="154" cy="178" r="6"></circle><circle cx="168" cy="189" r="6"></circle><circle cx="182" cy="200" r="6"></circle><circle cx="196" cy="211" r="6"></circle><circle cx="210" cy="211" r="6"></circle><circle cx="224" cy="211" r="6"></circle><circle cx="238" cy="211" r="6"></circle><circle cx="252" cy="135" r="6"></circle><circle cx="265" cy="189" r="6"></circle><circle cx="279" cy="200" r="6"></circle><circle cx="293" cy="200" r="6"></circle><circle cx="307" cy="211" r="6"></circle><circle cx="321" cy="211" r="6"></circle><circle cx="335" cy="200" r="6"></circle><circle cx="349" cy="211" r="6"></circle><circle cx="363" cy="211" r="6"></circle><circle cx="377" cy="222" r="6"></circle><circle cx="391" cy="222" r="6"></circle><circle cx="405" cy="233" r="6"></circle><circle cx="419" cy="222" r="6"></circle><circle cx="433" cy="222" r="6"></circle><circle cx="447" cy="211" r="6"></circle><circle cx="461" cy="233" r="6"></circle><circle cx="475" cy="244" r="6"></circle><circle cx="489" cy="244" r="6"></circle><circle cx="503" cy="233" r="6"></circle></g><g><circle cx="0" cy="276" r="6"></circle><circle cx="14" cy="265" r="6"></circle><circle cx="28" cy="265" r="6"></circle><circle cx="42" cy="276" r="6"></circle><circle cx="56" cy="287" r="6"></circle><circle cx="70" cy="276" r="6"></circle><circle cx="84" cy="265" r="6"></circle><circle cx="98" cy="254" r="6"></circle><circle cx="112" cy="244" r="6"></circle><circle cx="126" cy="254" r="6"></circle><circle cx="140" cy="265" r="6"></circle><circle cx="154" cy="233" r="6"></circle><circle cx="168" cy="211" r="6"></circle><circle cx="182" cy="222" r="6"></circle><circle cx="196" cy="222" r="6"></circle><circle cx="210" cy="222" r="6"></circle><circle cx="224" cy="222" r="6"></circle><circle cx="238" cy="233" r="6"></circle><circle cx="252" cy="244" r="6"></circle><circle cx="265" cy="244" r="6"></circle><circle cx="279" cy="233" r="6"></circle><circle cx="293" cy="265" r="6"></circle><circle cx="307" cy="244" r="6"></circle><circle cx="321" cy="254" r="6"></circle><circle cx="335" cy="244" r="6"></circle><circle cx="349" cy="233" r="6"></circle><circle cx="363" cy="244" r="6"></circle><circle cx="377" cy="233" r="6"></circle><circle cx="391" cy="244" r="6"></circle><circle cx="405" cy="244" r="6"></circle><circle cx="419" cy="233" r="6"></circle><circle cx="433" cy="244" r="6"></circle><circle cx="447" cy="244" r="6"></circle><circle cx="461" cy="244" r="6"></circle><circle cx="475" cy="254" r="6"></circle><circle cx="489" cy="265" r="6"></circle><circle cx="503" cy="265" r="6"></circle></g></g></g></g><g class="dxc-legend" clip-path="url(#DevExpress_1)" transform="translate(0,0)"><g transform="translate(414,26)"><rect x="-5" y="-16" width="84" height="68" rx="0" ry="0" fill="#ffffff" class="dxc-border"></rect><g class="dxc-item" transform="translate(0,0)"><rect x="0" y="0" width="12" height="12" rx="0" ry="0" fill="#68b828"></rect><text x="19" y="11" text-anchor="start" style="fill: rgb(118, 118, 118); font-family: 'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana; font-weight: 400; font-size: 12px; cursor: default;"><tspan x="19" dy="0">Pageviews</tspan></text></g><g class="dxc-item" transform="translate(0,23)"><rect x="0" y="0" width="12" height="12" rx="0" ry="0" fill="#eeeeee"></rect><text x="19" y="11" text-anchor="start" style="fill: rgb(118, 118, 118); font-family: 'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana; font-weight: 400; font-size: 12px; cursor: default;"><tspan x="19" dy="0">Visitors</tspan></text></g></g><g class="dxc-legend-trackers" stroke="none" fill="grey" opacity="0.0001" transform="translate(414,26)"><rect x="-10" y="-5" width="94" height="23" rx="0" ry="0"></rect><rect x="-10" y="18" width="94" height="23" rx="0" ry="0"></rect></g></g><g class="dxc-tooltip"><path d="M 0 0 Z" filter="url(#DevExpress_42)" stroke-width="1" stroke="#d3d3d3" visibility="hidden"></path><g text-anchor="middle" visibility="hidden" style="font-family: 'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana; font-weight: 400; font-size: 12px; fill: rgb(35, 35, 35); cursor: default;"><text x="0" y="0" style="font-size: 12px;"></text></g></g></svg></div>
					</div>
					
				</div>
				<div class="col-sm-3">
					
					<div class="chart-item-bg">
						<div class="chart-label chart-label-small">
							<div class="h4 text-purple text-bold" data-count="this" data-from="0.00" data-to="95.8" data-suffix="%" data-duration="1.5">95.8%</div>
							<span class="text-small text-upper text-muted">月份市场业绩份额</span>
						</div>
						<div id="server-uptime-chart" style="height: 134px; -webkit-user-select: none;" class="dx-visibility-change-handler"><svg width="237" height="134" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" stroke="none" stroke-width="0" fill="none" class="dxc dxc-chart" direction="ltr" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: block; overflow: hidden;"><defs><clipPath id="DevExpress_3"><rect x="0" y="0" width="237" height="134" rx="0" ry="0" fill="none" stroke="none" stroke-width="0"></rect></clipPath><clipPath id="DevExpress_6"><rect x="0" y="0" width="237" height="134" rx="0" ry="0" fill="none" stroke="none" stroke-width="0"></rect></clipPath><pattern id="DevExpress_4" width="6" height="6" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="6" height="6" rx="0" ry="0" fill="#7c38bc" opacity="0.75"></rect><path stroke-width="2" stroke="#7c38bc" d="M 3 -3 L -3 3M 0 6 L 6 0 M 9 3 L 3 9"></path></pattern><pattern id="DevExpress_5" width="6" height="6" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="6" height="6" rx="0" ry="0" fill="#7c38bc" opacity="0.5"></rect><path stroke-width="2" stroke="#7c38bc" d="M 3 -3 L -3 3M 0 6 L 6 0 M 9 3 L 3 9"></path></pattern><filter id="DevExpress_43" x="-50%" y="-50%" width="200%" height="200%"><feGaussianBlur in="SourceGraphic" result="gaussianBlurResult" stdDeviation="2"></feGaussianBlur><feOffset in="gaussianBlurResult" result="offsetResult" dx="0" dy="4"></feOffset><feFlood result="floodResult" flood-color="#000000" flood-opacity="0.4"></feFlood><feComposite in="floodResult" in2="offsetResult" operator="in" result="compositeResult"></feComposite><feComposite in="SourceGraphic" in2="compositeResult" operator="over"></feComposite></filter></defs><g class="dxc-background"></g><g class="dxc-strips-group"><g class="dxc-h-strips" clip-path="url(#DevExpress_6)"></g><g class="dxc-v-strips" clip-path="url(#DevExpress_6)"></g></g><g class="dxc-axes-group"><g class="dxc-h-axis" clip-path="url(#DevExpress_3)"><g class="dxc-grid"></g><g class="dxc-elements"></g><g class="dxc-line"></g><g class="dxc-title"></g></g><g class="dxc-v-axis" clip-path="url(#DevExpress_3)"><g class="dxc-grid"></g><g class="dxc-elements"></g><g class="dxc-line"></g><g class="dxc-title"></g></g></g><g class="dxc-constant-lines-group"><g class="dxc-h-constant-lines"></g><g class="dxc-v-constant-lines"></g></g><g class="dxc-strips-labels-group"><g class="dxc-axis-labels"></g><g class="dxc-axis-labels"></g></g><g class="dxc-border"></g><g class="dxc-series-group"><g class="dxc-series"><g fill="#7c38bc" stroke="#7c38bc" stroke-width="0" class="dxc-markers" opacity="1" transform="translate(0,0) scale(1,1)"><rect x="14" y="124" width="11" height="10" rx="0" ry="0" stroke-width="0"></rect><rect x="26" y="114" width="11" height="20" rx="0" ry="0" stroke-width="0"></rect><rect x="38" y="104" width="11" height="30" rx="0" ry="0" stroke-width="0"></rect><rect x="51" y="93" width="11" height="41" rx="0" ry="0" stroke-width="0"></rect><rect x="63" y="83" width="11" height="51" rx="0" ry="0" stroke-width="0"></rect><rect x="75" y="93" width="11" height="41" rx="0" ry="0" stroke-width="0"></rect><rect x="88" y="83" width="11" height="51" rx="0" ry="0" stroke-width="0"></rect><rect x="100" y="73" width="11" height="61" rx="0" ry="0" stroke-width="0"></rect><rect x="113" y="63" width="11" height="71" rx="0" ry="0" stroke-width="0"></rect><rect x="125" y="73" width="11" height="61" rx="0" ry="0" stroke-width="0"></rect><rect x="137" y="83" width="11" height="51" rx="0" ry="0" stroke-width="0"></rect><rect x="150" y="93" width="11" height="41" rx="0" ry="0" stroke-width="0"></rect><rect x="162" y="83" width="11" height="51" rx="0" ry="0" stroke-width="0"></rect><rect x="174" y="93" width="11" height="41" rx="0" ry="0" stroke-width="0"></rect><rect x="187" y="93" width="11" height="41" rx="0" ry="0" stroke-width="0"></rect><rect x="199" y="104" width="11" height="30" rx="0" ry="0" stroke-width="0"></rect><rect x="211" y="93" width="11" height="41" rx="0" ry="0" stroke-width="0"></rect></g></g></g><g class="dxc-labels-group"><g class="dxc-labels" visibility="hidden" clip-path="url(#DevExpress_6)"></g></g><g class="dxc-crosshair-cursor"></g><g class="dxc-legend" clip-path="url(#DevExpress_3)"></g><g class="dxc-tooltip"><path d="M 0 0 Z" filter="url(#DevExpress_43)" stroke-width="1" stroke="#d3d3d3" visibility="hidden"></path><g text-anchor="middle" visibility="hidden" style="font-family: 'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana; font-weight: 400; font-size: 12px; fill: rgb(35, 35, 35); cursor: default;"><text x="0" y="0" style="font-size: 12px;"></text></g></g><g class="dxc-trackers" opacity="0.0001" stroke="gray" fill="gray"><g class="dxc-crosshair-trackers" stroke="none" fill="grey"></g><g class="dxc-series-trackers"><g class="dxc-pane-tracker"><g></g></g></g><g class="dxc-markers-trackers" stroke="none" fill="grey"><g class="dxc-pane-tracker"><g clip-path="url(#DevExpress_6)"><rect x="14" y="124" width="11" height="10" rx="0" ry="0"></rect><rect x="26" y="114" width="11" height="20" rx="0" ry="0"></rect><rect x="38" y="104" width="11" height="30" rx="0" ry="0"></rect><rect x="51" y="93" width="11" height="41" rx="0" ry="0"></rect><rect x="63" y="83" width="11" height="51" rx="0" ry="0"></rect><rect x="75" y="93" width="11" height="41" rx="0" ry="0"></rect><rect x="88" y="83" width="11" height="51" rx="0" ry="0"></rect><rect x="100" y="73" width="11" height="61" rx="0" ry="0"></rect><rect x="113" y="63" width="11" height="71" rx="0" ry="0"></rect><rect x="125" y="73" width="11" height="61" rx="0" ry="0"></rect><rect x="137" y="83" width="11" height="51" rx="0" ry="0"></rect><rect x="150" y="93" width="11" height="41" rx="0" ry="0"></rect><rect x="162" y="83" width="11" height="51" rx="0" ry="0"></rect><rect x="174" y="93" width="11" height="41" rx="0" ry="0"></rect><rect x="187" y="93" width="11" height="41" rx="0" ry="0"></rect><rect x="199" y="104" width="11" height="30" rx="0" ry="0"></rect><rect x="211" y="93" width="11" height="41" rx="0" ry="0"></rect></g></g></g></g></svg></div>
					</div>
					
					<div class="chart-item-bg">
						<div class="chart-label chart-label-small">
							<div class="h4 text-secondary text-bold" data-count="this" data-from="0.00" data-to="320.45" data-decimal="," data-duration="2">320,45</div>
							<span class="text-small text-upper text-muted">市场团队退广业绩</span>
						</div>
						<div id="sales-avg-chart" style="height: 134px; position: relative;">
							<div style="position: absolute; top: 25px; right: 0px; left: 40%; bottom: 0px; -webkit-user-select: none;" class="dx-visibility-change-handler"><svg width="142" height="90" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" stroke="none" stroke-width="0" fill="none" class="dxc dxc-chart" direction="ltr" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); display: block; overflow: hidden;"><defs><clipPath id="DevExpress_7"><rect x="0" y="0" width="142" height="90" rx="0" ry="0" fill="none" stroke="none" stroke-width="0"></rect></clipPath><pattern id="DevExpress_8" width="10" height="10" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="10" height="10" rx="0" ry="0" fill="#5e9b4c" opacity="0.75"></rect><path stroke-width="4" stroke="#5e9b4c" d="M 5 -5 L -5 5M 0 10 L 10 0 M 15 5 L 5 15"></path></pattern><pattern id="DevExpress_9" width="10" height="10" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="10" height="10" rx="0" ry="0" fill="#5e9b4c" opacity="0.5"></rect><path stroke-width="4" stroke="#5e9b4c" d="M 5 -5 L -5 5M 0 10 L 10 0 M 15 5 L 5 15"></path></pattern><pattern id="DevExpress_10" width="10" height="10" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="10" height="10" rx="0" ry="0" fill="#6ca959" opacity="0.75"></rect><path stroke-width="4" stroke="#6ca959" d="M 5 -5 L -5 5M 0 10 L 10 0 M 15 5 L 5 15"></path></pattern><pattern id="DevExpress_11" width="10" height="10" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="10" height="10" rx="0" ry="0" fill="#6ca959" opacity="0.5"></rect><path stroke-width="4" stroke="#6ca959" d="M 5 -5 L -5 5M 0 10 L 10 0 M 15 5 L 5 15"></path></pattern><pattern id="DevExpress_12" width="10" height="10" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="10" height="10" rx="0" ry="0" fill="#b9f5a6" opacity="0.75"></rect><path stroke-width="4" stroke="#b9f5a6" d="M 5 -5 L -5 5M 0 10 L 10 0 M 15 5 L 5 15"></path></pattern><pattern id="DevExpress_13" width="10" height="10" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="10" height="10" rx="0" ry="0" fill="#b9f5a6" opacity="0.5"></rect><path stroke-width="4" stroke="#b9f5a6" d="M 5 -5 L -5 5M 0 10 L 10 0 M 15 5 L 5 15"></path></pattern><pattern id="DevExpress_14" width="10" height="10" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="10" height="10" rx="0" ry="0" fill="#90cd7e" opacity="0.75"></rect><path stroke-width="4" stroke="#90cd7e" d="M 5 -5 L -5 5M 0 10 L 10 0 M 15 5 L 5 15"></path></pattern><pattern id="DevExpress_15" width="10" height="10" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="10" height="10" rx="0" ry="0" fill="#90cd7e" opacity="0.5"></rect><path stroke-width="4" stroke="#90cd7e" d="M 5 -5 L -5 5M 0 10 L 10 0 M 15 5 L 5 15"></path></pattern><pattern id="DevExpress_16" width="10" height="10" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="10" height="10" rx="0" ry="0" fill="#9edb8b" opacity="0.75"></rect><path stroke-width="4" stroke="#9edb8b" d="M 5 -5 L -5 5M 0 10 L 10 0 M 15 5 L 5 15"></path></pattern><pattern id="DevExpress_17" width="10" height="10" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="10" height="10" rx="0" ry="0" fill="#9edb8b" opacity="0.5"></rect><path stroke-width="4" stroke="#9edb8b" d="M 5 -5 L -5 5M 0 10 L 10 0 M 15 5 L 5 15"></path></pattern><pattern id="DevExpress_18" width="10" height="10" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="10" height="10" rx="0" ry="0" fill="#a0dc8d" opacity="0.75"></rect><path stroke-width="4" stroke="#a0dc8d" d="M 5 -5 L -5 5M 0 10 L 10 0 M 15 5 L 5 15"></path></pattern><pattern id="DevExpress_19" width="10" height="10" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="10" height="10" rx="0" ry="0" fill="#a0dc8d" opacity="0.5"></rect><path stroke-width="4" stroke="#a0dc8d" d="M 5 -5 L -5 5M 0 10 L 10 0 M 15 5 L 5 15"></path></pattern><pattern id="DevExpress_20" width="10" height="10" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="10" height="10" rx="0" ry="0" fill="#2c691a" opacity="0.75"></rect><path stroke-width="4" stroke="#2c691a" d="M 5 -5 L -5 5M 0 10 L 10 0 M 15 5 L 5 15"></path></pattern><pattern id="DevExpress_21" width="10" height="10" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="10" height="10" rx="0" ry="0" fill="#2c691a" opacity="0.5"></rect><path stroke-width="4" stroke="#2c691a" d="M 5 -5 L -5 5M 0 10 L 10 0 M 15 5 L 5 15"></path></pattern><pattern id="DevExpress_22" width="10" height="10" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="10" height="10" rx="0" ry="0" fill="#3a7727" opacity="0.75"></rect><path stroke-width="4" stroke="#3a7727" d="M 5 -5 L -5 5M 0 10 L 10 0 M 15 5 L 5 15"></path></pattern><pattern id="DevExpress_23" width="10" height="10" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="10" height="10" rx="0" ry="0" fill="#3a7727" opacity="0.5"></rect><path stroke-width="4" stroke="#3a7727" d="M 5 -5 L -5 5M 0 10 L 10 0 M 15 5 L 5 15"></path></pattern><pattern id="DevExpress_24" width="10" height="10" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="10" height="10" rx="0" ry="0" fill="#87c374" opacity="0.75"></rect><path stroke-width="4" stroke="#87c374" d="M 5 -5 L -5 5M 0 10 L 10 0 M 15 5 L 5 15"></path></pattern><pattern id="DevExpress_25" width="10" height="10" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="10" height="10" rx="0" ry="0" fill="#87c374" opacity="0.5"></rect><path stroke-width="4" stroke="#87c374" d="M 5 -5 L -5 5M 0 10 L 10 0 M 15 5 L 5 15"></path></pattern><pattern id="DevExpress_26" width="10" height="10" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="10" height="10" rx="0" ry="0" fill="#5e9b4c" opacity="0.75"></rect><path stroke-width="4" stroke="#5e9b4c" d="M 5 -5 L -5 5M 0 10 L 10 0 M 15 5 L 5 15"></path></pattern><pattern id="DevExpress_27" width="10" height="10" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="10" height="10" rx="0" ry="0" fill="#5e9b4c" opacity="0.5"></rect><path stroke-width="4" stroke="#5e9b4c" d="M 5 -5 L -5 5M 0 10 L 10 0 M 15 5 L 5 15"></path></pattern><filter id="DevExpress_28" x="-50%" y="-50%" width="200%" height="200%"><feGaussianBlur in="SourceGraphic" result="gaussianBlurResult" stdDeviation="2"></feGaussianBlur><feOffset in="gaussianBlurResult" result="offsetResult" dx="0" dy="4"></feOffset><feFlood result="floodResult" flood-color="#000000" flood-opacity="0.4"></feFlood><feComposite in="floodResult" in2="offsetResult" operator="in" result="compositeResult"></feComposite><feComposite in="SourceGraphic" in2="compositeResult" operator="over"></feComposite></filter></defs><g class="dxc-legend" clip-path="url(#DevExpress_7)"></g><g class="dxc-series-group"><g class="dxc-series"><g class="dxc-markers"><path stroke-linejoin="round" fill="#5e9b4c" stroke="#ffffff" stroke-width="0" d="M 31.159450280596914 65.9220122850497 A 45 45 0 0 0 116 45.000000000000014 L 93 45.00000000000001 A 22 22 0 0 1 51.52239791495849 55.22853933935763 Z"></path><path stroke-linejoin="round" fill="#6ca959" stroke="#ffffff" stroke-width="0" d="M 26.64877659235065 37.38626358186886 A 45 45 0 0 0 31.159450280596914 65.9220122850497 L 51.52239791495849 55.22853933935763 A 22 22 0 0 1 49.317179667371434 41.277728862246995 Z"></path><path stroke-linejoin="round" fill="#b9f5a6" stroke="#ffffff" stroke-width="0" d="M 29.414171234250382 27.80643010117586 A 45 45 0 0 0 26.64877659235065 37.38626358186886 L 49.317179667371434 41.277728862246995 A 22 22 0 0 1 50.66915038118908 36.59425471613042 Z"></path><path stroke-linejoin="round" fill="#90cd7e" stroke="#ffffff" stroke-width="0" d="M 38.79855026689135 13.566472754619525 A 45 45 0 0 0 29.414171234250382 27.80643010117586 L 50.66915038118908 36.59425471613042 A 22 22 0 0 1 55.257069019369105 29.632497791147323 Z"></path><path stroke-linejoin="round" fill="#9edb8b" stroke="#ffffff" stroke-width="0" d="M 56.48862991260447 2.4039891751980846 A 45 45 0 0 0 38.79855026689135 13.566472754619525 L 55.257069019369105 29.632497791147323 A 22 22 0 0 1 63.90555240171774 24.175283596763506 Z"></path><path stroke-linejoin="round" fill="#a0dc8d" stroke="#ffffff" stroke-width="0" d="M 57.45706992002119 2.0862604187329623 A 45 45 0 0 0 56.48862991260447 2.4039891751980846 L 63.90555240171774 24.175283596763506 A 22 22 0 0 1 64.37901196089925 24.01994953804723 Z"></path><path stroke-linejoin="round" fill="#2c691a" stroke="#ffffff" stroke-width="0" d="M 78.32162977695153 0.5996200758455572 A 45 45 0 0 0 57.45706992002119 2.0862604187329623 L 64.37901196089925 24.01994953804723 A 22 22 0 0 1 74.57946344650964 23.293147592635606 Z"></path><path stroke-linejoin="round" fill="#3a7727" stroke="#ffffff" stroke-width="0" d="M 97.60421156885647 8.706530521324872 A 45 45 0 0 0 78.32162977695153 0.5996200758455572 L 74.57946344650964 23.293147592635606 A 22 22 0 0 1 84.00650343366317 27.256526032647713 Z"></path><path stroke-linejoin="round" fill="#87c374" stroke="#ffffff" stroke-width="0" d="M 111.13844491630525 24.655338791202986 A 45 45 0 0 0 97.60421156885647 8.706530521324872 L 84.00650343366317 27.256526032647713 A 22 22 0 0 1 90.62323973686034 35.05372118681035 Z"></path><path stroke-linejoin="round" fill="#5e9b4c" stroke="#ffffff" stroke-width="0" d="M 116 45 A 45 45 0 0 0 111.13844491630525 24.655338791202986 L 90.62323973686034 35.05372118681035 A 22 22 0 0 1 93 45 Z"></path></g></g></g><g class="dxc-labels-group"></g><g class="dxc-labels" visibility="hidden"></g><g class="dxc-tooltip"><path d="M 0 0 Z" filter="url(#DevExpress_28)" stroke-width="1" stroke="#d3d3d3" visibility="hidden"></path><g text-anchor="middle" visibility="hidden" style="font-family: 'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana; font-weight: 400; font-size: 12px; fill: rgb(35, 35, 35); cursor: default;"><text x="0" y="0" style="font-size: 12px;"></text></g></g><g class="dxc-trackers" opacity="0.0001" stroke="gray" fill="gray"><g class="dxc-crosshair-trackers" stroke="none" fill="grey"></g><g class="dxc-series-trackers"></g><g class="dxc-markers-trackers" stroke="none" fill="grey"><g><path stroke-linejoin="round" d="M 31.159450280596914 65.9220122850497 A 45 45 0 0 0 116 45.000000000000014 L 93 45.00000000000001 A 22 22 0 0 1 51.52239791495849 55.22853933935763 Z"></path><path stroke-linejoin="round" d="M 26.64877659235065 37.38626358186886 A 45 45 0 0 0 31.159450280596914 65.9220122850497 L 51.52239791495849 55.22853933935763 A 22 22 0 0 1 49.317179667371434 41.277728862246995 Z"></path><path stroke-linejoin="round" d="M 29.414171234250382 27.80643010117586 A 45 45 0 0 0 26.64877659235065 37.38626358186886 L 49.317179667371434 41.277728862246995 A 22 22 0 0 1 50.66915038118908 36.59425471613042 Z"></path><path stroke-linejoin="round" d="M 38.79855026689135 13.566472754619525 A 45 45 0 0 0 29.414171234250382 27.80643010117586 L 50.66915038118908 36.59425471613042 A 22 22 0 0 1 55.257069019369105 29.632497791147323 Z"></path><path stroke-linejoin="round" d="M 56.48862991260447 2.4039891751980846 A 45 45 0 0 0 38.79855026689135 13.566472754619525 L 55.257069019369105 29.632497791147323 A 22 22 0 0 1 63.90555240171774 24.175283596763506 Z"></path><path stroke-linejoin="round" d="M 57.45706992002119 2.0862604187329623 A 45 45 0 0 0 56.48862991260447 2.4039891751980846 L 63.90555240171774 24.175283596763506 A 22 22 0 0 1 64.37901196089925 24.01994953804723 Z"></path><path stroke-linejoin="round" d="M 78.32162977695153 0.5996200758455572 A 45 45 0 0 0 57.45706992002119 2.0862604187329623 L 64.37901196089925 24.01994953804723 A 22 22 0 0 1 74.57946344650964 23.293147592635606 Z"></path><path stroke-linejoin="round" d="M 97.60421156885647 8.706530521324872 A 45 45 0 0 0 78.32162977695153 0.5996200758455572 L 74.57946344650964 23.293147592635606 A 22 22 0 0 1 84.00650343366317 27.256526032647713 Z"></path><path stroke-linejoin="round" d="M 111.13844491630525 24.655338791202986 A 45 45 0 0 0 97.60421156885647 8.706530521324872 L 84.00650343366317 27.256526032647713 A 22 22 0 0 1 90.62323973686034 35.05372118681035 Z"></path><path stroke-linejoin="round" d="M 116 45 A 45 45 0 0 0 111.13844491630525 24.655338791202986 L 90.62323973686034 35.05372118681035 A 22 22 0 0 1 93 45 Z"></path></g></g></g><g></g></svg></div>
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
	<!-- 界面加载效果 -->
	<!-- -->
	<div class="page-loading-overlay">
		<div class="loader-2"></div>
	</div>
	
	<!-- Bottom Scripts -->
	<script src="/baodan/Public/assets/js/bootstrap.min.js"></script>
	<script src="/baodan/Public/assets/js/TweenMax.min.js"></script>
	<script src="/baodan/Public/assets/js/resizeable.js"></script>
	<script src="/baodan/Public/assets/js/joinable.js"></script>
	<script src="/baodan/Public/assets/js/xenon-api.js"></script>
	<script src="/baodan/Public/assets/js/xenon-toggles.js"></script>
	<!-- Imported scripts on this page -->
	<script src="/baodan/Public/assets/js/xenon-widgets.js"></script>
	<script src="/baodan/Public/assets/js/devexpress-web-14.1/js/globalize.min.js"></script>
	<script src="/baodan/Public/assets/js/devexpress-web-14.1/js/dx.chartjs.js"></script>
	<script src="/baodan/Public/assets/js/toastr/toastr.min.js"></script>
	<script src="/baodan/Public/assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="/baodan/Public/assets/js/jvectormap/regions/jquery-jvectormap-world-mill-en.js"></script>

	<script src="/baodan/Public/assets/js/datepicker/bootstrap-datepicker.js"></script>

	<!-- JavaScripts initializations and stuff -->
	<script src="/baodan/Public/assets/js/xenon-custom.js"></script>

</body>
</html>
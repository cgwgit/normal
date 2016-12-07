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
						<a href="dashboard.php">
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
					<li class="has-sub">
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
					</li>
					<li class="has-sub">
						<a href="">
							<i class="linecons-desktop"></i>
							<span class="title">钱包查询</span>
						</a>
						<ul>
							<li><a href="qbcx_zxqb.php"><span class="title">中孝钱包</span></a></li>
							<!--li><a href="qbcx_zcjf.php"><span class="title">注册积分</span></a></li-->
							<li><a href="qbcx_zxjf.php"><span class="title">中孝积分</span></a></li>
							<li><a href="qbcx_xfjf.php"><span class="title">消费积分</span></a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="">
							<i class="linecons-desktop"></i>
							<span class="title">转账提现</span>
						</a>
						<ul>
							<li><a href="zztx_qbzz.php"><span class="title">钱包转账</span></a></li>
							<li><a href="zztx_zzjl.php"><span class="title">转账记录</span></a></li>
							<li><a href="zztx_txsq.php"><span class="title">提现申请</span></a></li>
							<li><a href="zztx_txjl.php"><span class="title">提现记录</span></a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="">
							<i class="linecons-desktop"></i>
							<span class="title">市场推广</span>
						</a>
						<ul>
							<li><a href="sctg_zjtj.php"><span class="title">直接推荐查询</span></a></li>
							<!--li><a href="sctg_tjwl.php"><span class="title">推荐网络查询</span></a></li>
							<li><a href="sctg_jdwl.php"><span class="title">接点网络查询</span></a></li-->
							<li><a href="sctg_scyj.php"><span class="title">市场业绩统计</span></a></li>
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
							<i class="<!--fa-envelope-o-->">当前用户：马宏伟</i>
							<span class="badge badge-green"></span>
						</a>
					</li>
					<li class="dropdown hover-line" style="min-height: 77px;">
						<a href="#" data-toggle="dropdown">
							<i class="<!--fa-bell-o-->">注册时间 ： 2016-10-05</i>
							<span class="badge badge-purple"></span>
						</a>
					</li>
					<li class="dropdown hover-line" style="min-height: 77px;">
						<a href="#" data-toggle="dropdown">
							<i class="<!--fa-bell-o-->">距离注册 3 天</i>
							<span class="badge badge-purple"></span>
						</a>
					</li>
					<li class="dropdown hover-line" style="min-height: 77px;">
						<a href="#" data-toggle="dropdown">
							<i class="<!--fa-bell-o-->">[现在位置 ： 125.33.205.237 ]</i>
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
						<a href="index.html" >
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
					<h1 class="title">分红奖金 </h1>
					<p class="description"></p>
				</div>
				<div class="breadcrumb-env">
						<ol class="breadcrumb bc-1">
							<li>
								<a href="dashboard.php"><i class="fa-home"></i>Home</a>
							</li>
							<li class="active">
								<strong>分红奖金 </strong>
							</li>
						</ol>
				</div>
			</div>
			<!-- Basic Setup -->
			<div class="panel panel-default">
				<div class="panel-body">
					<table class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>序号</th>
								<th>结算日期</th>
								<th>结算级别</th>
								<th>奖金点数</th>
								<th>拨比</th>
								<th>来源会员</th>
								<th>来源名称</th>
								<th>代(层)数</th>
								<th>备注</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>2016-10-8</td>
								<td>5</td>
								<td>500.00</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>
					<div class="row"><div class="col-xs-6"><div class="dataTables_info" id="example-1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-xs-6"><div class="dataTables_paginate paging_simple_numbers" id="example-1_paginate"><ul class="pagination"><li class="paginate_button previous disabled" aria-controls="example-1" tabindex="0" id="example-1_previous"><a href="#">Previous</a></li><li class="paginate_button active" aria-controls="example-1" tabindex="0"><a href="#">1</a></li><li class="paginate_button " aria-controls="example-1" tabindex="0"><a href="#">2</a></li><li class="paginate_button " aria-controls="example-1" tabindex="0"><a href="#">3</a></li><li class="paginate_button " aria-controls="example-1" tabindex="0"><a href="#">4</a></li><li class="paginate_button " aria-controls="example-1" tabindex="0"><a href="#">5</a></li><li class="paginate_button " aria-controls="example-1" tabindex="0"><a href="#">6</a></li><li class="paginate_button next" aria-controls="example-1" tabindex="0" id="example-1_next"><a href="#">Next</a></li></ul></div></div></div>
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
	
	<!-- Imported styles on this page -->
	<link rel="stylesheet" href="/baodan/Public/assets/js/datatables/dataTables.bootstrap.css">
	<link rel="stylesheet" href="/baodan/Public/assets/js/daterangepicker/daterangepicker-bs3.css">

	<!-- Bottom Scripts -->
	<script src="/baodan/Public/assets/js/bootstrap.min.js"></script>
	<script src="/baodan/Public/assets/js/TweenMax.min.js"></script>
	<script src="/baodan/Public/assets/js/resizeable.js"></script>
	<script src="/baodan/Public/assets/js/joinable.js"></script>
	<script src="/baodan/Public/assets/js/xenon-api.js"></script>
	<script src="/baodan/Public/assets/js/xenon-toggles.js"></script>
	<script src="/baodan/Public/assets/js/datatables/js/jquery.dataTables.min.js"></script>
	<script src="/baodan/Public/assets/js/moment.min.js"></script>

	<!-- Imported scripts on this page -->
	<script src="/baodan/Public/assets/js/datatables/dataTables.bootstrap.js"></script>
	<script src="/baodan/Public/assets/js/datatables/yadcf/jquery.dataTables.yadcf.js"></script>
	<script src="/baodan/Public/assets/js/datatables/tabletools/dataTables.tableTools.min.js"></script>
	<script src="/baodan/Public/assets/js/daterangepicker/daterangepicker.js"></script>

	<!-- JavaScripts initializations and stuff -->
	<script src="/baodan/Public/assets/js/xenon-custom.js"></script>

</body>
</html>
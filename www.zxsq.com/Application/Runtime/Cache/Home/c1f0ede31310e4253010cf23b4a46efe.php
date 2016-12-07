<?php if (!defined('THINK_PATH')) exit();?>		﻿<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Xenon Boostrap Admin Panel" />
	<meta name="author" content="" />
	<title>中孝社区-积分报单后台管理平台</title>
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
						<a href="#" class="logo-expanded">
							<img src="/Public/assets/images/logo@2x.png" width="80" alt="" />
						</a>						
						<a href="#" class="logo-collapsed">
							<img src="/Public/assets/images/logo-collapsed@2x.png" width="40" alt="" />
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
					<li>
						<a href="/index.php/Home/Index/index">
							<i class="linecons-star"></i>
							<span class="title">首页</span>
						</a>
					</li>
					<li>
						<a href="/index.php/Home/Integralorder/index">
							<i class="linecons-star"></i>
							<span class="title">积分订单查询</span>
						</a>
					</li>
					<li>
						<a href="/index.php/Home/Integral/index">
							<i class="linecons-star"></i>
							<span class="title">积分退单查询</span>
						</a>
					</li>
					<li>
						<a href="/index.php/Home/Withdraw/index">
							<i class="linecons-star"></i>
							<span class="title">提现记录查询</span>
						</a>
					</li>
					<li>
						<a href="/index.php/Home/Lower/index">
							<i class="linecons-star"></i>
							<span class="title">下级用户查询</span>
						</a>
					</li>
					<li>
						<a href="/index.php/Home/Lower/high">
							<i class="linecons-star"></i>
							<span class="title">上级用户查询</span>
						</a>
					</li>
                    <li>
						<a href="/index.php/Home/Bonus/index">
							<i class="linecons-star"></i>
							<span class="title">奖金结算查询</span>
						</a>
					</li>
					<li>
						<a href="/index.php/Home/High/down">
							<i class="linecons-star"></i>
							<span class="title">下级贡献奖金</span>
						</a>
					</li>
					<li>
						<a href="/index.php/Home/High/up">
							<i class="linecons-star"></i>
							<span class="title">上级贡献奖金</span>
						</a>
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
				</ul>			
				<!-- 检索 -->
				<ul class="user-info-menu right-links list-inline list-unstyled">
					<!--<li class="search-form">
						<form method="get" action="extra-search.html">
							<input type="text" name="s" class="form-control search-field" placeholder="Type to search..." />
							<button type="submit" class="btn btn-link">
								<i class="linecons-search"></i>
							</button>
						</form>
					</li>-->
					<!-- 用户信息 -->
					<li class="dropdown user-profile">
						<a href="#" data-toggle="dropdown">
							<img src="/Public/assets/images/user-4.png" alt="user-image" class="img-circle img-inline userpic-32" width="28" />
							<span>
								<?php echo $_SESSION['username'];?>
								<i class="fa-angle-down"></i>
							</span>
						</a>
						<!-- 用户信息列表 -->
						<ul class="dropdown-menu user-profile-menu list-unstyled">
							<!--
							<li>
								<a href="#edit-profile">
									<i class="fa-edit"></i>
									New Post
								</a>
							</li>
							<li>
								<a href="#settings">
									<i class="fa-wrench"></i>
									Settings
								</a>
							</li>
							<li>
								<a href="#profile">
									<i class="fa-user"></i>
									Profile
								</a>
							</li>
							<li>
								<a href="#help">
									<i class="fa-info"></i>
									Help
								</a>
							</li>
							-->
							<li class="last">
								<a href="/index.php/Home/Index/out_login">
									<i class="fa-lock"></i>
									登出
								</a>
							</li>
						</ul>
					</li>
				</ul>	
			</nav>
			<div class="page-title">
				<div class="title-env">
					<h1 class="title">积分退单查询</h1>
					<p class="description"></p>
				</div>
				<div class="breadcrumb-env">
						<ol class="breadcrumb bc-1">
							<li>
								<a href="/index.php/Home/Index/login"><i class="fa-home"></i>Home</a>
							</li>
							<li class="active">
								<strong>积分退单查询</strong>
							</li>
						</ol>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="row">
					<div class="col-md-12">
						<form role="form" class="form-horizontal" name="frm" action="/index.php/Home/Integral/index" method="get">
							<div class="panel-body">
								<div class="form-group">
									<label class="col-sm-1 control-label" for="username">用户名</label>
									<div class="col-sm-2">
                                                                            <input type="text" class="form-control" id="username" name="username" placeholder="请输入" value='<?php echo ($name); ?>' >
									</div>
									<label class="col-sm-1 control-label" for="bankno">退单日期</label>
									<div class="col-sm-2">
										<input id="finishdate" name="date" class="form-control daterange" data-format="YYYY-MM-DD" data-start-date="2016-11-01 13:18:45" data-end-date="2016-11-01 13:18:45" data-separator=" 至 " value="<?php echo ($date); ?>" type="text">
									</div>
									<label class="col-sm-1 control-label" for="bankno">订单状态</label>
									<div class="col-sm-2">
										<select class="form-control" name="status">
                                                                                    <option value="">全部</option>
                                                                                    <option value="4">待审核</option>
                                                                                    <option value="5">已退单</option>
										</select>
									</div>
									<button class="btn btn-secondary col-sm-1">查询</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="row">					
					<div class="panel-body">
						<table class="table table-striped table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>序号</th>
									<th>用户名(姓名)</th>
									<th>银行名称</th>
									<th>银行卡号</th>
									<th>退单数量</th>
									<th>应退金额</th>
									<th>应扣管理费</th>
									<th>应扣手续费</th>
									<th>实退金额</th>
									<th >退单日期</th>
									<th>到账日期</th>
									<th >状态</th>
									<th>操作员</th>
								</tr>
							</thead>
							<tbody>
                                                        <?php if(isset($_GET['p'])){ $p=$_GET['p']; $i=1+10*($p-1); }else{ $i=1;} ?>
                                                          <?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr>
									<td><?php echo $i;$i++; ?></td>
									<td><?php echo ($vo["member_name"]); ?>(<?php echo ($vo["member_truename"]); ?>)</td>
									<td><?php echo ($vo["bankname"]); ?></td>
									<td><?php echo ($vo["bankcard"]); ?></td>
									<td><?php echo ($vo["declaration_num"]); ?></td>
									<td><?php echo ($vo["declaration_price"]); ?></td>
									<td><?php echo ($vo["management"]); ?></td>
									<td><?php echo ($vo["poundage"]); ?></td>
									<td><?php echo ($vo["amount"]); ?></td>
									<td><?php echo ($vo["declaration_date"]); ?></td>
									<td><?php echo ($vo["recordtime"]); ?></td>
									<td><?php if($vo['status']==4){echo "待审核";}else if($vo['status']==5){echo "已退单";}?></td>
									<td><?php echo ($vo["username"]); ?></td>
								</tr><?php endforeach; endif; ?>
							</tbody>
						</table>
					                                <div class="row"><div class="col-xs-6"><div class="dataTables_info" id="example-1_info" role="status" aria-live="polite"></div></div><div class="col-xs-6"><div class="dataTables_paginate paging_simple_numbers" id="example-1_paginate"><?php echo ($show); ?></div></div></div>
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
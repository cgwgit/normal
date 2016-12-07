<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Xenon Boostrap Admin Panel" />
        <meta name="author" content="" />
        <title>中孝证券</title>
        <link rel="stylesheet" href="../Public/assets/css/fonts/linecons/css/linecons.css">
        <link rel="stylesheet" href="../Public/assets/css/fonts/fontawesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../Public/assets/css/bootstrap.css">
        <link rel="stylesheet" href="../Public/assets/css/xenon-core.css">
        <link rel="stylesheet" href="../Public/assets/css/xenon-forms.css">
        <link rel="stylesheet" href="../Public/assets/css/xenon-components.css">
        <link rel="stylesheet" href="../Public/assets/css/xenon-skins.css">
        <link rel="stylesheet" href="../Public/assets/css/custom.css">

        <script src="../Public/assets/js/jquery-1.11.1.min.js"></script>
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
												<img src="../Public/assets/images/logo@2x.png" width="80" alt="" />
										</a>						
										<a href="#" class="logo-collapsed">
												<img src="../Public/assets/images/logo-collapsed@2x.png" width="40" alt="" />
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
							<li class="has-sub expanded">
								<a href='#' disabled>
									<i class="linecons-cog"></i>
									<span class="title">系统管理</span>
								</a>
								<ul style="display: block;">
									<li>
										<a href='sec_lotlist.php'>
											<span class="title">证券份额列表</span>
										</a>
									</li>
									<li>
										<a href='sec_scalelist.php'>
											<span class="title">证券兑换率列表</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="has-sub expanded">
								<a href='user_list.php' >
									<i class="linecons-user"></i>
									<span class="title">用户管理</span>
								</a>
								<ul style="display: block;">
									<li>
										<a href='user_list.php'>
											<span class="title">用户管理</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="has-sub expanded">
								<a href='user_list.php' >
									<i class="linecons-money"></i>
									<span class="title">中孝证券</span>
								</a>
								<ul style="display: block;">
									<li>
										<a href='user_secaccount.php'>
											<span class="title">用户证券账户</span>
										</a>
									</li>
									<li>
										<a href='user_secdetail.php'>
											<span class="title">用户证券订单</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="has-sub expanded">
								<a href='#' >
									<i class="linecons-wallet"></i>
									<span class="title">财务管理</span>
								</a>
								<ul style="display: block;">
									<li>
										<a href='user_recharge.php'>
											<span class="title">用户充值订单</span>
										</a>
									</li>
									<li>
										<a href='user_cashlist.php'>
											<span class="title">用户提现订单</span>
										</a>
									</li>
									<li>
										<a href='user_walletlist.php'>
											<span class="title">用户钱包明细</span>
										</a>
									</li>
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
													<i class="<!--fa-envelope-o-->">当前用户：admin</i>
													<span class="badge badge-green"></span>
											</a>
									</li>
									<li class="dropdown hover-line" style="min-height: 77px;">
											<a href="#" data-toggle="dropdown">
													<i class="<!--fa-bell-o-->">剩余证券购买份额：3000,000,000</i>
													<span class="badge badge-purple"></span>
											</a>
									</li>
									<li class="dropdown hover-line" style="min-height: 77px;">
											<a href="#" data-toggle="dropdown">
													<i class="<!--fa-bell-o-->">实时证券兑换率：<span class="text-danger">0.10</span></i>
													<span class="badge badge-purple"></span>
											</a>
									</li>
									<li class="dropdown hover-line" style="min-height: 77px;">
											<a href="#" data-toggle="dropdown">
													<i class="<!--fa-bell-o-->">今日成单数量：<span class="text-danger">35</span></i>
													<span class="badge badge-purple"></span>
											</a>
									</li>
									<li class="dropdown hover-line" style="min-height: 77px;">
											<a href="#" data-toggle="dropdown">
													<i class="<!--fa-bell-o-->">今日成单份额：<span class="text-danger">100,000,000</span></i>
													<span class="badge badge-purple"></span>
											</a>
									</li>
							</ul>
							<!-- 检索 -->
							<ul class="user-info-menu right-links list-inline list-unstyled">
									<!-- 用户信息 -->
									<li class="dropdown user-profile">
											<a href="/zxzq/index.php/Home/Login/logout" >
													<span>
															安全退出
															<i class="fa-lock"></i>
													</span>
											</a>
									</li>
							</ul>
					</nav>
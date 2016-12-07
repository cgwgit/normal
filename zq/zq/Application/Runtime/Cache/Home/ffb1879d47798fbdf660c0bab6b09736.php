<?php if (!defined('THINK_PATH')) exit();?>		<html lang="en">
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
                        <?php foreach($menu as $k => $v){ ?>
                        <li class="has-sub">
                            <a href='#' disabled>
                                <i class="linecons-star"></i>
                                <span class="title"><?php echo $v['name']; ?></span>
                            </a>
                            <ul id="<?php echo $v['id'];?>">
                                <?php foreach($v['list'] as $kk => $vv){ ?>
                                <li>
                                    <?php  $check = CONTROLLER_NAME . "/" . ACTION_NAME; $is_check = strstr($vv['url'], $check); ?>
									<?php if($is_check){ ?> 
									<style> #<?php echo $v['id']; ?>{display : block;} </style>
									<?php } ?>
                                    <a href='<?php echo $vv['url'] ?>' <?php if($is_check){ ?> style="color:#fff;"<?php } ?>>
                                        <span class="title"><?php echo $vv['name'] ?></span>
                                    </a>
                                </li>
                                <?php } ?>
                            </ul>
                        </li>
                        <?php } ?>

						<li>

                         <li>

                   <!--       <li>
                            <a href="/index.php/Home/Search/index?id=1" <?php if($_GET['id'] == 1){ ?>style="color:#fff;"<?php } ?>>
                               <i class="linecons-star"></i>
                                <span class="title">数据表检索</span>
                            </a>
                        </li> -->
                              <li>
                            <a href="/index.php/Home/Search/index?id=1" <?php if($_GET['id'] == 1){ ?>style="color:#fff;"<?php } ?>>
                               <i class="linecons-star"></i>
                                <span class="title">数据表检索</span>
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
                        <li class="dropdown hover-line" style="min-height: 77px;">
                            <a href="#" data-toggle="dropdown">
                                <i class="<!--fa-envelope-o-->">当前用户：<?php echo ($_SESSION['userData']['username']); ?></i>
                                <span class="badge badge-green"></span>
                            </a>
                        </li>
                        <li class="dropdown hover-line" style="min-height: 77px;">
                            <a href="#" data-toggle="dropdown">
                                <i class="<!--fa-bell-o-->">注册时间 ： <?php echo ($_SESSION['userData']['ctime']); ?></i>
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
                            <a href="/index.php/Home/Login/logout" >
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
					<h1 class="title">证券表相关信息查询</h1>
					<p class="description"></p>
				</div>
				<div class="breadcrumb-env">
						<ol class="breadcrumb bc-1">
							<li>
								<a href="/index.php/Home/Index/login"><i class="fa-home"></i>Home</a>
							</li>
							<li class="active">
								<strong>证券表相关信息查询</strong>
							</li>
						</ol>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="row">
					<div class="col-md-12">
						<form role="form" class="form-horizontal" name="frm" action="/index.php/Home/Search/index/id/1" method="get">
							<div class="panel-body">
								<div class="form-group">
									<label class="col-sm-1 control-label" for="username">表名</label>
									<div class="col-sm-2">
									<select class="form-control" name="list">
									        <option value="">请选择</option>
									        <option value="12">钱包表</option> 
                                            <option value="1" selected="selected">钱包充值记录表</option> 
                                            <option value="2">证券发行数量表</option>
                                            <option value="3">保单推荐人奖励表</option> 
                                            <option value="4">生成证券报单记录表</option>
                                            <option value="5">换算率表</option> rate
                                            <option value="6">证券人员基本信息表 </option>
                                            <option value="7">积分、福利、可提现记录生成记录表</option>
                                            <option value="8">持有证券数表</option>
                                            <option value="9">投资额表 </option>
                                            <option value="10">用户可提现证券明细</option>
                                            <option value="11">用户可提现证券余额</option>
									</select>                     
									</div>
									<label class="col-sm-1 control-label" for="bankno">用户名</label>
									<div class="col-sm-1">
									       <input type="text" class="form-control" id="username" name="username" placeholder="请输入"  >
									</div>
									<label class="col-sm-1 control-label" for="bankno">充值单号</label>
									<div class="col-sm-1">
									       <input type="text" class="form-control" id="username" name="paysn" placeholder="请输入"  >
									</div>
									<label class="col-sm-1 control-label" for="username">支付方式</label>
									<div class="col-sm-1">
									<select class="form-control" name="type">
									       <option value="">请选择</option>
									       <option value="1">支付宝</option>
									       <option value="2">微信</option>
									       <option value="3">丰付支付</option>
									       <option value="4">证券提现</option>
									       <option value="5">购买证券</option>
									</select>
									</div>
								     <label class="col-sm-1 control-label" for="username">排序字段</label>
									<div class="col-sm-1">
									<select class="form-control" name="field">
									      <option value="">请选择</option>
									      <option value="0">充值金额</option>
									      <option value="1">手续费</option>
									      <option value="2">实际金额</option>
									      <option value="3">充值时间</option>
									      <option value="4">交易流水号</option>
									      <option value="5">充值订单号</option>
									      <option value="6">订单状态</option>
									      <!-- <option value="6">用户名</option> -->
									      <!-- <option value="3">用户名</option> -->
									      <!-- <option value="3">银行名称</option> -->
									</select>
									</div>
									<label class="col-sm-1 control-label" for="username">排序</label>
									<div class="col-sm-1">
									<select class="form-control" name="sort">
									      <option value="">请选择</option>
									      <option value="1">升序</option>
									      <option value="2">降序</option>
									</select>
									</div>
									<label class="col-sm-1 control-label" for="bankno">充值时间</label>
									<div class="col-sm-2">
										<input id="finishdate" name="date" class="form-control daterange" data-format="YYYY-MM-DD" data-start-date="2016-11-01 13:18:45" data-end-date="2016-11-01 13:18:45" data-separator=" 至 " value="<?php echo ($date); ?>" type="text">
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
									<th>充值金额</th>
									<th>手续费</th>
									<th>实际金额</th>
									<th>交易流水号</th>
									<th>支付方式</th>
									<th>充值订单号表</th>
									<th>订单状态</th>
									<th>充值时间</th>
								</tr>
							</thead>
							<tbody>
                               <?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr>
										<td><?php echo ($vo["id"]); ?></td>
										<td><?php echo ($vo["member_name"]); ?></td>
										<td><?php echo ($vo["paymoney"]); ?></td>
										<td><?php echo ($vo["paypmoney"]); ?></td>
										<td><?php echo ($vo["payrmoney"]); ?></td>
										<td><?php echo ($vo["payid"]); ?></td>
										<td><?php if($vo['paytype']==1){echo "支付宝";}else if($vo['paytype']==2){echo "微信";}else if($vo['paytype']==3){echo "丰付支付 ";}else if($vo['paytype']==4){echo "证券提现";}else if($vo['paytype']==5){echo "购买证券";}?></td>
										<td><?php echo ($vo["paysn"]); ?></td>
										<td><?php if($vo['paystatus']==0){echo "待支付";}else if($vo['paystatus']==1){echo "已支付";}?></td>
										<td><?php echo ($vo["paytime"]); ?></td>	
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
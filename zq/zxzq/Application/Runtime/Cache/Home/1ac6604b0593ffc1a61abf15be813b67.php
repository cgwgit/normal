<?php if (!defined('THINK_PATH')) exit();?><html lang="en">
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
                                        <?php
 foreach($menu as $k => $v){ ?>
					<li>
                                            <?php  $check = CONTROLLER_NAME . "/" . ACTION_NAME; $is_check = strstr($v['url'], $check); ?>
                                            <a href='<?php echo $v['url']; ?>' <?php if($is_check){ ?>style="color:#fff;"<?php } ?>>
                                                <i class="linecons-star"></i>
                                                <span class="title"><?php echo $v['name']; ?></span>
                                            </a>
					</li>
                                        <?php } ?>
				</ul>
			</div>
		</div>
		<div class="main-content">
			<!-- User Info, Notifications and Menu Bar -->
<div class="page-title">
    <div class="title-env">
        <h1 class="title"><?php echo $title; ?></h1>
        <p class="description"></p>
    </div>
    <div class="breadcrumb-env">
        <ol class="breadcrumb bc-1">
            <li>
                <a href="#"><i class="fa-home"></i>Home</a>
            </li>
            <li class="active">
                <strong><?php echo $title; ?></strong>
            </li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <form role="form" id="form" class="form-horizontal" enctype="multipart/form-data" name='fam' action="/index.php/Home/Config/doEditGoods" method="post">
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="field-1">购买金额：</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="price" name="price" value="<?php echo $data['price']; ?>">
                        </div>
                    </div>
                    <div class="form-group-separator"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="field-1">证券系数：</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="levered" name="levered" value="<?php echo $data['levered']; ?>">
                        </div>
                    </div>
                    <div class="form-group-separator"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="field-1">第一推荐分红系数：</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="t_1" name="t_1" value="<?php echo $data['t_1']; ?>">
                        </div>
                    </div>
                    <div class="form-group-separator"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="field-1">第二推荐分红系数：</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="t_2" name="t_2" value="<?php echo $data['t_2']; ?>">
                        </div>
                    </div>
                    <div class="form-group-separator"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="field-1">第三推荐分红系数：</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="t_3" name="t_3" value="<?php echo $data['t_3']; ?>">
                        </div>
                    </div>
                    <div class="form-group-separator"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label"></label>
                        <label class="col-sm-2 control-label" for="field-1" style="text-align:left;">
                            <button class="btn btn-red btn-icon btn-icon-standalone" id="abv"  name='btn' >
                            <i class="fa-magic"></i><span>保存</span>
                            </button>                            
                        </label>
                    </div>
                </div>
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
            </form>
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
</div></div>
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
<?php if (!defined('THINK_PATH')) exit();?><html lang="en">
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
                                <img src="/zheng/Public/assets/images/logo@2x.png" width="80" alt="" />
                            </a>						
                            <a href="#" class="logo-collapsed">
                                <img src="/zheng/Public/assets/images/logo-collapsed@2x.png" width="40" alt="" />
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
                            <a href="/zheng/index.php/Home/Login/logout" >
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
        <h1 class="title"><?php echo $title; ?></h1>
        <p class="description"></p>
    </div>
    <div class="breadcrumb-env">
        <ol class="breadcrumb bc-1">
            <li>
                <a href="/index.php/Home/Config/goodsList"><i class="fa-home"></i>Home</a>
            </li>
            <li class="active">
                <strong>><?php echo $title; ?></strong>
            </li>
        </ol>
    </div>
</div>
<div class="panel panel-default">
    <div class="row">					
        <div class="panel-body">
            <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>序号</th>
                        <th>份额</th>
                        <th>证券系数</th>
                        <th>一级推荐分成</th>
                        <th>二级推荐分成</th>
                        <th>三级推荐分成</th>
                        <th>最后操作时间</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  if($list){ foreach($list as $k => $v){ ?>
                    <tr>
                        <td><?php echo $v['id']; ?></td>
                        <td><?php echo $v['price']; ?></td>
                        <td><?php echo $v['levered']; ?></td>
                        <td><?php echo $v['t_1']; ?></td>
                        <td><?php echo $v['t_2']; ?></td>
                        <td><?php echo $v['t_3']; ?></td>
                        <td><?php echo $v['utime']; ?></td>
                        <td><a href="<?php echo U('Index/editGoods', array('goodsId'=>$v['id'])); ?>">[编辑]</a></td>
                    </tr>
                    <?php }} ?>
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
</div></div>
<!-- 界面加载效果 -->
<!-- -->
<div class="page-loading-overlay">
        <div class="loader-2"></div>
</div>

<!-- Imported styles on this page -->
<link rel="stylesheet" href="/zheng/Public/assets/js/datatables/dataTables.bootstrap.css">
<link rel="stylesheet" href="/zheng/Public/assets/js/daterangepicker/daterangepicker-bs3.css">

<!-- Bottom Scripts -->
<script src="/zheng/Public/assets/js/bootstrap.min.js"></script>
<script src="/zheng/Public/assets/js/TweenMax.min.js"></script>
<script src="/zheng/Public/assets/js/resizeable.js"></script>
<script src="/zheng/Public/assets/js/joinable.js"></script>
<script src="/zheng/Public/assets/js/xenon-api.js"></script>
<script src="/zheng/Public/assets/js/xenon-toggles.js"></script>
<script src="/zheng/Public/assets/js/datatables/js/jquery.dataTables.min.js"></script>
<script src="/zheng/Public/assets/js/moment.min.js"></script>

<!-- Imported scripts on this page -->
<script src="/zheng/Public/assets/js/datatables/dataTables.bootstrap.js"></script>
<script src="/zheng/Public/assets/js/datatables/yadcf/jquery.dataTables.yadcf.js"></script>
<script src="/zheng/Public/assets/js/datatables/tabletools/dataTables.tableTools.min.js"></script>
<script src="/zheng/Public/assets/js/daterangepicker/daterangepicker.js"></script>

<!-- JavaScripts initializations and stuff -->
<script src="/zheng/Public/assets/js/xenon-custom.js"></script>
</body>
</html>
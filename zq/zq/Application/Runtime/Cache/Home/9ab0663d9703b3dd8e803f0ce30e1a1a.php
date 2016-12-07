<?php if (!defined('THINK_PATH')) exit();?><html lang="en">
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
                            <a href="/index.php/Home/Table/index?id=1" <?php if($_GET['id'] == 1){ ?>style="color:#fff;"<?php } ?>>
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
        <h1 class="title">用户充值订单</h1>
        <p class="description"></p>
    </div>
    <div class="breadcrumb-env">
        <ol class="breadcrumb bc-1">
            <li>
                <a href="/index.php/Home/Index/index"><i class="fa-home"></i>Home</a>
            </li>
            <li class="active">
                <strong>用户充值订单</strong>
            </li>
        </ol>
    </div>
</div>
<!-- Errors container -->
<div class="message-container">

</div>
<div class="panel panel-default">
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <form role="form" class="form-horizontal" action="/index.php/Home/Financial/useRecharge" method="get">
                    <div class="form-group">
                        <label class="col-sm-1 control-label" for="username">用户名</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="username" id="username" placeholder="请输入用户名/真实姓名/用户编号" value="<?php echo $username; ?>" >
                        </div>
                        <label class="col-sm-1 control-label" for="applytime">充值时间</label>
                        <div class="col-sm-2">
                            <input class="form-control daterange active" id="applytime" name="applytime" type="text" value="<?php echo $applytime ? $applytime : ''?>">
                        </div>
                        <label class="col-sm-1 control-label">支付状态</label>
                        <div class="col-sm-2">
                            <select class="form-control" name='status'>
                                <option value='0' <?php echo $status==0 ? selected :'' ?>>全部</option>
                                <option value="1" <?php echo $status==1 ? selected :'' ?>>未支付</option>
                                <option value="2" <?php echo $status==2 ? selected :'' ?>>已支付</option>
                            </select>
                        </div>
                        <button class="btn btn-secondary col-sm-1">查询</button>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-small-font table-bordered table-striped" cellspacing="0">
            <thead>
                <tr>
                    <th>订单编号</th>
                    <th>用户名</th>
                    <th>充值金额</th>
                    <th>充值手续费</th>
                    <th>实际支付金额</th>
                    <th>第三方交易流水号</th>
                    <th>支付状态</th>
                    <th>支付时间</th>
                    <th>备注</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($result as $v){ ?>
                <tr>
                    <td><?php echo $v['id'] ?></td>
                    <td><?php echo $v['member_name'] ?></td>
                    <td><?php echo $v['paymoney'] ?></td>
                    <td><span class="text-danger"><?php echo $v['paypmoney'] ?></span></td>
                    <td><?php echo $v['payrmoney'] ?></td>
                    <td><?php echo $v['payid'] ?></td>
                    <td><?php echo $v['paystatus']==0 ? "未支付" : "已支付"; ?></td>
                    <td><?php echo $v['paytime'] ?></td>
                    <td></td>
                    <td>
                        <a onclick="$('.message-container .alert').slideUp('fast');
                                jQuery('#orderHand').modal('show', {backdrop: 'static'});" class="btn btn-blue btn-sm btn-icon icon-left">手工到账</a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
        <div class="row"><div class="col-xs-6"><div class="dataTables_info" id="example-1_info" role="status" aria-live="polite">共查询到<?php echo $count;?>条结果</div></div><div class="col-xs-6"><div class="dataTables_paginate paging_simple_numbers" id="example-1_paginate"><?php echo $show;?></div></div></div>
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
<script src="/Public/assets/js/inputmask/jquery.inputmask.bundle.js"></script>

<!-- JavaScripts initializations and stuff -->
<script src="/Public/assets/js/xenon-custom.js"></script>
</body>
</html>
<!-- orderHand (Confirm)-->
<div class="modal fade" id="orderHand" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">手工到账</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-2" class="control-label">订单编号：</label>
                            <input type="text" class="form-control" id="" name="" value="SN20161130151403001" disabled>
                        </div>
                        <div class="form-group">
                            <label for="field-2" class="control-label">用户名：</label>			
                            <input type="text" class="form-control" id="" name="" value="zxkj_n005" disabled>
                        </div>
                        <div class="form-group">
                            <label for="field-2" class="control-label">充值金额：</label>			
                            <input type="text" class="form-control" id="" name="" value="0.00" disabled>
                        </div>
                        <div class="form-group">
                            <label for="field-2" class="control-label">充值手续费：</label>			
                            <input type="text" class="form-control" id="" name="" value="0.00" disabled>
                        </div>
                        <div class="form-group">
                            <label for="field-2" class="control-label">实际支付金额：</label>			
                            <input type="text" class="form-control" id="" name="" value="0.00" disabled>
                        </div>
                        <div class="form-group">
                            <label for="field-2" class="control-label">第三方交易流水号：</label>			
                            <input type="text" class="form-control" id="" name="" value="">
                        </div>
                        <div class="form-group">
                            <label for="field-2" class="control-label">备注：</label>			
                            <input type="text" class="form-control" id="" name="" value="">
                        </div>
                    </div>
                </div>			
            </div>
            <div class="modal-footer">
                <button type="button" id="cancel" class="btn btn-white" data-dismiss="modal">取消</button>
                <button type="button" id="orderHand" class="btn btn-info" data-dismiss="modal" onclick="orderHand();">确认到帐</button>
            </div>
        </div>
    </div>
</div>

<script>
    function orderHand() {
        // Remove any alert
        $(".message-container .alert").slideUp('fast');

        // Show message
        $(".message-container").html('<div class="alert alert-success">\
                        <button type="button" class="close" data-dismiss="alert">\
                                        <span aria-hidden="true">&times;</span>\
                                        <span class="sr-only">Close</span>\
                        </button>\
                        订单充值成功！\
                        </div>');
        $(".message-container .alert").hide().slideDown();
    }
</script>
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
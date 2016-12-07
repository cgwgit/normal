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
		<h1 class="title"><?php echo $title; ?></h1>
		<p class="description"></p>
	</div>
	<div class="breadcrumb-env">
		<ol class="breadcrumb bc-1">
			<li>
				<a href="/index.php/Home/Index/index"><i class="fa-home"></i>Home</a>
			</li>
			<li class="active">
				<strong><?php echo $title; ?></strong>
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
				<form role="form" class="form-horizontal" action="<?php echo U('UserCenter/userFinance'); ?>" method="get">
                    <div class="form-group">
                        <label class="col-sm-1 control-label" for="username">用户名</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="username" id="username" placeholder="请输入用户名/真实姓名" value="<?php echo $user?>" >
                        </div>
                        <button class="btn btn-secondary col-sm-1">查询</button>
					</div>
				</form>
			</div>
		</div>
      <table class="table table-small-font table-bordered table-striped" cellspacing="0">
            <thead>
                <tr>	
                    <th>用户编号</th>
                    <th>用户名</th>
                    <th>证券推荐人</th>
                    <th>证券网络上级(位置)</th>
                    <th>可提现数量</th>
		    <th>持有证券数量</th>
		    <th>证券购买欠款</th>
                    <th>证券钱包余额</th>
		    <th>证券钱包冻结余额</th>
                    <th>注册时间</th>
		    <th></th>
                </tr>
            </thead>
            <tbody>
                  <?php foreach($res as $k => $v){ ?>
		<tr>
		    <td><?php echo $v['member_sn']; ?></td>
		    <td><?php echo $v['member_name']; ?></td>
                    <td><?php echo $v['securities_name']; ?></td>
		    <td><?php echo $v['network_name']; if($v['network_name']!=''){ echo '(';} echo substr($v['network_team'], strlen($v['network_team']) - 2, 2) == '01' ? '左侧' : '' ; ?>
                        <?php echo substr($v['network_team'], strlen($v['network_team']) - 2, 2) == '02' ? '右侧' : '' ; if($v['network_name']!=''){ echo ')';}?></td>
                    <td><span <?php if($v['status']==0) echo 'class="text-danger"';?>><?php echo $v['amount']; ?></span></td>
		    <td><?php echo $v['securitiesnum']; ?></td>
                    <td><span <?php  if($v['price']>0){echo 'class="text-danger"';}?>><?php echo $v['price']; ?></span></td>
		    <td><?php echo $v['money']; ?></td>
		    <td><?php echo $v['ktqsecurities']; ?></td>
                    <td><?php echo date('Y-m-d H:i:s', $v['member_time']); ?></td>
		    <td>
                        <a class="btn btn-turquoise btn-sm btn-icon icon-left zqrd" member_id="<?php echo $v['member_id']; ?>">证券入单</a>			
                        <a href="/index.php/Home/UserCenter/zqDetails/member_id/<?php echo ($v["member_id"]); ?>" class="btn btn-turquoise btn-sm btn-icon btn-blue icon-left " target="_blank" >订单详情</a>			
                        <a <?php if($v['status']==0){ echo 'class="btn btn-red btn-sm btn-icon icon-left zqUnLock"';}else{echo 'class="btn btn-gray btn-sm btn-icon icon-left zqUnLock"disabled';}?> member_name='<?php echo $v['member_name']; ?>' dj="<?php echo $v['ktqsecurities']; ?>"  member_id="<?php echo $v['member_id']; ?>"> <?php if($v['status']==0){ echo "可提现证券解冻";}else{echo "已激活";} ?></a>
                    </td>
                </tr>
                  </tr>
                <?php } ?>
            </tbody>
        </table>
	   <div class="row"><div class="col-xs-6"><div class="dataTables_info" id="example-1_info" role="status" aria-live="polite"></div></div><div class="col-xs-6"><div class="dataTables_paginate paging_simple_numbers" id="example-1_paginate"><?php echo $show; ?></div></div></div>
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
<!-- securityOrder (Confirm)-->
<div class="modal fade" id="securityOrder" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">证券入单</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-2" class="control-label">证券份额：</label>
                            <select class="form-control"  id="zqfe">
                                <option value='0'>--请选择--</option>
                                <?php foreach($list as $v){ ?>
                                <option value="<?php echo $v['id']; ?>"><?php echo $v['securities']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
						<div class="form-group">
                            <label for="field-2" class="control-label">杠杆率：</label>			
                            <input type="text" id='ggl' class="form-control" value="0.00" disabled>
                        </div>
						<div class="form-group">
                            <label for="field-2" class="control-label">实获证券数量：</label>			
                            <input type="text" id='shzq' class="form-control" value="0.00" disabled>
                        </div>
						<div class="form-group">
                            <label for="field-2" class="control-label">应付金额：</label>			
                            <input type="text" id='yfje' class="form-control" value="0.00" disabled>
                        </div>
                        <div class="form-group">
                            <label for="field-2" class="control-label">实收金额：</label>			
                            <input type="text" class="form-control" id="ssje" value="0.00" >
                        </div>
                    </div>
                </div>			
            </div>
            <div class="modal-footer">
                <input type="hidden" id="member_id" val="">
                <button type="button" id="cancel" class="btn btn-white" data-dismiss="modal"  onclick="location.reload()">取消</button>
                <button type="button" id="subrd" class="btn btn-info" data-dismiss="modal"">确认入单</button>
            </div>
        </div>
    </div>
</div>
<!-- securityThaw (Confirm)-->
<div class="modal fade" id="securityThaw" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">持有证券解冻</h4>
            </div>	
			<!-- Errors container -->
			<div class="securityThaw-container">

			</div>
            <div class="modal-body" id='jdMessage'>
                    陈奕迅 持有证券冻结数量：1000.00，确认解冻？
            </div>
            <input type='hidden' id='jsMmmber_id' val=''>
            <div class="modal-footer">
                <button type="button" id="cancel" class="btn btn-white" data-dismiss="modal">取消</button>
                <button type="button" id="jd_submit" class="btn btn-info" data-dismiss="modal">确认并解冻</button>
            </div>
        </div>
    </div>
</div>

<script>
    
    $('.zqrd').click(function(){
        $('.message-container .alert').slideUp('fast');
        $('#securityOrder').modal('show', {backdrop: 'static'});
        $('#member_id').val($(this).attr('member_id'));
        $('#ggl').val('0.00');
        $('#shzq').val('0.00');
        $('#yfje').val('0.00');
        $('#ssje').val('0.00');
    });
    
    $('#zqfe').change(function(){
        $.post('<?php echo U('UserCenter/getGoodsInfo') ?>', {goods_id : $(this).val()}, function(res){
            $('#ggl').val(res.ggl);
            $('#shzq').val(res.shzq);
            $('#yfje').val(res.yfje);
            $('#ssje').val(res.yfje);
        }, 'json');
    });
    
    $('#subrd').click(function(){
        var data = {
            id : $('#zqfe').val(),
            member_id : $('#member_id').val(),
            realprice : $('#ssje').val(),
        };
        
        $.post('<?php echo U('UserCenter/addOrder') ?>', data, function(res){
//            console.log(res);
            if(res.code != 0){
                alert(res.message);
            }else{
                alert(res.message);
                window.location.reload();
            }
        }, 'json');
        
        return false;
    });
    
    $('.zqUnlock').click(function(){
        $('.message-container .alert').slideUp('fast');
        $('#securityThaw').modal('show', {backdrop: 'static'});
        $('#jdMessage').html($(this).attr('member_name') + ' 持有证券冻结数量：' + $(this).attr('dj') + '，确认解冻？');
        $('#jsMmmber_id').val($(this).attr('member_id'));
    });
    
    $('#jd_submit').click(function(){
        console.log($('#jsMmmber_id').val());
        $.post('<?php echo U('UserCenter/zqUnLock'); ?>', {member_id : $('#jsMmmber_id').val()}, function(res){
            if(res.code != 0){
                alert(res.message);
            }else{
                alert(res.message);
                window.location.reload();
            }
        }, 'json');
        return false;
    });
    
    
    function securityOrder() {
            // Remove any alert
            $(".message-container .alert").slideUp('fast');

            // Show message
            $(".message-container").html('<div class="alert alert-success">\
                    <button type="button" class="close" data-dismiss="alert">\
                                    <span aria-hidden="true">&times;</span>\
                                    <span class="sr-only">Close</span>\
                    </button>\
                    证券入单成功！\
                    </div>');
            $(".message-container .alert").hide().slideDown();
    }

    function securityThaw() {
            // Remove any alert
            $(".message-container .alert").slideUp('fast');

            // Show message
            $(".message-container").html('<div class="alert alert-success">\
                    <button type="button" class="close" data-dismiss="alert">\
                                    <span aria-hidden="true">&times;</span>\
                                    <span class="sr-only">Close</span>\
                    </button>\
                    持有证券解冻成功！\
                    </div>');
            $(".message-container .alert").hide().slideDown();
    }
</script>
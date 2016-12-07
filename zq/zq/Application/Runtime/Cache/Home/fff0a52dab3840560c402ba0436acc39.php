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
<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-title"><i class="fa fa-bar-chart"></i>&nbsp;&nbsp;未设置网络位置用户</div>
    </div>
    <div class="panel-body">
        
        <form role="form" action="<?php echo U('UserCenter/setTeamSign'); ?>" class="form-horizontal" >
		<div class="panel-body">
			<div class="form-group">
				<label class="col-sm-1 control-label" for="username">用户名</label>
				<div class="col-sm-2">
					<input type="text" class="form-control" name="username" placeholder="请输入用户名" value="" >
				</div>
				<button class="btn btn-secondary col-sm-1">查询</button>
				<a onclick="jQuery('#modal-3').modal('show', {backdrop: 'static'});" val='' class="btn btn-secondary col-sm-1">
            新增用户
        </a></div>
		</div>
		</form>
		
    </div>
	
    <div class="panel-body">
        <table class="table table-small-font table-bordered table-striped" cellspacing="0">
            <thead>
                <tr>
                    <th>序号</th>
                    <th>用户名</th>
                    <th>用户编号</th>
                    <th>证券推荐人</th>
                    <th>证券网络上级</th>
                    <th>证券网络位置</th>
                    <th>持有证券数量</th>
                    <th>证券钱包余额</th>
                    <th>积分推荐人</th>
                    <th>持有积分数量</th>
                    <th>积分钱包余额</th>
                    <th>注册时间</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($res as $k => $v){ ?>
                <tr>
                    <td><?php echo $v['member_id']; ?></td>
					<td><?php echo $v['member_name']; ?></td>
                    <td><?php echo $v['member_sn']; ?></td>
                    <td><?php echo $v['securities_name']; ?></td>
                    <td><?php echo $v['network_name']; ?></td>
                    <td>
                        <?php  $inset_i = substr($v['network_team'], strlen($v['network_team']) - 2, 2); $inset = array( '01' => '左侧', '02' => '右侧', ); echo $inset[$inset_i] ? $inset[$inset_i] : $v['network_team']; ?>
                    </td>
                    <td><?php echo $v['securities']; ?></td>
                    <td><?php echo $v['money']; ?></td>
                    <td><?php echo $v['inviter_id']; ?></td>
                    <td><?php echo $v['amount']; ?></td>
                    <td><?php echo $v['zfqb']; ?></td>
                    <td><?php echo date('Y-m-d H:i:s', $v['member_time']); ?></td>

                    <td>
                        <div class="form-group">
                            <div class="col-sm-2" style="width: 110px">
                                <a href='javascript:void(0);' val='<?php echo $v['member_id']; ?>' tval='<?php echo $v['member_name']; ?>' class="btn btn-info btn-sm btn-icon icon-left setteam">
                                    设置网络位置
                                </a>
                            </div>
                            <div class='col-sm-2' style="width: 110px">
                                <a href='javascript:void(0);' tval="<?php echo $v['securities_id']; ?>" val='<?php echo $v['member_name']; ?>' class="btn btn-info btn-sm btn-icon icon-left setT">
                                    设置推荐人
                                </a>
                            </div>
                            <div class='col-sm-2' style="width: 120px">
                                <a href='javascript:void(0);' tval='<?php echo $v['member_name']; ?>' val="<?php echo $v['member_id']; ?>" class="btn btn-info btn-sm btn-icon icon-left clear_member">
                                    清除网络位置
                                </a>
                            </div>
                            <div class='col-sm-2' style="width:">
                                <a href='javascript:void(0);' valn="<?php echo $v['member_name']; ?>" val="<?php echo $v['member_id']; ?>" class="btn btn-info btn-sm btn-icon icon-left del_member">
                                    删除
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="row"><div class="col-xs-6"><div class="dataTables_info" id="example-1_info" role="status" aria-live="polite"></div></div><div class="col-xs-6"><div class="dataTables_paginate paging_simple_numbers" id="example-1_paginate"><?php echo $show; ?></div></div></div>
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
<script>
$(function(){
    $('.setteam').click(function(){
        $('#modal-4').modal('show', {backdrop: 'static'});
        $('#modal-4').find('#member_id').val($(this).attr('val'));
        $('#modal-4').find('#member_name').val($(this).attr('tval'));
    });
    
    $('.setT').click(function(){
        $('#modal-5').modal('show', {backdrop: 'static'});
        $('#modal-5').find('#t_member_name').val($(this).attr('val'));
        $('#modal-5').find('#tname').val($(this).attr('tval'));
    });
    
    $('.teamwork').change(function(){
        console.log($(this).val())
        $.post('<?php echo U('UserCenter/getNext');?>', {network_team : $(this).val()}, function(res){
//            console.log(res);
            $('#setteamwork').html(res);
        });
    });
    
    $('#submit').click(function(){
        member_id = $('#member_id').val()
        member_name = $('#member_name').val()
        teamwork = $('#setteamwork').val();
        tname = $('#tname').val();
        if(member_id && teamwork != 0){
            $.post('<?php echo U('UserCenter/setTeamwork');?>', {member_id : member_id, teamwork : teamwork}, function(res){
                if(res){
                    alert('编辑成功');
                    window.location.reload();
                }
            });
        }else{
            alert('信息填写不完整');
        }
        
        return false;
    });
    
    $('#reload').click(function(){
        $.post('<?php echo U('UserCenter/reload');?>', {member_name : $('#name').val()}, function(res){
            $('.teamwork').html(res.u);
            $('#setteamwork').html(res.c);
        }, 'json');
    });
    
    $('#tsubmit').click(function(){
        var member_name = $('#tname').val();
        var password = $('#tpassword').val();
        var securities_id = $('#t_name').val() ? $('#t_name').val() : '';
        if(!member_name || !password){
            alert('信息填写不完整');
            return false;
        }
        var data = {
            member_name : member_name,
            password : password,
            securities_id : securities_id,
        };
        
        $.post('<?php echo U('UserCenter/addMember'); ?>', data, function(res){
            if(res.code != 0){
                alert(res.message);
                return false;
            }else{
                alert('添加成功');
                window.location.reload();
            }
        }, 'json');
    });
    
    $('#t_submit').click(function(){
        member_name = $('#t_member_name').val();
        securities_id = $('#securities_id').val();
        $.post('<?php echo U('UserCenter/setSecurities');?>', {securities_id : securities_id, member_name : member_name}, function(data){
            if(data.code != 0){
                alert(data.message);
            }else{
                alert(data.message);
                window.location.reload();
            }
        }, 'json');
        return false;
    });
    
    $('.del_member').click(function(){
        var a=confirm("确认删除用户[" + $(this).attr('valn') + "]吗？");
        if(a==true){
            var member_id = $(this).attr('val');
            $.post('<?php echo U('UserCenter/delUser'); ?>', {member_id : member_id}, function(res){
                if(res.code != 0){
                        alert(res.message);
                        return false;
                }else{
                        alert(res.message);
                        window.location.reload();
                }
            },'json');
        }else{
            return false;
        }
    });

    $('.clear_member').click(function(){
        var con = confirm('确认清除[' + $(this).attr('tval') + ']的网络位置么');
        if(con){
            $.post('<?php echo U('UserCenter/clearTeamWork') ?>', {member_id : $(this).attr('val')}, function(res){
                if(res.code != 0){
                    alert(res.message);
                }else{
                    alert(res.message);
                    window.location.reload();
                }
            }, 'json');
        }
    });
    $('#snbtn').click(function(){
        var membername=$("#member_name").val();
        var teamplace=$("#teamplace").val();
        var membersn=$("#member_sn").val();
        $.post('<?php echo U('UserCenter/teamPlace') ?>', {membername : membername, place : teamplace, membersn : membersn }, function(res){
            if(res.code==0){
                alert(res.message);
                window.location.reload();
            }else{
                alert(res.message);
            }
        }, 'json');
    });
})
    function fff(){
        $.post('<?php echo U('UserCenter/detection') ?>', {member_sn : $("#member_sn").val()}, function(res){
            if(res.code=='1'){
                alert(res.message);
            }else{
                $("#teamplace").html(res.message);
            }
        }, 'json');
    }
    
</script>
</body>
</html>
<!-- Modal 3 (Confirm)-->
<div class="modal fade" id="modal-3" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">新增用户</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-2" class="control-label">用户名(必填)：</label>			
                            <input type="text" class="form-control" name="tname" id="tname" value="">
                        </div>
                        <div class="form-group">
                            <label for="field-2" class="control-label">登录密码(必填)：</label>			
                            <input type="text" class="form-control" name="password" id="tpassword" value="">
                        </div>
                        <div class="form-group">
                            <label for="field-2" class="control-label">推荐人(非必填)：</label>			
                            <input type="text" class="form-control" name="t_name" id="t_name" value="">
                        </div>
                    </div>
                </div>			
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">取消</button>
                <button t ype="button" id="tsubmit" class="btn btn-info" data-dismiss="modal">保存并关闭</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal 4 (Confirm)-->
<div class="modal fade" id="modal-4" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">设置用户网络位置(方法一)</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form role="form" class="form-horizontal" method="post">
                        <div class="form-group">
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="name">用户名</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="name" id="name" value="zxkj">
                                </div>
                                <a href="javascript:void(0);" class="btn btn-secondary" id="reload">
                                重新加载下六级空位
                                </a>
                            </div>
                        </div>			
                    </form>
                </div>
            </div>		
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">						
                        <div class="form-group">
                            <label for="field-1" class="control-label">上级用户：</label>							
                            <select class="form-control teamwork">
                                <option value='0'>--请选择--</option>
                                <?php foreach($arr as $v){ ?>
                                <option value='<?php echo $v['network_team']; ?>'><?php echo $v['member_name']; ?></option>
                                <?php } ?>
                            </select>
                        </div>							
                    </div>					
                    <div class="col-md-6">						
                        <div class="form-group">
                            <label for="field-2" class="control-label">网络位置：</label>							
                            <select class="form-control" id="setteamwork">
                                <option value='0'>--请选择--</option>
                            </select>
                        </div>					
                    </div>
                </div>
            </div>
            <input type="hidden" value="" id="member_id">
            <input type="hidden" value="" id="member_name">
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">取消</button>
                <button type="button" id="submit" class="btn btn-info" data-dismiss="modal">保存并关闭</button>
            </div>
            <div class="modal-header">
                <h4 class="modal-title">设置用户网络位置(方法二)</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form role="form" class="form-horizontal" method="post">
                        <div class="form-group">
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="name">用户编号</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="member_sn" id="member_sn" value="">
                                </div>
                                <a href="javascript:void(0);" class="btn btn-secondary" id="detection" onclick="fff()">
                                检测
                                </a>
                            </div>
                        </div>			
                    </form>
                </div>
            </div>		
           <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">						
                        <div class="form-group">
                            <label for="field-1" class="control-label">网络位置：</label>							
                            <select class="form-control" id="teamplace">
                            </select>
                        </div>							
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">取消</button>
                <button type="button" id="snbtn" class="btn btn-info" data-dismiss="modal">保存并关闭</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal 5 (Confirm)-->
<div class="modal fade" id="modal-5" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">设置用户推荐人</h4>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="field-2" class="control-label">推荐人用户名(非必填)：</label>			
                        <input type="text" class="form-control" name="name" id="securities_id" value="">
                    </div>
                </div>	
            </div>
            <input type="hidden" value="" id="t_member_name">
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">取消</button>
                <button type="button" id="t_submit" class="btn btn-info" data-dismiss="modal">保存并关闭</button>
            </div>
        </div>
    </div>
</div>
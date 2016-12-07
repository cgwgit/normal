<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Xenon Boostrap Admin Panel" />
        <meta name="author" content="" />
        <title>中孝社区-积分报单系统</title>
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
    <body class="page-body skin-facebook ">
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
                                <img src="/Public/assets/images/logo@2x.png" width="80" alt="" />
                            </a>						
                            <a href="index.html" class="logo-collapsed">
                                <img src="/Public/assets/images/logo@2x.png" width="40" alt="" />
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
                        <li class="">
                            <a href="/index.php/Home/Index/index">
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
                        <!--                                        <li class="">
                                                                        <a href="/index.php/Home/Money/index">
                                                                                <i class="linecons-desktop"></i>
                                                                                <span class="title">奖金收益</span>
                                                                        </a>
                                                                </li>-->
                        <!--li class="has-sub">
                                <a href="">
                                        <i class="linecons-desktop"></i>
                                        <span class="title">奖金收益</span>
                                </a>
                                <ul>
                                        <li><a href="/index.php/Home/Money/index"><span class="title">推荐奖金</span></a></li>
                                        <li><a href="/index.php/Home/Money/edit"><span class="title">管理奖金</span></a></li>
                                        <li><a href="/index.php/Home/Money/Dividend"><span class="title">分红奖金</span></a></li>
                                        <li><a href="/index.php/Home/Money/Benefit"><span class="title">福利奖金</span></a></li>
                                        
                                </ul>
                        </li-->
                        <li class="has-sub">
                            <a href="">
                                <i class="linecons-desktop"></i>
                                <span class="title">钱包查询</span>
                            </a>
                            <ul>
                                <li><a href="/index.php/Home/Wallet/index"><span class="title">中孝钱包</span></a></li>
                                <!--li><a href="qbcx_zcjf.php"><span class="title">注册积分</span></a></li-->
                                <li><a href="/index.php/Home/Wallet/integral"><span class="title">中孝积分</span></a></li>
                                  <li><a href="/index.php/Home/Money/running"><span class="title">我的奖金</span></a></li>
                                <li><a href="/index.php/Home/Money/index"><span class="title">累计奖励收益</span></a></li>
                                <li><a href="/index.php/Home/Wallet/consume"><span class="title">消费积分</span></a></li>
                            </ul>
                        </li>
                        <li class="active opened active">
                            <a href="">
                                <i class="linecons-desktop"></i>
                                <span class="title">转账提现</span>
                            </a>
                            <ul>
                                <li class="active"><a href="/index.php/Home/Withdraw/index"><span class="title">账户转账</span></a></li>
                                <li><a href="/index.php/Home/Withdraw/record"><span class="title">转账记录</span></a></li>
                                <li><a href="/index.php/Home/Withdraw/apply"><span class="title">钱包提现</span></a></li>
                                <li><a href="/index.php/Home/Withdraw/txjl"><span class="title">提现记录</span></a></li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="/index.php/Home/Generalize/index">
                                <i class="linecons-desktop"></i>
                                <span class="title">我的团队</span>
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
                                <i class="<!--fa-envelope-o-->">当前用户：<?php echo ($_SESSION['userData']['member_name']); ?></i>
                                <span class="badge badge-green"></span>
                            </a>
                        </li>
                        <li class="dropdown hover-line" style="min-height: 77px;">
                            <a href="#" data-toggle="dropdown">
                                <i class="<!--fa-bell-o-->">注册时间 ： <?php echo (session('member_time')); ?></i>
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
                                <ul class="user-info-menu right-links list-inline list-unstyled">
					
					<li class="search-form"><!-- You can add "always-visible" to show make the search input visible -->
						
						
					</li>
					
					<li class="dropdown user-profile">
						<a href="#" data-toggle="dropdown">
							<span>
								使用帮助
								<i class="fa-angle-down"></i>
							</span>
						</a>
						
						<ul class="dropdown-menu user-profile-menu list-unstyled">
							<li>
								<a href="/index.php/Home/Show/index" target="_blank" >
									<i class="fa-edit"></i>
									平台登录流程
								</a>
							</li>
							<li>
								<a href="/index.php/Home/Show/show" target="_blank">
									<i class="fa-wrench"></i>
									平台报单流程
								</a>
							</li>
							<li>
								<a href="/index.php/Home/Show/xiadan" target="_blank">
									<i class="fa-user"></i>
									平台转账提现流程
								</a>
							</li>
							
						</ul>
					</li>
					
					
				</ul>
                </nav>
                <div class="page-title">
                    <div class="title-env">
                        <h1 class="title">账户转账 </h1>
                        <p class="description"></p>
                    </div>
                    <div class="breadcrumb-env">
                        <ol class="breadcrumb bc-1">
                            <li>
                                <a href="/index.php/Home/Index/index"><i class="fa-home"></i>Home</a>
                            </li>
                            <li class="active">
                                <strong>账户转账 </strong>
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-sm-4">
                           <div class="xe-widget xe-counter">
                                <div class="xe-icon">
                                        <i class="linecons-wallet"></i>
                                </div>
                                <div class="xe-label">
                                        <strong class="num"><?php echo ($ss["available_predeposit"]); ?></strong>
                                        <span>中孝钱包 </span>
                                </div>
                            </div>
                    </div>
                    <div class="col-sm-4">
                           <div class="xe-widget xe-counter">
                                <div class="xe-icon">
                                       <i class="fa-cny"></i>
                                </div>
                                <div class="xe-label">
                                        <strong class="num"><?php echo number_format($data['realreward'],2);?></strong>
                                        <span>奖金 </span>
                                </div>
                            </div>
                    </div>
                    <div class="col-sm-4">
                            <div class="xe-widget xe-counter">
                                <div class="xe-icon">
                                         <i class="linecons-money"></i>
                                </div>
                                <div class="xe-label">
                                        <strong class="num"><?php echo ($ss["available_rc_balance"]); ?></strong>
                                        <span>消费积分 </span>
                                </div>
                            </div>
                    </div>
                    
                </div>
                <!-- Basic Setup -->
                
                
                
                
                <div class="row">
                   
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <form role="form" class="form-horizontal" name="frm" action="/index.php/Home/Withdraw/account" method="post" >
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">转出账户：</label>
                                        <div class="col-sm-3">
                                            <select class="form-control">
                                                <option>奖金</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group-separator"></div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">目标账户：</label>
                                        <div class="col-sm-3">
                                            <select class="form-control" name="type" id="type" onchange="ff()">
                                                 <option value="3">中孝钱包（手续费<?php echo ($qianbao); ?>%）</option>
                                                 <option value="2">消费积分（手续费<?php echo ($jifen); ?>%）</option>
                                            </select>
                                            <input type="hidden" id="jifen" value="<?php echo ($jifen); ?>">
                                            <input type="hidden" id="qianbao" value="<?php echo ($qianbao); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group-separator"></div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="field-1" >转帐点数：</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control"  id="reward" onblur="f()" disabled="" value="<?php echo ($data["realreward"]); ?>" >
                                        </div>
                                    </div>
                                    <div class="form-group-separator"></div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="field-1">转账手续费：</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="shou" disabled="" value="<?php echo ($shou); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group-separator"></div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="field-1">实际转账点数：</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="shiji"   disabled="" value="<?php echo ($shiji); ?>">
                                        </div>
                                    </div>
                                    <input type="hidden" name="reward" value="<?php echo ($data["realreward"]); ?>">
                                    <script type="text/javascript">
                                        function ff() {
                                            var fei = document.getElementById("type").value;
                                            var jifen = document.getElementById("jifen").value;
                                            var qianbao = document.getElementById("qianbao").value;
                                            if (fei == 2) {
                                                var p = jifen;
                                            } else if (fei == 3) {
                                                var p = qianbao;
                                            }
                                            var num = document.getElementById("reward").value;
                                            if(num !=""){
                                                var num = document.getElementById("reward").value;


                                            var money = num * p/100;
                                            var shiji = num - money;
                                            document.getElementById("shou").value = money; // 将处理后的数值重新显示在页面
                                            document.getElementById("shiji").value = shiji; // 将处理后的数值重新显示在页面
                                            }
                                        }
                                        // 点击按钮会调用此方法
                                        function f() {
                                            var fei = document.getElementById("type").value
                                            if (fei == 2) {
                                                var p = 0.05;
                                            } else if (fei == 3) {
                                                var p = 0.2;
                                            }
//                                                      alert(p);
                                            var num = document.getElementById("reward").value;


                                            var money = num * p;
                                            var shiji = num - money;
                                            document.getElementById("shou").value = money; // 将处理后的数值重新显示在页面
                                            document.getElementById("shiji").value = shiji; // 将处理后的数值重新显示在页面






                                        }

                                    </script>
                                  <div style="min-height:10px"></div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"></label>
                                        <label class="col-sm-2 control-label" for="field-1" style="text-align:left;">
                                            
                                        <button class="btn btn-red btn-icon btn-icon-standalone" id="abv" name='btn' <?php if($date==1 || $date==4 || $date==5 || $date==6 || $date==7){echo "disabled ";} ?>>
                                            <i class="fa-magic"></i><span>确认转账</span>
                                        </button>
                                       	<script src="/Public/assets/jquery-1.11.1.min.js"></script>
	<script type="text/javascript">
    $(function(){
        $("#abv").one("click",function(){
//            alert("提交成功");
        });
        /*$("#abv").click(function());*/
    })
 </script>
                                            
                                     
                                        <script>
                                            function fff(){
                                                 document.getElementById("shou").value = ""; // 将处理后的数值重新显示在页面
                                            document.getElementById("shiji").value = ""; // 将处理后的数值重新显示在页面
                                            }
                                            
                                      </script>
                                    </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"></label>
                                        <label class="col-sm-2 control-label" style="text-align:left;"> <span style="color:red;">*</span> 此功能仅限星期二星期三开放</label>
                                    </div>
                                </div>
                     <script>
                            document.frm.btn.onclick = function() {
                                var e = document.getElementById("reward").value;
//                                alert(e);
                                if (e <= 0) {
                                    alert("奖金不足");
                                    return false;
                                }
                            }
                        

                        </script>

                                       
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
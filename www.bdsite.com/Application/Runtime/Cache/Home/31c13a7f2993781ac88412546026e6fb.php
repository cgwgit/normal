<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Xenon Boostrap Admin Panel" />
        <meta name="author" content="" />
        <title>中孝社区-积分报单系统</title>
        <link rel="stylesheet" href="/zxsq/Public/assets/css/fonts/linecons/css/linecons.css">
        <link rel="stylesheet" href="/zxsq/Public/assets/css/fonts/fontawesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="/zxsq/Public/assets/css/bootstrap.css">
        <link rel="stylesheet" href="/zxsq/Public/assets/css/xenon-core.css">
        <link rel="stylesheet" href="/zxsq/Public/assets/css/xenon-forms.css">
        <link rel="stylesheet" href="/zxsq/Public/assets/css/xenon-components.css">
        <link rel="stylesheet" href="/zxsq/Public/assets/css/xenon-skins.css">
        <link rel="stylesheet" href="/zxsq/Public/assets/css/custom.css">

        <script src="/zxsq/Public/assets/js/jquery-1.11.1.min.js"></script>
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
                                <img src="/zxsq/Public/assets/images/logo@2x.png" width="80" alt="" />
                            </a>						
                            <a href="index.html" class="logo-collapsed">
                                <img src="/zxsq/Public/assets/images/logo@2x.png" width="40" alt="" />
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
                            <a href="/zxsq/index.php/Home/Index/index">
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
                                                                        <a href="/zxsq/index.php/Home/Money/index">
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
                                        <li><a href="/zxsq/index.php/Home/Money/index"><span class="title">推荐奖金</span></a></li>
                                        <li><a href="/zxsq/index.php/Home/Money/edit"><span class="title">管理奖金</span></a></li>
                                        <li><a href="/zxsq/index.php/Home/Money/Dividend"><span class="title">分红奖金</span></a></li>
                                        <li><a href="/zxsq/index.php/Home/Money/Benefit"><span class="title">福利奖金</span></a></li>
                                        
                                </ul>
                        </li-->
                        <li class="active opened active">
                            <a href="">
                                <i class="linecons-desktop"></i>
                                <span class="title">钱包查询</span>
                            </a>
                            <ul>
                                <li ><a href="/zxsq/index.php/Home/Wallet/index"><span class="title">中孝钱包</span></a></li>
                                <!--li><a href="qbcx_zcjf.php"><span class="title">注册积分</span></a></li-->
                                <li class="active"><a href="/zxsq/index.php/Home/Wallet/integral"><span class="title">中孝积分</span></a></li>
                                  <li><a href="/zxsq/index.php/Home/Money/running"><span class="title">我的奖金</span></a></li>
                                <li><a href="/zxsq/index.php/Home/Money/index"><span class="title">累计奖励收益</span></a></li>
                                <li><a href="/zxsq/index.php/Home/Wallet/consume"><span class="title">消费积分</span></a></li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a href="">
                                <i class="linecons-desktop"></i>
                                <span class="title">转账提现</span>
                            </a>
                            <ul>
                                <li><a href="/zxsq/index.php/Home/Withdraw/index"><span class="title">账户转账</span></a></li>
                                <li><a href="/zxsq/index.php/Home/Withdraw/record"><span class="title">转账记录</span></a></li>
                                <li><a href="/zxsq/index.php/Home/Withdraw/apply"><span class="title">钱包提现</span></a></li>
                                <li><a href="/zxsq/index.php/Home/Withdraw/txjl"><span class="title">提现记录</span></a></li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="/zxsq/index.php/Home/Generalize/index">
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
						<a href="/zxsq/index.php/Home/Login/logout" >
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
								<a href="/zxsq/index.php/Home/Show/index" target="_blank" >
									<i class="fa-edit"></i>
									平台登录流程
								</a>
							</li>
							<li>
								<a href="/zxsq/index.php/Home/Show/show" target="_blank">
									<i class="fa-wrench"></i>
									平台报单流程
								</a>
							</li>
							<li>
								<a href="/zxsq/index.php/Home/Show/xiadan" target="_blank">
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
                        <h1 class="title">中孝积分 </h1>
                        <p class="description"></p>
                    </div>
                    <div class="breadcrumb-env">
                        <ol class="breadcrumb bc-1">
                            <li>
                                <a href="/zxsq/index.php/Home/Index/index"><i class="fa-home"></i>Home</a>
                            </li>
                            <li class="active">
                                <strong>中孝积分 </strong>
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">

                 
                        <div class="col-sm-2">                                
                            <div class="xe-widget xe-counter">
                                <div class="xe-icon">
                                        <i class="linecons-wallet"></i>
                                </div>
                                <div class="xe-label">
                                        <strong class="num"><?php echo ($data["intbalance"]); ?></strong>
                                        <span>中孝积分</span>
                                </div>
                            </div>
                        </div>
 
			
                    <div class="col-sm-4">
                        <div class="xe-widget xe-counter">
                            <div class="xe-upper">
                                <div class="xe-label">
                                    <strong>付款须知</strong>
                                    <span></span>
                                    <strong>由于平台在线支付功能暂未开通，请您通过转账方式向平台汇款，汇款时银行卡请填写当前账户绑定的银行卡号，并填写如下信息(转账时备注请填写您在平台用户名)</strong>
                                </div>
                            </div>
                            <div class="xe-lower">
                                <strong></strong>							
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="xe-widget xe-counter">
                            <div class="xe-upper">
                                <div class="xe-label">
                                    <strong>开户行：中国农业银行股份有限公司北京南湖中园支行</strong>
                                    <span></span>
                                    <strong>账户名：马长山</strong>
                                    <span></span>
                                    <strong>卡号：6228 4600 1801 0384 374</strong>
                                </div>
                            </div>
                            <div class="xe-lower">
                                <strong></strong>							
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="xe-widget xe-counter">
                            <div class="xe-upper">
                                <div class="xe-label">
                                    <strong>开户行：中信银行股份有限公司北京望京支行</strong>
                                    <span></span>
                                    <strong>账户名：马长山</strong>
                                    <span></span>
                                    <strong>卡号：6217 6807 0403 3492 </strong>
                                </div>
                            </div>
                            <div class="xe-lower">
                                <strong></strong>							
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="xe-widget xe-counter">
                            <div class="xe-upper">
                                <div class="xe-label">
                                    <strong>开户行：中国建设银行股份有限公司北京东土城路支行 </strong>
                                    <span></span>
                                    <strong>账户名：马长山</strong>
                                    <span></span>
                                    <strong>卡号：6217 0000 1007 3961 818 </strong>
                                </div>
                            </div>
                            <div class="xe-lower">
                                <strong></strong>							
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Basic Setup -->
                <div class="panel panel-default">
                    <div class="btn-group focus-btn-group">
                        <a href="javascript:;" onclick="jQuery('#modal-3').modal('show', {backdrop: 'fade'});" class="btn btn-red btn-icon">
                            <span>积分购买</span>
                            <i class="fa-money"></i>
                            </button></a>
                    </div>
<!--                    <div class="btn-group focus-btn-group" >
                        <a href="javascript:;" onclick="jQuery('#modal-4').modal('show', {backdrop: 'fade'});" class="btn btn-red btn-icon" <?php if($code['returnAmount']==NULL || $cc==3){ echo "style='display:none'"; }?> >
                           <span>积分退单</span>
                            <i class="fa-money"></i>
                            </button></a>
                    </div>-->
                    <div class="panel-body">
                        <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>序号</th>
                                    <th>交易类型</th>
                                    <th>积分数量</th>
                                    <th>交易金额</th>
                                    <th>手续费</th>
                                    <th>管理费</th>
                                    <th>实际交易金额</th>
                                    <th>提交日期</th>
                                    <th>绑定银行卡号</th>

                                    <th>到账日期</th>
                                    <th>交易状态</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody><?php if(isset($_GET['p'])){ $p=$_GET['p']; $i=1+10*($p-1); }else{ $i=1;} ?>
                            <?php if(is_array($amountrecord)): foreach($amountrecord as $key=>$vo): ?><tr>
                                    <td><?php echo $i; $i++?></td>
                                    <td><?php echo ($vo["type"]); ?></td>
                                    <td><?php echo ($vo["declaration_num"]); ?></td>
                                    <td><?php echo number_format($vo['declaration_price'],2);?></td>
                                    <td><?php echo ($vo["poundage"]); ?></td>
                                    <td><?php echo ($vo["management"]); ?></td>
                                    <td><?php echo number_format($vo['amount'],2);?></td>
                                    <td><?php echo ($vo["declaration_date"]); ?></td>
                                    <td><?php echo ($vo["bankcard"]); ?></td>
                                    <td><?php echo ($vo["recordtime"]); ?></td>
                                    <td><?php echo ($vo["status"]); ?></td>

                                    <td><?php if($vo["status"] == '积分订单未确认'): ?><a href="/zxsq/index.php/Home/Wallet/cancel/type/<?php echo ($vo["type"]); ?>/eid/<?php echo ($vo["eid"]); ?>" onclick= "if (confirm('是否确定！ ') == false)" class="btn btn-danger btn-m btn-icon icon-left">删除</a>
                                   </td><?php endif; ?></tr><?php endforeach; endif; ?>


                            </tbody>
                        </table>
                        <div class="row"><div class="col-xs-6"><div class="dataTables_info" id="example-1_info" role="status" aria-live="polite"></div></div><div class="col-xs-6"><div class="dataTables_paginate paging_simple_numbers" id="example-1_paginate"><?php echo ($page); ?></div></div></div>
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


        <!-- 积分充值 -->
        <div class="modal fade" id="modal-3">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">积分充值</h4>
                    </div>
                    <form action="/zxsq/index.php/Home/Wallet/update" method="post" name="form1">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">今日积分交易净值：</label>
                                        <label class="control-label"><?php echo number_format($equity['equity'],2);?>元/积分</label>
                                    </div>	
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">会员可购积分包数</label>
                                        <label class="control-label"><?php echo ($remainbalance["remainbalance"]); ?>包</label>
                                    </div>	
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label">购买积分包数(<?php echo ($remarks["value"]); ?>积分/包)：</label>
                                        <select id="remark" name="remark" onchange="GaiBian()" >      
                                            <?php if(is_array($stepinfo)): foreach($stepinfo as $key=>$stepinfo): ?><option  value="<?php echo ($stepinfo["step_value"]); ?>"><?php echo ($stepinfo["step_value"]); ?></option><?php endforeach; endif; ?>
                                        </select> 
                                    </div>	
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">预计支付金额：</label>
                                        <label class="control-label" id="spinner3">3000.00元</label>
                                    </div>	
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-white" data-dismiss="modal">取消</button>
                                <input type="submit" value="确认充值" name="submit"  class="btn btn-info" OnClick="return confirm('付款须知：\n\
            		\n\
            		平台在线支付功能暂未开通，请您通过其他方式向平台对公司进行汇款，汇款时银行卡请填写当前账户绑定的银行卡号，并填写如下信息。\n\
            		\n\
            		账户名：马长山\n\
            		卡号：6228 4600 1801 0384 374\n\
            		开户行：中国农业银行股份有限公司北京南湖中园支行\n\
            		\n\
            		账号名：马长山\n\
            		卡号：6217 6807 0403 3492\n\
            		开户行：中信银行股份有限公司北京望京支行\n\
            		\n\
            		账户名：马长山\n\
            		卡号：6217 0000 1007 3961 818\n\
            		开户行：中国建设银行股份有限公司北京东土城路支行\n\
            		')" />
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <script type="text/javascript">
            // 点击按钮会调用此方法
            function GaiBian() {
                var num = document.getElementById("remark").value


                money = (num * 0.1 * <?php echo ($remarks["value"]); ?>).toFixed(2);

                document.getElementById("spinner3").innerHTML = money+"元"; // 将处理后的数值重新显示在页面






            }

        </script>

        <!-- 购买成功 -->
        <!-- 积分退单 -->
<!--        <div class="modal fade" id="modal-4">
            <div class="modal-dialog">
                <form action="/zxsq/index.php/Home/Wallet/back" method="post" name="form2">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">积分退单</h4>
                        </div>

                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">所持积分：</label>
                                        <label class="control-label"><?php echo ($con["data"]["balance"]); ?></label>
                                    </div>	
                                </div>
                            </div>
                            <input type="hidden" name="balance" value="<?php echo ($con["data"]["balance"]); ?>">
                            <input type="hidden" name="equity" value="<?php echo ($con["data"]["equity"]); ?>">
                            <input type="hidden" name="returnAmount" value="<?php echo ($con["data"]["returnAmount"]); ?>">
                            <input type="hidden" name="management" value="<?php echo ($con["data"]["management"]); ?>">
                            <input type="hidden" name="poundage" value="<?php echo ($con["data"]["poundage"]); ?>">
                            <input type="hidden" name="finalAmount" value="<?php echo ($con["data"]["finalAmount"]); ?>">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">当前积分净值：</label>
                                        <label class="control-label"><?php echo number_format($con['data']['equity'],2);?>元/积分</label>
                                    </div>	
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">退单金额：</label>
                                        <label class="control-label"><?php echo number_format($con['data']['returnAmount'],2);?>元</label>
                                    </div>	
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">扣除管理费(<?php echo ($code["mpercent"]); ?>)：</label>
                                        <label class="control-label"><?php echo number_format($con['data']['management'],2);?>元</label>
                                    </div>	
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">扣除手续费(<?php echo ($code["ppercent"]); ?>)：</label>
                                        <label class="control-label"><?php echo number_format($con['data']['poundage'],2);?>元</label>
                                    </div>	
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">实际退单金额：</label>
                                        <label class="control-label"><?php echo number_format($con['data']['finalAmount'],2);?>元</label>
                                    </div>	
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-white" data-dismiss="modal">取消</button>
                            <input type="submit" value="确认退单" name="submit"  class="btn btn-info"  OnClick="return confirm('确认退单？')" >
                        </div>
                    </div>
                </form>
            </div>
        </div>-->

        <!-- Imported styles on this page -->
        <link rel="stylesheet" href="/zxsq/Public/assets/js/datatables/dataTables.bootstrap.css">
        <link rel="stylesheet" href="/zxsq/Public/assets/js/daterangepicker/daterangepicker-bs3.css">

        <!-- Bottom Scripts -->
        <script src="/zxsq/Public/assets/js/bootstrap.min.js"></script>
        <script src="/zxsq/Public/assets/js/TweenMax.min.js"></script>
        <script src="/zxsq/Public/assets/js/resizeable.js"></script>
        <script src="/zxsq/Public/assets/js/joinable.js"></script>
        <script src="/zxsq/Public/assets/js/xenon-api.js"></script>
        <script src="/zxsq/Public/assets/js/xenon-toggles.js"></script>
        <script src="/zxsq/Public/assets/js/datatables/js/jquery.dataTables.min.js"></script>
        <script src="/zxsq/Public/assets/js/moment.min.js"></script>

        <!-- Imported scripts on this page -->
        <script src="/zxsq/Public/assets/js/datatables/dataTables.bootstrap.js"></script>
        <script src="/zxsq/Public/assets/js/datatables/yadcf/jquery.dataTables.yadcf.js"></script>
        <script src="/zxsq/Public/assets/js/datatables/tabletools/dataTables.tableTools.min.js"></script>
        <script src="/zxsq/Public/assets/js/daterangepicker/daterangepicker.js"></script>

        <!-- JavaScripts initializations and stuff -->
        <script src="/zxsq/Public/assets/js/xenon-custom.js"></script>

    </body>
</html>
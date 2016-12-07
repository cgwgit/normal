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
					<li class="active">
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
					<li class="has-sub">
						<a href="">
							<i class="linecons-desktop"></i>
							<span class="title">转账提现</span>
						</a>
						<ul>
							<li><a href="/index.php/Home/Withdraw/index"><span class="title">账户转账</span></a></li>
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
             <div class="row">
                 <div class="col-sm-4">
                                    <a href="/index.php/Home/Wallet/index">
                                    <div class="xe-widget xe-counter">
                                        <div class="xe-icon">
                                                <i class="linecons-wallet"></i>
                                        </div>
                                        <div class="xe-label">
                                                <strong class="num"><?php echo ($userData["available_predeposit"]); ?></strong>
                                                <span>中孝钱包 </span>
                                        </div>
                                    </div>
                                    </a>
				</div>
				<div class="col-sm-4">
                                    <a href="/index.php/Home/Wallet/integral">
                                    <div class="xe-widget xe-counter">
                                        <div class="xe-icon">
                                                <i class="linecons-diamond"></i>
                                        </div>
                                        <div class="xe-label">
                                                <strong class="num"><?php echo ($data["intbalance"]); ?></strong>
                                                <span>中孝积分 </span>
                                        </div>
                                    </div>
                                    </a>				
				</div>
				<div class="col-sm-4">
                                    <a href="/index.php/Home/Wallet/consume">
                                    <div class="xe-widget xe-counter">
                                        <div class="xe-icon">
                                                <i class="linecons-money"></i>
                                        </div>
                                        <div class="xe-label">
                                                <strong class="num"><?php echo ($userData["available_rc_balance"]); ?></strong>
                                                <span>消费积分 </span>
                                        </div>
                                    </div>
                                    </a>				
				</div>
             </div>
                        <div class='row'>
				<div class="col-sm-4">
                                    <a href="/index.php/Home/Money/running">
                                    <div class="xe-widget xe-counter">
                                        <div class="xe-icon">
                                                <i class="fa-cny"></i>
                                        </div>
                                        <div class="xe-label">
                                                <strong class="num"><?php echo number_format($data['realreward'],2);?></strong>
                                                <span>奖金 </span>
                                        </div>
                                    </div>
                                    </a>
				</div>
                                <div class="col-sm-4">
                                    <div class="xe-widget xe-counter">
                                        <div class="xe-icon">
                                                <i class="fa-usd"></i>
                                        </div>
                                        <div class="xe-label">
                                                <strong class="num"><?php echo number_format($data['reward'],2);?></strong>
                                                <span>待结算奖金 </span>
                                        </div>
                                    </div>
                                </div>
				<div class="col-sm-4">
                                    <div class="xe-widget xe-counter">
                                        <div class="xe-icon">
                                                <i class="fa-euro"></i>
                                        </div>
                                        <div class="xe-label">
                                                <strong class="num"><?php if($jijin!=0){echo $jijin;}else{ echo 0;} ?></strong>
                                                <span>慈善基金 </span>
                                        </div>
                                    </div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<ul class="nav nav-tabs nav-tabs-justified">
						<li class="active">
							<a href="#home-3" data-toggle="tab">
								<span class="visible-xs"><i class="fa-home"></i></span>
								<span class="hidden-xs">会员信息修改</span>
							</a>
						</li>
						<li class="">
							<a href="#profile-3" data-toggle="tab">
								<span class="visible-xs"><i class="fa-user"></i></span>
								<span class="hidden-xs">变更登录密码</span>
							</a>
						</li>
<!--						<li>
							<a href="#messages-3" data-toggle="tab">
								<span class="visible-xs"><i class="fa-envelope-o"></i></span>
								<span class="hidden-xs">变更交易密码</span>
							</a>
						</li>-->
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="home-3">
							<div class="panel-body">
							<form role="form" class="form-horizontal" name='fam' action="/index.php/Home/Index/update" method="post">
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">用户名：</label>
									<div class="col-sm-3">
										<input type="text" class="form-control" name="username" disabled="" placeholder="" value="<?php echo ($userData["member_name"]); ?>">
									</div>
									<label class="col-sm-2 control-label" for="field-2">用户编号：</label>
									<div class="col-sm-3">
										<input type="text" class="form-control" placeholder="" disabled="" value="<?php echo ($userData["member_id"]); ?>">
									</div>
								</div>
								<div class="form-group">
                                                                    <label class="col-sm-2 control-label" for="field-1">真实姓名：</label>
									<div class="col-sm-3">
										<input type="text" name="name" class="form-control" placeholder="" value="<?php echo ($userData["member_truename"]); ?>">
									</div>
									<label class="col-sm-2 control-label" for="field-1">身份证号：</label>
									<div class="col-sm-3">
										<input type="text" name="idcard" class="form-control" placeholder="" value="<?php echo ($userData["member_idcard"]); ?>">
									</div>
									
								</div>
								<div class="form-group">
									
									<label class="col-sm-2 control-label" for="field-2">手机号码：</label>
									<div class="col-sm-3">
										<input type="text" name="mobile" class="form-control" placeholder=""  value="<?php echo ($userData["member_mobile"]); ?>">
									</div>
                                                                        <label class="col-sm-2 control-label" >性别：</label>
									<div class="col-sm-3">
										<select class="form-control" name="sex">
											<option value="0" <?php if($userData['member_sex'] == '0'): ?>selected="selected"<?php endif; ?>>---</option>
											<option value="1" <?php if($userData['member_sex'] == 1): ?>selected="selected"<?php endif; ?>>男</option>
											<option value="2" <?php if($userData['member_sex'] == 2): ?>selected="selected"<?php endif; ?>>女</option>
											<option value="3" <?php if($userData['member_sex'] == 3): ?>selected="selected"<?php endif; ?>>保密</option>
										</select>
									</div>
								</div>
								<div class="form-group">
                                                                    <label class="col-sm-2 control-label" for="field-1">联系地址：</label>
									<div class="col-sm-3">
										<input type="text" name="address" class="form-control" placeholder="" value="<?php echo ($userData["member_address"]); ?>">
									</div>
									<label class="col-sm-2 control-label" for="field-1">电子邮件：</label>
									<div class="col-sm-3">
										<input type="text" name="email" class="form-control" placeholder="" value="<?php echo ($userData["member_email"]); ?>">
									</div>
                                                                        
<!--									<label class="col-sm-2 control-label" for="field-2">邮政编码：</label>
									<div class="col-sm-3">
										<input type="text" class="form-control"placeholder="">
									</div>-->
								</div>
								<div class="form-group-separator"></div>
								<div class="form-group">
<!--									<label class="col-sm-6 control-label" for="field-1"><button class="btn btn-red btn-icon btn-icon-standalone"><i class="fa-magic"></i><span>确认修改</span></button></label>-->
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-2">推荐人用户名：</label>
									<div class="col-sm-3">
										<input type="text" name="inviter_id" class="form-control" placeholder=""  value="<?php echo ($userData["inviter_id"]); ?>">
									</div>
                                                                        <label class="col-sm-2 control-label" for="field-1">注册日期：</label>
									<div class="col-sm-3">
										<input type="text" class="form-control" placeholder="" disabled="" value="<?php echo (session('member_time')); ?>">
									</div>
								</div>
								<div class="form-group">
<!--									<label class="col-sm-2 control-label" for="field-1">会员级别：</label>-->
<!--									<div class="col-sm-3">
										<input type="text" class="form-control" placeholder="" disabled="">
									</div>-->
									<label class="col-sm-2 control-label" for="field-2">会员等级：</label>
									<div class="col-sm-3">
                                                                            <input type="text" class="form-control" placeholder="<?php  if( $huiyuan == 0){ echo "普通会员";}else if( $huiyuan == 1){ if($data['primitive']== -1){echo "原始会员";}else{echo "爱心会员";}}else if( $huiyuan == 2){echo "公益会员";} else if( $huiyuan == 3){echo "慈善会员";}else if( $huiyuan >= 4){echo "慈孝股东";} ?>" disabled="">
									</div>
                                                                        <label class="col-sm-2 control-label" for="field-1">银行卡类型：</label>
									<div class="col-sm-3">
										<select class="form-control" name="member_cardtype">
											<option value="储蓄卡" <?php if($userData['member_cardtype']=='储蓄卡'){echo "selected='selected'";}?>>储蓄卡</option>
											<option value="信用卡" <?php if($userData['member_cardtype']=='信用卡'){echo "selected='selected'";}?>>信用卡</option>
										</select>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">银行名称：</label>
                                                                        <div class="col-sm-3">
									<select class="form-control" name="bankname">
                                                                            <option ><?php echo ($userData["member_bankname"]); ?></option>
                                                                           <?php if(is_array($bkname)): foreach($bkname as $key=>$vo): ?><option><?php echo ($vo["bank_name"]); ?></option><?php endforeach; endif; ?>	
										</select>
                                                                            </div>
									<label class="col-sm-2 control-label" for="field-2">银行卡号：</label>
									<div class="col-sm-3">
										<input type="text" name="bankcard" class="form-control" placeholder=""  value="<?php echo ($userData["member_bankcard"]); ?>">
									</div>
								</div>
								<div class="form-group">
									
								</div>
<!--								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">银行卡号：</label>
									<div class="col-sm-3">
										<input type="text" class="form-control" placeholder="" disabled="" value="<?php echo ($userData["bankcard"]); ?>">
									</div>
								</div>-->
                                                                    	<div class="form-group-separator"></div>
								<label class="col-sm-6 control-label" for="field-1"><button name='btn' class="btn btn-red btn-icon btn-icon-standalone" <?php if($dingdan != 0 || $tuijian !=0){ echo "style='display:none'"; }?>><i class="fa-magic"></i><span>确认修改</span></button></label>
							
							</form>
							</div>
                                                   <script>
            document.fam.btn.onclick = function () {

                var name = document.fam.name.value;

                var idcard = document.fam.idcard.value;
                var address = document.fam.address.value;
                var email = document.fam.email.value;
                var bankcard = document.fam.bankcard.value;
                var mobile = document.fam.mobile.value;
                var inviterid=document.fam.inviter_id.value;
                if(name.match(/^\s*$/)) {
                    alert("姓名不能为空"); return false;
                }
                
                if(!idcard.match(/^\d{6}(18|19|20)?\d{2}(0[1-9]|1[12])(0[1-9]|[12]\d|3[01])\d{3}(\d|X)$/i)) {
                    alert("请输入有效的身份证号") ; return false;
                }
                if(address.match(/^\s*$/)) {
                    alert( "地址不能为空"); return false;
                } 
                if(!email.match(/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/)) {
                    alert("您输入的邮箱格式不正确"); return false;
                }
                if(!bankcard.match(/^\d*$/) || bankcard.length != 19 && bankcard.length != 16 && bankcard.length != 17) {
                    alert("请输入有效的银行卡号"); return false;
                } 
                
                if(!mobile.match(/^\d*$/) || mobile.length != 11 ) {
                    //$("#banknoInfo").html("银行卡号长度必须在16到19之间");
                    alert("请输入有效的手机号"); return false;
                }
                if(inviterid.match(/^\s*$/)){
                    alert("推荐人不能为空"); return false;
                }
            }
        </script>
						</div>
						<div class="tab-pane" id="profile-3">
							<div class="panel-body">
							<form role="form" class="form-horizontal" action="/index.php/Home/Index/pwdedit" method="post">
								<div class="form-group">
                                                                    <label class="col-sm-2 control-label" for="field-1">用户名：</label>
									<div class="col-sm-3">
										<input type="text" class="form-control" placeholder="<?php echo ($userData["member_name"]); ?>" disabled="">
									</div>
									
									<label class="col-sm-2 control-label" for="field-2">用户编号：</label>
									<div class="col-sm-3">
										<input type="text" class="form-control" placeholder="<?php echo ($userData["member_id"]); ?>" disabled="">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">真实姓名：</label>
									<div class="col-sm-3">
										<input type="text" class="form-control" placeholder="<?php echo ($userData["member_truename"]); ?>" disabled="">
									</div>
									<label class="col-sm-2 control-label">性别：</label>
									<div class="col-sm-3">
                                                                               <select class="form-control" name="sex" disabled="">
											<option value="0" <?php if($userData['member_sex'] == '0'): ?>selected="selected"<?php endif; ?>>---</option>
											<option value="1" <?php if($userData['member_sex'] == 1): ?>selected="selected"<?php endif; ?>>男</option>
											<option value="2" <?php if($userData['member_sex'] == 2): ?>selected="selected"<?php endif; ?>>女</option>
											<option value="3" <?php if($userData['member_sex'] == 3): ?>selected="selected"<?php endif; ?>>保密</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">原登录密码：</label>
									<div class="col-sm-3">
										<input type="password" name="oldpwd" class="form-control" placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">新登录密码：</label>
									<div class="col-sm-3">
										<input type="password" name="loginpwd" class="form-control" placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">确认新登录密码：</label>
									<div class="col-sm-3">
										<input type="password" name="password" class="form-control" placeholder="">
									</div>
								</div>
								<div class="form-group-separator"></div>
								<label class="col-sm-6 control-label" for="field-1"><button class="btn btn-red btn-icon btn-icon-standalone"><i class="fa-magic"></i><span>确认修改</span></button></label>
							</form>
							</div>
						</div>
<!--						<div class="tab-pane" id="messages-3">
							<div class="panel-body">
							<form role="form" class="form-horizontal">
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">真实姓名：</label>
									<div class="col-sm-3">
										<input type="text" class="form-control" placeholder="段短短" disabled="">
									</div>
									<label class="col-sm-2 control-label" for="field-2">会员编号：</label>
									<div class="col-sm-3">
										<input type="text" class="form-control" placeholder="00314561250" disabled="">
									</div>
								</div>
								<div class="form-group-separator"></div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">会员昵称：</label>
									<div class="col-sm-3">
										<input type="text" class="form-control" placeholder="米一" disabled="">
									</div>
									<label class="col-sm-2 control-label">性别：</label>
									<div class="col-sm-3">
										<select class="form-control" disabled="">
											<option>男</option>
											<option>女</option>
										</select>
									</div>
								</div>
								<div class="form-group-separator"></div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">原交易密码：</label>
									<div class="col-sm-3">
										<input type="text" class="form-control" placeholder="">
									</div>
								</div>
								<div class="form-group-separator"></div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">新交易密码：</label>
									<div class="col-sm-3">
										<input type="text" class="form-control" placeholder="">
									</div>
								</div>
								<div class="form-group-separator"></div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">确认新交易密码：</label>
									<div class="col-sm-3">
										<input type="text" class="form-control" placeholder="">
									</div>
								</div>
								<div class="form-group-separator"></div>
								<label class="col-sm-6 control-label" for="field-1"><button class="btn btn-red btn-icon btn-icon-standalone"><i class="fa-magic"></i><span>确认修改</span></button></label>
							</form>
							</div>
						</div>-->
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
        <!-- Bottom Scripts -->
        <!-- Bottom Scripts -->
	<script src="/Public/assets/js/bootstrap.min.js"></script>
	<script src="/Public/assets/js/TweenMax.min.js"></script>
	<script src="/Public/assets/js/resizeable.js"></script>
	<script src="/Public/assets/js/joinable.js"></script>
	<script src="/Public/assets/js/xenon-api.js"></script>
	<script src="/Public/assets/js/xenon-toggles.js"></script>
	<!-- Imported scripts on this page -->
	<script src="/Public/assets/js/xenon-widgets.js"></script>
	<script src="/Public/assets/js/devexpress-web-14.1/js/globalize.min.js"></script>
	<script src="/Public/assets/js/devexpress-web-14.1/js/dx.chartjs.js"></script>
	<script src="/Public/assets/js/toastr/toastr.min.js"></script>
	<script src="/Public/assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="/Public/assets/js/jvectormap/regions/jquery-jvectormap-world-mill-en.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="/Public/assets/js/xenon-custom.js"></script>

</body>
</html>
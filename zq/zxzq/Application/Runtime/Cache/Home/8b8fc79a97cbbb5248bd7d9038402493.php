<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
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
        <nav class="navbar horizontal-menu navbar-fixed-top"><!-- set fixed position by adding class "navbar-fixed-top" -->
            <div class="navbar-inner">
                <!-- Navbar Brand -->
				<div class="navbar-brand">
					<a href="/Public/" class="logo">
						中孝证券交易平台
						<!--
							<img src="assets/images/logo-white-bg@2x.png" width="80" alt="" class="hidden-xs" />
							<img src="assets/images/logo@2x.png" width="80" alt="" class="visible-xs" />
						-->
					</a>
				</div>
                <!-- Mobile Toggles Links -->
                <div class="nav navbar-mobile">
                    <!-- This will toggle the mobile menu and will be visible only on mobile devices -->
                    <div class="mobile-menu-toggle">
                        <!-- data-toggle="mobile-menu-horizontal" will show horizontal menu links only -->
                        <!-- data-toggle="mobile-menu" will show sidebar menu links only -->
                        <!-- data-toggle="mobile-menu-both" will show sidebar and horizontal menu links -->
                        <a href="#" data-toggle="mobile-menu-horizontal">
                            <i class="fa-bars"></i>
                        </a>
						<!-- This will open the popup with user profile settings, you can use for any purpose, just be creative -->
                        <a href="/index.php/Home/Login/logout">
                            <i class="fa fa-sign-out"></i>
                        </a>
                    </div>
                </div>
                <div class="navbar-mobile-clear"></div>
                <!-- main menu -->
                <ul class="navbar-nav">
					<li>
                        <a href="/index.php/Home/Index/index">
							<i class="fa-home"></i>
                            <span class="title">首页</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-user"></i>
                            <span class="title">我的账户</span>
                        </a>
                        <ul>
                            <li>
                                <a href="/index.php/Home/Index/userInfo">
                                    <span class="title">查看个人信息</span>
                                </a>
                            </li>
                            <li>
                                <a href="/index.php/Home/Index/accountProfile">
                                    <span class="title">修改个人信息</span>
                                </a>
                            </li>
                            <li>
                                <a href="/index.php/Home/Index/accountpwd">
                                    <span class="title">修改登录密码</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-plus-square"></i>
                            <span class="title">证券交易</span>
                        </a>
                        <ul>
							<li>
                                <a href="/index.php/Home/Unit/recharge">
                                    <span class="title">钱包充值</span>
                                </a>
                            </li>
							<!--li>
                                <a href="/index.php/Home/Unit/recharge">
                                    <span class="title">钱包提现</span>
                                </a>
                            </li-->
                            <li>
                                <a href="/index.php/Home/Unit/subScription">
                                    <span class="title">证券购买</span>
                                </a>
                            </li>
							<li>
                                <a href="/index.php/Home/Unit/extractWallet">
                                    <span class="title">转账至钱包</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/index.php/Home/Team/myTeam">
                           <i class=" fa-users"></i>
                            <span class="title">我的团队</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa-reorder"></i>
                            <span class="title">交易明细</span>
                        </a>
                        <ul>
							<li>
                                <a href="/index.php/Home/List/rechargeList">
                                    <span class="title">账户充值明细</span>
                                </a>
                            </li>
                            <li>
                                <a href="/index.php/Home/List/tradeList">
                                    <span class="title">证券交易明细</span>
                                </a>
                            </li>
                            <li>
                                <a href="/index.php/Home/List/incomeList">
                                    <span class="title">证券收益明细</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-institution"></i>
                            <span class="title">交易平台</span>
							
                        </a>
                        <ul>
                            <li>
                                <a href="/index.php/Home/Trading/platform">
                                    <span class="title">交易平台</span>
                                </a>
                            </li>
                            <li>
                                <a href="/index.php/Home/Trading/dictate">
                                    <span class="title">现行指令</span>
                                </a>
                            </li>
                            <li>
                                <a href="/index.php/Home/Trading/details">
                                    <span class="title">交易历史</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-file-word-o"></i>
                            <span class="title">协议书和证书</span>
							
                        </a>
                        <ul>
                            <li>
                                <a href="/index.php/Home/Agreement/info">
                                    <span class="title">协议书</span>
                                </a>
                            </li>
                            <li>
                                <a href="/index.php/Home/Agreement/certificate">
                                    <span class="title">证书</span>
                                </a>
                            </li><li>
                                <a href="/index.php/Home/Agreement/certificatelist">
                                    <span class="title">申请证书清单</span>
                                </a>
                            </li>
                            <li>
                                <a href="/index.php/Home/Agreement/apply">
                                    <span class="title">申请协议书清单</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-envelope-o"></i>
                            <span class="title">布告栏</span>
							
                        </a>
                        <ul>
                            <li>
                                <a href="/index.php/Home/Bulletin/bulletinlist">
                                    <span class="title">布告栏查询</span>
                                </a>
                            </li>
                            <li>
                                <a href="/index.php/Home/Bulletin/download">
                                    <span class="title">下载</span>
                                </a>
                            </li>
                            <li>
                                <a href="/index.php/Home/Bulletin/demand">
                                    <span class="title">需求单列表</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-briefcase"></i>
                            <span class="title">资产</span>
							
                        </a>
                        <ul>
                            <li>
                                <a href="/index.php/Home/Coupons/auctionInfo">
                                    <span class="title">中孝拍卖</span>
                                </a>
                            </li>
                            <li>
                                <a href="/index.php/Home/Coupons/auctionDetails">
                                    <span class="title">拍卖交易记录</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-download"></i>
                            <span class="title">下载类别</span>
							
                        </a>
                        <ul>
                            <li>
                                <a href="/index.php/Home/Performance/zx_courseware">
                                    <span class="title">中孝课件</span>
                                </a>
                            </li>
                            <li>
                                <a href="/index.php/Home/Performance/zx_video">
                                    <span class="title">中孝视频</span>
                                </a>
                            </li>
                            <li>
                                <a href="/index.php/Home/Performance/zx_instructional">
                                    <span class="title">中孝教学视频</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-line-chart"></i>
                            <span class="title">报表</span>
							
                        </a>
                        <ul>
                            <li>
                                <a href="/index.php/Home/Performance/performance_reports">
                                    <span class="title">个人业绩报表</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- 顶部菜单结束 -->
                </ul>
                <!-- notifications and other links -->
				<ul class="nav nav-userinfo navbar-right">
					<li class="dropdown user-profile">
						<a href="/index.php/Home/Login/logout">
							<span>
								登出
								<i class="fa-sign-out"></i>
							</span>
						</a>
					</li>
				</ul>
            </div>
        </nav>
        <div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
            <div class="main-content">
                
<div class="row">
	<div class="col-sm-1"></div>
	<div class="col-sm-9">
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title">用户档案编辑</div>
			</div>
			<div class="panel-body">
				<form role="form" class="form-horizontal" action='/index.php/Home/Index/updateprofile' method='post'>
					<div class="form-group">
						<label class="col-sm-1 control-label" for="name">姓名</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name='name' id="name" value="<?php echo ($result["member_truename"]); ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-1 control-label" for="idcard">身份证号</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name='idcard' id="idcard" value="<?php echo ($result["member_idcard"]); ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-1 control-label" for="mobile">手机号</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name='mobile' id="mobile" value="<?php echo ($result["member_mobile"]); ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-1 control-label" for="bankname">开户银行</label>
						<div class="col-sm-5">
							<select class="form-control" name='bankname' id="bankname">
								<?php foreach($bank as $k=>$v){ ?>
								<option <?php if($result['member_bankname']==$v['bank_name']) {echo "selected";}?>><?php echo $v['bank_name']; ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-1 control-label" for="member_cardtype">卡片类型</label>
						<div class="col-sm-5">
							<select class="form-control" name='member_cardtype' id="member_cardtype">
								<option <?php if($result['member_cardtype']=="储蓄卡") {echo "selected = 'selected'";}?>>储蓄卡</option>
								<option <?php if($result['member_cardtype']=="信用卡") {echo "selected = 'selected'";}?>>信用卡</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-1 control-label" for="bankcard" >银行卡号</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="bankcard" name='bankcard' value="<?php echo ($result["member_bankcard"]); ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-1 control-label" for="sex">性别</label>
						<div class="col-sm-5">
							<select class="form-control" name='sex' id="sex">
								<option value='0' <?php if($result['member_sex']==0) {echo "selected = 'selected'";}?>  >未填写</option>
								<option value='1' <?php if($result['member_sex']==1) {echo "selected = 'selected'";}?> >男</option>
								<option value='2' <?php if($result['member_sex']==2) {echo "selected = 'selected'";}?> >女</option>
								<option value='3' <?php if($result['member_sex']==3) {echo "selected = 'selected'";}?> >保密</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-1 control-label" for="address">地区</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="area" name='area' value="<?php echo ($result["member_area"]); ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-1 control-label" for="address">联系地址</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="address" name='address' value="<?php echo ($result["member_address"]); ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-1 control-label" for="email">电子邮件</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="email" name='email' value="<?php echo ($result["member_email"]); ?>" >
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label"></label>
						<button id="sub" class="btn btn-red btn-icon btn-icon-standalone">
							<i class="fa-magic"></i>
							<span>确认修改</span>
						</button>
						<a href="/index.php/Home/Index/index" class="btn btn-white btn-icon btn-icon-standalone btn-icon-standalone-right">
							<span>返回首页</span>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-9">
        <div class="panel panel-default">
            <div class="panel-heading-footer">
                <div class="panel-title"><i class="fa fa-link"></i>&nbsp;&nbsp;快速链接</div>
            </div>
            <div class="panel-body">
                <a href="/index.php/Home/Index/userInfo">
                    <div class="col-sm-2">
                        <div class="xe-widget xe-vertical-counter xe-vertical-counter-fastlink" data-count=".num" data-from="0" data-to="128" data-duration="4">
                            <div class="xe-label">个人信息</div>
							<div class="xe-icon">
                                <i class="fa-user"></i>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="/index.php/Home/Unit/subScription">
                    <div class="col-sm-2">
                        <div class="xe-widget xe-vertical-counter xe-vertical-counter-fastlink" data-count=".num" data-from="0" data-to="128" data-duration="4">
                            <div class="xe-label">证券购买</div>
                            <div class="xe-icon">
                                <i class="fa-key"></i>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="/index.php/Home/Unit/recharge">
                    <div class="col-sm-2">
                        <div class="xe-widget xe-vertical-counter xe-vertical-counter-fastlink" data-count=".num" data-from="0" data-to="128" data-duration="4">
                            <div class="xe-label">钱包充值</div>
                            <div class="xe-icon">
                                <i class="fa-ticket"></i>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="col-sm-2">
                        <div class="xe-widget xe-vertical-counter xe-vertical-counter-fastlink" data-count=".num" data-from="0" data-to="128" data-duration="4">
                            <div class="xe-label">下载</div>
                            <div class="xe-icon">
                                <i class="fa-download"></i>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="col-sm-2">
                        <div class="xe-widget xe-vertical-counter xe-vertical-counter-fastlink" data-count=".num" data-from="0" data-to="128" data-duration="4">
                            <div class="xe-label">交易平台</div>
                            <div class="xe-icon">
                                <i class="fa-bar-chart"></i>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="col-sm-2">
                        <div class="xe-widget xe-vertical-counter xe-vertical-counter-fastlink" data-count=".num" data-from="0" data-to="128" data-duration="4">
                            <div class="xe-label">布告板查询</div>
                            <div class="xe-icon">
                                <i class="fa-ticket"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Main Footer -->
<!-- Choose between footer styles: "footer-type-1" or "footer-type-2" -->
<!-- Add class "sticky" to  always stick the footer to the end of page (if page contents is small) -->
<!-- Or class "fixed" to  always fix the footer to the end of page -->
	</div>
</div>
<footer class="main-footer sticky footer-type-1">
	<div class="footer-inner">
		<div class="col-sm-8"></div>
		<!-- Add your copyright text here -->
		<div class="footer-text">
			&copy; 2016
			<strong>中孝科技（北京）有限公司</strong>&nbsp;&nbsp;&nbsp;&nbsp;京ICP备16046744号
		</div>
		<!-- Go to Top Link, just add rel="go-top" to any link to add this functionality -->
		<div class="go-up">
			<a href="#" rel="go-top">
				<i class="fa-angle-up"></i>
			</a>
		</div>
	</div>
</footer>
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
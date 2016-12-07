<?php include 'header.php';?>
<div class="row">
	<div class="col-sm-1"></div>
	<div class="col-sm-9">
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title">用户档案编辑</div>
			</div>
			<div class="panel-body">
				<form role="form" class="form-horizontal" method='post'>
					<div class="form-group">
						<label class="col-sm-1 control-label" for="name">姓名</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name='name' id="name" value="李伟亮">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-1 control-label" for="idcard">身份证号</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name='idcard' id="idcard" value="110105198407270012">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-1 control-label" for="mobile">手机号</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name='mobile' id="mobile" value="18618455420">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-1 control-label" for="bankname">开户银行</label>
						<div class="col-sm-5">
							<select class="form-control" name='bankname' id="bankname">
								<option >中国工商银行</option>
								<option >中国农业银行</option>
								<option >中国银行</option>
								<option >中国建设银行</option>
								<option selected>交通银行</option>
								<option >中信银行</option>
								<option >中国光大银行</option>
								<option >华夏银行</option>
								<option >中国民生银行</option>
								<option >招商银行</option>
								<option >兴业银行</option>
								<option >广发银行</option>
								<option >平安银行</option>
								<option >上海浦东发展银行</option>
								<option >恒丰银行</option>
								<option >浙商银行</option>
								<option >渤海银行</option>
								<option >中国邮政储蓄银行</option>
								<option >北京银行</option>
								<option >天津银行</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-1 control-label" for="member_cardtype">卡片类型</label>
						<div class="col-sm-5">
							<select class="form-control" name='member_cardtype' id="member_cardtype">
								<option selected = 'selected'>储蓄卡</option>
								<option >信用卡</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-1 control-label" for="bankcard" >银行卡号</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="bankcard" name='bankcard' value="6225885532326565">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-1 control-label" for="sex">性别</label>
						<div class="col-sm-5">
							<select class="form-control" name='sex' id="sex">
								<option value='0'   >未填写</option>
								<option value='1' selected = 'selected' >男</option>
								<option value='2'  >女</option>
								<option value='3'  >保密</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-1 control-label" for="address">联系地址</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="address" name='address' value="北京">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-1 control-label" for="email">电子邮件</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="email" name='email' value="liweil@qq.com" >
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-1 control-label" for="inviter_id">推荐人</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="inviter_id" name='inviter_id' value="zxkj" readonly>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label"></label>
						<button id="sub" class="btn btn-red btn-icon btn-icon-standalone">
							<i class="fa-magic"></i>
							<span>确认修改</span>
						</button>
						<a href="index.php" class="btn btn-white btn-icon btn-icon-standalone btn-icon-standalone-right">
							<i class="fa-plane"></i>
							<span>返回首页</span>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php';?>
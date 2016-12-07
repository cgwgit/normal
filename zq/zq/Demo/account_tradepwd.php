<?php include 'header.php';?>
<div class="row">
	<div class="col-sm-1"></div>
	<div class="col-sm-9">
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title"><i class="fa fa-user"></i>&nbsp;&nbsp;修改交易密码</div>
			</div>
			<div class="panel-body">
				<form role="form" class="form-horizontal">
					<div class="form-group">
						<label class="col-sm-1 control-label" for="field-1">旧交易密码：</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="field-1" placeholder="" >
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-1 control-label" for="field-1">新交易密码：</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="field-1" placeholder="" >
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-1 control-label" for="field-1">确认新密码：</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="field-1" placeholder="" >
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label"></label>
						<button id="sub" class="btn btn-red btn-icon btn-icon-standalone">
							<i class="fa-magic"></i>
							<span>确认修改</span>
						</button>
						<a href="/zq/index.php/Home/Index/index" class="btn btn-white btn-icon btn-icon-standalone btn-icon-standalone-right">
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
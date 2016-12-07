<?php include 'header.php';?>
<div class="panel panel-default">
	<div class="panel-heading">
		<div class="panel-title">用户档案编辑</div>
	</div>
	<div class="panel-body">
		<form role="form" class="form-horizontal">
			<div class="form-group">
				<label class="col-sm-1 control-label" for="field-1">姓名</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="field-1" value="aikanghui">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-1 control-label" for="field-1">身份证号</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="field-1" value="420105198212200832">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-1 control-label" for="field-1">开户银行</label>
				<div class="col-sm-6">
					<select class="form-control">
						<option>中国银行</option>
						<option>北京银行</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-1 control-label" for="field-1">卡片类型</label>
				<div class="col-sm-6">
					<select class="form-control">
						<option>储蓄卡</option>
						<option>信用卡</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-1 control-label" for="field-1">银行卡号</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="field-1" value="6225880879638256">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-1 control-label" for="field-1">手机号码</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="field-1" value="13659888027">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-1 control-label" for="field-1">性别</label>
				<div class="col-sm-6">
					<select class="form-control">
						<option>男</option>
						<option>女</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-1 control-label" for="field-1">联系地址</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="field-1" value="北京市东城区正义路一号">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-1 control-label" for="field-1"></label>
				&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-success" style="width: 80px; background: #ccc; color:#515151;">保存</button>
				<button type="submit" class="btn btn-success" style="width: 80px; background: #ccc; color:#515151;">返回</button>
			</div>
		</form>
	</div>
</div>
<?php include 'footer.php';?>
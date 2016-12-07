<?php include 'header.php';?>
<div class="panel panel-default">
	<div class="panel-heading">
		<div class="panel-title">修改交易密码</div>
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
				<label class="col-sm-1 control-label" for="field-1"></label>
				&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-success"  style="width: 80px; background: #ccc; color:#515151;">确认修改</button>
			</div>
		</form>
	</div>
</div>
<?php include 'footer.php';?>
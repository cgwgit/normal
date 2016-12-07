<?php include 'header.php';?>
<div class="row">
	<div class="col-sm-1"></div>
	<div class="col-sm-9">
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title">需求单</div>
			</div>
			<div class="panel-body">
				<form role="form" class="form-horizontal">
					<div class="form-group">
						<label class="col-sm-1 control-label" for="finishdate">部门：</label>
						<div class="col-sm-3">
							<select class="form-control">
								<option>请选择</option>
								<option>服务中心</option>
							</select>
						</div>
						<label class="col-sm-1 control-label" for="finishdate">状态：</label>
						<div class="col-sm-3">
							<select class="form-control">
								<option>请选择</option>
								<option>开放</option>
								<option>关闭</option>
							</select>
						</div>
						<button class="btn btn-secondary col-sm-1">查询</button>
					</div>
				</form>
			</div>
			<div class="panel-body">
				<table class="table table-bordered table-striped">
					<thead>
						<tr style="color:#999;">
							<th>无记录</th>
						</tr>
					</thead>
				</table>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php';?>
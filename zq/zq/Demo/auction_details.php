<?php include 'header.php';?>
<div class="row">
	<div class="col-sm-1"></div>
	<div class="col-sm-9">
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title">交易历史</div>
			</div>
			<div class="panel-body">
				<form role="form" class="form-horizontal">
					<div class="form-group">
						<label class="col-sm-1 control-label" for="finishdate">交易日期：</label>
						<div class="col-sm-2">
							<input type="text" id="finishdate" name="date" class="form-control daterange" data-format="YYYY-MM-DD" data-start-date="2016-11-17 11:47:58" data-end-date="2016-11-17 11:47:58" data-separator=" 至 " value="">
						</div>
						<button class="btn btn-secondary col-sm-1">查询</button>
					</div>
				</form>
			</div>
			<div class="panel-body">
				<table class="table table-bordered table-striped">
					<thead>
						<tr style="color:#999;">
							<th>序号</th>
							<th>股票名称</th>
							<th>购买日期</th>
							<th>普通证券</th>
							<th>购买价格</th>
							<th>购买率</th>
						</tr>
					</thead>
				</table>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php';?>
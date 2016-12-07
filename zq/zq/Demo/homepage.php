<?php include 'header.php';?>
<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title"><i class="fa fa-stack-exchange"></i>&nbsp;&nbsp;证券信息</div>
				<div class="panel-options">
					<a href="account_profile.php">
						<i class="fa fa-pencil"></i>&nbsp;&nbsp;编辑
					</a>
				</div>
			</div>
			<div class="panel-body">
				<form role="form" class="form-horizontal">
					<div class="form-group">
						<label class="col-sm-1 control-label" for="field-1">普通证券</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="field-1" placeholder="7,787.71" disabled="true">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title"><i class="fa fa-stack-exchange"></i>&nbsp;&nbsp;资产</div>
			</div>
			<div class="panel-body">
				<form role="form" class="form-horizontal">
					<div class="form-group">
						<label class="col-sm-1 control-label" for="field-1">资产名称</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="field-1" placeholder="当前最高拍卖价" disabled="true">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-1 control-label" for="field-1">Sea Saran Condo Bang Saray</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="field-1" placeholder="3,000.00" disabled="true">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title"><i class="fa fa-key"></i>&nbsp;&nbsp;积分资料</div>
			</div>
			<div class="panel-body">
				<form role="forl" id="rootwizard" class="form-wizard validate" novalidate="novalidate">
						<ul class="tabs" style="font-size: 15px;">
							<li class="ms-hover">
								<a href="#fwv-2" data-toggle="tab">
									售券分
									<span style="font-size: 14px;">5.50</span>
									<span></span>
								</a>
							</li>
							<li class="ms-hover">
								<a href="#fwv-2" data-toggle="tab">
									购券分
									<span style="font-size: 14px;">0.00</span>
									<span></span>
								</a>
							</li>
							<li class="ms-hover">
								<a href="#fwv-3" data-toggle="tab">
									优券分
									<span style="font-size: 14px;">0.00</span>
									<span></span>
								</a>
							</li>
							<li class="ms-hover">
								<a href="#fwv-2" data-toggle="tab">
									证券价格
									<span style="font-size: 14px;">1.10</span>
									<span></span>
								</a>
							</li>
							<li class="ms-hover">
								<a href="#fwv-2" data-toggle="tab">
									中券特殊证券
									<span style="font-size: 14px;">1.10</span>
									<span></span>
								</a>
							</li>
							<li class="ms-hover">
								<a href="#fwv-3" data-toggle="tab">
									交易类型
									<span style="font-size: 14px;">0.00</span>
									<span></span>
								</a>
							</li>
						</ul>
					</form>
			</div>
		</div>
	</div>
</div>


<?php include 'footer.php';?>
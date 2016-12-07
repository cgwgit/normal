<?php include 'header.php';?>
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">交易历史</div>
					</div>
					<div class="panel-body">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<label class="col-sm-2 control-label" for="field-3">交易日期 (DD-MM-YYYY)：</label>
								<div class="col-sm-2">
									<input type="email" class="form-control" id="field-3" placeholder="01-11-2016">至
									<input type="email" class="form-control" id="field-3" placeholder="30-11-2016">
								</div>
							</div>
							<div class="form-group-separator"></div>
						</form>
					</div>
					<div class="form-group">
						<label class="col-sm-1 control-label" for="field-1"></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<button type="submit" class="btn btn-success"  style="width: 80px; background: #ccc; color:#515151;">提交</button>
					</div>
				</div>

				<div class="panel panel-default">
					<form role="forl" id="rootwizard" class="form-wizard validate" novalidate="novalidate">
						<ul class="tabs" style="font-size: 15px;">
							<li class="ms-hover">
								<a href="#fwv-2" data-toggle="tab">
									序号
									<span style="font-size: 14px;">1.</span>
									<span></span>
								</a>
							</li>
							<li class="ms-hover">
								<a href="#fwv-2" data-toggle="tab">
									股票名称
									<span style="font-size: 14px;">中券资本综合资产证券</span>
									<span></span>
								</a>
							</li>
							<li class="ms-hover">
								<a href="#fwv-3" data-toggle="tab">
									购买日期
									<span style="font-size: 14px;">07-11-2016</span>
									<span></span>
								</a>
							</li>
							<li class="ms-hover">
								<a href="#fwv-2" data-toggle="tab">
									普通证券
									<span style="font-size: 14px;">75.00	</span>
									<span></span>
								</a>
							</li>
							<li class="ms-hover">
								<a href="#fwv-2" data-toggle="tab">
									购买价格
									<span style="font-size: 14px;">1.10</span>
									<span></span>
								</a>
							</li>
							<li class="ms-hover">
								<a href="#fwv-3" data-toggle="tab">
									交易类型
									<span style="font-size: 14px;">卖</span>
									<span></span>
								</a>
							</li>
							<li class="ms-hover">
								<a href="#fwv-3" data-toggle="tab">
									购买率
									<span style="font-size: 14px;">6.34</span>
									<span></span>
								</a>
							</li>
						</ul>
					</form>
				</div>
<?php include 'footer.php';?>
<?php include 'header.php';?>
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">查看会员购券分</div>
					</div>
					<div class="panel-body">							
							<form role="form" class="form-horizontal">
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-3">日期从 (DD-MM-YYYY)：</label>									
									<div class="col-sm-2">
										<input type="email" class="form-control" id="field-3" placeholder="01-11-2016">至
										<input type="email" class="form-control" id="field-3" placeholder="30-11-2016">										
									</div>
								</div>						
								<div class="form-group-separator"></div>
							</form>							
					</div>
					<div class="form-group">
							<label class="col-sm-1 control-label" for="field-1"></label>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-success" style="width: 80px; background: #ccc; color:#515151;">提交</button>
					</div>
				</div>
                <div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">购券分信息</div>
					</div>
					<div class="panel-body">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<label class="col-sm-1 control-label" for="field-1">会员名字：</label>
								<div class="col-sm-6">
										aikanghui
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-1 control-label" for="field-1">会员编号：</label>
								<div class="col-sm-6">
										90993559
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-1 control-label" for="field-1">余额：</label>
								<div class="col-sm-6">
									0.00
								</div>
							</div>							
						</form>
					</div>
				</div>
				
				 <div class="panel panel-default">
	        <form role="forl" id="rootwizard" class="form-wizard validate" novalidate="novalidate">				
				<ul class="tabs">
					<li class="ms-hover">
						<a href="#fwv-2" data-toggle="tab">
							序号
							<span>合计</span>	
							<span></span>							
						</a>
					</li>
					<li class="ms-hover">
						<a href="#fwv-2" data-toggle="tab">
							进
							<span>0.00</span>
							<span></span>
						</a>
					</li>
					<li class="ms-hover">
						<a href="#fwv-3" data-toggle="tab">
							出
							<span><b>0.00</b></span>
							<span></span>
						</a>
					</li>
					<li class="ms-hover">
						<a href="#fwv-2" data-toggle="tab">
							交易类型
							<span></span>	
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>						
						</a>
					</li>
					<li class="ms-hover">
						<a href="#fwv-2" data-toggle="tab">
							日期
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</a>
					</li>
					<li class="ms-hover">
						<a href="#fwv-3" data-toggle="tab">
							备注
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</a>
					</li>
					<li class="ms-hover">
						<a href="#fwv-3" data-toggle="tab">
							通过
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</a>
					</li>
				</ul>
			</form>
	    </div>
	<?php include 'footer.php';?>
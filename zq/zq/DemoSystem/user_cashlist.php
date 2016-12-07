<?php include 'header.php';?>
<div class="page-title">
	<div class="title-env">
		<h1 class="title">用户提现订单</h1>
		<p class="description"></p>
	</div>
	<div class="breadcrumb-env">
		<ol class="breadcrumb bc-1">
			<li>
				<a href="index.php"><i class="fa-home"></i>Home</a>
			</li>
			<li class="active">
				<strong>用户提现订单</strong>
			</li>
		</ol>
	</div>
</div>
<!-- Errors container -->
<div class="message-container">

</div>
<div class="panel panel-default">
    <div class="panel-body">
		<div class="row">
			<div class="col-md-12">
				<form role="form" class="form-horizontal" action="#" method="post">
                    <div class="form-group">
                        <label class="col-sm-1 control-label" for="username">用户名</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="username" name="username" placeholder="请输入用户名/真实姓名/用户编号" value="" >
                        </div>
						<label class="col-sm-1 control-label" for="applytime">申请时间</label>
                        <div class="col-sm-2">
                            <input class="form-control daterange active" id="applytime" name="applytime" type="text">
                        </div>
						<label class="col-sm-1 control-label">支付状态</label>
                        <div class="col-sm-2">
                            <select class="form-control">
								<option selected>全部</option>
								<option>未支付</option>
								<option>已支付</option>
							</select>
                        </div>
                        <button class="btn btn-secondary col-sm-1">查询</button>
						<button class="btn btn-blue col-sm-1">导出</button>
					</div>
				</form>
			</div>
		</div>
        <table class="table table-small-font table-bordered table-striped" cellspacing="0">
            <thead>
                <tr>	
                    <th>序号</th>
					<th>订单编号</th>
                    <th>用户名</th>
                    <th>姓名</th>
					<th>银行名</th>
                    <th>银行卡号</th>
					<th>申请时间</th>
					<th>提现金额(元)</th>
					<th>支付状态</th>
					<th></th>
                </tr>
            </thead>
            <tbody>
				<tr>
					<td>1</td>
					<td>SN20161130151403001</td>
                    <td>zxkj_n005</td>
					<td>陈奕迅</td>
					<td>中国人民很行</td>
					<td>6210000080005001</td>
					<td>2016-12-1 14:27:39</td>
					<td>800.00</td>
                    <td>未支付</td>
					<td>
						<a onclick="$('.message-container .alert').slideUp('fast');jQuery('#arrivaled').modal('show', {backdrop: 'static'});" class="btn btn-blue btn-sm btn-icon icon-left">确认提现</a>
					</td>
                </tr>
				<tr>
					<td>2</td>
					<td>SN20161130151403001</td>
                    <td>zxkj_n005</td>
					<td>陈奕迅</td>
					<td>中国人民很行</td>
					<td>6210000080005001</td>
					<td>2016-12-1 14:27:39</td>
					<td>800.00</td>
                    <td>已支付</td>
					<td></td>
                </tr>
            </tbody>
        </table>
		<?php include 'pageno.php';?>
	</div>
</div>
<?php include 'footer.php';?>
<!-- arrivaled (Confirm)-->
<div class="modal fade" id="arrivaled" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">确认到帐</h4>
            </div>	
			<!-- Errors container -->
			<div class="securityThaw-container">

			</div>
            <div class="modal-body">
				确认用户 邱欣怡 的提现金额：<span class="text-danger">500.00</span>已到账？ 
			</div>
            <div class="modal-footer">
                <button type="button" id="cancel" class="btn btn-white" data-dismiss="modal">取消</button>
                <button type="button" id="arrivaled" class="btn btn-info" data-dismiss="modal" onclick="arrivaled();">确认提现</button>
            </div>
        </div>
    </div>
</div>

<script>
	function arrivaled() {
		// Remove any alert
		$(".message-container .alert").slideUp('fast');
		
		// Show message
		$(".message-container").html('<div class="alert alert-success">\
			<button type="button" class="close" data-dismiss="alert">\
					<span aria-hidden="true">&times;</span>\
					<span class="sr-only">Close</span>\
			</button>\
			确认提现成功！\
			</div>');
		$(".message-container .alert").hide().slideDown();
	}
</script>
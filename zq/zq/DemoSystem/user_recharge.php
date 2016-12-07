<?php include 'header.php';?>
<div class="page-title">
	<div class="title-env">
		<h1 class="title">用户充值订单</h1>
		<p class="description"></p>
	</div>
	<div class="breadcrumb-env">
		<ol class="breadcrumb bc-1">
			<li>
				<a href="index.php"><i class="fa-home"></i>Home</a>
			</li>
			<li class="active">
				<strong>用户充值订单</strong>
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
                        <label class="col-sm-1 control-label" for="money">用户名</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="money" id="username" placeholder="请输入用户名/真实姓名/用户编号" value="" >
                        </div>
						<label class="col-sm-1 control-label" for="applytime">充值时间</label>
                        <div class="col-sm-2">
                            <input class="form-control daterange active" id="applytime" name="applytime" type="text">
                        </div>
						<label class="col-sm-1 control-label">支付状态</label>
                        <div class="col-sm-2">
                            <select class="form-control">
								<option>全部</option>
								<option>未支付</option>
								<option selected>已支付</option>
							</select>
                        </div>
                        <button class="btn btn-secondary col-sm-1">查询</button>
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
                    <th>充值金额</th>
					<th>充值手续费</th>
                    <th>实际支付金额</th>
					<th>第三方交易流水号</th>
					<th>支付状态</th>
					<th>支付时间</th>
					<th>备注</th>
					<th></th>
                </tr>
            </thead>
            <tbody>
				<tr>
					<td>1</td>
					<td>SN20161130151403001</td>
                    <td>zxkj_n005</td>
					<td>0.00</td>
					<td><span class="text-danger">0.00</span></td>
					<td>0.00</td>
					<td>SN20161130151403001</td>
					<td>未支付</td>
					<td>2016-11-24 17:14:30</td>
                    <td></td>
					<td>
						<a onclick="$('.message-container .alert').slideUp('fast');jQuery('#orderHand').modal('show', {backdrop: 'static'});" class="btn btn-blue btn-sm btn-icon icon-left">手工到账</a>
					</td>
                </tr>
				<tr>
					<td>2</td>
					<td>SN20161130151403001</td>
                    <td>zxkj_n005</td>
					<td>0.00</td>
					<td><span class="text-danger">0.00</span></td>
					<td>0.00</td>
					<td>SN20161130151403001</td>
					<td>已支付</td>
					<td>2016-11-24 17:14:30</td>
                    <td></td>
					<td></td>
                </tr>
            </tbody>
        </table>
		<?php include 'pageno.php';?>
	</div>
</div>
<?php include 'footer.php';?>
<!-- orderHand (Confirm)-->
<div class="modal fade" id="orderHand" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">手工到账</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-2" class="control-label">订单编号：</label>
							<input type="text" class="form-control" id="" name="" value="SN20161130151403001" disabled>
                        </div>
						<div class="form-group">
                            <label for="field-2" class="control-label">用户名：</label>			
                            <input type="text" class="form-control" id="" name="" value="zxkj_n005" disabled>
                        </div>
						<div class="form-group">
                            <label for="field-2" class="control-label">充值金额：</label>			
                            <input type="text" class="form-control" id="" name="" value="0.00" disabled>
                        </div>
						<div class="form-group">
                            <label for="field-2" class="control-label">充值手续费：</label>			
                            <input type="text" class="form-control" id="" name="" value="0.00" disabled>
                        </div>
						<div class="form-group">
                            <label for="field-2" class="control-label">实际支付金额：</label>			
                            <input type="text" class="form-control" id="" name="" value="0.00" disabled>
                        </div>
                        <div class="form-group">
                            <label for="field-2" class="control-label">第三方交易流水号：</label>			
                            <input type="text" class="form-control" id="" name="" value="">
                        </div>
						<div class="form-group">
                            <label for="field-2" class="control-label">备注：</label>			
                            <input type="text" class="form-control" id="" name="" value="">
                        </div>
                    </div>
                </div>			
            </div>
            <div class="modal-footer">
                <button type="button" id="cancel" class="btn btn-white" data-dismiss="modal">取消</button>
                <button type="button" id="orderHand" class="btn btn-info" data-dismiss="modal" onclick="orderHand();">确认到帐</button>
            </div>
        </div>
    </div>
</div>

<script>
	function orderHand() {
		// Remove any alert
		$(".message-container .alert").slideUp('fast');
		
		// Show message
		$(".message-container").html('<div class="alert alert-success">\
			<button type="button" class="close" data-dismiss="alert">\
					<span aria-hidden="true">&times;</span>\
					<span class="sr-only">Close</span>\
			</button>\
			订单充值成功！\
			</div>');
		$(".message-container .alert").hide().slideDown();
	}
</script>
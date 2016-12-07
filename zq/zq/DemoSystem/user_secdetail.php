<?php include 'header.php';?>
<div class="page-title">
	<div class="title-env">
		<h1 class="title">用户证券订单</h1>
		<p class="description"></p>
	</div>
	<div class="breadcrumb-env">
		<ol class="breadcrumb bc-1">
			<li>
				<a href="index.php"><i class="fa-home"></i>Home</a>
			</li>
			<li class="active">
				<strong>用户证券订单</strong>
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
                    <th>购买数量</th>
					<th>回报杠杆</th>
                    <th>交易金额</th>
					<th>实际成交数量</th>
					<th>实际支付金额</th>
					<th>订单欠款</th>
					<th>成交时间</th>
					<th>备注</th>
					<th></th>
                </tr>
            </thead>
            <tbody>
				<tr>
					<td>1</td>
					<td>SN20161130151403001</td>
					<td>zxkj_n005</td>
                    <td>5000</td>
					<td>2.00</td>
                    <td>0.00</td>
					<td>0.00</td>
					<td>0.00</td>
					<td><span class="text-danger">-0.00</span></td>
                    <td>2016-11-24 17:14:30</td>
					<td>特殊情况下实际花费金额1000</td>
					<td>
						<a onclick="$('.message-container .alert').slideUp('fast');jQuery('#orderEdit').modal('show', {backdrop: 'static'});" class="btn btn-blue btn-sm btn-icon icon-left">编辑</a>
						<a onclick="$('.message-container .alert').slideUp('fast');jQuery('#orderDelete').modal('show', {backdrop: 'static'});" class="btn btn-red btn-sm btn-icon icon-left">删除</a>
					</td>
                </tr>
            </tbody>
        </table>
		<?php include 'pageno.php';?>
	</div>
</div>
<?php include 'footer.php';?>
<!-- orderEdit (Confirm)-->
<div class="modal fade" id="orderEdit" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">证券订单修改</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-2" class="control-label">证券份额：</label>
							<select class="form-control" id="securities" name="securities" disabled>
								<option>1000</option>
							</select>
                        </div>
						<div class="form-group">
                            <label for="field-2" class="control-label">杠杆率：</label>			
                            <input type="text" class="form-control" id="levered" name="levered" value="0.00" disabled>
                        </div>
						<div class="form-group">
                            <label for="field-2" class="control-label">实际成交数量：</label>			
                            <input type="text" class="form-control" id="securitiesnum" name="securitiesnum" value="0.00" disabled>
                        </div>
						<div class="form-group">
                            <label for="field-2" class="control-label">交易金额：</label>			
                            <input type="text" class="form-control" id="price" name="price" value="0.00" disabled>
                        </div>
                        <div class="form-group">
                            <label for="field-2" class="control-label">实际支付金额：</label>			
                            <input type="text" class="form-control" id="realprice" name="realprice" value="0.00">
                        </div>
                    </div>
                </div>			
            </div>
            <div class="modal-footer">
                <button type="button" id="cancel" class="btn btn-white" data-dismiss="modal">取消</button>
                <button type="button" id="orderEdit" class="btn btn-info" data-dismiss="modal" onclick="orderEdit();">确认修改</button>
            </div>
        </div>
    </div>
</div>
<!-- orderDelete (Confirm)-->
<div class="modal fade" id="orderDelete" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">订单删除</h4>
            </div>	
			<!-- Errors container -->
			<div class="securityThaw-container">

			</div>
            <div class="modal-body">
				确认删除此订单？
			</div>
            <div class="modal-footer">
                <button type="button" id="cancel" class="btn btn-white" data-dismiss="modal">取消</button>
                <button type="button" id="orderDelete" class="btn btn-info" data-dismiss="modal" onclick="orderDelete();">确认删除</button>
            </div>
        </div>
    </div>
</div>

<script>
	function orderEdit() {
		// Remove any alert
		$(".message-container .alert").slideUp('fast');
		
		// Show message
		$(".message-container").html('<div class="alert alert-success">\
			<button type="button" class="close" data-dismiss="alert">\
					<span aria-hidden="true">&times;</span>\
					<span class="sr-only">Close</span>\
			</button>\
			证券订单修改成功！\
			</div>');
		$(".message-container .alert").hide().slideDown();
	}

	function orderDelete() {
		// Remove any alert
		$(".message-container .alert").slideUp('fast');
		
		// Show message
		$(".message-container").html('<div class="alert alert-success">\
			<button type="button" class="close" data-dismiss="alert">\
					<span aria-hidden="true">&times;</span>\
					<span class="sr-only">Close</span>\
			</button>\
			证券订单删除成功！\
			</div>');
		$(".message-container .alert").hide().slideDown();
	}
</script>
<?php include 'header.php';?>
<div class="page-title">
	<div class="title-env">
		<h1 class="title">用户证券账户</h1>
		<p class="description"></p>
	</div>
	<div class="breadcrumb-env">
		<ol class="breadcrumb bc-1">
			<li>
				<a href="index.php"><i class="fa-home"></i>Home</a>
			</li>
			<li class="active">
				<strong>用户证券账户</strong>
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
                    <th>用户编号</th>
                    <th>用户名</th>
                    <th>证券推荐人</th>
                    <th>证券网络上级(位置)</th>
                    <th>可提现数量</th>
					<th>持有证券数量</th>
					<th>证券购买欠款</th>
                    <th>证券钱包余额</th>
					<th>证券钱包冻结余额</th>
                    <th>注册时间</th>
					<th></th>
                </tr>
            </thead>
            <tbody>
				<tr>
					<td>cn51280729</td>
					<td>zxkj_n005</td>
                    <td>zxkj_001</td>
					<td>zxkj_001(左边)</td>
                    <td><span class="text-danger">0.00</span></td>
					<td>0.00</td>
					<td><span class="text-danger">-0.00</span></td>
					<td>0.00</td>
					<td>0.00</td>
                    <td>2016-11-24 17:14:30</td>
					<td>
						<a href="user_secdetail.php" class="btn btn-blue btn-sm btn-icon icon-left" target="_blank">订单详情</a>
						<a onclick="$('.message-container .alert').slideUp('fast');jQuery('#securityOrder').modal('show', {backdrop: 'static'});" class="btn btn-turquoise btn-sm btn-icon icon-left">手工入单</a>
						<a onclick="$('.message-container .alert').slideUp('fast');jQuery('#securityThaw').modal('show', {backdrop: 'static'});" class="btn btn-red btn-sm btn-icon icon-left">证券解冻</a>
						<a onclick="$('.message-container .alert').slideUp('fast');jQuery('#securityThaw').modal('show', {backdrop: 'static'});" class="btn btn-red btn-sm btn-icon icon-left" disabled>证券解冻</a>
					</td>
                </tr>
            </tbody>
        </table>
		<?php include 'pageno.php';?>
	</div>
</div>
<?php include 'footer.php';?>
<!-- securityOrder (Confirm)-->
<div class="modal fade" id="securityOrder" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">证券入单</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-2" class="control-label">证券份额：</label>
							<select class="form-control" id="securities" name="securities">
								<option>1000</option>
							</select>
                        </div>
						<div class="form-group">
                            <label for="field-2" class="control-label">杠杆率：</label>			
                            <input type="text" class="form-control" id="levered" name="levered" value="0.00" disabled>
                        </div>
						<div class="form-group">
                            <label for="field-2" class="control-label">实获证券数量：</label>			
                            <input type="text" class="form-control" id="securitiesnum" name="securitiesnum" value="0.00" disabled>
                        </div>
						<div class="form-group">
                            <label for="field-2" class="control-label">应付金额：</label>			
                            <input type="text" class="form-control" id="price" name="price" value="0.00" disabled>
                        </div>
                        <div class="form-group">
                            <label for="field-2" class="control-label">实收金额：</label>			
                            <input type="text" class="form-control" id="realprice" name="realprice" value="0.00">
                        </div>
                    </div>
                </div>			
            </div>
            <div class="modal-footer">
                <button type="button" id="cancel" class="btn btn-white" data-dismiss="modal">取消</button>
                <button type="button" id="securityOrder" class="btn btn-info" data-dismiss="modal" onclick="securityOrder();">确认入单</button>
            </div>
        </div>
    </div>
</div>
<!-- securityThaw (Confirm)-->
<div class="modal fade" id="securityThaw" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">持有证券解冻</h4>
            </div>	
			<!-- Errors container -->
			<div class="securityThaw-container">

			</div>
            <div class="modal-body">
				陈奕迅 持有证券冻结数量：1000.00，确认解冻？
			</div>
            <div class="modal-footer">
                <button type="button" id="cancel" class="btn btn-white" data-dismiss="modal">取消</button>
                <button type="button" id="securityThaw" class="btn btn-info" data-dismiss="modal" onclick="securityThaw();">确认并解冻</button>
            </div>
        </div>
    </div>
</div>

<script>
	function securityOrder() {
		// Remove any alert
		$(".message-container .alert").slideUp('fast');
		
		// Show message
		$(".message-container").html('<div class="alert alert-success">\
			<button type="button" class="close" data-dismiss="alert">\
					<span aria-hidden="true">&times;</span>\
					<span class="sr-only">Close</span>\
			</button>\
			证券入单成功！\
			</div>');
		$(".message-container .alert").hide().slideDown();
	}

	function securityThaw() {
		// Remove any alert
		$(".message-container .alert").slideUp('fast');
		
		// Show message
		$(".message-container").html('<div class="alert alert-success">\
			<button type="button" class="close" data-dismiss="alert">\
					<span aria-hidden="true">&times;</span>\
					<span class="sr-only">Close</span>\
			</button>\
			持有证券解冻成功！\
			</div>');
		$(".message-container .alert").hide().slideDown();
	}
</script>
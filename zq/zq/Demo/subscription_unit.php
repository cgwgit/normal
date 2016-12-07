<?php include 'header.php';?>
<div class="row">
	<div class="col-sm-1"></div>
	<div class="col-sm-9">
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title">证券投资额度</div>
			</div>
			<div class="panel-body">
				<!-- Errors container -->
				<div class="errors-container">
									
				</div>
				<div class="col-sm-12">
					<table cellspacing="0" class="table table-small-font table-bordered table-striped">
						<thead>
							<tr>
								<th>序号</th>
								<th>证券数量</th>
								<th>杠杆率</th>
								<th style="display:none">证券价格</th>
								<th style="display:none">获得证券数量</th>
							</tr>
						</thead>
						<tbody>
							<tr class="check" gid="3">
								<td>3.</span></td>
								<td>20000.00</td>
								<td>3.50</td>
								<td style="display:none">20200.00</td>
								<td style="display:none">70000.00</td>
							</tr>	
							<tr class="check" gid="2">
								<td>2.</span></td>
								<td>10000.00</td>
								<td>3.00</td>
								<td style="display:none">10100.00</td>
								<td style="display:none">30000.00</td>
							</tr>	
							<tr class="check" gid="1">
								<td>1.</span></td>
								<td>5000.00</td>
								<td>2.00</td>
								<td style="display:none">5050.00</td>
								<td style="display:none">10000.00</td>
							</tr>	
						</tbody>
					</table>
				</div>
				<form role="form" class="form-horizontal">
					<div class="form-group">
						<input type="hidden" id="gid" value="">
					   <label class="col-sm-5 control-label" for="field-1"></label>
					   <button id="sub" class="btn btn-red btn-icon btn-icon-standalone">
							<i class="fa-magic"></i>
							<span>确认购买</span>
						</button>
				   </div>
				  </form>
			</div>
		</div>	
	</div>	
</div>
<script>
    $('.check').click(function(){
        $('.oncheck').html($(this).html());
        $('.check').find('td').css('background-color', '');
		$('.check').find('td').css('color', '');
        $('.oncheck').find('td').css('background-color', '');
		$('.oncheck').find('td').css('color', '');
        $('.oncheck').find('td').css('display', '');
        $(this).find('td').css('background-color', '#E6BE34');
		$(this).find('td').css('color', '#fff');
        $('#gid').val($(this).attr('gid'));
    });
    
    $('#sub').click(function(){
		// Remove any alert
		$(".errors-container .alert").slideUp('fast');
        var gid = $('#gid').val();
        if(!gid){
			$(".errors-container").html('<div class="alert alert-danger">\
				<button type="button" class="close" data-dismiss="alert">\
					<span aria-hidden="true">&times;</span>\
					<span class="sr-only">Close</span>\
				</button>\
				您还没有选择投资额度\
			</div>');
			$(".errors-container .alert").hide().slideDown();
        }
		jQuery('confirmOrder').modal('show');
		$.post('/zq/index.php/Home/Unit/buy.html', {id : gid}, function(res){
//                console.log(res.code);
			if(res.code == 0){
				$(".errors-container .alert").slideUp('fast');
				$(".errors-container").html('<div class="alert alert-success">\
					<button type="button" class="close" data-dismiss="alert">\
						<span aria-hidden="true">&times;</span>\
						<span class="sr-only">Close</span>\
					</button>\
					购买成功\
				</div>');
				$(".errors-container .alert").hide().slideDown();
				window.location.href = '/zq/index.php/Home/List/tradeList.html';
			}else{
				$(".errors-container").html('<div class="alert alert-danger">\
					<button type="button" class="close" data-dismiss="alert">\
						<span aria-hidden="true">&times;</span>\
						<span class="sr-only">Close</span>\
					</button>\
					余额不足，点击前往&nbsp;&nbsp;<a href="subscription_recharge.php"><b style="color:white;">充值</b></a>\
				</div>');
				$(".errors-container .alert").hide().slideDown();
			}
			return false;
		}, 'json');
        return false;
    });
</script>
<!-- 确认支付 -->
<?php include 'footer.php';?>
<div class="modal fade" id="confirmOrder" data-backdrop="static">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">确认购买</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="field-1" class="control-label">证券数量：</label>
							<label for="field-1" class="control-label-content">5000</label>
						</div>
						<div class="form-group">
							<label for="field-1" class="control-label">杠杆率：</label>
							<label for="field-1" class="control-label-content">2</label>
						</div>
						<div class="form-group">
							<label for="field-1" class="control-label">实际获得证券数量：</label>
							<label for="field-1" class="control-label-content">10000</label>
						</div>
						<div class="form-group">
							<label for="field-1" class="control-label">支付金额：</label>
							<label for="field-1" class="control-label-content">5000</label>
						</div>
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-white" data-dismiss="modal">取消</button>
				<button type="button" class="btn btn-info" data-dismiss="modal">确认支付</button>
			</div>
		</div>
	</div>
</div>
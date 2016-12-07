<?php include 'header.php';?>
<div class="row">
	<div class="col-sm-1"></div>
	<div class="col-sm-9">
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title">现金充值</div>
			</div>
			<div class="panel-body">
				<!-- Errors container -->
				<div class="errors-container">
									
				</div>
				<form role="form" class="form-horizontal" method="post">
					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-1">充值金额</label>
						<div class="col-sm-4">
							<input type="text" class="form-control"  id="money" name='paymoney' placeholder="" onblur="if(!this.value.match(/^[\+\-]?\d*?\.?\d*?$/))this.value=this.t_value;else this.t_value=this.value;if(this.value.match(/^(?:[\+\-]?\d+(?:\.\d+)?)?$/))this.o_value=this.value" onkeyup="if(!this.value.match(/^[\+\-]?\d*?\.?\d*?$/))this.value=this.t_value;else this.t_value=this.value;if(this.value.match(/^(?:[\+\-]?\d+(?:\.\d+)?)?$/))this.o_value=this.value;fff();">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-1">支付方式</label>
						<div class="col-sm-2">
							<input name="radio" id='f1' type="radio" value='1' checked>&nbsp;&nbsp;<img src="http://static.48.cn/Bank/images/bank/Bank_wx.gif">
						</div>
						<div class="col-sm-2">
							<input name="radio" id='f2' type="radio" value='2'>&nbsp;&nbsp;<img src="http://static.48.cn/Bank/images/bank/Bank_ZFB.gif">
						</div>
					</div>
					<div class="form-group has-error">
						<label class="col-sm-2 control-label" for="field-6">充值手续费</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="coin" name='paypmoney' value="" readonly>
						</div>
					</div>
					<div class="form-group has-error">
						<label class="col-sm-2 control-label" for="field-6">合计</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="sumMoney" name='payrmoney' value="" readonly>
						</div>
					</div>
					<div class="form-group-separator"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label"></label>
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
    function fff() {
		// Remove any alert
        $('#coin').val(($('#money').val() * 0.006).toFixed(3));
        $('#sumMoney').val($('#money').val() * 1 + $('#coin').val() * 1);
    }

	$('#sub').click(function(){
		// Remove any alert
		$(".errors-container .alert").slideUp('fast');
        var gid = $('#money').val();
		if(!gid){
			$(".errors-container").html('<div class="alert alert-danger">\
				<button type="button" class="close" data-dismiss="alert">\
					<span aria-hidden="true">&times;</span>\
					<span class="sr-only">Close</span>\
				</button>\
				请输入充值金额\
			</div>');
			$(".errors-container .alert").hide().slideDown();
            return false;
		}
		if(gid<=1){
			$(".errors-container").html('<div class="alert alert-danger">\
				<button type="button" class="close" data-dismiss="alert">\
					<span aria-hidden="true">&times;</span>\
					<span class="sr-only">Close</span>\
				</button>\
				请输入正确的充值金额\
			</div>');
			$(".errors-container .alert").hide().slideDown();
            return false;
		}
    });
</script>
<?php include 'footer.php';?>
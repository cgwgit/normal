<?php include 'header.php';?>
<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title">转账至钱包</div>
            </div>
            <div class="panel-body">
				<!-- Errors container -->
				<div class="errors-container">
									
				</div>
                <form role="form" class="form-horizontal" >
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="field-1">可提取证券数量</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control"  id="money" name='money' value="0.00" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="field-1">当前证券兑换率</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control"  id="rate" name='rate' value="1.01" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="field-6">扣除手续费(5%)</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="poundage" name='poundage' value="0.00" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="field-6">实际到帐金额</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="trueMoney" name='trueMoney' value="0.00" disabled>
                        </div>
                    </div>
                    <div class="form-group-separator"></div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"></label>
                        <a href="javascript:void(0)" id="sub" class="btn btn-red btn-icon btn-icon-standalone" onclick="ff()">
                            <i class="fa-magic"></i>
                            <span>确认提取</span>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function ff() {
		// Remove any alert
		$(".errors-container .alert").slideUp('fast');
        var money = $("#money").val();
//        alert(money)
        if (money<=0) {
			$(".errors-container").html('<div class="alert alert-danger">\
				<button type="button" class="close" data-dismiss="alert">\
					<span aria-hidden="true">&times;</span>\
					<span class="sr-only">Close</span>\
				</button>\
				可提现证券余额不足\
			</div>');
			$(".errors-container .alert").hide().slideDown();
            return false;
        }
        var check = confirm('确定提现？');
        if (check) {
            $.post('/zq/index.php/Home/Unit/withdraw', {money: $("#money").val()}, function (res) {
//                console.log(res.code);
                if (res.code == 0) {
					$(".errors-container .alert").slideUp('fast');
					$(".errors-container").html('<div class="alert alert-danger">\
						<button type="button" class="close" data-dismiss="alert">\
							<span aria-hidden="true">&times;</span>\
							<span class="sr-only">Close</span>\
						</button>\
						'+res.message+'\
					</div>');
					$(".errors-container .alert").hide().slideDown();
                    window.location.href = '/zq/index.php/Home/Index/index';
                } else {
                    $(".errors-container .alert").slideUp('fast');
					$(".errors-container").html('<div class="alert alert-danger">\
						<button type="button" class="close" data-dismiss="alert">\
							<span aria-hidden="true">&times;</span>\
							<span class="sr-only">Close</span>\
						</button>\
						'+res.message+'\
					</div>');
					$(".errors-container .alert").hide().slideDown();
                }
                return false;
            }, 'json');
        }
        return false;
    }
</script>
<?php include 'footer.php';?>
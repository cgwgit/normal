<?php include 'header.php';?>
<div class="panel panel-default">
	<div class="panel-heading">
		<div class="panel-title">现金充值</div>
	</div>
	<div class="panel-body">
		<form role="form" class="form-horizontal">
			<div class="form-group">
				<label class="col-sm-1 control-label" for="field-1">充值金额</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="field-1" placeholder="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-1 control-label" for="field-1">支付方式</label>
				<div class="col-sm-1">
					<div class="cbr-replaced cbr-radio cbr-primary cbr-checked"><div class="cbr-input"><input name="radio-1" class="cbr cbr-done" type="radio"></div><div class="cbr-state"><span></span></div></div>微信支付		
				</div>
				<div class="col-sm-1">
					<div class="cbr-replaced cbr-radio cbr-primary"><div class="cbr-input"><input name="radio-2" class="cbr cbr-done" type="radio"></div><div class="cbr-state"><span></span></div></div>支付宝支付		
				</div>
				<div class="col-sm-1">
					<div class="cbr-replaced cbr-radio cbr-primary"><div class="cbr-input"><input name="radio-3" class="cbr cbr-done" type="radio"></div><div class="cbr-state"><span></span></div></div>丰付支付		
				</div>
			</div>
			<div class="form-group has-error">
				<label class="col-sm-1 control-label" for="field-6">充值手续费</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="field-1" placeholder="1.10" disabled="disabled">
				</div>
			</div>
			<div class="form-group has-error">
				<label class="col-sm-1 control-label" for="field-6">合计</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="field-1" placeholder="0.00" disabled="disabled">
				</div>
			</div>
			<div class="form-group-separator"></div>
			<div class="form-group">
				<label class="col-sm-1 control-label" for="field-1"></label>
				&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-success"style="width: 80px; background: #ccc; color:#515151;">确认充值</button>
			</div>
		</form>
	</div>
</div>
<?php include 'footer.php';?>
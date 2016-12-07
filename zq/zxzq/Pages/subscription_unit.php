<?php include 'header.php';?>
<div class="panel panel-default">
	<div class="panel-heading">
		<div class="panel-title">兑换率</div>
	</div>
		<div class="panel-body">							
			<form role="form" class="form-horizontal">
				<div class="form-group">
					<label class="col-sm-1 control-label" for="field-1">证券兑换率</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" id="field-1" placeholder="1.0000" disabled>
					</div>
				</div>
			</form>
		</div>
</div>
<div class="panel panel-default">
	<div class="panel-heading">
		<div class="panel-title">证券投资额度</div>
	</div>
	
	<table cellspacing="0" class="table table-small-font table-bordered table-striped">
		<thead>
			<tr>
				<th id="id8f19801c970a5-col-0">序号	</th>
				<th data-priority="1" id="id8f19801c970a5-col-1">货物名称</th>
				<th data-priority="3" id="id8f19801c970a5-col-2">数量</th>
				<th data-priority="1" id="id8f19801c970a5-col-3">证券价格</th>
				<th data-priority="3" id="id8f19801c970a5-col-4">单位</th>
				<th data-priority="3" id="id8f19801c970a5-col-5">总价格</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th colspan="1" data-columns="id8f19801c970a5-col-0"><span class="co-name">1.</span></th>
				<td data-priority="1" colspan="1" data-columns="id8f19801c970a5-col-1">C800</td>
				<td data-priority="3" colspan="1" data-columns="id8f19801c970a5-col-2"></td>
				<td data-priority="1" colspan="1" data-columns="id8f19801c970a5-col-3">880.00</td>
				<td data-priority="3" colspan="1" data-columns="id8f19801c970a5-col-4">800.00</td>
				<td data-priority="3" colspan="1" data-columns="id8f19801c970a5-col-5"></td>
			</tr>	
			<tr>
				<th colspan="1" data-columns="id8f19801c970a5-col-0"><span class="co-name">2.</span></th>
				<td data-priority="1" colspan="1" data-columns="id8f19801c970a5-col-1">C2500</td>
				<td data-priority="3" colspan="1" data-columns="id8f19801c970a5-col-2"></td>
				<td data-priority="1" colspan="1" data-columns="id8f19801c970a5-col-3">2750.00</td>
				<td data-priority="3" colspan="1" data-columns="id8f19801c970a5-col-4">2500.00</td>
				<td data-priority="3" colspan="1" data-columns="id8f19801c970a5-col-5"></td>
			</tr>	
			<tr>
				<th colspan="1" data-columns="id8f19801c970a5-col-0"><span class="co-name">3.</span></th>
				<td data-priority="1" colspan="1" data-columns="id8f19801c970a5-col-1">C8000</td>
				<td data-priority="3" colspan="1" data-columns="id8f19801c970a5-col-2"></td>
				<td data-priority="1" colspan="1" data-columns="id8f19801c970a5-col-3">8800.00</td>
				<td data-priority="3" colspan="1" data-columns="id8f19801c970a5-col-4">8000.00</td>
				<td data-priority="3" colspan="1" data-columns="id8f19801c970a5-col-5"></td>
			</tr>	
			<tr>
				<th colspan="1" data-columns="id8f19801c970a5-col-0"><span class="co-name">4.</span></th>
				<td data-priority="1" colspan="1" data-columns="id8f19801c970a5-col-1">C25000</td>
				<td data-priority="3" colspan="1" data-columns="id8f19801c970a5-col-2"></td>
				<td data-priority="1" colspan="1" data-columns="id8f19801c970a5-col-3">27500.00</td>
				<td data-priority="3" colspan="1" data-columns="id8f19801c970a5-col-4">25000.00</td>
				<td data-priority="3" colspan="1" data-columns="id8f19801c970a5-col-5"></td>
			</tr>	
		</tbody>
	</table>
		
		
	<div class="panel panel-default">
	<div class="panel-heading">
		<div class="panel-title">购买清单</div>
	</div>
	
	<table cellspacing="0" class="table table-small-font table-bordered table-striped">
		<thead>
			<tr>
				<th id="id8f19801c970a5-col-0">序号	</th>
				<th data-priority="1" id="id8f19801c970a5-col-1">货物名称</th>
				<th data-priority="3" id="id8f19801c970a5-col-2">数量</th>
				
			</tr>
		</thead>
		<tbody>
			<tr>
				<th colspan="1" data-columns="id8f19801c970a5-col-0"><span class="co-name">0.00</span></th>
				<td data-priority="1" colspan="1" data-columns="id8f19801c970a5-col-1">0.00</td>
				<td data-priority="3" colspan="1" data-columns="id8f19801c970a5-col-2">0.00</td>							
			</tr>							
		</tbody>
	</table>		
	
	<div class="panel panel-default">					
			<div class="panel-body">							
				<form role="form" class="form-horizontal">														
					<div class="form-group">
					   <label class="col-sm-1 control-label" for="field-1"></label>
					   &nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-success" style="width: 80px; background: #ccc; color:#515151;">确认购买</button>
				   </div>
				</form>							
			</div>
	</div>								
</div>
<?php include 'footer.php';?>
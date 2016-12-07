<?php include 'header.php';?>
<div class="row">
	<div class="col-sm-1"></div>
	<div class="col-sm-9">
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title"><i class="fa fa-bar-chart"></i>&nbsp;&nbsp;证券交易明细</div>
			</div>
			<div class="panel-body">
				<table cellspacing="0" class="table table-small-font table-bordered table-striped">
					<thead>
						<tr>
							<th>序号</th>
							<th>订单编号</th>
							<th>购买数量</th>
							<th>交易金额</th>
							<th>回报杠杆</th>
							<th>实际成交数量</th>
							<th>成交时间</th>
							<!--<th>付款时间</th>
							<th>交易状态</th>-->
						</tr>
					</thead>
					<tbody>
												<tr>
							<td>1.</td>
							<th>201611181736395274</th>
							<td>5000.00</td>
							<td>5050.00</td>
							<td>2.00</td>
							<td>10000.00</td>
							<td>2016-11-18 17:36:39</td>
							<!--<td></td>
							<td>1</td></tr>-->	
											</tr></tbody>
				</table>
			</div>
			<div class="row"><div class="col-xs-6"><div class="dataTables_info" id="example-1_info" role="status" aria-live="polite"></div></div><div class="col-xs-6"><div class="dataTables_paginate paging_simple_numbers" id="example-1_paginate"><nav><ul class="pagination"><li class="paginate_button previous "><a class="first" href="/zq/index.php/Home/List/tradeList/p/1.html">首页</a></li>  <li class="paginate_button"><span class="current">1</span></li>  <li class="paginate_button next"><a class="end" href="/zq/index.php/Home/List/tradeList/p/1.html">尾页</a></li></ul></nav></div></div></div>
		</div>
	</div>
</div>
<?php include 'footer.php';?>
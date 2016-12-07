<?php include 'header.php';?>
<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-9">
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title"><i class="fa fa-bar-chart"></i>&nbsp;&nbsp;未设置网络位置用户</div>
			</div>
			<div class="panel-body">
				<table class="table table-small-font table-bordered table-striped" cellspacing="0">
					<thead>
						<tr>
							<th>序号</th>
							<th>用户名</th>
							<th>注册时间</th>
							<th>持有证券数量</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>username1</td>
							<td>2016-11-21 14:12:33</td>
							<td>0.00</td>
							<td>
								<div class="form-group">
									<div class="col-sm-2">
										<a onclick="jQuery('#modal-4').modal('show', {backdrop: 'static'});" class="btn btn-info btn-sm btn-icon icon-left">
											设置网络位置
										</a>
									</div>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="row"><div class="col-xs-6"><div class="dataTables_info" id="example-1_info" role="status" aria-live="polite"></div></div><div class="col-xs-6"><div class="dataTables_paginate paging_simple_numbers" id="example-1_paginate"><nav><ul class="pagination"><li class="paginate_button previous "><a class="first" href="/zq/index.php/Home/Team/myTeam/p/1.html">首页</a></li>  <li class="paginate_button active"><span class="current">1</span></li>  <li class="paginate_button next"><a class="end" href="/zq/index.php/Home/Team/myTeam/p/0.html">尾页</a></li></ul></nav></div></div></div>
		</div>
	</div>
</div>
<?php include 'footer.php';?>
<!-- Modal 4 (Confirm)-->
<div class="modal fade" id="modal-4" data-backdrop="static">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">设置用户网络位置</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-6">						
						<div class="form-group">
							<label for="field-1" class="control-label">上级用户：</label>							
							<select class="form-control">
								<option>username1</option>
								<option>username2</option>
								<option>username3</option>
								<option>username4</option>
								<option>username5</option>
							</select>
						</div>							
					</div>					
					<div class="col-md-6">						
						<div class="form-group">
							<label for="field-2" class="control-label">网络位置：</label>							
							<select class="form-control">
								<option>左区</option>
								<option>右区</option>
							</select>
						</div>					
					</div>
				</div>			
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-white" data-dismiss="modal">取消</button>
				<button type="button" class="btn btn-info" data-dismiss="modal">保存并关闭</button>
			</div>
		</div>
	</div>
</div>

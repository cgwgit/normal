<?php include 'header.php';?>
<div class="page-title">
	<div class="title-env">
		<h1 class="title">证券份额列表</h1>
		<p class="description"></p>
	</div>
	<div class="breadcrumb-env">
		<ol class="breadcrumb bc-1">
			<li>
				<a href="index.php"><i class="fa-home"></i>Home</a>
			</li>
			<li class="active">
				<strong>证券份额列表</strong>
			</li>
		</ol>
	</div>
</div>
<!-- message container -->
<div class="message-container">

</div>
<div class="panel panel-default">
	<div class="panel-body">
		<div class="row">
			<div class="col-md-12">
                    <div class="form-group">
						<a onclick="$('.message-container .alert').slideUp('fast');jQuery('#lotAdd').modal('show', {backdrop: 'static'});" val="" class="btn btn-red col-sm-1">新增份额</a>
					</div>
			</div>
		</div>
		<table cellspacing="0" class="table table-small-font table-bordered table-striped">
			<thead>
				<tr>
					<th>序号</th>
					<th>份额</th>
					<th>证券系数</th>
					<th>一级推荐分成</th>
					<th>二级推荐分成</th>
					<th>三级推荐分成</th>
					<th>培育佣金比例</th>
					<th>培育佣金比例浮动</th>
					<th>最后操作时间</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>1000.00</td>
					<td>2.00</td>
					<td>0.05</td>
					<td>0.03</td>
					<td>0.02</td>
					<td>0.07</td>
					<td>0.07</td>
					<td>2016-11-24 16:37:17</td>
					<td>
						<a onclick="$('.message-container .alert').slideUp('fast');updateform();jQuery('#lotUpdate').modal('show', {backdrop: 'static'});" val="" class="btn btn-secondary btn-sm btn-icon icon-left">编辑</a>
						<a onclick="$('.message-container .alert').slideUp('fast');jQuery('#lotDelete').modal('show', {backdrop: 'static'});" class="btn btn-red btn-sm btn-icon icon-left">
							删除
						</a>
					</td>
				</tr>
			</tbody>
		</table>
		<?php include 'pageno.php';?>
	</div>
</div>
<?php include 'footer.php';?>
<!-- lotAdd (Confirm)-->
<div class="modal fade" id="lotAdd" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">新增份额</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
						<div class="form-group">
							<label class="control-label" for="securities">购买份额：</label>
                            <input type="text" class="form-control" id="securities" name="securities" value="">
                        </div>
                        <div class="form-group">
							<label class="control-label" for="levered">证券系数：</label>
                            <input type="text" class="form-control" id="levered" name="levered" value="">
                        </div>
						<div class="form-group">
							<label class="control-label" for="t_1">第一推荐分红系数：</label>
                            <input type="text" class="form-control" id="t_1" name="t_1" value="">
                        </div>
						<div class="form-group">
							<label class="control-label" for="t_2">第二推荐分红系数：</label>
                            <input type="text" class="form-control" id="t_2" name="t_2" value="">
                        </div>
						<div class="form-group">
							<label class="control-label" for="t_3">第三推荐分红系数：</label>
                            <input type="text" class="form-control" id="t_3" name="t_3" value="">
                        </div>
						<div class="form-group">
							<label class="control-label" for="t_bred">培育佣金比例：</label>
							<div class="input-group">
								<input type="text" class="form-control" id="t_bred" name="t_bred" value="">
								<span class="input-group-addon">%</span>
							</div>
                        </div>
						<div class="form-group">
							<label class="control-label" for="t_bred_f">培育佣金比例浮动：</label>
							<div class="input-group">
								<input type="text" class="form-control" id="t_bred_f" name="t_bred_f" value="">
								<span class="input-group-addon">%</span>
							</div>
                        </div>
                    </div>
                </div>			
            </div>
            <div class="modal-footer">
                <button type="button" id="cancel" class="btn btn-white" data-dismiss="modal">取消</button>
                <button type="button" id="lotAdd" class="btn btn-info" data-dismiss="modal" onclick="lotAdd();">保存并关闭</button>
            </div>
        </div>
    </div>
</div>

<!-- lotUpdate (Confirm)-->
<div class="modal fade" id="lotUpdate" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">编辑份额</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
						<div class="form-group">
							<label class="control-label" for="securitiesUpdate">购买份额：</label>
                            <input type="text" class="form-control" id="securitiesUpdate" name="securitiesUpdate" value="">
                        </div>
                        <div class="form-group">
							<label class="control-label" for="leveredUpdate">证券系数：</label>
                            <input type="text" class="form-control" id="leveredUpdate" name="leveredUpdate" value="">
                        </div>
						<div class="form-group">
							<label class="control-label" for="t_1Update">第一推荐分红系数：</label>
                            <input type="text" class="form-control" id="t_1Update" name="t_1Update" value="">
                        </div>
						<div class="form-group">
							<label class="control-label" for="t_2Update">第二推荐分红系数：</label>
                            <input type="text" class="form-control" id="t_2Update" name="t_2Update" value="">
                        </div>
						<div class="form-group">
							<label class="control-label" for="t_3Update">第三推荐分红系数：</label>
                            <input type="text" class="form-control" id="t_3Update" name="t_3Update" value="">
                        </div>
						<div class="form-group">
							<label class="control-label" for="t_bredUpdate">培育佣金比例：</label>
							<div class="input-group">
								<input type="text" class="form-control" id="t_bredUpdate" name="t_bredUpdate" value="">
								<span class="input-group-addon">%</span>
							</div>
                        </div>
						<div class="form-group">
							<label class="control-label" for="t_bred_fUpdate">培育佣金比例浮动：</label>
							<div class="input-group">
								<input type="text" class="form-control" id="t_bred_fUpdate" name="t_bred_fUpdate" value="">
								<span class="input-group-addon">%</span>
							</div>
                        </div>
                    </div>
                </div>			
            </div>
            <div class="modal-footer">
                <button type="button" id="cancel" class="btn btn-white" data-dismiss="modal">取消</button>
                <button type="button" id="lotAdd" class="btn btn-info" data-dismiss="modal" onclick="lotUpdate();">保存并关闭</button>
            </div>
        </div>
    </div>
</div>

<!-- lotDelete (Confirm)-->
<div class="modal fade" id="lotDelete" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">确认删除</h4>
            </div>	
			<!-- Errors container -->
			<div class="securityThaw-container">

			</div>
            <div class="modal-body">
				确认删除份额？
			</div>
            <div class="modal-footer">
                <button type="button" id="cancel" class="btn btn-white" data-dismiss="modal">取消</button>
                <button type="button" id="lotDelete" class="btn btn-info" data-dismiss="modal" onclick="lotDelete();">确认删除</button>
            </div>
        </div>
    </div>
</div>

<script>
	function lotAdd() {
		// Remove any alert
		$(".message-container .alert").slideUp('fast');
		
		// Show message
		$(".message-container").html('<div class="alert alert-success">\
			<button type="button" class="close" data-dismiss="alert">\
					<span aria-hidden="true">&times;</span>\
					<span class="sr-only">Close</span>\
			</button>\
			份额新增成功！\
			</div>');
		$(".message-container .alert").hide().slideDown();
	}
	
	function updateform(){
		document.getElementById("securitiesUpdate").value="1000.00";
		document.getElementById("leveredUpdate").value="2.00";
		document.getElementById("t_1Update").value="0.05";
		document.getElementById("t_2Update").value="0.03";
		document.getElementById("t_3Update").value="0.02";
		document.getElementById("t_bredUpdate").value="7";
		document.getElementById("t_bred_fUpdate").value="7";
	}
	
	function lotUpdate() {
		// Remove any alert
		$(".message-container .alert").slideUp('fast');
		
		// Show message
		$(".message-container").html('<div class="alert alert-success">\
			<button type="button" class="close" data-dismiss="alert">\
					<span aria-hidden="true">&times;</span>\
					<span class="sr-only">Close</span>\
			</button>\
			份额编辑成功！\
			</div>');
		$(".message-container .alert").hide().slideDown();
	}

	function lotDelete() {
		// Remove any alert
		$(".message-container .alert").slideUp('fast');
		
		// Show message
		$(".message-container").html('<div class="alert alert-success">\
			<button type="button" class="close" data-dismiss="alert">\
					<span aria-hidden="true">&times;</span>\
					<span class="sr-only">Close</span>\
			</button>\
			份额删除成功！\
			</div>');
		$(".message-container .alert").hide().slideDown();
	}
</script>
<?php include 'header.php';?>
<div class="page-title">
	<div class="title-env">
		<h1 class="title">用户列表</h1>
		<p class="description"></p>
	</div>
	<div class="breadcrumb-env">
		<ol class="breadcrumb bc-1">
			<li>
				<a href="index.php"><i class="fa-home"></i>Home</a>
			</li>
			<li class="active">
				<strong>用户列表</strong>
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
				<form role="form" class="form-horizontal" action="#" method="post">
                    <div class="form-group">
                        <label class="col-sm-1 control-label" for="money">用户名</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="money" id="username" placeholder="请输入用户名/真实姓名/用户编号" value="" >
                        </div>
                        <button class="btn btn-secondary col-sm-1">查询</button>
						<a onclick="$('.message-container .alert').slideUp('fast');jQuery('#userAdd').modal('show', {backdrop: 'static'});" val='' class="btn btn-blue col-sm-1">新增用户</a>
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
                    <th>证券网络上级</th>
                    <th>证券网络位置</th>
                    <th>持有证券数量</th>
                    <th>证券钱包余额</th>
                    <th>积分推荐人</th>
                    <th>持有积分数量</th>
                    <th>积分钱包余额</th>
                    <th>注册时间</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
				<tr>
					<td>cn51280729</td>
					<td>zxkj_n005</td>
                    <td>zxkj_001</td>
					<td>zxkj_001</td>
                    <td>左边</td>
                    <td>0.00</td>
                    <td>0.00</td>
                    <td>zxkj_001</td>
                    <td>0.00</td>
                    <td>0.00</td>
                    <td>2016-11-24 17:14:30</td>
                    <td>
						<a onclick="$('.message-container .alert').slideUp('fast');jQuery('#netLocationSet').modal('show', {backdrop: 'static'});" class="btn btn-secondary btn-sm btn-icon icon-left">
							设置网络位置
						</a>
						<a onclick="$('.message-container .alert').slideUp('fast');jQuery('#recommendationSet').modal('show', {backdrop: 'static'});" class="btn btn-blue btn-sm btn-icon icon-left">
							设置推荐人
						</a>
						<a onclick="$('.message-container .alert').slideUp('fast');jQuery('#netLocationClear').modal('show', {backdrop: 'static'});" class="btn btn-danger btn-sm btn-icon icon-left">
							清除网络位置
						</a>
						<a onclick="$('.message-container .alert').slideUp('fast');jQuery('#userDelete').modal('show', {backdrop: 'static'});" class="btn btn-red btn-sm btn-icon icon-left">
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
<!-- userAdd (Confirm)-->
<div class="modal fade" id="userAdd" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">新增用户</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-2" class="control-label">用户名(必填)：</label>			
                            <input type="text" class="form-control" name="tname" id="tname" value="">
                        </div>
                        <div class="form-group">
                            <label for="field-2" class="control-label">登录密码(必填)：</label>			
                            <input type="text" class="form-control" name="password" id="tpassword" value="">
                        </div>
                        <div class="form-group">
                            <label for="field-2" class="control-label">推荐人(非必填)：</label>			
                            <input type="text" class="form-control" name="t_name" id="t_name" value="">
                        </div>
                    </div>
                </div>			
            </div>
            <div class="modal-footer">
                <button type="button" id="cancel" class="btn btn-white" data-dismiss="modal">取消</button>
                <button type="button" id="userAdd" class="btn btn-info" data-dismiss="modal" onclick="userAdd();">保存并关闭</button>
            </div>
        </div>
    </div>
</div>
<!-- netLocationSet (Confirm)-->
<div class="modal fade" id="netLocationSet" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#home" data-toggle="tab">
							<span class="visible-xs"><i class="fa-home"></i></span>
							<span class="hidden-xs">设置网络位置</span>
						</a>
					</li>
					<li>
						<a href="#profile" data-toggle="tab">
							<span class="visible-xs"><i class="fa-user"></i></span>
							<span class="hidden-xs">快速设置</span>
						</a>
					</li>
				</ul>
            </div>
			<div class="tab-content">
				<div class="tab-pane active" id="home">
					<div class="modal-body">
						<div class="row">
							<form role="form" class="form-horizontal" method="post">
								<div class="form-group">
									<div class="form-group">
										<label class="col-sm-3 control-label" for="name">用户名</label>
										<div class="col-sm-5">
											<input type="text" class="form-control" name="name" id="name" value="zxkj">
										</div>
										<a href="javascript:void(0);" class="btn btn-secondary" id="reload">
										加载下级用户
										</a>
									</div>
									<div class="form-group">
										<label for="field-1" class="col-sm-3 control-label">选择上级用户：</label>
										<div class="col-sm-5">
											<select class="form-control teamwork">
												<option value='0'>--请选择--</option>
												<option value='' class="bg-muted" disabled>&lfloor;_zxkj_left01(左区)</option>
												<option value='' class="bg-muted" disabled>&lfloor;__zxkj_left02(左区)</option>
												<option value='' >&lfloor;___zxkj_left04(左区)</option>
												<option value=''>&lfloor;___zxkj_left05(右区)</option>
												<option value='' class="bg-muted" disabled>&lfloor;__zxkj_left03(右区)</option>
												<option value=''>&lfloor;___zxkj_left06(左区)</option>
												<option value=''>&lfloor;___zxkj_left07(右区)</option>
												<option value='' class="bg-muted" disabled>&lfloor;_zxkj_right01(右区)</option>
												<option value='' class="bg-muted" disabled>&lfloor;__zxkj_right02(左区)</option>
												<option value=''>&lfloor;___zxkj_right04(左区)</option>
												<option value=''>&lfloor;___zxkj_right05(右区)</option>
												<option value='' class="bg-muted" disabled>&lfloor;__zxkj_right03(右区)</option>
												<option value=''>&lfloor;___zxkj_right06(左区)</option>
												<option value=''>&lfloor;___zxkj_right07(右区)</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label for="field-2" class="col-sm-3 control-label">选择网络位置：</label>	
										<div class="col-sm-5">
											<select class="form-control" id="setteamwork">
												<option value='0'>--请选择--</option>
											</select>
										</div>
									</div>		
								</div>	
							</form>
						</div>
					</div>		
				</div>
				<div class="tab-pane" id="profile">
					<div class="modal-body">
						<div class="row">
							<form role="form" class="form-horizontal" method="post">
								<div class="form-group">
									<div class="form-group">
										<label class="col-sm-3 control-label" for="name">用户名</label>
										<div class="col-sm-5">
											<input type="text" class="form-control" name="name" id="name" value="zxkj">
										</div>
										<a href="javascript:void(0);" class="btn btn-secondary" id="reload">
										快速查询
										</a>
									</div>
									<div class="form-group">
										<label for="field-2" class="col-sm-3 control-label">选择网络位置：</label>	
										<div class="col-sm-5">
											<select class="form-control" id="setteamwork">
												<option value='0'>--请选择--</option>
											</select>
										</div>
									</div>		
								</div>	
							</form>
						</div>
					</div>
				</div>
			</div>
            <input type="hidden" value="" id="member_id">
            <input type="hidden" value="" id="member_name">
            <div class="modal-footer">
                <button type="button" id="cancel" class="btn btn-white" data-dismiss="modal">取消</button>
                <button type="button" id="netLocationSet" class="btn btn-info" data-dismiss="modal" onclick="netLocationSet();">保存并关闭</button>
            </div>
        </div>
    </div>
</div>
<!-- recommendationSet (Confirm)-->
<div class="modal fade" id="recommendationSet" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">设置用户推荐人</h4>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="field-2" class="control-label">推荐人用户名(非必填)：</label>			
                        <input type="text" class="form-control" name="name" id="securities_id" value="">
                    </div>
                </div>	
            </div>
            <input type="hidden" value="" id="t_member_name">
            <div class="modal-footer">
                <button type="button" id="cancel" class="btn btn-white" data-dismiss="modal">取消</button>
                <button type="button" id="recommendationSet" class="btn btn-info" data-dismiss="modal" onclick="recommendationSet();">保存并关闭</button>
            </div>
        </div>
    </div>
</div>
<!-- netLocationClear (Confirm)-->
<div class="modal fade" id="netLocationClear" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">确认清除</h4>
            </div>	
			<!-- Errors container -->
			<div class="securityThaw-container">

			</div>
            <div class="modal-body">
				确认清楚用户 陈奕迅 的证券网络位置？
			</div>
            <div class="modal-footer">
                <button type="button" id="cancel" class="btn btn-white" data-dismiss="modal">取消</button>
                <button type="button" id="netLocationClear" class="btn btn-info" data-dismiss="modal" onclick="netLocationClear();">确认清除</button>
            </div>
        </div>
    </div>
</div>
<!-- userDelete (Confirm)-->
<div class="modal fade" id="userDelete" data-backdrop="static">
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
				确认删除用户 陈奕迅？
			</div>
            <div class="modal-footer">
                <button type="button" id="cancel" class="btn btn-white" data-dismiss="modal">取消</button>
                <button type="button" id="userDelete" class="btn btn-info" data-dismiss="modal" onclick="userDelete();">确认删除</button>
            </div>
        </div>
    </div>
</div>

<script>
	function userAdd() {
		// Remove any alert
		$(".message-container .alert").slideUp('fast');
		
		// Show message
		$(".message-container").html('<div class="alert alert-success">\
			<button type="button" class="close" data-dismiss="alert">\
					<span aria-hidden="true">&times;</span>\
					<span class="sr-only">Close</span>\
			</button>\
			用户新增成功！\
			</div>');
		$(".message-container .alert").hide().slideDown();
	}
	
	function netLocationSet() {
		// Remove any alert
		$(".message-container .alert").slideUp('fast');
		
		// Show message
		$(".message-container").html('<div class="alert alert-success">\
			<button type="button" class="close" data-dismiss="alert">\
					<span aria-hidden="true">&times;</span>\
					<span class="sr-only">Close</span>\
			</button>\
			网络位置设置成功！\
			</div>');
		$(".message-container .alert").hide().slideDown();
	}

	function recommendationSet() {
		// Remove any alert
		$(".message-container .alert").slideUp('fast');
		
		// Show message
		$(".message-container").html('<div class="alert alert-success">\
			<button type="button" class="close" data-dismiss="alert">\
					<span aria-hidden="true">&times;</span>\
					<span class="sr-only">Close</span>\
			</button>\
			推荐人设置成功！\
			</div>');
		$(".message-container .alert").hide().slideDown();
	}

	function netLocationClear() {
		// Remove any alert
		$(".message-container .alert").slideUp('fast');
		
		// Show message
		$(".message-container").html('<div class="alert alert-success">\
			<button type="button" class="close" data-dismiss="alert">\
					<span aria-hidden="true">&times;</span>\
					<span class="sr-only">Close</span>\
			</button>\
			网络位置清除成功！\
			</div>');
		$(".message-container .alert").hide().slideDown();
	}

	function userDelete() {
		// Remove any alert
		$(".message-container .alert").slideUp('fast');
		
		// Show message
		$(".message-container").html('<div class="alert alert-success">\
			<button type="button" class="close" data-dismiss="alert">\
					<span aria-hidden="true">&times;</span>\
					<span class="sr-only">Close</span>\
			</button>\
			用户删除成功！\
			</div>');
		$(".message-container .alert").hide().slideDown();
	}
</script>
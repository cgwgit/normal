<?php include 'header.php';?>
<div class="page-title">
	<div class="title-env">
		<h1 class="title">用户钱包明细</h1>
		<p class="description"></p>
	</div>
	<div class="breadcrumb-env">
		<ol class="breadcrumb bc-1">
			<li>
				<a href="index.php"><i class="fa-home"></i>Home</a>
			</li>
			<li class="active">
				<strong>用户钱包明细</strong>
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
                    <th>序号</th>
                    <th>用户名</th>
                    <th>可用金额(元)</th>
					<th>冻结金额(元)</th>
					<th>变更时间</th>
					<th>备注</th>
                </tr>
            </thead>
            <tbody>
				<tr>
					<td>1</td>
					<td>zxkj_n005</td>
                    <td><span class="text-success">+500.00</span></td>
					<td></td>
                    <td>2016-11-24 17:14:30</td>
					<td>充值，充值单号: 870530220902014004</td>
                </tr>
				<tr>
					<td>2</td>
					<td>zxkj_n005</td>
                    <td><span class="text-danger">-500.00</span></td>
					<td><span class="text-success">+500.00</span></td>
                    <td>2016-11-24 17:14:30</td>
					<td>申请提现，冻结可用金额，提现单号:495655821480504859</td>
                </tr>
				<tr>
					<td>3</td>
					<td>zxkj_n005</td>
                    <td></td>
					<td><span class="text-danger">-500.00</span></td>
                    <td>2016-11-24 17:14:30</td>
					<td>提现成功，提现单号: 799600741480409951 ( 操作管理员 zxadmin ) </td>
                </tr>
            </tbody>
        </table>
		<?php include 'pageno.php';?>
	</div>
</div>
<?php include 'footer.php';?>
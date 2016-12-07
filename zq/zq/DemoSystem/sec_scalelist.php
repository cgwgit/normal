<?php include 'header.php';?>
<div class="page-title">
	<div class="title-env">
		<h1 class="title">证券兑换率列表</h1>
		<p class="description"></p>
	</div>
	<div class="breadcrumb-env">
		<ol class="breadcrumb bc-1">
			<li>
				<a href="index.php"><i class="fa-home"></i>Home</a>
			</li>
			<li class="active">
				<strong>证券兑换率列表</strong>
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
				<form role="form" class="form-horizontal" method="post">
                    <div class="form-group">
                        <label class="col-sm-1 control-label" for="money">快速输入兑换率</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="money" id="username" placeholder="请输入新的兑换率" value="" >
                        </div>
                        <button class="btn btn-red col-sm-1" onclick="">快速添加</button>
                    </div>
                </div>
            </form>
        </div>
		<table cellspacing="0" class="table table-small-font table-bordered table-striped">
			<thead>
				<tr>
					<th>序号</th>
					<th>当日兑换率</th>
					<th>生成时间</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>1.00</td>
					<td>2016-11-25 10:59:40</td>
				</tr>
			</tbody>
		</table>
		<?php include 'pageno.php';?>
	</div>
</div>
<?php include 'footer.php';?>
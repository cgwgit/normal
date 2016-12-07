<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=8" >
<title></title>
<script type="text/javascript" src="/login/Public/script/easyui/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="/login/Public/script/easyui/jquery.cookie.js"></script>
<script type="text/javascript" src="/login/Public/script/easyui/jquery.easyui.min.js"></script>
<script type="text/javascript" src="/login/Public/script/easyui/easyui-lang-zh_CN.js"></script>
<script type="text/javascript" src="/login/Public/script/easyui/common.js"></script>
<link rel="stylesheet" type="text/css" href="/login/Public/css/easyuicss/easyui.css" />
<link rel="stylesheet" type="text/css" href="/login/Public/css/easyuicss/icon.css" />
<link href="/login/Public/css/style1.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/login/Public/js/administrator.js"></script>
	<style type="text/css">
		.p{
			margin:10px 10px 10px 10px
		}
	</style>

</head>
<body>
	<div id="container"  style="height: 650px;width:900px;">
	
		<br/><br/>
		<div style="height: 450px;width: 1000px; float: left;">
			<table id="dg" title="会员订单查询" class="easyui-datagrid" width="100%"
				style="border-collapse:collapse; height: 400px"
				data-options="
				rownumbers:true,
				singleSelect:true,
				fit:true,
				nowrap:false,
				striped:true,
				fitColumns:true,
				autoRowHeight:true,
				pagination:true,
				pageSize:20">
				<thead>
				<br/><br/>
					<tr>
						<th data-options="field:'username'" align="center" width="5%"><b>用户名</b></th>
						<th data-options="field:'status'"  align="center" width="5%"><b>交易状态</b></th>
						<!--<th data-options="field:'amount'"  align="center" width="5%"><b>交易金额</b></th>-->
						<th data-options="field:'bankTransaction'"  align="center" width="5%"><b>流水号</b></th>
						<th data-options="field:'declaration_price'"  align="center" width="5%"><b>交易金额</b></th>
						<th data-options="field:'declaration_num'"  align="center" width="5%"><b>报单数量</b></th>
						<th data-options="field:'declaration_date'"  align="center" width="5%"><b>报单日期</b></th>
						<th data-options="field:'date'"  align="center" width="5%"><b>转账日期</b></th>
						<th data-options="field:'bankcard'"  align="center" width="5%"><b>银行卡号</b></th>


						<!--<th data-options="field:'caozuo'" align="center" width="100px"><b>操作</b></th>-->
					</tr>
				</thead>
			</table>
		</div>
	</div>
</body>
</html>
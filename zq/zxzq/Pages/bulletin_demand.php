<?php include 'header.php';?>
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 style="color:#fff; background:#600; padding:8px; margin:0;"><i class="fa fa-ticket"></i>
							<font style="text-transform:uppercase">需求单列表</font>
							</h3>
							<form name="tickets_list" method="post" action="http://ww2.capitalclearance.com/ControllerServlet?dYoIos00ekf=2515&JdkSeOIUy=1479095480973&ZsnJOI1=15860f5f28d" align=center>
								<table>
									<tr>
										<td width="20%" height="35" align="left" valign="middle">部门</td>
										<td width="5%" height="35" align="center" valign="middle">:</td>
										<td width="75%" height="35" align="left" valign="middle"><select name="Department">
										<option value="">全部</option>
										<option value="CS"> 服务中心</option>
										</select>
										</td>
									</tr>
									<tr>
										<td height="35" align="left" valign="middle">状态</td>
										<td height="35" align="center" valign="middle">:</td>
										<td height="35" align="left" valign="middle"><select name="Status" style="width:130px;">
										<option value="">全部</option>
										<option value="1">开放</option>
										<option value="4">关闭</option>
										</select>
										</td>
									</tr>
								</table>
							<br>
							<input type="submit" id="srcg-bttn" value="提交" style="padding:5px 40px;">
							</form>
							<!-- <script>
							  loadCombobox(document.tickets_list.Status, "null");
							  loadCombobox(document.tickets_list.Department, "null");
							</script> -->
						</div>
					</div>
					<div class="panel panel-default">
					无记录
					</div>
				</div>
			</div>
<?php include 'footer.php';?>
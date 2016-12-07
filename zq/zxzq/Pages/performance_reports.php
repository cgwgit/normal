<?php include 'header.php';?>
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-body">
							<form name="mbrRpt" action="http://ww2.capitalclearance.com/ControllerServlet?dYoIos00ekf=9156&JdkSeOIUy=1479106716126&ZsnJOI1=15861a161de" method="post" style="text-align:center">
								<table width="100%" class=noprint>
									<tr  style="line-height:25px;">
										<td height="35" colspan="3" align="left" valign="middle" bgcolor="#660000" style="color:#FFF; padding:0 8px; font-weight:bold;">
											<i class="fa fa-key"></i>&nbsp;<span style="text-transform: uppercase;">个人业绩报告</span>
										</td>
									</tr>
									<tr style="line-height:25px;">
										<td align="left">奖金日期 (DD-MM-YYYY)</td>
										<td align="left">: <input type="text" name="BonusDateFrom" id="BonusDateFrom" class="srch-bx" value='01-11-2016'>
										<!-- <IMG id="button_BonusDateFrom" onMouseOver="this.style.cursor='hand'" title="Date selector" src="/lib/image/sys/calendar.gif"> -->
										<!-- <SCRIPT type="text/javascript">
										Calendar.setup({
										inputField     :    "BonusDateFrom",     // id of the input field
										button         :    "button_BonusDateFrom"  // trigger for the calendar (button ID)
										});
										</SCRIPT> -->
										&nbsp;
										至
										: <input type="text" name="BonusDateTo" id="BonusDateTo" class="srch-bx" value='30-11-2016'>
										<!-- <IMG id="button_BonusDateTo" onMouseOver="this.style.cursor='hand'" title="Date selector" src="/lib/image/sys/calendar.gif"> -->
										<!-- <SCRIPT type="text/javascript">
										Calendar.setup({
										inputField     :    "BonusDateTo",     // id of the input field
										button         :    "button_BonusDateTo"  // trigger for the calendar (button ID)
										});
										</SCRIPT> -->
										</td>
									</tr>
								</table>
								<br>
								<input type="hidden" name="search" value="">
								<input type="submit" id="srcg-bttn" value="提交" style="padding:5px 20px">
							</form>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-body">
							<table width="100%" border="0">
								<tr style="color:#FFF; padding:8px;">
									<td width="20" align="center" valign="middle" bgcolor="#660000"  style="font-size:14px">序号</td>
									<td align="center" valign="middle" bgcolor="#660000"  style="font-size:14px">会员编号</td>
									<td align="center" valign="middle" bgcolor="#660000"  style="font-size:14px">会员名字</td>
									<td align="center" valign="middle" bgcolor="#660000"  style="font-size:14px">注册日期</td>
									<td align="center" valign="middle" bgcolor="#660000"  style="font-size:14px">备注</td>
									<td align="center" valign="middle" bgcolor="#660000"  style="font-size:14px">单位</td>
									<td align="center" valign="middle" bgcolor="#660000"  style="font-size:14px">证券价格</td>
								</tr>
								<tr valign=top class='odd' style="line-height:25px;">
									<td align=left>1.</td>
									<td align="center">90993559</td>
									<td align="center">aikanghui</td>
									<td align="center">2016-11-04</td>
									<td align="center">放置Pin</td>
									<td align="right">2500.0</td>
									<td align="right">2,750.00</td>
								</tr>
								<tr valign=top class='odd' style="line-height:25px;">
									<td align=left>2.</td>
									<td align="center">90993559</td>
									<td align="center">aikanghui</td>
									<td align="center">2016-11-04</td>
									<td align="center">放置Pin</td>
									<td align="right">2500.0</td>
									<td align="right">2,750.00</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
<?php include 'footer.php';?>
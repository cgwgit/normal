<?php include 'header.php';?>
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-body">
							<form name="viewagreement" method="post" action="">
								<table width="100%" align=center class=noprint id="hor-minimalist-a" class="table table-small-font table-bordered table-striped">
									<tbody style=" text-align:center">
										<tr style="color:#FFF; padding:8px;height:30px;">
											<td width="20%" valign="middle" bgcolor="#660000">认证编号</td>
											<td width="50%" valign="middle" bgcolor="#660000">证件分余额</td>
											<td width="15%" valign="middle" bgcolor="#660000">&nbsp;</td>
											<td width="15%" valign="middle" bgcolor="#660000">&nbsp;</td>
										</tr>
										<tr valign=top class="even"  style="line-height:30px;">
											<td nowrap>T2029893776</td>
											<td>7,635.00</td>
											<td align=center>
											<a href="#" onclick="generatePdf('1462721')">观察</a>
											</td>
											<td align=center>
											<a href="#" onclick="requestHardcopy('1462721')">硬拷贝</a>
											</td>
										</tr>
									</tbody>
								</table>
								<input type="hidden" name="docId" value="">
							</form>
							
							<script type="text/javascript">
							// This JavaScript Will Replace Checkboxes in dropdown toggles
							jQuery(document).ready(function($)
							{
								setTimeout(function()
								{
									$(".checkbox-row input").addClass('cbr');
									cbr_replace();
								}, 0);
							});
							</script>
								
							
						</div>
					
					</div>
				</div>
			</div>
<?php include 'footer.php';?>
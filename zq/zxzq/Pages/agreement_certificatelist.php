<?php include 'header.php';?>
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-body">
							<form name="viewagreement" method="post" action="">
								<table width="100%" align=center class=noprint id="hor-minimalist-a" class="table table-small-font table-bordered table-striped">
									<tbody style=" text-align:center">
										<tr style="color:#FFF; padding:8px;height:30px;">
											<td width="100%" valign="middle" style="color:#000;font-size:16px";>无记录</td>
											
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
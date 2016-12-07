<?php include 'header.php';?>
<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title"><i class="fa fa-bar-chart"></i>&nbsp;&nbsp;账户充值明细</div>
            </div>
            <div class="panel-body">
                <table cellspacing="0" class="table table-small-font table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>序号</th>
                            <th>支付方式</th>
                            <th>充值金额</th>
                            <th>充值手续费</th>
                            <th>实际付款金额</th>
                            <th>付款时间</th>
                        </tr>
                    </thead>
                    <tbody>
					</tbody>
                </table>
            </div>
            <div class="row"><div class="col-xs-6"><div class="dataTables_info" id="example-1_info" role="status" aria-live="polite"></div></div><div class="col-xs-6"><div class="dataTables_paginate paging_simple_numbers" id="example-1_paginate"><nav><ul class="pagination"><li  class="paginate_button previous "><a class="first" href="/zq/index.php/Home/List/rechargeList/p/1.html">首页</a></li>  <li class="paginate_button active"><span class="current">1</span></li>  <li class="paginate_button next"><a class="end" href="/zq/index.php/Home/List/rechargeList/p/0.html">尾页</a></li></ul></nav></div></div></div>
        </div>
    </div>
</div>
<?php include 'footer.php';?>
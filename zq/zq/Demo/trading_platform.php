<?php include 'header.php';?>
<div class="row">
	<div class="col-sm-1"></div>
	<div class="col-sm-9">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					<i class="fa fa-bar-chart"></i>
					<font style="text-transform:uppercase;">交易平台</font>
				</h3>
			</div>
			<div class="panel-body">
				<div id="container"></div>
			</div>
			<div class="panel-body">
				<h3 style="text-align:center;">市场情况 :
					<font style="color:#090; font-size:28px; text-transform:uppercase;">
						<strong>闭市</strong>
					</font>
				</h3>
			</div>
			<div class="panel-body">
				<table class="table table-bordered table-striped">
					<thead>
						<tr style="color:#999;">
							<th>开市</th>
							<th>最高</th>
							<th>最低</th>
							<th>最后交易</th>
							<!--th>量</th-->
						</tr>
					</thead>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-1"></div>
	<div class="col-sm-9">
		<div class="panel panel-default">
			<div class="panel-body">
				<table class="table table-bordered table-striped">
					<thead>
						<tr style="color:#999;">
							<th>序号</th>
							<th>基金名称</th>
							<th>最后股价</th>
							<th>开放</th>
							<th>关闭</th>
							<th>差价</th>
							<th>百分比变化</th>
						</tr>
					</thead>
				</table>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php';?>
<script type="text/javascript" src="assets/js/highcharts.js"></script> 
<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        title: {
            text: '',
            x: -20
        },
        subtitle: {
            text: '',
            x: -20
        },
        xAxis: {
            categories: ['11-12', '11-13', '11-14', '11-15', '11-16','11-17', '11-18', '11-19', '11-20', '11-21', '11-22', '11-23']
        },
        yAxis: {
            title: {
                text: '证券兑换率'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
				},
        tooltip: {
            valueSuffix: '元'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: '中孝证券',
            data: [1.00, 1.01, 1.02, 1.01, 1.01, 1.00, 1.00, 1.00, 1.01, 1.02, 1.10, 1.01]
        }]
    });
});
</script>

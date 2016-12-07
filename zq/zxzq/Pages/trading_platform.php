<?php include 'header.php';?>
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-body">
						    <h3 style="color:#fff; background:#600; padding:8px; margin:0;"><i class="fa fa-bar-chart"></i>
						     	<font style="text-transform:uppercase;">交易平台</font>
						    </h3>
						    <br>
							<form name="view_sales" method="post" action="">
								<h3 style="text-align:center;">市场情况 :
									<font style="color:#090; font-size:28px; text-transform:uppercase;">
									<strong>	 
										开市	
									</strong>
									</font>
								</h3>
							    <table border=0 width=100%>
							      <tr>
							    	<td colspan="5" align="center" valign="middle" style="color:#009; font-size:88px;"><label id="price1"></label></td>
							  	  </tr>
							      <tr style="color:#999;">
							        <td align=center valign=middle>开市</td>
							        <td align=center valign=middle>最高</td>
							        <td align=center valign=middle>最低</td>
							        <td align=center valign=middle>最后交易</td>
							        <!-- td align=right>量</td-->
							      </tr>
							      <tr style="font-size:38px;">
							        <td align="center" valign="middle"><label id="openprice"></label></td>        
							        <td align="center" valign="middle"><label id="highestprice"></label></td>
							        <td align="center" valign="middle"><label id="lowestprice"></label></td>
							        <td align="center" valign="middle"><label id="lastdoneprice"></label></td>
							        <!-- td><label id="totalvolume"></label></td-->
							      </tr>     
							    </table>
							<form/>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-body">
						<table border=0 style="width:100%">
						<tr> 
						  <td rowspan=2 style="width:95%">
						  
						  <div>
							<table width="100%">
								<tr style="color:#FFF; padding:8px;">
									<td width="5" align="center" valign="middle" bgcolor="#660000">序号</td>
									<td align="center" valign="middle" bgcolor="#660000">基金名称</td>
									<td align="center" valign="middle" bgcolor="#660000">最后股价</td>
									<td align="center" valign="middle" bgcolor="#660000">开放</td>
									<td align="center" valign="middle" bgcolor="#660000">关闭</td>
									<td align="center" valign="middle" bgcolor="#660000">差价</td>
									<td align="center" valign="middle" bgcolor="#660000">百分比变化</td>
								</tr>
								
								<tr valign=top class="even">
									<td align=right nowrap>1.</td>
									
										<td>中券资本综合资产证券</td>
										<td align=center>1.10</td>
									
									<td align=center>0.00</td>
									<td align=center>0.00</td>
									<td align=center>-0.10</td>
									<td align=center>-0.00%</td>
								</tr>
								
								<tr valign=top class="odd">
									<td align=right nowrap>2.</td>
									
										<td>中券资本农业优势组合证券</td>
										<td align=center>25.60</td>
									
									<td align=center>22.77</td>
									<td align=center>22.77</td>
									<td align=center>+0.50</td>
									<td align=center>+2.20%</td>
								</tr>
								
								<tr valign=top class="even">
									<td align=right nowrap>3.</td>
									
										<td>中券资本美国库券中期证券</td>
										<td align=center>10.46</td>
									
									<td align=center>9.56</td>
									<td align=center>9.56</td>
									<td align=center>-0.05</td>
									<td align=center>-0.52%</td>
								</tr>
								
								<tr valign=top class="odd">
									<td align=right nowrap>4.</td>
									
										<td>中券资本新兴市场机会证券</td>
										<td align=center>48.77</td>
									
									<td align=center>44.48</td>
									<td align=center>44.48</td>
									<td align=center>-0.14</td>
									<td align=center>-0.31%</td>
								</tr>
								
								<tr valign=top class="even">
									<td align=right nowrap>5.</td>
									
										<td>中券资本战略产业增展证券</td>
										<td align=center>59.27</td>
									
									<td align=center>54.04</td>
									<td align=center>54.04</td>
									<td align=center>-0.16</td>
									<td align=center>-0.30%</td>
								</tr>
								
								<tr valign=top class="odd">
									<td align=right nowrap>6.</td>
									
										<td>中券资本中等期信债证券</td>
										<td align=center>12.63</td>
									
									<td align=center>11.55</td>
									<td align=center>11.55</td>
									<td align=center>-0.07</td>
									<td align=center>-0.61%</td>
								</tr>
								
								<tr valign=top class="even">
									<td align=right nowrap>7.</td>
									
										<td>先锋成长和收益基金</td>
										<td align=center>46.50</td>
									
									<td align=center>42.07</td>
									<td align=center>42.07</td>
									<td align=center>+0.20</td>
									<td align=center>+0.48%</td>
								</tr>
								
								<tr valign=top class="odd">
									<td align=right nowrap>8.</td>
									
										<td>摩根大通物业收入</td>
										<td align=center>14.16</td>
									
									<td align=center>13.04</td>
									<td align=center>13.04</td>
									<td align=center>-0.17</td>
									<td align=center>-1.30%</td>
								</tr>
								
								<tr valign=top class="even">
									<td align=right nowrap>9.</td>
									
										<td>邓普顿新兴市场小型股基金</td>
										<td align=center>13.24</td>
									
									<td align=center>12.18</td>
									<td align=center>12.18</td>
									<td align=center>-0.14</td>
									<td align=center>-1.15%</td>
								</tr>
								
								<tr valign=top class="odd">
									<td align=right nowrap>10.</td>
									
										<td>太平洋投资管理公司长期信用机构</td>
										<td align=center>12.58</td>
									
									<td align=center>11.61</td>
									<td align=center>11.61</td>
									<td align=center>-0.17</td>
									<td align=center>-1.46%</td>
								</tr>
								
								<tr valign=top class="even">
									<td align=right nowrap>11.</td>
									
										<td>贝莱德天然资源信托基金</td>
										<td align=center>46.97</td>
									
									<td align=center>43.59</td>
									<td align=center>43.59</td>
									<td align=center>-0.89</td>
									<td align=center>-2.04%</td>
								</tr>
								
								<tr valign=top class="odd">
									<td align=right nowrap>12.</td>
									
										<td>摩根大通税收意识到股票基金</td>
										<td align=center>32.48</td>
									
									<td align=center>29.53</td>
									<td align=center>29.53</td>
									<td align=center>+0.00</td>
									<td align=center>+0.00%</td>
								</tr>
								
								<tr valign=top class="even">
									<td align=right nowrap>13.</td>
									
										<td>亨德森欧洲焦点基金</td>
										<td align=center>32.85</td>
									
									<td align=center>30.11</td>
									<td align=center>30.11</td>
									<td align=center>-0.25</td>
									<td align=center>-0.83%</td>
								</tr>
								
								<tr valign=top class="odd">
									<td align=right nowrap>14.</td>
									
										<td>高盛房地产证券</td>
										<td align=center>21.01</td>
									
									<td align=center>19.22</td>
									<td align=center>19.22</td>
									<td align=center>-0.12</td>
									<td align=center>-0.62%</td>
								</tr>
								
								<tr valign=top class="even">
									<td align=right nowrap>15.</td>
									
										<td>安本中国机会基金</td>
										<td align=center>20.08</td>
									
									<td align=center>18.44</td>
									<td align=center>18.44</td>
									<td align=center>-0.19</td>
									<td align=center>-1.03%</td>
								</tr>
								
								<tr valign=top class="odd">
									<td align=right nowrap>16.</td>
									
										<td>富国汇利新兴市场股票收益基金</td>
										<td align=center>10.62</td>
									
									<td align=center>10.11</td>
									<td align=center>10.11</td>
									<td align=center>-0.46</td>
									<td align=center>-4.55%</td>
								</tr>
								
								<tr valign=top class="even">
									<td align=right nowrap>17.</td>
									
										<td>富国汇利大盘核心A</td>
										<td align=center>17.13</td>
									
									<td align=center>15.29</td>
									<td align=center>15.29</td>
									<td align=center>+0.28</td>
									<td align=center>+1.83%</td>
								</tr>
								
								<tr valign=top class="odd">
									<td align=right nowrap>18.</td>
									
										<td>德国欧洲股票基金</td>
										<td align=center>10.34</td>
									
									<td align=center>9.59</td>
									<td align=center>9.59</td>
									<td align=center>-0.19</td>
									<td align=center>-1.98%</td>
								</tr>
								
								<tr valign=top class="even">
									<td align=right nowrap>19.</td>
									
										<td>资本集团全球股票基金</td>
										<td align=center>13.78</td>
									
									<td align=center>12.69</td>
									<td align=center>12.69</td>
									<td align=center>-0.16</td>
									<td align=center>-1.26%</td>
								</tr>
								
								<tr valign=top class="odd">
									<td align=right nowrap>20.</td>
									
										<td>瑞银（UBS）全球可持续发展股权投资基金</td>
										<td align=center>9.04</td>
									
									<td align=center>8.35</td>
									<td align=center>8.35</td>
									<td align=center>-0.13</td>
									<td align=center>-1.56%</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
<?php include 'footer.php';?>
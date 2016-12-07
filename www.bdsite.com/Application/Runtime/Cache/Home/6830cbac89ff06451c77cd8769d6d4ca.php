<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=8" >
        <title></title>
        <script type="text/javascript" src="/baodan/Public/easyui/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="/baodan/Public/easyui/jquery.cookie.js"></script>
        <script type="text/javascript" src="/baodan/Public/easyui/jquery.easyui.min.js"></script>
        <script type="text/javascript" src="/baodan/Public/easyui/easyui-lang-zh_CN.js"></script>
        <script type="text/javascript" src="/baodan/Public/easyui/common.js"></script>
        <link rel="stylesheet" type="text/css" href="/baodan/Public/sitefile/css/easyuicss/easyui.css" />
        <link rel="stylesheet" type="text/css" href="/baodan/Public/sitefile/css/easyuicss/icon.css" />
        <link href="/baodan/Public/sitefile/style/style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="/baodan/Public/jqueryui/jquery-ui-1.10.4.custom.min.css" />
        <script type="text/javascript" src="/baodan/Public/sitefile/js/administrator.js"></script>
        <style type="text/css">
            .p{


                margin:10px 10px 10px 10px

            }
        </style>
        <script type="text/javascript" src="/baodan/Public/js/administrator.js"></script>
        <style type="text/css">
            .p{


                margin:10px 10px 10px 10px

            }
        </style>
        <!--XXXXXXXXXXXXXXXXXXXXXXX分割线XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX  -->
        <style type="text/css"> 
            .window{ 
                width:250px; 
                background-color:#d0def0; 
                position:absolute; 
                padding:2px; 
                margin:5px; 
                display:none; 
            } 
            .content{ 
                height:150px; 
                background-color:#FFF; 
                font-size:14px; 
                overflow:auto; 
            } 
            .title{ 
                padding:2px; 
                color:#0CF; 
                font-size:14px; 
            } 
            .title img{ 
                float:right; 
            } 
        </style> 
        <script type="text/javascript" src="http://down.hovertree.com/jquery/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" language="javascript">
            $(document).ready(function() {
                $("#btn_center").click(function() {
                    popCenterWindow();
                });

                $("#btn_right").click(function() {
                    popRightWindow();
                });
                $("#btn_left").click(function() {
                    popLeftWindow();
                });

            });

        </script>

    </head>
    <body>
        <!-- <p>中孝科技</p> -->
        <br/><br/><br/><br/>
        <div id="container"  >
            <!-- <div class="input" style=""> -->
            <div align="center">
                <h1>我的团队</h1>
            </div>
            <!--报单框 开始 -->

            <!-- 报单框结束 -->
            <!-- </div> --><br/>
            <center><p style=" color:#00C">尊敬的用户：<a href=""><?php echo ($uname['name']); ?></a>您好</p></center>
   <span style="float:left;"><a href="/baodan/index.php/Home/Show/index">返回订单详情</a></span>
            <div  style="width:800px;margin-left:800px;margin-right:auto;margin-top:0px;" >

                <a href='/baodan/index.php/Home/User/index'><button >我的团队</button></a>
                <a href='/baodan/index.php/Home/User/logout'><button >退出</button></a><br/>
                <!-- <input type="button" value="居左下角" id="btn_left" /> 
                <input type="button" value="居右下角" id="btn_right" />  -->
            </div><br/><br/>
            <div style="height: 450px;width:800px; float: left;">
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
                        <tr>
                            <th data-options="field:'username'" align="center" width="100%"><b>用户ID</b></th>
                            <th data-options="field:'userid'" align="center" width="100%"><b>用户名</b></th>
                            <th data-options="field:'real_num'" align="center" width="100%"><b>成单积分数</b></th>
                            
                            <th data-options="field:'mobile'"  align="center" width="200%"><b>手机号</b></th>
                            
                            <th data-options="field:'createTime'"  align="center" width="100%"><b>注册日期</b></th>
                        </tr>
                    <?php
 foreach ($userRec as $vo){ echo "<tr  style='1000px'>"; echo "<th>".$vo["uid"]."</th>"; echo "<th>".$vo['username']."</th>"; echo "<th>".$vo['sum(real_num)']."</th>"; echo "<th>".$vo['mobile']."</th>"; echo "<th>".$vo['createtime']."</th>"; echo "</tr>"; } ?>

                    </thead>
                </table>
            </div>
        </div>


        <div class="window" id="center" style="width:500px;"> 
            <div id="title" class="title"><img src="http://pic002.cnblogs.com/images/2012/451207/2012100814082487.jpg" alt="关闭" /></div> 
            <div class="content" style="width:500px;" align="center">
                <div class="head" >

                </div>
                <div class="container">
                    <div class="demo" >


                        <form name="form1" action="/baodan/index.php/Home/Show/update" method="post">
                            <p style="margin:10px 0">今日净值 :<?php echo ($equity["equity"]); ?></p>
                            <!-- <input type="text"  value="520" readonly="readonly" name="equity_money"/> -->

                            <p style="margin:10px 0">最小1000包，最大100000包，每次加减100,手动输入请填写100的整数倍</p>        
                            积分包数量:<input type="text" id="spinner2" value="1000" name="order_num" onblur="getthevalue()" onchange="cost_money()"/>包


                            <input type="submit" name="submit" value="充值" />
                        </form>

                        <br /><br /><br /><br /><br />
                        <p >  您将支付金额:<span id="spinner3">3000</span>元</p><br />


                        <p style="aglin:center;">	每包所含积分数量:<?php echo ($remarks["value"]); ?></p><br />

                        <p>	当前账户剩余可购买包数:<?php echo ($remainbalance["remainbalance"]); ?>包</p><br /><br />


                    </div>


                </div>

                <script type="text/javascript" src="/baodan/Public/spinner/jquery.js"></script> 
                <script type="text/javascript" src="/baodan/Public/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
                <script type="text/javascript">
                            $(function() {
                                $("#spinner").spinner();

                                $("#spinner2").spinner({
                                    max: 100000,
                                    min: 1000,
                                    step: 100
                                });
                            });

                            function getthevalue() {



                                num = document.getElementById("spinner2").value;
                                money = num * 0.1 * 30;
                                document.getElementById("spinner3").innerHTML = money; // 将处理后的数值重新显示在页面

                                if (num > 100000 || num < 1000) {

                                    alert("填写的金额请在1000至100000之间");

                                } else {

                                    /*余数 */remainder = num % 100;
                                    if (remainder != 0) {

                                        alert("输入的金额请为100的整数倍");


                                    }

                                }



                            }

                            // 点击按钮会调用此方法
                            function cost_money() {

                                var num = document.getElementById("spinner2").value;  // 获取当前显示的数值
                                money = num * 0.1 * 30;
                                document.getElementById("spinner3").innerHTML = money; // 将处理后的数值重新显示在页面
                            }

                </script>


            </div> 
        </div> 


        <script type="text/javascript">
            //获取窗口的高度 
            var windowHeight;
      //获取窗口的宽度 
            var windowWidth;
      //获取弹窗的宽度 
            var popWidth;
      //获取弹窗高度 
            var popHeight;
            function init() {
                windowHeight = $(window).height();
                windowWidth = $(window).width();
                popHeight = $(".window").height();
                popWidth = $(".window").width();
            }
      //关闭窗口的方法 
            function closeWindow() {
                $(".title img").click(function() {
                    $(this).parent().parent().hide("slow");
                });
            }
            //定义弹出居中窗口的方法 
            function popCenterWindow() {
                init();
                //计算弹出窗口的左上角Y的偏移量 
                var popY = (windowHeight - popHeight) / 100;
                var popX = (windowWidth - popWidth) / 100;
                //alert('jihua.cnblogs.com'); 
                //设定窗口的位置 
                $("#center").css("top", popY).css("left", popX).slideToggle("slow");
                closeWindow();
            }
            function popLeftWindow() {
                init();
                //计算弹出窗口的左上角Y的偏移量 
                var popY = windowHeight - popHeight;
                //var popX=-(windowWidth-popWidth); 
                //alert(popY); 
                //设定窗口的位置 
                $("#left").css("top", popY - 50).css("left", 50).slideToggle("slow");
                closeWindow();
            }
            function popRightWindow() {
                init();
                //计算弹出窗口的左上角Y的偏移量 
                var popY = windowHeight - popHeight;
                var popX = windowWidth - popWidth;
                //alert(www.cnblogs.com/jihua); 
                //设定窗口的位置 
                $("#right").css("top", popY - 50).css("left", popX - 50).slideToggle("slow");
                closeWindow();
            }
        </script> 
        <!-- XXXXXXXXXXXXXXXXXXX分割线XXXXXXXXXXXXXXXXXXXXXXXXXX -->
    </body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>中孝科技</title>
        <style type="text/css">
            html{background: #f7f7f7;}
            body{background: #fff;color: #333;font-family: "MicrosoftYaHei" , "微软雅黑" ,Verdana,Arial;margin: 2em auto 0 auto;width: 700px;padding: 1em 2em;-moz-border-radius: 11px;-khtml-border-radius: 11px;-webkit-border-radius: 11px;border-radius: 11px;border: 1px solid #dfdfdf;}
            a{color: #2583ad;text-decoration: none;}
            a:hover{color: #d54e21;}
            h1{border-bottom: 1px solid #dadada;clear: both;color: #666;margin: 5px 0 5px 0;padding: 0;padding-bottom: 1px;text-align: center;}
            h2{text-align:center;font-size:30px;}
            p{text-align: center;font-size:18px;}
            div{margin-bottom:80px;}
            ul{width:400px;margin:0 auto;}
        </style>
       <script type="text/javascript">
    	var index=1;
    	function checkTime(){
    		document.getElementById("timeSpan").innerHTML=index;
    		index--;
    		if(index<0){
    			window.location="<?php echo ($jumpUrl); ?>";
    		}else{
    			window.setTimeout('checkTime()',1000);
    		}
    	}
    </script>
    </head>
    <body  onload="checkTime()">
        <h1 id="logo">
            <a href='http://www.zxyl1688.com'><img alt="中孝科技logo" src="/baodan/Public/images/logo.png" /></a>
        </h1>
        <h2>
            <img src="http://www.sucaihuo.com/Public/images/err404.gif" alt='<?php echo ($message); ?>'/> Hey!
        </h2>
        <p><?php echo ($message); ?>失败!页面将在<span id="timeSpan">5</span>秒后自动跳转,<br/>
	  	<br/>
	  	如果没有跳转<a href= "<?php echo ($jumpUrl); ?>" >请点击这里</a>。</p>
        <div>
            <!-- <ul>
                <li><a href=""><span id="seconds_back"></span>返回首页</a></li>
            </ul> -->
        </div>
    </body>
</html>
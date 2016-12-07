<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
        <title>中孝科技-注册</title>
        <meta name="keywords" content="登录与注册表单,切换登录与注册" />
        <meta name="description" content=" " />
        <link rel="stylesheet" type="text/css" href="http://www.sucaihuo.com/jquery/css/common.css" />
        <link rel="stylesheet" type="text/css" href="/baodan/Public/css/style.css" />
       <script src="/baodan/Public/sitefile/script/boot.js" type="text/javascript"></script> 
      <link href="/baodan/Public/bootstrap/bootstrap-spinner.css" rel="stylesheet"/>
      <script type="text/javascript"> 
				 function checknum() 
				 { 
				 var num=document.frm.declaration_num.value; 
				/*  var num2=document.frm.declaration_num2.value;  */
				 if(100000<num || num<1000 ) 
				 { 
				 alert('请输入金额在1000~1000000'); 
				
				 } else if(num % 100 != 0){
					 alert('请输入100的倍数'); 
				   
				}
				 return true;
		}
				 function checkcard()
		            {
		                var card = document.frm.idcard.value;
		                /*  var num2=document.frm.declaration_num2.value;  */

		                if (!card.match(/^\d{6}(18|19|20)?\d{2}(0[1-9]|1[12])(0[1-9]|[12]\d|3[01])\d{3}(\d|X)$/i))
		                {
		                    alert('请输入有效的身份证号码');
		                    return false;
		                }
		                return true;
		            }
		            function checkbank() {
		                var bank = document.frm.bankcard.value;

		                if (bank.length < 19 || bank.length > 19) {
		                    //$("#banknoInfo").html("银行卡号长度必须在16到19之间");
		                    alert("请输入正确的银行卡号");
		                }
		                if (!bank.match(/^\d*$/)) {
		                    //$("#banknoInfo").html("银行卡号必须全为数字");
		                    alert("银行卡号必须全为数字");
		                }
		            }
		            function checkphone(){
		                var phone = document.frm.mobile.value;
		                if (phone.length < 11|| phone.length > 11) {
		                    //$("#banknoInfo").html("银行卡号长度必须在16到19之间");
		                    alert("手机号必须是十一位");
		                }
		                if (!phone.match(/^\d*$/)) {
		                    //$("#banknoInfo").html("银行卡号必须全为数字");
		                    alert("手机号必须全为数字");
		                }
		            }
		            function checkaddress(){
		               
		                var address = document.frm.address.value;
		                if(address.match(/^\s*$/)){
		                     alert("地址不能为空");
		                }
		               
		               
		            }
		            function checkusername(){
		               
		                var username = document.frm.username.value;
		                if(username.match(/^\s*$/)){
		                     alert("用户名不能为空");
		                }
		               
		               
		            }
		            function checkpwd(){
		                 var login = document.frm.loginpwd.value;
		                if (login.length > 6 && login.length < 15) {
		                    //$("#banknoInfo").html("银行卡号长度必须在16到19之间");
		                    alert("密码长度必须在6到15之间");
		                }  
		            }

		            function checkname(){
						 if(document.frm.name.value==''){
				    			alert('请输入姓名');
				    			
				    		
				    		}
						 
					 }
				 
				 
				 
				 
				 function checkname(){
					 if(document.frm.name.value==''){
			    			alert('请输入姓名');
			    			
			    		
			    		}
					 
				 }
				 function checkadd(){
					 if(document.frm.address.value==''){
			    			alert('请输入地址');
			    			
			    		
			    		}
					 
				 }
				 function checkemail(){
					 if(document.frm.email.value==''){
			    			alert('请输入邮箱');
			    			
			    		
			    		}
					 
				 }
				 function checkinv(){
					 if(document.frm.inviterid.value==''){
			    			alert('请输入推荐人ID');
			    			
			    		
			    		}
					 
				 }
				 
				 
 </script>
    </head>
    <body>
       
        <div class="container">

            <div class="demo">
                <h2 class="title">中孝积分会员注册</h2>     <span style="float:right;"><a href="/baodan/index.php/Home/Index/index">返回登陆</a></span>
                 <div > <!-- 注册表单 -->
                        <form class="cd-form"  method="post" action="/baodan/index.php/Home/Register/res" name="frm"  >
                            <p class="fieldset">
                          
                              <!--   <label class="image-replace " for="signup-username">用户名：</label> -->
                                  用户名：<br/><input class="full-width has-padding has-border" name="username" type="username" id="username" placeholder="输入用户名" onblur="checkusername()">&nbsp;&nbsp;<span style="color:red">*</span>
                            </p>
    <p class="fieldset">
                              <!--   <label class="image-replace cd-password" for="signup-password">密码</label> -->
                              密码： <br><input class="full-width has-padding has-border" name="loginpwd" type="password" id="loginpwd" placeholder="输入密码" onblur="checkpwd()">&nbsp;&nbsp;<span style="color:red">*</span>
                            </p>
                          
                             <p class="fieldset">
                                <!-- <label class="image-replace cd-username" for="signin-username">姓名</label> -->
                                姓 名：<br/><input class="full-width has-padding has-border" name="name" type="username" id="name" placeholder="输入姓名" onblur="checkname()">&nbsp;&nbsp;<span style="color:red">*</span>
                            </p>
                              <p class="fieldset">
                            <!--     <label class="image-replace cd-sex" for="signin-sex">性别</label> -->
                              性别：  <input id="sex" name="sex" type="radio" value="0">女
                                <input  name="sex" type="radio" value="1" checked>男
                            </p>
                              <p class="fieldset">
                               <!--  <label class="image-replace cd-idcard" for="signin-idcard">身份证号</label> -->
                               身份证号：<br/> <input class="full-width has-padding has-border" name="idcard" type="text"  id="idcard" placeholder="输入身份证号"  onblur="checkcard()">&nbsp;&nbsp;<span style="color:red">*</span>
                            </p>
                              <p class="fieldset">
                             <!--    <label class="image-replace cd-address" for="signin-address">家庭住址</label> -->
                              家庭住址： <br/> <input class="full-width has-padding has-border" name="address" type="text"  id="address" placeholder="输入家庭住址" onblur="checkadd()"  onblur="checkaddress()">&nbsp;&nbsp;<span style="color:red">*</span>
                            </p>
                              <p class="fieldset">
                               <!--  <label class="image-replace cd-email" for="signup-email">邮箱</label> -->
                               电子邮箱：<br/> <input class="full-width has-padding has-border" name="email" type="email"   id="email" placeholder="输入mail" onblur="checkemail()">&nbsp;&nbsp;<span style="color:red">*</span>
                            </p>
                              <p class="fieldset">
                
                              <!--   <label class="image-replace cd-bankname" for="signin-bankname">开户银行</label> -->
                                开户银行： <select name="bank_name" id="area" style="width:200px;height:44px;" class="full-width has-padding has-border" >
                                    <option  value='0' selected="selected">请选择开户银行</option>
                                    <?php if(is_array($bnametype)): foreach($bnametype as $key=>$vo): ?><option value="<?php echo ($vo["bank_name"]); ?>"><?php echo ($vo["bank_name"]); ?></option><?php endforeach; endif; ?>
                                    </select>
        					&nbsp;&nbsp;<span style="color:red">*</span>						
                            </p>
                              <p class="fieldset">
                              <!--   <label class="image-replace cd-bankname" for="signin-bankname">开户银行</label> -->
                                银行卡号：<br/><input class="full-width has-padding has-border" id="bankcard"  name="bankcard" type="text" placeholder="输入银行卡号" onblur="checkbank()">&nbsp;&nbsp;<span style="color:red">*</span>
                            </p>
                            <p class="fieldset">
                              <!--   <label class="image-replace cd-mobile" for="signin-mobile">绑定手机</label> -->
                             手机号码： <br/>  <input class="full-width has-padding has-border" id="mobile" name="mobile" type="text" placeholder="输入绑定手机" onblur="checkphone()">&nbsp;&nbsp;<span style="color:red">*</span>
                            </p>
                           
                             <!--    <label class="image-replace cd-username" for="signin-username">投资金额</label> -->
                             
                             购买积分包数：<br/>
                            
                             <input id="declaration_num" style="width:200px;height:10px;" class="full-width has-padding has-border" name="declaration_num" type="text" placeholder="输入包数" onblur="checknum()"> &nbsp;&nbsp;
                             <span style="color:red"> *注：1个积分包包含30积分,不能低于1000包,必须是100的倍数。</span><br/>
                         <!--   <span style="font-size:30px">包</span>  -->
                             <p class="fieldset">
                              <!--   <label class="image-replace cd-inviterid" for="signin-inviterid">推荐人ID</label> -->
                              推荐人ID:    <br> <input id="inviterid" class="full-width has-padding has-border" name="inviterid" type="text" placeholder="输入推荐人ID" onblur="checkinv()">&nbsp;&nbsp;<span style="color:red">*</span>
                            </p>
                        

                           

                            <p class="fieldset">
                                <input class="full-width2" type="submit" value="注册新用户" onclick="check()">
                            </p>
                        </form>
                    </div>

                    <a href="#0" class="cd-close-form">关闭</a>
                </div>
            </div> 
        </div>
            </div>
            
            
       
        <script type="text/javascript" src="http://www.sucaihuo.com/Public/js/other/jquery.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script> 
        <script src="/baodan/Public/js/main.js"></script>
    </body>
</html>
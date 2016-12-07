<?php

namespace Home\Controller;

use Think\Controller;

class RegistController extends Controller {

    public function index() {
        
        //查询银行信息并发送到模板
        $m = M('tb_bankinfo');
        $bnametype = $m->select();
        $this->assign('bnametype', $bnametype);
        
        $this->display();
    }

    public function res() {
        header("Content-Type: text/html; charset=utf-8");
		//var_dump("$_POST");exit;
		
        $username=$_POST['username'];
        $loginpwd=$_POST['loginpwd'];
        $email=$_POST['email'];
        $idcard=$_POST['idcard'];
        $name=$_POST['name'];
        $inviter=$_POST['inviterid'];
        $address=$_POST['address'];
        $mobile=$_POST['mobile'];
        $bankName=$_POST['bankname'];
        $bankcard=$_POST['bankcard'];
		if($_POST['sex']=='未填写'){
			$sex=0;
		}elseif($_POST['sex']=='男'){
			$sex=1;
			}elseif($_POST['sex']=='女'){
			$sex=2;}
			else if($_POST['sex']=='保密'){
			$sex=3;}
        $area=$_POST['area'];
        $cardtype=$_POST['cardtype'];
        //发送到接口的数据
        $data = "{
	userName:$username,
	passWord:$loginpwd,
	email:$email,
	idcard:$idcard,
	name:$name,
	inviter:$inviter,
	address:$address,
	mobile:$mobile,
	bankName:$bankName,
	bankcard:$bankcard,
	sex:$sex,
	cardType:$cardtype,
	area:$area
	}";
	
        $length = strlen($data);
        $header = array(
            'Content-Length:' . $length, //不是必需的
            'Content-Type: application/json',
        );
        $url=C("URL_Z")."user_register";
        $ch = curl_init($url);  //初始化curl
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $content = curl_exec($ch);  //执行并存储结果
        curl_close($ch);
        //编译结果
        $result = json_decode($content, true);
        $this->ajaxReturn($result);
    }
}

<?php

namespace Home\Controller;

use Think\Controller;

class ChangeController extends Controller {

    public function index() {

        $this->display();
    }
	public function pwd() {

       
		header("Content-Type: text/html; charset=utf-8");
         $name=$_POST['name'];
		 $type=3;
        $data = array(
            "name" => $name, "type" => $type
        );
        $data = json_encode($data);
        $length = strlen($data);
        $header = array(
            'Content-Length:' . $length, //不是必需的
            'Content-Type: application/json',
        );
        $url1=C("URL")."common/findBackPassWord.do";
        $ch = curl_init($url1);  //初始化curl
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
	public function check() {

       
		header("Content-Type: text/html; charset=utf-8");
         $name=$_POST['name'];
		 $code=$_POST['code'];
        $data = array(
            "name" => $name, "code" => $code
        );
        $data = json_encode($data);
        $length = strlen($data);
        $header = array(
            'Content-Length:' . $length, //不是必需的
            'Content-Type: application/json',
        );
        $url2=C("URL")."common/confirmPassWord.do";
        $ch = curl_init($url2);  //初始化curl
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
    public function sure() {

       
		header("Content-Type: text/html; charset=utf-8");
         $name=$_POST['name'];
		 $password=$_POST['password'];
        $data = array(
            "name" => $name, "passWord" => $password
        );
        $data = json_encode($data);
        $length = strlen($data);
        $header = array(
            'Content-Length:' . $length, //不是必需的
            'Content-Type: application/json',
        );
        $url3=C("URL")."common/modifyPassWord.do";
        $ch = curl_init($url3);  //初始化curl
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
	public function chaxun() {

       
		header("Content-Type: text/html; charset=utf-8");
        $name=$_POST['name'];
		$result=M("member")->where(array("member_name"=>$name))->find();
        $this->ajaxReturn($result);
    }
   

}

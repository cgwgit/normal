<?php

namespace Home\Controller;

use Think\Controller;

class CodeController extends Controller {
	public function pwd() {
		header("Content-Type: text/html; charset=utf-8");
         $mobile=$_POST['mobile'];
		 $type=3;
        $data = array(
            "phone" => $mobile, "type" => $type
        );
        $data = json_encode($data);
        $length = strlen($data);
        $header = array(
            'Content-Length:' . $length, //不是必需的
            'Content-Type: application/json',
        );
        $url1=C("URL")."common/validateForegister.do";
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
	public function code() {
		header("Content-Type: text/html; charset=utf-8");
         $phone=$_POST['phone'];
		 $code=$_POST['code'];
        $data = array(
            "phone" => $phone, "code" => $code
        );
        $data = json_encode($data);
        $length = strlen($data);
        $header = array(
            'Content-Length:' . $length, //不是必需的
            'Content-Type: application/json',
        );
        $url2=C("URL")."common/confirmValidate.do";
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
    
}

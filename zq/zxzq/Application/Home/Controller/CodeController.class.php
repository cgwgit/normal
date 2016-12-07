<?php

namespace Home\Controller;

use Think\Controller;

class CodeController extends Controller {

    public function pwd() {
        header("Content-Type: text/html; charset=utf-8");
        $mobile = $_POST['mobile'];
        $type = 3;
        $data = array(
            "phone" => $mobile, "type" => $type
        );
        $data = json_encode($data);
        $length = strlen($data);
        $header = array(
            'Content-Length:' . $length, //不是必需的
            'Content-Type: application/json',
        );
        $url1 = C("URL") . "common/validateForegister.do";
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
        $phone = $_POST['phone'];
        $code = $_POST['code'];
        $data = array(
            "phone" => $phone, "code" => $code
        );
        $data = json_encode($data);
        $length = strlen($data);
        $header = array(
            'Content-Length:' . $length, //不是必需的
            'Content-Type: application/json',
        );
        $url2 = C("URL") . "common/confirmValidate.do";
        $ch = curl_init($url2);  //初始化curl
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $content = curl_exec($ch);  //执行并存储结果
        curl_close($ch);
        //编译结果
        $result = json_decode($content, true);
        if ($result['code'] == 0) {
            $username = $_POST['username'];
            $loginpwd = $_POST['loginpwd'];
            $email = $_POST['email'];
            $idcard = $_POST['idcard'];
            $name = $_POST['name'];
            $inviter = $_POST['inviterid'];
            $address = $_POST['address'];
            $mobile = $_POST['phone'];
            $bankName = $_POST['bankname'];
            $bankcard = $_POST['bankcard'];
            $sex=$_POST['sex'];
            $area = $_POST['area'];
            $cardtype = $_POST['cardtype'];
            $network_id = $_POST['network_id'];
            //发送到接口的数据
            $data = array(
                'userName' => $username,
                'passWord' => $loginpwd,
                'email' => $email,
                'idcard' => $idcard,
                'name' => $name,
                'inviter' => $inviter,
                'address' => $address,
                'mobile' => $mobile,
                'bankName' => $bankName,
                'bankcard' => $bankcard,
                'sex' => $sex,
                'cardType' => $cardtype,
                'area' => $area,
                'network_id'=>$network_id
            );
            
            $data = json_encode($data);
            $length = strlen($data);
            $header = array(
                'Content-Length:' . $length, //不是必需的
                'Content-Type: application/json',
            );
            $url =  C("URL") . "securities/doRegister.do";
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
        } else {
            $this->ajaxReturn($result);
        }
    }

}

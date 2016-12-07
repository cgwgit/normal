<?php

namespace Home\Controller;

use Think\Controller;

class LoginController extends Controller {

    public function index() {
        $this->display();
    }

    public function login() {

        //接口调用  
        header("Content-Type: text/html; charset=utf-8");
        $username = $_POST['username'];
        $loginpwd = $_POST['loginpwd'];
        $loginpwd = md5($_POST['loginpwd']);
        $data = array(
            'member_name' => $username, 'member_passwd' => $loginpwd
        );
//         $data = json_encode($data);
//         $length = strlen($data);
//         $header = array(
//             'Content-Length:' . $length, //不是必需的
//             'Content-Type: application/json',
//         );
//         $url = C("URL") . "securities/login.do"; 
//         $ch = curl_init($url);  //初始化curl
//         curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//将curl_exec()获取的信息以字符串返回，而不是直接输出。
//         curl_setopt($ch, CURLOPT_HTTPHEADER, $header);//设置 HTTP 头字段的数组。格式： array('Content-type: text/plain', 'Content-length: 100')
//         curl_setopt($ch, CURLOPT_POST, 1);//TRUE 时会发送 POST 请求，类型为：application/x-www-form-urlencoded，是 HTML 表单提交时最常见的一种。
//         curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
//         $content = curl_exec($ch);  //执行并存储结果
//         curl_close($ch);
//         //编译结果
//         $result = json_decode($content, true);
//         $username = $result['data']['member_name'];
//         $data = $result['message'];
// //         var_dump($content);exit;
//         $token = $result['data']['token'];
        $userRec = M("member")->where(array($data))->find();
        //判断用户名是否存在
        if ( $userRec) {
            //注册至今时间间隔（时间戳）
            $time = time() - $userRec["member_time"];
            //时间戳转换成天数
            $_SESSION["time"] = floor($time / 3600 / 24);
            //将用户信息存入session
            session("userData", $userRec);
            //将token存入session
            session("token", $token);
            //注册日期
            $_SESSION["member_time"] = date("Y-m-d H:i:s", $userRec["member_time"]);
            //用户ip
            $_SESSION["server"] = $_SERVER['REMOTE_ADDR'];

            //成功返回     
            function GetIpLookup($ip = '') {
                $res = @file_get_contents('http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js&ip=' . $ip);
                if (empty($res)) {
                    return false;
                }
                $jsonMatches = array();
                preg_match('#\{.+?\}#', $res, $jsonMatches);
                if (!isset($jsonMatches[0])) {
                    return false;
                }
                $json = json_decode($jsonMatches[0], true);
                if (isset($json['ret']) && $json['ret'] == 1) {
                    $json['ip'] = $ip;
                    unset($json['ret']);
                } else {
                    return false;
                }
                return $json;
            }
            $ip = $_SESSION["server"];
            $ipInfos = GetIpLookup($iip); //baidu.com IP地址
            $area = $ipInfos['country'] . $ipInfos['province'] . $ipInfos['city'];

        //     $aa = array(
        //         'token' => $token, 'type' => 'web', "area" => $area
        //     );
        //     $aa = json_encode($aa);
        //     $length = strlen($aa);
        //     $header = array(
        //         'Content-Length:' . $length, //不是必需的
        //         'Content-Type: application/json',
        //     );
        //     $url2 = C("URL") . "putLocation.do";
        //     $ch = curl_init($url2);  //初始化curl
        //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        //     curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        //     curl_setopt($ch, CURLOPT_POST, 1);
        //     curl_setopt($ch, CURLOPT_POSTFIELDS, $aa);
        //     $content = curl_exec($ch);  //执行并存储结果
        //     curl_close($ch);
        //     $this->ajaxReturn($result);
        // } else {
        //     //用户名不存在
        //     $this->ajaxReturn($result);
        // }
            $this->success('登录成功', U('Index/index'), 2);
        }else{
            $this->error('用户名或密码不正确，请重新输入');
        }
    }

    public function logout() {
        //销毁session    
        session("userData", null);
        session("time", null);
        session("member_time", null);
        session("server", null);
        //跳转到登陆页
        $this->success("退出成功", U("Login/index"), 1);
    }

}

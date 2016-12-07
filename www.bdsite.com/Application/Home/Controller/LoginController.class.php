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
        $data = array(
            'member_name' => $username, 'member_passwd' => md5($loginpwd)
        );

//         $data = json_encode($data);

//         $length = strlen($data);
//         $header = array(
//             'Content-Length:' . $length, //不是必需的
//             'Content-Type: application/json',
//         );
//         $url=C("URL")."common/login.do";
// //        var_dump($url);exit;
//         $ch = curl_init($url);  //初始化curl
//         curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//         curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
//         curl_setopt($ch, CURLOPT_POST, 1);
//         curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
//         $content = curl_exec($ch);  //执行并存储结果
//         curl_close($ch);
//         //编译结果
//         $result = json_decode($content, true);
//         $username = $result['data']['username'];
//         $data = $result['message'];
//         // var_dump($content);exit;
//         $token = $result['data']['token'];
        $userRec = M("member")->where($data)->find();
        // var_dump( $userRec );die;
//         var_dump($token);exit;
//
        //判断用户名是否存在
        if ($userRec) {
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
               $iip=$_SESSION["server"];
            $ipInfos = GetIpLookup($iip); //baidu.com IP地址
            $area = $ipInfos['country'] . $ipInfos['province'] . $ipInfos['city'];
//        var_dump($area);exit;
            //  $aa= array(
            //     'token' => $token, 'type' => 'web', "area" => $area
            // );
            // $aa = json_encode($aa);
            // $length = strlen($aa);
            // $header = array(
            //     'Content-Length:' . $length, //不是必需的
            //     'Content-Type: application/json',
            // );
            // $url2=C("URL")."putLocation.do";
            // $ch = curl_init($url2);  //初始化curl
            // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            // curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            // curl_setopt($ch, CURLOPT_POST, 1);
            // curl_setopt($ch, CURLOPT_POSTFIELDS, $aa);
            // $content = curl_exec($ch);  //执行并存储结果
            // curl_close($ch);   
            $this->assign('data', $data); 
            $this->success("登录成功",U('Index/index'), 3);
        } else {
            //用户名不存在
            $this->error("用户名不存在", U('Login/index'), 3);
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

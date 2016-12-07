<?php

namespace Home\Controller;

use Think\Controller;

class LoginController extends Controller {

    public function index() {

        $this->display();
    }

    public function login() {
        $data['username'] = trim($_POST['username']);
        $data['password'] = sha1(md5(trim($_POST['loginpwd'])));
        $res = M("zxzq_user")->where($data)->find();
        //判断用户名是否存在
        if ($res) {
            //注册至今时间间隔（时间戳）
            $time = time() - strtotime ($res["ctime"]);
            //时间戳转换成天数
            $_SESSION["time"] = floor ($time/ 3600 / 24);
            //将用户信息存入session
            session(array('userData'=>$res,'expire'=>1800));
            session("userData", $res);
            //用户ip
            $_SESSION["server"] = $_SERVER['REMOTE_ADDR'];
            $result['status'] = 0;
            $result['content'] = '';
            $this->ajaxReturn($result);
        }else{
            $result['status'] = 1;
            $result['content'] = '用户名或密码不正确';
            $this->ajaxReturn($result);
        }
    }

    public function logout() {
        //销毁session    
        session("userData", null);
        session("time", null);
        session("server", null);
        //跳转到登陆页
        $this->success("退出成功", U("Login/index"), 1);
    }

}

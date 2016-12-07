<?php

namespace Home\Controller;

use Think\Controller;

class UserController extends Controller {

    public function _initialize() {
        if ($_SESSION['userData'] == NULL) {
            $this->success('请先登陆', U('Login/index'));
            exit();
        }
    }

    public function user() {

        $this->display();
    }

    public function add() {
        !trim($_POST['username']) ? $this->error('用户名不能为空') : $data['username'] = trim($_POST['username']);
        $res = M("zxzq_user")->where(array("username" => trim($_POST['username'])))->find();
        $res ? $this->error('用户名已存在') : $data['username'] = trim($_POST['username']);
        strlen(trim($_POST['password'])) < 6 || strlen(trim($_POST['password'])) > 15 ? $this->error('密码长度为6-15位') : $data['password'] = sha1(md5(trim($_POST['password'])));
        preg_match("/^\s*$/", trim($_POST['truename'])) ? $this->error('真实姓名不能为空') : $data['trueusername'] = trim($_POST['truename']);
        strlen(trim($_POST['phone'])) != 11 || preg_match("/^\s*$/", trim($_POST['phone'])) ? $this->error('手机号位数为11位') : $data['phone'] = trim($_POST['phone']);

        $data['ctime'] = date("Y-m-d H:i:s");
        $data['utime'] = date("Y-m-d H:i:s");
        $result = M("zxzq_user")->add($data);

        if ($result) {
            $this->success("添加成功", U("User/index"));
        } else {
            $this->error("添加失败");
        }
    }

}

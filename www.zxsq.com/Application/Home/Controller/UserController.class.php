<?php

namespace Home\Controller;

use Think\Controller;

class UserController extends Controller {

	
	public function _initialize(){
		if($_SESSION['userid']==NULL){
			$this->success('你还没有登陆,请登陆',U('Index/login'));
			exit();
		}
	}
	 	

	 

    public function index() {
    	
        //我的团队
        $userid = $_SESSION['userid'];
        $username=M("t_user")->where(array("userid" => $userid))->find();
        $uname=$username['username'];
        //查询我的团队
        $user = M("tbb_admin");
        $userRec = $user->where(array("inviterid" => $uname))->select();
        //查询用户信息
        $userinfo=M("tb_userinfo")->where(array("userid" => $userid))->find();
        //发送数据到模板
        $this->userRec = $userRec;
        $this->uname = $userinfo;
        $this->display();
    }

    //我的团队
    public function logout() {
        //销毁session
        session("userData", null);
        //跳转到首页
        $this->success("退出成功", U("Index/index"), 1);
    }

}

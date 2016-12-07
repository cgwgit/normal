<?php
#声明命名空间
namespace Admin\Controller;
#引入父类元素
use Think\Controller;
#声明控制器并且继承父类
class CommonController extends Controller{

	#构造方法-php
	// public function __construct(){
	// 	#先构造父类
	// 	#parent::__construct();
	// }

	#ThinkPHP中的构造方法
	public function _initialize(){
		#判断session是否存在
		$uid = session('uid');
		if(empty($uid)){
			#如果没有登录，则进行跳转
			$url = U('Public/login');
			//header("Location:$url");exit;
			#通过javascript代码实现
			$script = "<script>window.top.location.href='$url';</script>";
			echo $script;exit;
		}

		//RBAC权限判断
		$cname = strtolower(CONTROLLER_NAME);
		$aname = strtolower(ACTION_NAME);
		#控制器/*
		#控制器/方法
		#获取权限的数组
		$auths = C('RBAC_AUTHS');
		#获取用户的用户组id
		$roleid = session('role_id');
		#取出当前用户的权限
		$auth = $auths['auth' . $roleid];
		#判断权限
		if($roleid != 1){
			if(!in_array($cname . '/*',$auth) && !in_array($cname . '/' . $aname,$auth)){
				$this -> error('您没有权限',U('Index/home'),3);exit;
			}
		}
	}

}
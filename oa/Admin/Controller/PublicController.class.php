<?php

#声明当前控制器的命名空间
namespace Admin\Controller;
#引入父类控制器的类元素
use Think\Controller;
#定义控制器并且继承父类控制器
class PublicController extends Controller{

	#定义方法login，展示登录页面
	public function login(){
		#渲染模版
		$this -> display();
	}

	#生成验证码
	public function captcha(){
		#配置
		$cfg = array(
				'fontSize'  =>  10,              // 验证码字体大小(px)
		        'useCurve'  =>  false,            // 是否画混淆曲线
		        'useNoise'  =>  false,            // 是否添加杂点
		        'imageH'	=>	38,
		        'imageW'	=>	80,
		        'length'    =>  4,               // 验证码位数
		        'fontttf'   =>  '4.ttf',              // 验证码字体，不设置随机获取
			);
		#实例化验证码
		$verify = new \Think\Verify($cfg);
		#生成输出保存验证码
		$verify -> entry();
	}

	#index方法，用于处理用户登录
	public function index(){
		#接收数据
		$post = I('post.');
		#验证（条件就是post信息中的数据）
		$verify = new \Think\Verify();	#实例化验证码类
		#验证
		$rst = $verify -> check($post['captcha']);
		#判断验证码是否验证成功
		if($rst){
			#验证成功（验证用户名）
			#实例化模型
			$model = M('user');
			#查询用户信息
			$result = $model -> where(array('username' => $post['username'],'password' => $post['password'])) -> find();
			#用户登录的持久化
			if($result){
				#持久化
				session('uid',$result['id']);#持久化用户id
				session('uname',$result['username']);#持久化用户用户名
				session('role_id',$result['role_id']);#持久化用户组id
				$this -> success('登录成功~',U('Index/index'),3);
			}else{
				#登录失败
				$this -> error('登录失败~',U('login'),3);
			}
		}else{
			#验证失败
			$this -> error('验证码错误~',U('login'),3);
		}
	}

	#退出方法
	public function logout(){
		#删除全部的session
		session(null);
		#跳转到登录页
		$this -> success('退出成功',U('login'),3);
	}
}
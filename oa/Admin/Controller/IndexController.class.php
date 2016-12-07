<?php
#声明命名空间
namespace Admin\Controller;
#引入父类控制器的类元素
use Think\Controller;
#定义控制器并且继承父类控制器
class IndexController extends CommonController{

	#定义首页展示方法index
	public function index(){
		#展示模版
		$this -> display();
	}

	#用于展示后台首页的iframe页面
	public function home(){
		#展示模版
		$this -> display();
	}

	#空操作
	public function _empty(){
		echo ACTION_NAME . '<br/>';
		echo '非法操作';
	}
}
<?php
#命名空间
namespace Admin\Controller;
#引入父类元素
use Think\Controller;
#定义控制器并且继承父类
class EmptyController extends Controller{

	#空操作方法
	public function _empty(){
		//echo '当前请求的是空操作方法';
		$this -> display('Empty/error');	//Empty/error.html
	}
}
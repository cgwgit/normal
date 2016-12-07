<?php
#声明当前控制器的命名空间
namespace Home\Controller;
#引入父类控制器类元素
use Think\Controller;
#定义当前控制器并且继承父类控制器
class TestController extends Controller{

	#创建默认操作方法
	public function index(){
		// #获取当前时间
		// $date = date('Y-m-d H:i:s');
		// #传递数据给模版
		// $this -> assign('date',$date);
		// #展示模版
		// $this -> display('Index/index');

		//echo U('index2');
		//echo U('Index/index');
		echo U('Admin/Test/index',array('id' => 10086,'pid' => 10000));
	}

	#跳转演示
	public function index2(){
		#成功跳转
		//$this -> success('很棒，成功了',U('index'),3);
		#失败跳转
		$this -> error('抱歉，服务器挂了',U('index'),3);
	}

	#模版内容的获取
	public function test1(){
		#渲染模版
		#$this -> display();
		#获取模版的内容
		$content = $this -> fetch();
		#打印
		dump($content);
	}

	#注释
	public function test2(){
		#渲染模版
		$this -> display();
	}

	#一维数组的分配
	public function test3(){
		#定义数组
		#索引数组
		$arr1 = array('Linux','Apache','Mysql','PHP');
		#键值数组
		$arr2 = array('art1' => '西游记','art2' => '三国演义','art3' => '水浒传','art4' => '红楼梦');
		#传递索引数组
		$this -> assign('arr1',$arr1);
		#传递兼职数组
		$this -> assign('arr2',$arr2);
		#渲染模版
		$this -> display();
	}

	#二维数组的分配
	public function test4(){
		#定义二维数组
		$arr = array(
				array('name' => '小明','age' => 22,'sex' => '女'),
				array('name' => '小红','age' => 21,'sex' => '男')
			);
		#分配变量
		$this -> assign('arr',$arr);
		#渲染模版
		$this -> display();
	}

	#输出对象变量分配
	public function test5(){
		#实例化类Student
		$stu = new Student();
		#给对象添加成员属性
		$stu -> id = 100;
		$stu -> name = '张三';
		$stu -> age = 28;
		#传递变量
		$this -> assign('stu',$stu);
		#渲染模版
		$this -> display();
	}

	#模版中的系统变量
	public function test6(){
		#渲染模版
		$this -> display();
	}

	#模版中格式化时间戳
	public function test7(){
		// $time = time();	//时间戳
		// #传递给模版
		// $this -> assign('time',$time);
		#定义字符串
		$str = 'AbcDeFgHi';
		#将字符串传递给模版
		$this -> assign('str',$str);
		#渲染模版
		$this -> display();
	}

	#默认值
	public function test8(){
		#定义一个变量字符串
		$str = '';
		#传递给模版
		$this -> assign('str',$str);
		#渲染模版
		$this -> display();
	}

	#运算符
	public function test9(){
		#定义两个变量
		$a = 10;
		$b = 2;
		#分配到模版
		$this -> assign('a',$a);
		$this -> assign('b',$b);
		#渲染模版
		$this -> display();
	}

	#展示body模版文件
	public function test10(){
		#渲染模版
		$this -> display('body');
	}

	#使用volist遍历数组
	public function test11(){
		#定义一个数组
		$arr = array('西游记','一群男人和三个女人的故事','一群女人和一个男人的故事','三国演义');
		#二维数组
		$arr2 = array(
				array('猴哥','八戒','沙僧'),
				array('宋江','李鬼','柴进'),
				array('贾宝玉','林黛玉','薛宝钗'),
				array('孔明','孟德','术爸','孙枣')
			);
		#传递数组给模版展示
		$this -> assign('arr',$arr);
		$this -> assign('arr2',$arr2);
		#渲染模版
		$this -> display();
	}

	#输出今天是星期几
	public function test12(){
		#获取今天是星期几
		$day = date('N');
		#传递数据给模版
		$this -> assign('day',$day);
		#展示模版
		$this -> display();
	}

	#php标签
	public function test13(){
		#展示模版
		$this -> display();
	}
}
<?php
#声明当前控制器的命名空间
namespace Admin\Controller;
#引入父类控制器的类元素
use Think\Controller;
#引入验证码类
use Think\Verify;
#创建控制器并且继承父类控制器
class TestController extends Controller{

	#默认方法
	public function index(){
		echo '这是后台Admin分组下的Test控制器的index方法';
	}

	#使用普通方法实例化自定义的模型
	public function test1(){
		#实例化
		$model = new \Admin\Model\DeptModel();
		dump($model);
	}

	#使用快速方法实例化自定义模型类
	public function test2(){
		#实例化
		$model = D('Dept');
		dump($model);
	}

	#实例化父类模型
	public function test3(){
		#实例化
		//$model = M();//不带参数。表示实例化，不关联数据表
		$model = M('Dept');//实例化父类，关联 前缀+表名 这个表
		dump($model);
	}

	#添加部门记录
	public function test4(){
		#实例化模型
		$model = M('Dept');	//实例化父类模型
		#定义数据
		$data = array(
				'name'	=> '技术部',
				'pid'	=> 0,
				'sort'	=> 2,
				'remark'=> '集团的技术部'
			);
		#添加操作
		$rst = $model -> add($data);	//有返回值
		#打印
		dump($rst);
	}

	#修改数据
	public function test5(){
		#实例化模型
		$model = M('Dept');	//父类
		#定义数据
		$data = array(
				'id'   => 4,	//指定需要修改的主键
				'name' => '财务部'
			);
		#修改
		$rst = $model -> save($data);
		#打印返回值
		dump($rst);
	}

	#select查询
	public function test6(){
		#实例化模型
		$model = M('Dept');
		#查询全部
		#$data = $model -> select();
		#查询指定的id记录
		#$data = $model -> select(2);
		#查询多条指定的id记录
		$data = $model -> select('1,4');
		dump($data);
	}

	#使用find方法查询数据
	public function test7(){
		#实例化
		$model = M('Dept');
		#没有参数查询
		#$data = $model -> find();#只查询表中的第一条记录
		#查询指定的记录
		$data = $model -> find(3);#查询指定的id
		dump($data);
	}

	#删除操作
	public function test8(){
		#实例化模型
		$model = M('Dept');
		#删除
		#$rst = $model -> delete();		没有这种写法
		#删除指定id
		#$rst = $model -> delete(3);
		#删除多个id记录
		$rst = $model -> delete('1,2,4');
		dump($rst);
	}

	#使用G方法统计代码的执行消耗时间
	public function test9(){
		//开启统计标记
		G('start');
		$aa = 0;
		for ($i=0; $i < 100000000; $i++) { 
			$aa++;
		}
		//结束标记
		G('end');
		//输出统计结果
		echo G('start','end',6) . 's';
	}

	#使用AR模式往部门表中添加一行记录
	public function test10(){
		#实例化
		$model = D('Dept');
		#AR模式
		$model -> name = '公关部';
		$model -> pid = '0';
		$model -> sort = '20';
		$model -> remark = '公关部是集团中妹纸最多的一个部门';
		#添加操作
		$rst = $model -> add();	//不需要参数
		dump($rst);
	}

	#使用AR模式修改部门表中的记录id为7的信息
	public function test11(){
		#实例化
		$model = D('Dept');
		#AR模式开始
		$model -> find(7);	//查询了id是7的记录
		#$model -> id = '7';	//必须要指定主键
		$model -> remark = '也是女生最多的部门';
		#更新操作
		$rst = $model -> save();	//不需要参数
		dump($rst);
	}

	#验证AR模式中存在AR模式的查询操作
	public function test12(){
		#实例化模型
		$model = D('Dept');
		#AR模式查询
		$model -> id = '7';
		#查询操作
		//$rst = $model -> select();
		$rst = $model -> find();
		dump($rst);
	}

	#AR模式中的删除操作
	public function test13(){
		#实例化模型
		$model = D('Dept');
		#AR模式的删除操作
		$model -> id = '5,6';
		#查询操作
		#$model -> find(6);
		#删除操作
		$rst = $model -> delete();	//没有参数
		dump($rst);
	}

	#案例：查询部门表中id=9的记录信息
	public function test14(){
		#实例化模型
		$model = D('Dept');
		//dump($model);die;
		#设置条件
		$model -> where('id = 9');
		//dump($model);die;
		#查询
		$rst = $model -> find();
		#打印
		dump($rst);
	}

	#案例：使用limit查询部门表中的第一条数据
	public function test15(){
		#实例化模型
		$model = D('Dept');
		#设置limit
		$model -> limit(1);
		#查询
		$rst = $model -> select();	//为了避免巧合发生，不使用find查询
		#打印
		dump($rst);
	}

	#案例：使用limit方法查询部门表中的第一条记录开始后面的一条记录
	public function test16(){
		#实例化
		$model = D('Dept');
		#设置limit条件
		$model -> limit(1,1);
		#查询
		$rst = $model -> select();
		#打印
		dump($rst);
	}

	#案例：使用field方法查询部门表中的id和name字段的信息
	public function test17(){
		#实例化模型
		$model = D('Dept');
		#限制需要输出的字段名
		$model -> field('id,name');	#必须是一个参数
		#查询
		$rst = $model -> select();
		#打印
		dump($rst);
	}

	#案例：使用order方法对结果进行降序排列（desc）
	public function test18(){
		#实例化模型
		$model = D('Dept');
		#设置排序规则
		$model -> order('id desc');	//一个参数
		#查询
		$rst = $model -> select();
		#打印
		dump($rst);
	}

	#案例：使用group方法分组统计每个部门出现的次数
	public function test19(){
		#实例化模型
		$model = D('Dept');
		#先指定查询的字段
		$model -> field('name,count(*) as count');
		#分组统计
		$model -> group('name');
		#查询
		$rst = $model -> select();
		#打印
		dump($rst);
	}

	#案例：使用连贯操作改写test19
	public function test20(){
		#实例化模型
		$model = D('Dept');
		#连贯操作的写法
		$rst = $model -> field('name,count(*) as count') -> group('name') -> select();
		#打印
		dump($rst);
	}

	#案例：求出部门表中的总记录数
	public function test21(){
		#实例化模型
		$model = D('Dept');
		#查询总记录数
		$rst = $model -> count();
		#打印
		dump($rst);
	}

	#案例：查询出部门表中的id最大值（使用max方法）
	public function test22(){
		#实例化模型
		$model = D('Dept');
		#查询最大值
		$rst = $model -> max('id');
		#打印
		dump($rst);
	}

	#案例：查询出部门表中的id最小值（使用min方法）
	public function test23(){
		#实例化模型
		$model = D('Dept');
		#查询最小值
		$rst = $model -> min('id');
		#打印
		dump($rst);
	}

	#案例：求出部门表中的id的平均值（使用avg方法）
	public function test24(){
		#实例化模型
		$model = D('Dept');
		#求平均值
		$rst = $model -> avg('id');
		#打印
		dump($rst);
	}

	#案例：求出部门表中全部id的总和。
	public function test25(){
		#实例化模型
		$model = D('Dept');
		#求出id的总和
		$rst = $model -> sum('id');
		#打印
		dump($rst);
	}

	#案例：使用连贯操作fetchSql打印sql语句
	public function test26(){
		#实例化模型
		$model = D('Dept');
		#连贯操作的写法
		$rst = $model -> field('name,count(*) as count') -> group('name') -> fetchSql(true) -> select();
		#打印
		dump($rst);
	}

	#案例：实例化特殊表
	public function test27(){
		#实例化特殊表
		$model = D('Student');
		#打印
		dump($model);
	}

	#案例：使用session方法
	public function test28(){
		#1、设置一个名为name的session
		session('name','我们都是好孩纸');
		session('name2','一群天真善良的孩纸');
		#2、获取一个名为name的session值
		#dump(session('name'));
		#清空名为name的session
		#3、session('name',null);
		#dump($_SESSION);
		#4、删除全部的session
		#session(null);
		#dump($_SESSION);
		#5、获取全部的session信息
		#dump(session());
		#6、判断指定的session名是否存在，判断name2
		dump(session('?name2'));	//true
	}

	#案例：cookie的支持
	public function test29(){
		#1、设置一个名为name的cookie值
		cookie('name','明天是休息');
		#dump($_COOKIE);
		#2、添加一个名为name的cookie，有效期是3600秒
		#cookie('name','明天是休息',3600);
		#dump($_COOKIE);
		#3、获取一个名为name的cookie值
		#dump(cookie('name'));
		#4、删除单个名为name的cookie
		#cookie('name',null);
		#dump($_COOKIE);
		#5、删除全部的cookie
		#cookie(null);		#有bug，需要修改底层代码
		#dump($_COOKIE);
		#6、获取全部的cookie
		dump(cookie());
	}

	#使用自定义函数库中的自定义函数gbk2utf8
	public function test30(){
		#应用层级函数库中的自定义函数
		gbk2utf8();
	}

	#使用LOAD_EXT_FILE动态加载函数库文件
	public function test31(){
		#动态使用phpinfo.php中的info函数
		info();
	}

	#使用load方法加载文件phptest.php
	public function test32(){
		#语法要求load('@/filename')
		load('@/phptest');
		#调用test47方法
		test47();
	}

	#案例：生成验证码
	public function test33(){
		#定义配置
		$cfg = array(
				'fontSize'  =>  14,              // 验证码字体大小(px)
		        'useCurve'  =>  false,            // 是否画混淆曲线
		        'useNoise'  =>  false,            // 是否添加杂点	
		        'length'    =>  4,               // 验证码位数
		        'fontttf'   =>  '4.ttf',              // 验证码字体，不设置随机获取
			);
		#实例化
		$verify = new \Think\Verify($cfg);
		#生成验证码
		$verify -> entry();
	}

	#案例：生成中文验证码
	public function test34(){
		#配置
		$cfg = array(
				'useZh'     =>  true,           // 使用中文验证码
				'useCurve'  =>  false,            // 是否画混淆曲线
		        'useNoise'  =>  false,            // 是否添加杂点
			);
		#实例化
		$verify = new \Think\Verify($cfg);
		#生成验证码
		$verify -> entry();
	}

	#案例：在ThinkPHP中执行原生的sql语句，table多表连接查询
	public function test35(){
		#实例化模型
		$model = M();	//执行原生的sql语句可以不关联表
		#原生的sql语句
		$sql = "select t1.*,t2.name from tp_user as t1,tp_dept as t2 where t1.dept_id = t2.id;";
		#查询
		$rst = $model -> query($sql);
		#打印
		dump($rst);
	}

	#案例：在ThinkPHP中改写原生的sql语句，table多表连接查询
	public function test36(){
		#实例化模型
		$model = M();	//执行sql语句可以不关联表
		#原生的sql语句
		//$sql = "select t1.*,t2.name from tp_user as t1,tp_dept as t2 where t1.dept_id = t2.id;";
		//field where select 【table：用于指定需要查询的表名】
		#查询
		$rst = $model -> field('t1.*,t2.name') -> table('tp_user as t1,tp_dept as t2') -> where('t1.dept_id = t2.id') -> select();
		#打印
		dump($rst);
	}

	#案例：使用连贯操作实现join多表连接查询
	public function test37(){
		#实例化模型
		$model = M('Dept');
		//原生的sql语句
		//select t1.*,t2.name as dept_name from tp_dept as t1 left join tp_dept as t2 on t1.pid = t2.id;
		#连贯操作写法
		$rst = $model -> alias('t1') 
				-> field('t1.*,t2.name as dept_name') 
				-> join('left join tp_dept as t2 on t1.pid = t2.id') 
				-> select();
		#打印
		dump($rst);
	}

	#案例：使用get_client_ip获取用户的ip地址
	public function test38(){
		#第一种用法
		echo get_client_ip();	//127.0.0.1
		echo '<br/>';
		#第二种用法
		echo get_client_ip(1);
	}

	#案例：使用ip地址类，查询ip地址的物理地址
	public function test39(){
		#实例化
		$class = new \Org\Net\IpLocation('qqwry.dat');
		#调用getlocation方法进行查询
		$data = $class -> getlocation('114.215.159.214');
		#打印
		dump($data);
	}
}
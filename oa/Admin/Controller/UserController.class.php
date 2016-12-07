<?php
/**
 * 
 * @authors	九炼 (cherish@cherish.pw)
 * @wat 传智播客教育集团 PHP学院
 * @date    2016-06-21 09:32:52
 * @url 	http://dwz.cn/920815
 * @desc	请将此替换为文件描述...
 *
 * ━━━━━━神兽出没━━━━━━
 * 　　   ┏┓　 ┏┓
 * 　┏━━━━┛┻━━━┛┻━━━┓
 * 　┃              ┃
 * 　┃       ━　    ┃
 * 　┃　  ┳┛ 　┗┳   ┃
 * 　┃              ┃
 * 　┃       ┻　    ┃
 * 　┃              ┃
 * 　┗━━━┓      ┏━━━┛ Code is far away from bugs with the animal protecting.
 *       ┃      ┃     神兽保佑,代码无bug。
 *       ┃      ┃
 *       ┃      ┗━━━┓
 *       ┃      　　┣┓
 *       ┃      　　┏┛
 *       ┗━┓┓┏━━┳┓┏━┛
 *     　  ┃┫┫　┃┫┫
 *     　  ┗┻┛　┗┻┛
 *
 * ━━━━━━感觉萌萌哒━━━━━━
 */

#声明当前的命名空间
namespace Admin\Controller;
#引入父类控制器的类元素
use Think\Controller;
#定义控制器并且继承父类
class UserController extends CommonController{

	#add方法，用于输出部门的相关信息，并且展示添加职员模版
	public function add(){
		#实例化模型
		$model = M('Dept');
		#查询部门的信息
		$data = $model -> select();
		#使用无限级分类
		load('@/tree');
		$data = getTree($data);
		#变量分配
		$this -> assign('data',$data);
		#展示模版
		$this -> display();
	}

	#addOk方法，用于接收表单数据，并且将数据保存到数据表中
	public function addOk(){
		#接收数据
		$post = I('post.');
		#实例化模型
		$model = M('User');
		#保存
		$post['addtime'] = time();
		$rst = $model -> add($post);
		#判断返回值
		if($rst){
			#成功
			$this -> success('添加成功',U('showList'),3);
		}else{
			#失败
			$this -> error('添加失败',U('add'),3);
		}
	}

	#showList方法，用于读取职员信息，并且展示模版
	public function showList(){
		#实例化
		$model = M('User');
		#查询总的记录数
		$count = $model -> count();	//max min avg sum
		#实例化分页类，传递总的记录数和每页显示的条数
		$page = new \Think\Page($count,1);
		#定制分页提示信息
		$page -> setConfig('prev','上一页');
		$page -> setConfig('next','下一页');
		$page -> setConfig('first','首页');
		$page -> setConfig('last','末页');
		$page -> lastSuffix = false;	//将末页从数字的显示方式切换成汉字提示
		#生成页码等信息
		$show = $page -> show();
		#核心步骤，使用limit查询
		#查询
		$data = $model -> limit($page -> firstRow,$page -> listRows) -> select();
		#关联部门表，查询部门的名字
		$dept = M('Dept');
		foreach ($data as $key => $value) {
			#关联部门表进行查询
			$info = $dept -> find($value['dept_id']);
			$data[$key]['deptName'] = $info['name'];
		}
		#展示数据
		$this -> assign('data',$data);
		$this -> assign('page',$show);
		#渲染模版
		$this -> display();
	}

	#edit方法，获取原先的职员信息，展示模版
	public function edit(){
		#接收id信息
		$id = I('get.id');
		#实例化模型
		$model = M('User');
		$dept = M('Dept');
		#查询原先职员的记录信息
		$data = $model -> find($id);
		#查询部门信息
		$depts = $dept -> select();
		#传递给模版
		$this -> assign('data',$data);
		$this -> assign('depts',$depts);
		#展示模版
		$this -> display();
	}

	#editOk方法，接收数据并且更新数据
	public function editOk(){
		#接收数据
		$post = I('post.');
		#实例化模型
		$model = M('User');
		#判断密码是否为空
		if($post['password'] == ''){
			#删除password元素
			unset($post['password']);
		}
		#修改
		$rst = $model -> save($post);
		#判断返回结果
		if($rst !== false){
			#成功
			$this -> success('编辑成功',U('showList'),3);
		}else{
			#失败
			$this -> error('编辑失败',U('edit',array('id' => $post['id'])),3);
		}
	}

	#del方法，删除对应的记录
	public function del(){
		#接收数据
		$ids = I('get.ids');
		#实例化模型
		$model = M('User');
		#删除
		$rst = $model -> delete($ids);
		#判断删除结果
		if($rst){
			#成功
			$this -> success('删除成功',U('showList'),3);
		}else{
			#失败
			$this -> error('删除失败',U('showList'),3);
		}
	}

	#charts方法，用于统计每个部门有多少人
	public function charts(){
		#实例化模型
		$model = M();
		#组装sql语句
		$sql = "select t1.name as dept_name,count(t2.id) as count from tp_dept as t1 left join tp_user as t2 on t1.id = t2.dept_id  group by dept_name having count > 0;";
		#执行sql语句
		$data = $model -> query($sql);
		#拼凑数据
		$str = '[';
		foreach ($data as $key => $value) {
			$str .= "['" . $value['dept_name'] . "'," . $value['count'] . "],";
		}
		#去除最后一个多余的逗号
		$str = rtrim($str,',');
		#连上最后一个中括号
		$str .= ']';
		#变量的分配
		$this -> assign('str',$str);
		#展示模版
		$this -> display();
	}
}
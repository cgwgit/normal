<?php
#命名空间
namespace Admin\Controller;
#引入类元素控制器
use Think\Controller;
#定义并继承父类控制器
class DeptController extends CommonController{

	#showList方法，作用是展示部门列表
	public function showList(){
		#这个方法有2个业务逻辑，获取数据，展示模版
		#获取数据
		$model = D('Dept');	//实例化父类模型
		#查询数据
		$data = $model -> select();
		#通过父类方法parseFieldsMap去反向映射字段
		#$ss = $model -> parseFieldsMap($data);
		#dump($ss);die;
		//echo $model -> getLastSql();	//返回sql语句
		//echo $model -> _sql(); //ThinkPHP3.2之后支持的简写办法
		//die;
		foreach ($data as $key => $value) {
			#二次查询，通过查询pid所对应的数据信息，获取其中的name字段
			$info = $model -> find($value['pid']);
			#获取其中的name字段存到$data中去
			$data[$key]['parentName'] = $info['name'];
		}
		#引入无限级分类的文件，使用load方法
		load('@/tree');
		#无限级分类
		$data = getTree($data);
		#传递给模版
		$this -> assign('data',$data);
		#展示模版
		$this -> display();
	}

	#add方法，用于展示添加部门的模版文件
	public function add(){
		#读取出已经有的部门信息
		$model = D('Dept');
		#全部读取
		$rst = $model -> select();
		#变量的分配
		$this -> assign('rst',$rst);
		#渲染模版
		$this -> display();
	}

	#addOk方法，用于执行保存数据的操作
	public function addOk(){
		#接收数据
		#$post = $_POST;
		#使用I方法接收post数据
		#$post = I('post.');
		#实例化
		$model = D('Dept');
		#创建数据对象
		$model -> create();	#不传递参数则使用post数据
		#dump($data);die;
		#保存
		$rst = $model -> add();
		#判断返回值
		if($rst){
			#成功
			$this -> success('添加成功',U('showList'),3);
		}else{
			#失败
			$this -> error('你人品有问题~',U('add'),3);
		}
	}

	#部门删除功能
	public function del(){
		#接收参数
		$ids = I('get.ids');
		#删除操作
		$model = D('Dept');
		$rst = $model -> delete($ids);  //类似于in语句
		#判断删除结果
		if($rst){
			#成功
			$this -> success('删除成功',U('showList'),3);
		}else{
			#失败
			$this -> error('删除失败',U('showList'),3);
		}
	}

	#展示模版
	public function edit(){
		#接收原先id的信息
		$id = I('get.id');
		#先实例化模型
		$model = D('Dept');
		#查询原先的数据
		$rst = $model -> find($id);
		#传递给模版
		$this -> assign('rst',$rst);
		#查询出原先全部的部门
		$data = $model -> select();
		#传递给模版
		$this -> assign('data',$data);
		#渲染模版
		$this -> display();
	}

	#保存方法
	public function editOk(){
		#接收数据
		$post = I('post.');
		#实例化模型
		$model = D('Dept');
		#入库
		$rst = $model -> save($post);
		#判断返回结果
		if($rst !== false){
			#成功
			$this -> success('修改成功',U('showList'),3);
		}else{
			#失败
			$this -> error('修改失败',U('edit',array('id' => $post['id'])),3);
		}
	}
}
<?php
#声明当前类的命名空间
namespace Admin\Controller;
#引入父类控制器的类元素
use Think\Controller;
#定义类控制器和继承父类控制器
class KnowledgeController extends CommonController{

	#add方法，展示知识库的添加模版
	public function add(){
		#展示模版
		$this -> display();
	}

	#addOk方法，接收表单数据，并且保存到数据表中
	public function addOk(){
		#接收数据
		$post = I('post.');
		#上传操作
		if($_FILES['thumb']['size'] > 0){
			#上传的处理
			#配置上传
			$cfg = array(
					'rootPath' => WORKING_PATH . UPLOAD_ROOT_PATH
				);
			#实例化上传类
			$upload = new \Think\Upload($cfg);
			#上传
			$info = $upload -> uploadOne($_FILES['thumb']);
			#判断返回结果
			if($info){
				#上传成功的处理
				#picture字段
				$post['picture'] = UPLOAD_ROOT_PATH . $info['savepath'] . $info['savename'];
				#生成缩略图
				#实例化图片处理类
				$im = new \Think\Image();
				#打开图片
				$pic = WORKING_PATH . $post['picture'];
				$im -> open($pic);
				#制作缩略图
				$im -> thumb(100,100);	//等比缩放原则2000x2500  100 125
				#保存图片
				$pos = WORKING_PATH . UPLOAD_ROOT_PATH . $info['savepath'] . 'thumb_' . $info['savename'];
				$im -> save($pos);
				#拼凑thumb字段的数据
				$post['thumb'] = UPLOAD_ROOT_PATH .$info['savepath'] . 'thumb_' . $info['savename'];
			}
		}
		#实例化模型
		$model = M('Knowledge');
		#添加当前时间戳
		$post['addtime'] = time();
		#添加操作
		$rst = $model -> add($post);
		#判断返回结果
		if($rst){
			#添加成功
			$this -> success('添加成功',U('showList'),3);
		}else{
			#添加失败
			$this -> error('添加失败',U('showList'),3);
		}
	}

	#showList方法，读取知识库信息，展示模版
	public function showList(){
		#获取数据
		#实例化模型
		$model = M('Knowledge');
		#查询
		$data = $model -> select();
		#展示模版
		$this -> assign('data',$data);
		$this -> display();
	}

	#edit方法，获取id记录，最终展示数据和模版
	public function edit(){
		#获取需要修改的id值
		$id = I('get.id');
		#实例化模型
		$model = M('Knowledge');
		#查询
		$data = $model -> find($id);
		#变量分配
		$this -> assign('data',$data);
		#展示模版
		$this -> display();
	}

	#editOk，获取数据，附件上传，制作缩略图，数据保存
	public function editOk(){
		#获取数据post
		$post = I('post.');
		#附件上传，判断附件大小是否大于0，大于0则有附件
		if($_FILES['thumb']['size'] > 0){
			#配置
			$cfg = array(
					'rootPath' => WORKING_PATH . UPLOAD_ROOT_PATH
				);
			#传入配置数组，并且实例化上传类
			$upload = new \Think\Upload($cfg);
			#开始执行上传操作
			$info = $upload -> uploadOne($_FILES['thumb']);
			#判断上传的结果
			if($info){
				#修改picture字段
				$post['picture'] = UPLOAD_ROOT_PATH . $info['savepath'] . $info['savename'];
				#制作缩略图(Image.class.php)
				$im = new \Think\Image();	//没有参数
				#三步骤-第一步：打开一幅图片
				$path = WORKING_PATH . $post['picture'];
				$im -> open($path);
				#三步骤-第二步：制作缩略图
				$im -> thumb(100,100);	#等比缩放原则
				#三步骤-第三步：保存图片
				$pic = WORKING_PATH . UPLOAD_ROOT_PATH . $info['savepath'] . 'thumb_' . $info['savename'];
				$im -> save($pic);
				#设置thumb字段的值
				$post['thumb'] = UPLOAD_ROOT_PATH . $info['savepath'] . 'thumb_' . $info['savename'];
			}
		}
		#数据保存
		$model = M('Knowledge');	//实例化模型
		#写入数据
		$rst = $model -> save($post);
		#判断修改结果
		if($rst !== false){
			#修改成功
			$this -> success('修改成功',U('showList'),3);
		}else{
			#修改失败
			$this -> error('修改失败',U('edit',array('id' => $post['id'])),3);
		}
	}

	#del方法，获取ids，并且实现删除操作
	public function del(){
		#接收ids
		$ids = I('get.ids');
		#实例化模型
		$model = M('Knowledge');
		#删除操作
		$rst = $model -> delete($ids);
		#判断删除操作执行的结果
		if($rst){
			#删除成功
			$this -> success('删除成功',U('showList'),3);
		}else{
			#删除失败
			$this -> error('删除失败',U('showList'),3);
		}
	}
}
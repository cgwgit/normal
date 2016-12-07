<?php
#声明当前的命名空间
namespace Admin\Controller;
#引入父类的类元素
use Think\Controller;
#定义类并且继承父类
class DocController extends CommonController{

	#add方法，展示添加公文的模版文件
	public function add(){
		#展示模版
		$this -> display();
	}

	#addOk方法，保存添加的数据
	public function addOk(){
		#接收表单提交的post数据
		$post = I('post.');
		#实例化模型
		$model = M('Doc');
		#添加公文添加时间
		$post['addtime'] = time();
		#实例化上传类
		$cfg = array(
				'rootPath'      =>  WORKING_PATH . UPLOAD_ROOT_PATH //保存根路径
			);
		$upload = new \Think\Upload($cfg);
		#上传
		$info = $upload -> uploadOne($_FILES['file']);
		#判断上传的结果，上传失败返回false
		if($info){
			#设置表中的filepath字段
			$post['filepath'] = UPLOAD_ROOT_PATH . $info['savepath'] . $info['savename'];
			#设置表中的filename字段
			$post['filename'] = $info['savename'];
			#设置表中的hasfile字段
			$post['hasfile'] = 1;
		}
		#添加操作
		$rst = $model -> add($post);
		#判断添加操作返回值
		if($rst){
			#添加成功
			$this -> success('添加成功~',U('showList'),3);
		}else{
			#添加失败
			$this -> error('添加失败~',U('add'),3);
		}
	}

	#showList方法，获取公文信息，展示模版
	public function showList(){
		#实例化
		$model = M('Doc');
		#查询
		$data = $model -> select();
		#变量分配
		$this -> assign('data',$data);
		#展示模版
		$this -> display();
	}

	#download方法，下载附件
	public function download(){
		#接收附件的id
		$id = I('get.id');
		#实例化
		$model = M('Doc');
		#查询
		$data = $model -> find($id);
		#拼凑文件的完整路径
		$file = WORKING_PATH . $data['filepath'];
		#将文件输出
		header("Content-type: application/octet-stream");
		header('Content-Disposition: attachment; filename="' . basename($file) . '"');
		header("Content-Length: ". filesize($file));
		readfile($file);
	}

	#getCont方法，输出公文的信息
	public function getContent(){
		#接收id
		$id = I('get.id');
		#实例化模型
		$model = M('Doc');
		#查询公文的信息
		$data = $model -> find($id);
		#输出
		echo htmlspecialchars_decode($data['content']);
	}

	#edit方法，接收id数据，展示原数据，展示模版
	public function edit(){
		#接收id
		$id = I('get.id');
		#实例化模型
		$model = M('Doc');
		#查询
		$data = $model -> find($id);
		#展示数据（变量的分配）
		$this -> assign('data',$data);
		#展示模版
		$this -> display();
	}

	#editOk方法，用于接收post数据和文件上传的数据，保存数据
	public function editOk(){
		#接收post信息
		$post = I('post.');
		#判断是否有上传文件
		if($_FILES['file']['size'] > 0){
			#执行新文件的上传操作
			#配置上传
			$cfg = array(
					#上传的保存目录
					'rootPath'      =>	WORKING_PATH . UPLOAD_ROOT_PATH
				);
			#实例化上传类
			$upload = new \Think\Upload($cfg);
			#上传操作
			$info = $upload -> uploadOne($_FILES['file']);
			#判断上传结果
			if($info){
				#上传成功需要进行的操作
				#filepath字段更新
				$post['filepath'] = UPLOAD_ROOT_PATH . $info['savepath'] . $info['savename'];
				#filename字段更新
				$post['filename'] = $info['savename'];
				#hasfile字段更新
				$post['hasfile'] = 1;
			}
		}
		#实例化
		$model = M('Doc');
		#保存操作
		$rst = $model -> save($post);
		#判断修改结果
		if($rst !== false){
			#修改成功
			$this -> success('编辑成功',U('showList'),3);
		}else{
			#修改失败
			$this -> error('编辑失败',U('edit',array('id' => $post['id'])),3);
		}
	}

	#del方法，接收ids信息，并且执行删除操作
	public function del(){
		#接收ids信息
		$ids = I('get.ids');
		#实例化模型
		$model = M('Doc');
		#删除操作
		$rst = $model -> delete($ids);
		#判断返回值
		if($rst){
			#删除成功
			$this -> success('删除成功',U('showList'),3);
		}else{
			#删除失败
			$this -> error('删除失败',U('showList'),3);
		}
	}
}
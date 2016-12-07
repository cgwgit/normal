<?php
#声明命名空间
namespace Admin\Controller;
#引入父类控制器的类元素
use Think\Controller;
#定义控制器并且继承父类
class EmailController extends CommonController{

	#send方法，展示发送站内信模版
	public function send(){
		#列出收件人
		$model = M('User');
		#查询
		$data = $model -> select();
		#展示到模版
		$this -> assign('data',$data);
		#展示模版
		$this -> display();
	}

	#sendOk方法，保存站内信
	public function sendOk(){
		#获取数据
		$post = I('post.');
		#处理上传，如果附件大小大于0，则表示有附件
		if($_FILES['file']['size'] > 0){
			#配置上传
			$cfg = array(
					'rootPath' => WORKING_PATH . UPLOAD_ROOT_PATH
				);
			#实例化上传类
			$upload = new \Think\Upload($cfg);
			#上传操作
			$info = $upload -> uploadOne($_FILES['file']);
			#判断上传结果
			if($info){
				#file字段处理
				$post['file'] = UPLOAD_ROOT_PATH . $info['savepath'] . $info['savename'];
				#hasfile字段处理
				$post['hasfile'] = 1;
				#filename字段处理
				$post['filename'] = $info['savename'];
			}
		}
		#保存数据
		$model = M('Email');
		#补充数据表中的2个字段
		$post['from_id'] = session('uid');#发件人的id
		$post['addtime'] = time();#发件时间
		$rst = $model -> add($post);
		#判断保存结果
		if($rst){
			#保存成功
			$this -> success('发送成功',U('sendbox'),3);
		}else{
			#保存失败
			$this -> error('发送失败',U('send'),3);
		}
	}

	#sendbox方法，用于输出已发信件的信息
	public function sendbox(){
		#实例化模型
		$model = M('Email');
		#连表查询（table连表）
		#select t1.*,t2.truename from tp_email as t1,tp_user as t2 where t1.to_id = t2.id and from_id = uid
		$data = $model -> field('t1.*,t2.truename')
				-> table('tp_email as t1,tp_user as t2')
				-> where('t1.to_id = t2.id and from_id = ' . session('uid'))
				-> select();
		#传递数据给模版
		$this -> assign('data',$data);
		#展示模版
		$this -> display();
	}

	#download方法，文件下载
	public function download(){
		#获取邮件id
		$id = I('get.id');
		#查询数据
		$model = M('Email');
		#查询邮件记录
		$data = $model -> find($id);
		#组装file的完整路径
		$file = WORKING_PATH . $data['file'];
		#定义header头
		header("Content-type: application/octet-stream");
		header('Content-Disposition: attachment; filename="' . basename($file) . '"');
		header("Content-Length: ". filesize($file));
		#将文件输出缓冲区
		readfile($file);
	}

	#recbox方法，读取收件箱中的数据，展示到模版
	public function recbox(){
		#读取数据
		$model = M('Email');
		#email t1      user  t2
		#select t1.*,t2.truename from tp_email as t1,tp_user as t2 where t1.from_id = t2.id and to_id = uid
		$data = $model -> field('t1.*,t2.truename')
					-> table('tp_email as t1,tp_user as t2')
					-> where('t1.from_id = t2.id and to_id = ' . session('uid'))
					-> select();
		#展示模版
		$this -> assign('data',$data);
		$this -> display();
	}

	#getContent，读取邮件的内容，更新邮件的读取状态
	public function getContent(){
		#获取get中的id信息
		$id = I('get.id');
		#实例化模型
		$model = M('Email');
		#查询邮件的信息
		$data = $model -> where("id = $id and to_id = " . session('uid')) -> find();
		if($data){
			$model -> save(array('id' => $id,'isread' => 1));
		}
		#输出邮件的内容
		echo $data['content'];
	}

	#getMsgCount方法，获取当前用户未读邮件的数量
	public function getMsgCount(){
		if(IS_AJAX){
			#实例化
			$model = M('Email');
			#查询
			$count = $model -> where("isread = 0 and to_id = " . session('uid')) -> count();
			#输出
			echo $count;
		}else{
			echo 'Access Denied!';
		}
	}
}
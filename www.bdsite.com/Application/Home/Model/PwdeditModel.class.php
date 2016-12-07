<?php

/*
 * Copyright(c)2016 All rights reserved.
 * @Licenced  http://www.w3.org
 * @Author  liutian<1538731090@qq.com> liutian_jiayi
 * @Create on 2016-6-21 11:27:34
 * @Version 1.0
 */
/**
 * describe of UserModel
 */
namespace Home\Model;
class PwdeditModel extends \Think\Model{
	//
	public $tableName = "t_user";
	//设置自动验证规则
	public $_validate = array(
		//旧密码不能为空
		array("oldpwd", "require", "旧密码不能为空",1,3),
		//密码长度6-15
		array("password", "6,20", "密码长度应为6-15位", self::MUST_VALIDATE, "length", self::MODEL_INSERT),
		//确认密码 和密码的值一样
		array("pwdconfirm", "password", "两次密码输入不一致", 0, "confirm"),
		
	);
	//修改密码
	public function pwdedit()
	{
		if(!$this->create()) return false;
		//获取旧密码
		$oldpwd = $_POST['oldpwd'];
		//获取新密码
		$password = $_POST['password'];
		
		if($oldpwd != $_SESSION['userData']['loginpwd'])
		{
			$this->error = "原密码不正确！";
			return false;
		}
		$data = array(
		'loginpwd'=>$password,
		);		
		return $this->where(array("uid"=>$_SESSION['userData']['userid']))->save($data);
		//查询登录人数据		
	}
}
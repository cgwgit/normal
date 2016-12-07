<?php
#声明当前模型的命名空间
namespace Admin\Model;
#引入父类模型的类元素
use Think\Model;
#定义类并且继承父类模型
class DeptModel extends Model{
	
	#字段映射
	protected $_map = array(
			#表单中的name属性值 => 表中的字段名
			'deptname'	=>	'name'	#表示将表单中的deptname字段映射到表中的name字段
		);
}
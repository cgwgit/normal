<?php
/**
 * 
 * @authors	九炼 (cherish@cherish.pw)
 * @wat 传智播客教育集团 PHP学院
 * @date    2016-06-19 10:34:46
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

#命名空间
namespace Admin\Model;
#引入父类模型
use Think\Model;
#定义并且继承
class StudentModel extends Model{

	#指定当前模型需要关联的真实表名
	protected $trueTableName = 'student';
}
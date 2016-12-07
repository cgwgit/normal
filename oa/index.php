<?php
/**
 * 
 * @authors	YANG DINGYUAN (yangdingyuan@itcast.cn)
 * @date    2016-06-15 10:33:27
 * @url 	http://dwz.cn/920815
 * @desc	ThinkPHP项目入口文件
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
#设置字符集
header('Content-Type:text/html;charset=utf8');

#定义目录安全文件是否生成（默认是true）
define('BUILD_DIR_SECURE',false);

#开启调试模式
define('APP_DEBUG', true);

#定义当前文件所在的工作目录
define('WORKING_PATH',str_replace('\\','/',__DIR__));
#定义上传的根目录（相对站点的根目录）
define('UPLOAD_ROOT_PATH','/Public/Upload/');

#引入ThinkPHP目录下的ThinkPHP.php文件
include './ThinkPHP/ThinkPHP.php';
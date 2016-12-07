<?php 
namespace Home\Controller;
use Think\Controller;
class BfhController extends Controller{
	//返回剩余的数量
	public function check_num(){
		$num = M('bfh')->where(array('ctime' => date('Y-m-d')))->count();
		echo json_encode(array('code' => 0, 'data' => 20 - $num));exit();	
	}
     //用户注册
	public function register(){
        $err = '';
	    trim($_POST['userName']) ? $name = trim($_POST['userName']) : $err = '请填写正确的用户名';
	    preg_match("/^1[3578][0-9]{9}$/", $_POST['mobile']) ? $tel = trim($_POST['mobile']) : $err = '请填写正确的手机号';
	    trim($_POST['leaderName']) ? $lname = $_POST['leaderName'] : $err = '请填写正确的领导信息';
	    preg_match("/^(\d{15}$|^\d{18}$|^\d{17}(\d|X|x))$/", $_POST['idCard']) ? $sfz = $_POST['idCard'] : $err = '请填写正确的身份证号';
	    $qq = trim($_POST['qq']) ? trim($_POST['qq']) : '';
	    $desc = trim($_POST['description']) ? trim($_POST['description']) : '';
         if($err){
         	echo json_encode(array('code' => 1, 'msg' => $err));exit();
         }else{
         	$num = M('bfh')->where(array('ctime' => date('Y-m-d')))->count();
         	if($num <= 20){
         	$data = array(
               'name' => $name,
               'tel' => $tel,
               'leader' => $leader,
               'idcard' => $idcard,
               'qq' => $qq,
               'desc' => $desc,
               'ctime' => date('Y-m-d')
         		);
         	$return = M('bfh')->add($data);
         	if($return){
         	  echo json_encode(array('code' => 0, 'msg' => '报名成功'));exit();
            }else{
              echo json_encode(array('code' => 1, 'msg' => '网络繁忙，请稍后再试'));
            }
            }else{
            	echo json_encode(array('code' =>1, 'msg' => '名额已满，请明天在来'));
            }
         }
	}
}
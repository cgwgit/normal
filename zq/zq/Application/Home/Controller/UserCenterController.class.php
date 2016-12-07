<?php

namespace Home\Controller;

use Think\Controller;

class UserCenterController extends Controller {

    public function _initialize() {
        if ($_SESSION['userData'] == NULL) {
            $this->success('请先登陆', U('Login/index'));
            exit();
        }
    }
    
    public function __construct() {
        parent::__construct();
    }

    
    public function setTeamSign(){
//         $user=I("username") ;
//         $user ? $where = " member_name LIKE '%{$user}%' OR member_truename LIKE '%{$user}%'" : $where = "";
//         //拿出所有没有位置的用户
//         $count = M('view_delete')->where($where)->count();
//         $Page = new \Think\Page1($count, 10);
//         $show = $Page->show();
// //        $res = M('view_delete')->where('network_team is NULL OR network_team = ""')->order('member_id DESC')->limit($Page->firstRow . ',' . $Page->listRows)->select();
//         $res = M('view_delete')->where($where)->order('member_id DESC')->limit($Page->firstRow . ',' . $Page->listRows)->select();
//         foreach($res as $k => $v){
//             $holding = M('zxzq_holding')->where(array('memberid' => $v['member_id']))->find();
//             $res[$k]['securitiesnum'] = $holding['securitiesnum'] ? $holding['securitiesnum'] : 0.00 ;
//         }
        
//         //获取zxkj的下六级有空位的用户
//         $arr = $this->getTeamnetwork('zxkj', 6);
//         $this->user=$user;
//         $this->assign('res', $res);
//         $this->assign('show', $show);
//         $this->assign('arr', $arr);
        
        $this->display('setTeamSign');
        
    }
    
    // 循环获取选中用户的下级数据
    public function getTeamnetwork($member_name = '', $lever = 6){
        $member_name = $member_name ? $member_name : 'zxkj';
        $member = M('member')->where("member_name = '{$member_name}'")->find();
        $res = M('member')->where("network_team LIKE '{$member['network_team']}%' AND LENGTH(network_team) < " . (strlen($member['network_team']) + $lever * 2 + 1))->select();
//        print_r($res);exit();
        foreach ($res as $k => $v){
            if(substr($v['network_team'], 0, 4) == '0101' || substr($v['network_team'], 0, 4) == '0102' || $v['member_id'] == 1){
//                print_r($v);exit();
                $next = M('member')->where("network_team LIKE '{$v['network_team']}%' AND LENGTH(network_team) < " . (strlen($v['network_team']) + 3))->count();
    //            echo "network_team LIKE '{$v['network_team']}%' AND LENGTH(network_team) < " . (strlen($v['network_team']) + 3) . '<br>';
                $n0101 = M('member')->where(array('network_team' => '0101'))->find();
                $n0102 = M('member')->where(array('network_team' => '0102'))->find();

                if($next < 3 || ($v['member_id'] == 1 && (!$n0101 || !$n0102))){
                    $array['memberid'] = $v['member_id'];
                    $array['member_name'] = $v['member_name'];
                    $array['network_team'] = $v['network_team'];
                    $data[] = $array;
                }
            }
        }
        
//        print_r($res);exit();
        return $data;
    }
    
    //获取选中用户的下级状态
    public function getNext(){
        $network_team = I('network_team');
        $return = "<option value='0'>--请选择--</option>";
        if($network_team){
            $left = M('member')->where(array('network_team' => $network_team . '01'))->find();
            if(!$left){
                $return .= "<option value='" . $network_team . '01' . "'>左侧</option>";
            }
            $right = M('member')->where(array('network_team' => $network_team . '02'))->find();
            if(!$right){
                $return .= "<option value='" . $network_team . '02' . "'>右侧</option>";
            }
        }
        
        echo $return;exit();
    }
    
    //设置网络上级
    public function setTeamwork(){
        $member_id = I('member_id');
        $member_info = M('member')->where(array('member_id' => $member_id))->find();
        $u = M('member')->where(array('network_team' => substr(I('teamwork'), 0, -2)))->find();
        $qr = I('teamwork');
        $data['network_id'] = $u['member_sn'];
        if(!$member_info['network_team']){
            $data['network_team']=I('teamwork');
            $update = M('member')->data($data)->where(array('member_id' => $member_id))->save();
            echo $update;
            exit();
        }
        
        $update = M('member')->data($data)->where(array('member_id' => $member_id))->save();
        if($update){
            $networdk_len = strlen($member_info['network_team']) + 1;
            $return = M()->execute("UPDATE `member` SET `network_team` = CONCAT('{$qr}', SUBSTRING(`network_team`, {$networdk_len})) WHERE `network_team` LIKE '{$member_info['network_team']}%'");
        }
        echo $return;
        exit();
    }
    
    // 获取推荐人下级
    public function reload(){
        $data['c'] = $data['u'] = "<option value='0'>--请选择--</option>";
        $team = $this->getTeamnetwork(I('member_name'), 6);
        foreach($team as $v){
            $data['u'] .= "<option value='{$v['network_team']}'>{$v['member_name']}</option>";
        }
        
        echo json_encode($data);
    }
    
    // 更新推荐人调用接口接口
    public function updateInvite($member_name, $securities_id) {
        $da = array(
            "securities_id"=>$securities_id,
            "userName"=>$member_name
        );
        $da = json_encode($da);
        $length = strlen($da);
        $header = array(
            'Content-Length:' . $length, //不是必需的
            'Content-Type: application/json',
        );
         $url = 'http://192.168.0.250:8081/' . "securities/updateSecuritiesTeam.do";
//        $url = 'http://10.9.78.61:8081/' . "securities/updateSecuritiesTeam.do";
        $ch = curl_init($url);  //初始化curl
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $da);
        $content = curl_exec($ch);  //执行并存储结果
        print_r($content);exit();
        curl_close($ch);
        //编译结果
        $result = json_decode($content, true);
        //判断成功或失败
        if ($result['code'] == 0) {
            return true;
        } else {
            return false;
        }
    }
    
    // 更新推荐人直接调用接口
    public function setSecurities(){
        $a = $this->updateInvite(I('member_name'), I('securities_id'));
        echo json_encode($a);exit();
    }
    
    // 添加用户
    public function addMember(){
        $member_name = I('member_name');
        $check = M('member')->where(array('member_name' => $member_name))->find();
        if($check){
            ajax_return(1, '用户名已存在');
        }
        
        $data = array(
            'member_name' => $member_name,
            'member_passwd' => md5(I('password')),
            'member_time' => time()
        );
        
        $return = M('member')->data($data)->add();
        
        if(!$return){
            ajax_return(1, '添加失败');
        }
        
        M('member')->data(array('member_sn' => 'cn' . (51283574 + $return)))->where(array('member_id' => $return))->save();
        
        if($return && I('securities_id')){
            $this->updateInvite($member_name, I('securities_id'));
        }
        
        ajax_return(0, '添加成功');
    }
    
    // 删除用户调用接口
    public function delUser(){
        $da['memberid'] = I('member_id');
        
        $da = json_encode($da);
        $length = strlen($da);
        $header = array(
            'Content-Length:' . $length, //不是必需的
            'Content-Type: application/json',
        );
         $url = "http://192.168.0.250:8081/securities/deleteMember.do";
//       $url = "http://10.9.78.61:8081/securities/deleteMember.do";
        
        $ch = curl_init($url);  //初始化curl
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $da);
        $content = curl_exec($ch);  //执行并存储结果
        print_r($content);exit();
        curl_close($ch);
        //编译结果
        $result = json_decode($content, true);
        //判断成功或失败
        echo $content;exit();
    }
    
    // 清除选中用户网络位置
    public function clearTeamWork(){
        //找出空位
        $q = '01';
        for($i = 3; $i < 100; $i++){
            $qr = $i < 10 ? $q . '0' . strval($i) : $q . strval($i);
            $k = M('member')->where(array('network_team' => $qr))->find();
            if(!$k){
                break;
            }
        }
        
        $member_info = M('member')->where(array('member_id' => I('member_id')))->find();
        $update = M('member')->data(array('network_id' => 'cn51283575'))->where(array('member_id' => I('member_id')))->save();
        
        $networdk_len = strlen($member_info['network_team']) + 1;
        $return = M()->execute("UPDATE `member` SET `network_team` = CONCAT('{$qr}', SUBSTRING(`network_team`, {$networdk_len})) WHERE `network_team` LIKE '{$member_info['network_team']}%'");
        
        if($return){
            ajax_return(0, '已清除该用户网络位置');
        }else{
            ajax_return(1, '操作失败');
        }
    }
    
    // 用户财务管理
    public function userFinance(){
 //        $user=$_GET['username'];
	// $user ? $where=" member_name like '%$user%' OR member_truename LIKE '%{$user}%'" :$where="";
     
 //        $count = M('view_delete')->where($where)->count();
 //        $Page = new \Think\Page1($count, 10);
 //        $show = $Page->show();
 //        $res = M('view_delete')->where($where)->order('member_id DESC')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        
 //        //获取所有
 //        $list = M('zxzq_goods')->order('securities ASC')->select();
        
 //        $arr = $this->getTeamnetwork('zxkj', 6);
 //        $this->user=$user;
        
 //        $this->assign('list', $list);
 //        $this->assign('res', $res);
 //        $this->assign('show', $show);
 //        $this->assign('arr', $arr);
        
        $this->display('userFinance');
    }
    
    // 获取证券详细
    public function getGoodsInfo(){
        $id = I('goods_id');
        $dh = M('zxzq_rate')->order('ctime DESC')->limit(1)->find();
        $goods = M('zxzq_goods')->where(array('id' => $id))->find();
        
        $return = array(
            'ggl' => $goods['levered'],
            'shzq' => $goods['levered'] * $goods['securities'],
            'yfje' => $goods['securities'] * $dh['money'],
        );
        
        echo json_encode($return);exit();
    }
    
    // 调取下单接口
    public function addOrder(){
//        print_r(I());exit();
        $data['id'] = I('id');
        $data['memberid'] = I('member_id');
        $data['realprice'] = I('realprice');
                
        $data = json_encode($data);
        $length = strlen($data);
        $header = array(
            'Content-Length:' . $length, //不是必需的
            'Content-Type: application/json',
        );
         $url = "http://192.168.0.250:8081/securities/special_saveRecord.do";
//       $url = "http://10.9.78.61:8081/securities/special_saveRecord.do";
        
        $ch = curl_init($url);  //初始化curl
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $content = curl_exec($ch);  //执行并存储结果
        print_r($content);exit();
        curl_close($ch);
        //编译结果
        $result = json_decode($content, true);
        //判断成功或失败
        echo $content;exit();
    }
    
    public function zqUnLock(){
        $data['memberid'] = I('member_id');
        $data['status'] = 1;
        
        $data = json_encode($data);
        $length = strlen($data);
        $header = array(
            'Content-Length:' . $length, //不是必需的
            'Content-Type: application/json',
        );
         $url = "http://192.168.0.250:8081/securities/updateStatus.do";
//       $url = "http://10.9.78.61:8081/securities/updateStatus.do";
        
        $ch = curl_init($url);  //初始化curl
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $content = curl_exec($ch);  //执行并存储结果
        curl_close($ch);
        //编译结果
        $result = json_decode($content, true);
        //判断成功或失败
        echo $content;exit();
    }
    
    public function zqDetails(){
        $id=I("member_id") ;
        $list = M('zxzq_goods')->order('securities ASC')->select();
        $count = M('zxzq_record')->where(array("memberid"=>$id))->count();
        $Page = new \Think\Page1($count, 10);
        $show = $Page->show();
        $result = M('zxzq_record')->where(array("memberid"=>$id))->order("otime desc")->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->result=$result;
        $this->list=$list;
        $this->show=$show;
        $this->display();
    }
    
    public function delOrder(){
        $data['securitiesid'] = $_POST['securitiesid'];
        $data = json_encode($data);
        $length = strlen($data);
        $header = array(
            'Content-Length:' . $length, //不是必需的
            'Content-Type: application/json',
        );
         $url = "http://192.168.0.250:8081/securities/deleteRecord.do";
//       $url = "http://10.9.78.61:8081/securities/deleteRecord.do";
        
        $ch = curl_init($url);  //初始化curl
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $content = curl_exec($ch);  //执行并存储结果
        curl_close($ch);
        echo $content;exit();
    }
    
    public function detailOrder(){
        $securitiesid = $_POST['securitiesid'];
        $result = M("zxzq_record")->where(array("securitiesid"=>$securitiesid))->find();
        $res = json_encode($result);
        echo $res;exit;
    }
    
    public function editOrder(){
        $data['securitiesid'] = $_POST['securitiesid'];
        $data['money'] = $_POST['securities'];
        $data = json_encode($data);
        $length = strlen($data);
        $header = array(
            'Content-Length:' . $length, //不是必需的
            'Content-Type: application/json',
        );
         $url = "http://192.168.0.250:8081/securities/updateRecord.do";
//       $url = "http://10.9.78.61:8081/securities/updateRecord.do";
        
        $ch = curl_init($url);  //初始化curl
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $content = curl_exec($ch);  //执行并存储结果
        curl_close($ch);
        echo $content;exit();
    }
    
    public function detection(){
        $member_sn = $_POST['member_sn'];
        $result = M("member")->where(array("member_sn"=>$member_sn))->find();
        $network_team=$result['network_team'];
        if($network_team){
            $left = M('member')->where(array('network_team' => $network_team . '01'))->find();
            $right = M('member')->where(array('network_team' => $network_team . '02'))->find();
    //        print_r($right);exit;
            if(!$left && !$right){
                echo json_encode(array("message"=>"<option value='" . $network_team . '01' . "'>左侧</option><option value='" . $network_team . '02' . "'>右侧</option>"));
            }
            if(!$left && $right){
                echo json_encode(array("message"=>"<option value='" . $network_team . '01' . "'>左侧</option>"));
            }
            if(!$right && $left){
                echo json_encode(array("message"=>"<option value='" . $network_team . '02' . "'>右侧</option>"));
            }
            if($left && $right){
                echo json_encode(array("message"=>"左侧右侧都没有有位置","code"=>1));
            }
        }else{
            echo json_encode(array("message"=>"你输入的编号不存在网络位置","code"=>1));
        }
    }
    
    public function teamPlace(){
        if($_POST['membersn'] && $_POST['place']){
        $member_info = M('member')->where(array('member_name' => $_POST['membername']))->find();
		if($member_info['member_sn']==$_POST['membersn']){
			echo json_encode(array("message"=>"网络上级不可是自己","code"=>1));exit();
		}
        $u = M('member')->where(array('network_team' => substr($_POST['place'], 0, -2)))->find();
        $qr = $_POST['place'];
        $data['network_id']=$_POST['membersn'];
        if(!$member_info['network_team']){
            $data['network_team']=$_POST['place'];
            $update = M('member')->data($data)->where(array('member_name' => $_POST['membername']))->save();
            echo json_encode(array("message"=>"编辑成功","code"=>0));exit;
        }
        $update = M('member')->data($data)->where(array('member_name' => $_POST['membername']))->save();
        if($update){
            $networdk_len = strlen($member_info['network_team']) + 1;
            $return = M()->execute("UPDATE `member` SET `network_team` = CONCAT('{$qr}', SUBSTRING(`network_team`, {$networdk_len})) WHERE `network_team` LIKE '{$member_info['network_team']}%'");
            echo json_encode(array("message"=>"编辑成功","code"=>0));
        }else{
                echo json_encode(array("message"=>"编辑失败","code"=>1));
            }
        }else{
            echo json_encode(array("message"=>"信息填写不完整","code"=>1));
        }
    }
}
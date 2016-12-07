<?php

namespace Home\Controller;

use Think\Controller;

class TeamController extends Controller {

    public function _initialize() {
        if ($_SESSION['userData'] == NULL) {
            $this->success('请先登陆', U('Login/index'));
            exit();
        }
        $id = $_SESSION['userData']['member_id'];
        $result = M("member")->where(array("member_id" => $id))->find();
        $res = M("zxzq_information")->where(array("memberid" => $id))->find();
        $money = M("zxzq_wallet")->where(array("memberid" => $id))->find();
        $this->money = $money;
        $this->res = $res;
        $this->result = $result;
    }

    public function myTeam() {
        $id = $_SESSION['userData']['member_id'];
        $sign = $_SESSION['userData']['network_team'];
        $uname = $_SESSION['userData']['member_name'];
        $len = strlen($sign);
        if ($sign) {
            $team = M("member")->join("left join zxzq_information on member.member_id=zxzq_information.memberid")->where("member.network_id='$uname' and member.network_team like '$sign%' and length(network_team)=$len+2")->order("network_team")->select();
            foreach ($team as $k => $v) {
                if ($v['network_team']) {
                    $sum = M('member')->query("SELECT SUM(securities) as sum FROM member AS m LEFT JOIN zxzq_record as z ON m.member_id = z.memberid WHERE m.network_team LIKE '{$v['network_team']}%' and m.network_team != '{$v['network_team']}' and status='1' and YEARWEEK(date_format(z.otime,'%Y-%m-%d')) = YEARWEEK(now())");
//                print_r($sum);exit();
                    $team[$k]['sumX'] = $sum[0]['sum'];
                }
            }
           // var_dump($team);exit;
        }
//总业绩
        $sum_achi = M("member")->join("left join zxzq_information on member.member_id=zxzq_information.memberid")->where("member.member_id=$id")->find();
        //本周业绩
        $sum = M("zxzq_record")->where("memberid in(SELECT member_id from member  where  network_team like '$sign%' and network_team !='$sign') and status='1' and YEARWEEK(date_format(otime,'%Y-%m-%d')) = YEARWEEK(now())")->SUM("securities");
        //本周静态收益
        $sum1 = M("zxzq_drawcash_record")->where("status='2' and memberid='$id' and YEARWEEK(date_format(time,'%Y-%m-%d')) = YEARWEEK(now())")->SUM("securitiesnum");
        //本周动态收益
        $sum2 = M("zxzq_drawcash_record")->where("status='1' and memberid='$id' and YEARWEEK(date_format(time,'%Y-%m-%d')) = YEARWEEK(now())")->SUM("securitiesnum");
        $this->sum_achi = $sum_achi;
        $this->sum1 = $sum1;
        $this->sum2 = $sum2;
        $this->sum = $sum;
        $this->team = $team;


        $this->show = $show;
        $this->display();
    }

    public function down() {
//        var_dump($_POST);exit;
        $sign = $_POST['network_team'];
        $name = $_POST['member_name'];
        $len = strlen($sign);
        if ($sign) {
            $team = M("member")->join("left join zxzq_information on member.member_id=zxzq_information.memberid")->where("member.network_id='$name' and member.network_team like '$sign%' and length(network_team)=$len+2")->order("network_team")->select();
            foreach ($team as $k => $v) {
                if ($v['network_team']) {
                    $sum = M('member')->query("SELECT SUM(securities) as sum FROM member AS m LEFT JOIN zxzq_record as z ON m.member_id = z.memberid WHERE m.network_team LIKE '{$v['network_team']}%' and m.network_team != '{$v['network_team']}' and status='1' and YEARWEEK(date_format(z.otime,'%Y-%m-%d')) = YEARWEEK(now())");
               // print_r($sum);exit();
                    $team[$k]['sumX'] = $sum[0]['sum'];
                }
            }
            // var_dump($sum);exit;
        }
        $id = $_SESSION['userData']['member_id'];
        $uname = $_SESSION['userData']['member_name'];
        $team_sign = $_SESSION['userData']['network_team'];
        //总业绩
        $sum_achi = M("member")->join("left join zxzq_information on member.member_id=zxzq_information.memberid")->where("member.member_id=$id")->find();
        //本周业绩
        $sum = M("zxzq_record")->where("memberid in(SELECT member_id from member  where network_team like '$team_sign%' and network_team !='$team_sign') and status='1' and YEARWEEK(date_format(otime,'%Y-%m-%d')) = YEARWEEK(now())")->SUM("securities");
        //本周静态收益
        $sum1 = M("zxzq_drawcash_record")->where("status='2' and memberid='$id' and YEARWEEK(date_format(time,'%Y-%m-%d')) = YEARWEEK(now())")->SUM("securitiesnum");
        //本周动态收益
        $sum2 = M("zxzq_drawcash_record")->where("status='1' and memberid='$id' and YEARWEEK(date_format(time,'%Y-%m-%d')) = YEARWEEK(now())")->SUM("securitiesnum");
        $this->sum_achi = $sum_achi;
        $this->sum1 = $sum1;
        $this->sum2 = $sum2;
        $this->sum = $sum;
        $this->team = $team;
        $this->show = $show;
        $this->display();
    }

    public function setTeam() {
        $name = $_SESSION['userData']['member_name'];
        $count = M("member")->where("member.securities_id ='$name' and (member.network_team is null OR member.network_team = '')")->count();
        $Page = new \Think\Page1($count, 10);
        $show = $Page->show();
        $result = M("member")->where("member.securities_id ='$name' and (member.network_team is null OR member.network_team = '') ")->order("member_time desc")->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->show = $show;
        $this->result = $result;
        $this->display();
    }

    public function edit() {
        $newUserId = $_POST['id'];
        $memberid = $_SESSION['userData']['member_id'];
        $data = array(
            'member_id' => $memberid, 'newUserId' => $newUserId
        );
        $data = json_encode($data);
        $length = strlen($data);
        $header = array(
            'Content-Length:' . $length, //不是必需的
            'Content-Type: application/json',
        );
        $url = C("URL") . "securities/securities_checkNetWork.do";
        $ch = curl_init($url);  //初始化curl
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $content = curl_exec($ch);  //执行并存储结果
        curl_close($ch);
        $data = json_decode($content, 1);
//        print_r($data);exit();
        if($data['code']==0){
            if($data['data']){
                foreach($data['data'] as $k => $v){
                    $array[$v['upMemberId']]['member_name'] = $v['member_name'];
                    $array[$v['upMemberId']]['upMemberId'] = $v['upMemberId'];
                    if(substr($v['newNetworkTeam'], strlen($v['newNetworkTeam']) - 2, 2) == 01){
                        $array[$v['upMemberId']]['left'] = $v['newNetworkTeam'];
                    }else{
                        $array[$v['upMemberId']]['right'] = $v['newNetworkTeam'];
                    }
                }
            }
        }else{
            echo $content;exit;
        }
        $return['t'] = '<option value=0>--请选择--</option>';
        $return['r'] = '<option value=0>--请选择--</option>';
        foreach($array as $v){
            $return['t'] .= '<option value="' . $v['upMemberId'] . '">' . $v['member_name'] . '</option>';
        }
        echo json_encode($return);exit;
    }
    
    public function getUserWZ(){
        $newUserId = $_POST['id'];
        $memberid = $_SESSION['userData']['member_id'];
        $member_id = I('member_id');
        $data = array(
            'member_id' => $memberid, 'newUserId' => $newUserId
        );
        $data = json_encode($data);
        $length = strlen($data);
        $header = array(
            'Content-Length:' . $length, //不是必需的
            'Content-Type: application/json',
        );
        $url = C("URL") . "securities/securities_checkNetWork.do";
        $ch = curl_init($url);  //初始化curl
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $content = curl_exec($ch);  //执行并存储结果
        curl_close($ch);
        $data = json_decode($content, 1);
//        print_r($data);exit();
        if($data['data']){
            foreach($data['data'] as $k => $v){
                $array[$v['upMemberId']]['member_name'] = $v['member_name'];
                if(substr($v['newNetworkTeam'], strlen($v['newNetworkTeam']) - 2, 2) == 01){
                    $array[$v['upMemberId']]['left'] = $v['newNetworkTeam'];
                }else{
                    $array[$v['upMemberId']]['right'] = $v['newNetworkTeam'];
                }
            }
        }
        
        $return['t'] = '<option value=0>--请选择--</option>';
        $return['t'] .= $array[$member_id]['left'] ? '<option value="' . $array[$member_id]['left'] . '">左侧</option>' : '';
        $return['t'] .= $array[$member_id]['right'] ? '<option value="' . $array[$member_id]['right'] . '">右侧</option>' : '';
        $return['fid'] = $member_id;
        
        echo json_encode($return);exit();
    }
    
    public function setNetTeamWork(){
        $data = array(
            'member_id' => $_SESSION['userData']['member_id'],
            'upMemberId' => I('upMemberId'),
            'newNetworkTeam' => I('newNetworkTeam'),
            'newUserId' => I('newUserId'),
        );
        $data = json_encode($data);
        $length = strlen($data);
        $header = array(
            'Content-Length:' . $length, //不是必需的
            'Content-Type: application/json',
        );
        $url = C("URL") . "securities/securities_setNetWork.do";
        $ch = curl_init($url);  //初始化curl
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $content = curl_exec($ch);  //执行并存储结果
        
        echo $content;exit();
    }

}

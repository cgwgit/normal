<?php

namespace Home\Controller;

use Think\Controller;

class LowerController extends Controller {

    public function index() {
        //用户名是否存在
//        var_dump($_GET);exit;
        if ($_GET['username']) {
            $name = trim($_GET['username']);
            //所查用户的信息
            $result = M("member")->where(array("member_name" => $name))->find();
            if(!$result){
                $this->error("用户不存在");
            }
            //所查用户奖金信息
            $ward = M("tb_userbalance")->where(array("userid" => $result['member_id']))->find();
            $this->ward = $ward;
            //用户标识
            $team_sign = $result['team_sign'];
            //用户标识是否存在
            if ($team_sign) {
                //拼接条件，所查用户下的团队
                $sign = $team_sign . '%';
                //拼接时间条件
                if ($_GET['date']) {
                    $y1 = strtotime(substr($_GET['date'], 0, 10));
                    $y2 = strtotime(substr($_GET['date'], 15, 10));
                    $map['member_time'] = array(array('gt', $y1), array('lt', $y2));
                }
                //拼装层级条件
                if ($_GET['level'] > 0 && $_GET['level'] < 6) {
                    $le = $_GET['level'];
                    $len = strlen($team_sign) / 4;
                    $where = "length(member.team_sign)/4-$len =$le";
                } elseif ($_GET['level'] > 5) {
                    $le = $_GET['level'];
                    $len = strlen($team_sign) / 4;
                    $where = "length(member.team_sign)/4-$len >=$le";
                }
                $this->level=$_GET['level'];
//            var_dump($where);exit;
                $map['team_sign'] = array("like", $sign);
                $map['member.team_sign'] = array("neq", $team_sign);
                //分页
                $count = M("member")->join('left join tb_userbalance on member.member_id = tb_userbalance.userid')->where($where)->where($map)->count();
                $Page = new \Think\Page1($count, 10);
                $show = $Page->show();
                $data = M("member")->join('left join tb_userbalance on member.member_id = tb_userbalance.userid')->where($where)->where($map)->order("length(member.team_sign)")->limit($Page->firstRow . ',' . $Page->listRows)->select();
//        var_dump( $data);exit;
                $this->show = $show;
                $this->team_sign = $team_sign;
                $this->data = $data;
                $this->name=$name;
                $this->date=$_GET['date'];
                $this->display();
            } else {
                $this->error("团队标识不存在");
            }
        } else {
            $this->display();
        }
    }

    public function high() {
//        var_dump($_GET);exit;
        if ($_GET['username']) {
            $name = trim($_GET['username']);
            //所查用户的信息
            $result = M("member")->where(array("member_name" => $name))->find();
            if(!$result){
                $this->error("用户不存在");
            }
            //所查用户奖金信息
            $ward = M("tb_userbalance")->where(array("userid" => $result['member_id']))->find();
            $this->ward = $ward;
            //用户标识
            $team_sign = $result['team_sign'];
            //用户标识是否存在
            if ($team_sign) {
                if ($_GET['date']) {
                    $y1 = strtotime(substr($_GET['date'], 0, 10));
                    $y2 = strtotime(substr($_GET['date'], 15, 10));
                    $map['member_time'] = array(array('gt', $y1), array('lt', $y2));
                }
                //拼接条件，所查用户下的团队
//                var_dump($team_sign);exit;
                 $len = strlen($team_sign) / 4;
                 for($i=1;$i<$len;$i++){
                 $team[$i]=substr($team_sign,0,($len-$i)*4);
                 }
//                 var_dump($team);exit;
//                 $map['team_sign'] = array('IN',$team[]);
                 $tm=  "'".join("','", $team)."'";
//                 var_dump($tm);exit;
                $count = M("member")->join('left join tb_userbalance on member.member_id = tb_userbalance.userid')->where($map)->where("team_sign in($tm)")->count();
//                var_dump($count);exit;
                $Page = new \Think\Page1($count, 10);
                $show = $Page->show();
                $data = M("member")->join('left join tb_userbalance on member.member_id = tb_userbalance.userid')->where($map)->where("team_sign in($tm)")->order("length(member.team_sign) desc")->limit($Page->firstRow . ',' . $Page->listRows)->select();
                 $this->show = $show;
                $this->team_sign = $team_sign;
                $this->data = $data;
                 $this->name=$name;
                $this->date=$_GET['date'];
                $this->display();
            }else{
                 $this->error("团队标识不存在");
            }
           
        } else {
            $this->display();
        }
    }

}

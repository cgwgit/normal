<?php

namespace Home\Controller;

use Think\Controller;

class HighController extends Controller {
    public function down() {
        if ($_GET['username']) {

            $name = trim($_GET['username']);
            $user = M("member")->where(array("member_name" => $name))->find();
           
            if (!$user) {
                $this->error("用户不存在");
            }
            $inviterid = $user['member_id'];
            if ($_GET['date']) {
                $date = strtotime(trim($_GET['date']));
                $y1 = date("w", $date);
//                var_dump($y1);
                if ($y1 == '0') {
                    $x1 = date("Y-m-d",$date - 86400 * 6);
                    $x2 = date("Y-m-d",$date);
                } else {
                    $x1 = date("Y-m-d",$date - 86400 * ($y1 - 1));
                    $x2 = date("Y-m-d",$date + 86400 * (7 - $y1));
                }
                $where = " reward_time >= '$x1' and  reward_time <= '$x2' ";
                 $this->name=$name;
                $this->date=$_GET['date'];
            }else{
//                $where=" ";
                 $this->error("请输入日期");
            }
            $reward = M("tb_reward")->where(array("inviterid" => $inviterid))->SUM("reward_amount");
            $week_reward = M("tb_reward")->where(array("inviterid" => $inviterid))->where($where)->SUM("reward_amount");
//            var_dump($week_reward);exit;
            $this->week_reward=  number_format($week_reward,2);
            $count = M("member")->join(" join tb_reward on member.member_id=tb_reward.userid")->join("  join tb_userbalance on member.member_id = tb_userbalance.userid")->where(array("tb_reward.inviterid" => $inviterid))->where($where)->count();
            $Page = new \Think\Page1($count, 10);
            $show = $Page->show();
            $result = M("member")->join(" join tb_reward on member.member_id=tb_reward.userid")->join("  join tb_userbalance on member.member_id = tb_userbalance.userid")->where(array("tb_reward.inviterid" => $inviterid))->where($where)->order("length(member.team_sign)")->limit($Page->firstRow . ',' . $Page->listRows)->select();
            $this->result = $result;
            $team_sign = $user["team_sign"];
            $this->team_sign = $team_sign;
            $this->show = $show;
            $this->reward = number_format($reward, 2);
            $this->display();
        } else {
            $this->display();
        }
    }

    public function up() {
        if ($_GET['username']) {

            $name = trim($_GET['username']);
            $user = M("member")->where(array("member_name" => $name))->find();
            if (!$user) {
                $this->error("用户不存在");
            }
            $this->name=$name;
            $inviterid = $user['member_id'];
            if ($_GET['date']) {
                $date = strtotime(trim($_GET['date']));
                $y1 = date("w", $date);
//                var_dump($y1);
                if ($y1 == '0') {
                    $x1 = date("Y-m-d",$date - 86400 * 6);
                    $x2 = date("Y-m-d",$date);
                } else {
                    $x1 = date("Y-m-d",$date - 86400 * ($y1 - 1));
                    $x2 = date("Y-m-d",$date + 86400 * (7 - $y1));
                }
                $where = "reward_time >= '$x1' and  reward_time <= '$x2'";
                $this->date=$_GET['date'];
            }else{
//                $where="";
                $this->error("请输入日期");
            }
//                var_dump($where);
            $reward = M("tb_reward")->where(array("userid" => $inviterid))->SUM("reward_amount");
            $real_reward = M("tb_reward")->where(array("userid" => $inviterid))->where($where)->SUM("reward_amount");
            $this->real_reward=  number_format($real_reward,2);
            $count = M("member")->join(" join tb_reward on member.member_id=tb_reward.inviterid")->join("  join tb_userbalance on member.member_id = tb_userbalance.userid")->where(array("tb_reward.userid" => $inviterid))->where($where)->count();
            $Page = new \Think\Page1($count, 10);
            $show = $Page->show();
            $result = M("member")->join(" join tb_reward on member.member_id=tb_reward.inviterid")->join("  join tb_userbalance on member.member_id = tb_userbalance.userid")->where(array("tb_reward.userid" => $inviterid))->where($where)->order("length(member.team_sign) desc")->limit($Page->firstRow . ',' . $Page->listRows)->select();
//         var_dump($result);
            $this->result = $result;
            $team_sign = $user["team_sign"];
            $this->team_sign = $team_sign;
            $this->show = $show;
            $this->reward = number_format($reward, 2);
            $this->display();
        } else {
            $this->display();
        }
    }
}

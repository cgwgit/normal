<?php

namespace Home\Controller;

use Think\Controller;

class MoneyController extends Controller {

    public function _initialize() {
        //判断session或token是否存在，不存在返回登陆页面
        if ($_SESSION['userData'] == NULL) {
            $this->success('请先登陆', U('Login/index'));
            exit();
        }
        // } else {
        //     $id = $_SESSION['userData']['member_id'];
        //     $result = M("mb_user_token")->where(array("member_id" => $id))->order("token_id desc")->find();
        //     $token = $_SESSION['token'];
        //     if ($result['token'] != $token) {
        //         $this->success('请重新登录', U('Login/index'));
        //         exit;
        //     }
        // }
    }
    public function index() {
        $user = M("tb_reward");
        //用户名
        $username = $_SESSION['userData']['member_id'];
        //查询数量
        $count = $user->where(array("inviterid" => $username))->count();
        $Page = new \Think\Page1($count, 10);
        $show = $Page->show();
        $data1 = $user->join('left join member on tb_reward.userid=member.member_id ')->where(array("tb_reward.inviterid" => $username))->limit($Page->firstRow . ',' . $Page->listRows)->select();
        //查询总奖金
          $jiangjin = M("tb_reward")->where(array("inviterid" => $username))->where("inviterid_leval <> '-1'")->Sum('reward_amount');
                  $m = strtotime('Monday');
        $sdefaultDate = date("Y-m-d");  
        $first=1; 
        $w=date('w',strtotime($sdefaultDate));  
        $week_start=date('Y-m-d H:i:s',strtotime("$sdefaultDate -".($w ? $w - $first : 6).' days'));  
        $week_end=date('Y-m-d H:i:s',strtotime("$week_start +6 days"));
//         print_r($week_start);print_r($week_end);exit;
        $benzhou=M("tb_reward")->where(array("inviterid" => $username))->where(" reward_time <='{$week_end}' and reward_time>='{$week_start}'")->Sum('reward_amount');
//        print_r($benzhou);exit;
        $this->benzhou=$benzhou;
        $this->jiangjin = $jiangjin;
        $this->show = $show;
        $this->data1 = $data1;
        $this->display();
    }

    public function Running() {
        //用户id
        $id = $_SESSION['userData']['member_id'];
        $user = M("tb_userbalance");
        //用户tb_userbalance数据
        $data = $user->where(array("userid" => $id))->find();
        //用户奖金中的数据数量
        $count = M("ransfer_record")->where(array("member_id" => $id))->count();
        $Page = new \Think\Page1($count, 10);
        $show = $Page->show();
        //用户奖金记录中的所有内容
        $running = M("ransfer_record")->where(array("member_id" => $id))->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->running = $running;
        $this->show = $show;
        $this->data = $data;
        $this->display();
    }
}

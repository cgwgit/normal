<?php

namespace Home\Controller;

use Think\Controller;

class ListController extends Controller {

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

    public function incomeList() {
        $id = $_SESSION['userData']['member_id'];
        $count = M("zxzq_drawcash_record")->join("left join member on zxzq_drawcash_record.memberid=member.member_id")->where(array("zxzq_drawcash_record.memberid" => $id))->count();
        $Page = new \Think\Page1($count, 10);
        $show = $Page->show();
        $income = M("zxzq_drawcash_record")->join("left join member on zxzq_drawcash_record.memberid=member.member_id")->where(array("zxzq_drawcash_record.memberid" => $id))->order("zxzq_drawcash_record.time desc")->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->income = $income;
        $this->show = $show;
        $this->display();
    }

    public function tradeList() {
        $id = $_SESSION['userData']['member_id'];
        $count = M("zxzq_record")->where("memberid=$id")->count();
        $Page = new \Think\Page1($count, 10);
        $show = $Page->show();
        $trade = M("zxzq_record")->where("memberid=$id")->order("otime desc")->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->trade = $trade;
        $this->show = $show;
        $this->display();
    }

    public function rechargeList() {
        $id = $_SESSION['userData']['member_id'];
       
        $count = M("zxzq_wallet_record")->where("memberid=$id and paystatus='1' and (paytype='1' or paytype='2')")->count();

        $Page = new \Think\Page1($count, 10);
        $show = $Page->show();
        $recharge = M("zxzq_wallet_record")->where("memberid=$id and paystatus='1' and (paytype='1' or paytype='2')")->order("paytime desc")->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->recharge = $recharge;
//        var_dump($recharge);
//        exit;
        $this->show = $show;
        $this->display();
    }

}

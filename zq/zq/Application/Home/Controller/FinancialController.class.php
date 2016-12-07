<?php

namespace Home\Controller;

use Think\Controller;

class FinancialController extends Controller {

    public function _initialize() {
        if ($_SESSION['userData'] == NULL) {
            $this->success('请先登陆', U('Login/index'));
            exit();
        }
    }

    public function __construct() {
        parent::__construct();
    }

	
    public function useRecharge() {
        $username = trim(I('username'));
        $this->username=trim($_GET['username']);
        $where .= $username ? " AND (m.member_name LIKE '%{$username}%' OR m.member_truename LIKE '%{$username}%' OR m.member_sn = '{$username}')" : '';
        $date = I('applytime') ? explode(' - ', I('applytime')) : array();
        if(count($date)){
            $where .= " AND wr.paytime > '" . date('Y-m-d', strtotime($date[0])) . " 00:00:00" . "' AND wr.paytime < '" . date('Y-m-d', strtotime($date[1])) . " 23:59:59'";
        }
        $this->applytime=$_GET['applytime'];
        $where .= I('status') ? " AND wr.paystatus = " . (I('status') - 1) : '';
        $this->status=$_GET['status'];
        $count = M()->query('select count(*) as sum FROM `zxzq_wallet_record` AS wr, `member` as m WHERE m.member_id = wr.memberid' . $where);
//        print_r($count);exit();
        $count = $count[0]['sum'];
        $Page = new \Think\Page1($count, 10);
        $show = $Page->show();
        $result = M()->query('SELECT wr.id, wr.memberid, wr.paymoney, wr.paypmoney, wr.payrmoney, wr.paytime, wr.payid, wr.paytype, wr.paysn, wr.paystatus, m.member_name FROM `zxzq_wallet_record` AS wr, `member` as m WHERE m.member_id = wr.memberid' . $where . ' ORDER BY wr.id DESC' . " LIMIT " . $Page->firstRow . ',' . $Page->listRows);
        $this->result=$result;
        $this->count=$count;
        $this->show=$show;
        $this->display();
    }
    
    public function userCashlist() {
        $cash_member_name=trim($_GET['cash_member_name']);
        $where .= $cash_member_name ? " AND (m.member_name LIKE '%{$cash_member_name}%' OR m.member_truename LIKE '%{$cash_member_name}%' OR m.member_sn = '{$cash_member_name}')" : '';
        $this->cash_member_name=$cash_member_name;
        $date = $_GET['cash_add_time'] ? explode(' - ', $_GET['cash_add_time']) : array();
        if(count($date)){
            $where .= " AND wr.cash_add_time > '" . date('Y-m-d', strtotime($date[0])) . " 00:00:00" . "' AND wr.cash_add_time < '" . date('Y-m-d', strtotime($date[1])) . " 23:59:59'";
        }
        $this->cash_add_time=$_GET['cash_add_time'];
        $where .= I('cash_payment_state') ? " AND wr.cash_payment_state = " . (I('cash_payment_state') - 1) : '';
        $this->cash_payment_state=$_GET['cash_payment_state'];
        $count = M()->query('SELECT count(*) as sum FROM `zxzq_cash` AS wr, `member` as m WHERE m.member_id = wr.cash_member_id' . $where);
        $count = $count[0]['sum'];
        $Page = new \Think\Page1($count, 10);
        $show = $Page->show();
        $result=M()->query('SELECT * FROM `zxzq_cash` AS wr, `member` as m WHERE m.member_id = wr.cash_member_id' . $where . ' ORDER BY wr.cash_id DESC' . " LIMIT " . $Page->firstRow . ',' . $Page->listRows);
        $this->show=$show;
        $this->count=$count;
        $this->result=$result;
        $this->display();
    }
    
    public function userWalletlist() {
//         $member_name=$_GET['member_name'];
//         $where .= $member_name ? " AND (m.member_name LIKE '%{$member_name}%' OR m.member_truename LIKE '%{$member_name}%' OR m.member_sn = '{$member_name}')" : '';
// //        print_r($where);exit;
//         $count = M()->query('SELECT count(*) as sum FROM `zxzq_wallet_record` AS wr,`member` as m WHERE m.member_name = wr.zqlg_member_name' . $where );
//         $count = $count[0]['sum'];
//         $Page = new \Think\Page1($count, 10);
//         $show = $Page->show();
//         $result=M()->query('SELECT wr.* FROM `zxzq_wallet_record` AS wr,`member` as m WHERE m.member_name = wr.zqlg_member_name' . $where . ' ORDER BY zqlg_id DESC' . " LIMIT " . $Page->firstRow . ',' . $Page->listRows);
//         $this->show=$show;
//         $this->count=$count;
//         $this->result=$result;
        $this->display();
    }

}

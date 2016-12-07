<?php

namespace Home\Controller;

use Think\Controller;
use Think\wxpay\wxpay;
use Think\wxpay\QRcode;

class UnitController extends Controller {

    public function _initialize() {
//        print_r($_SESSION);exit();
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

    public function subScription() {
        $amount = M('zxzq_variable')->where("id=1")->find();
        //获得当日证券兑换率
        $rate = M('zxzq_rate')->order('id DESC')->limit(1)->find();
        //额度列表
        $list = M('zxzq_goods')->order('securities DESC')->select();
        $this->amount=$amount;
        $this->assign('list', $list);
        $this->assign('rate', $rate);
        $this->assign('member_id', $_SESSION['member_id']);
        $this->display();
    }

    public function recharge() {
        $this->display();
    }

    public function buy() {
        if (!I('id')) {
            echo json_encode(array('code' => 1, 'message' => '参数不正确'));
        }
        $data = array(
            'memberid' => $_SESSION['userData']['member_id'],
            'id' => I('id'),
        );

        $data = json_encode($data);
        $length = strlen($data);
        $header = array(
            'Content-Length:' . $length, //不是必需的
            'Content-Type: application/json',
        );
        $url = C("URL") . "securities/saveRecord.do";
//        $url = 'http://192.168.0.251:8080/' . "securities/saveRecord.do";
//        echo $url;exit();
        $ch = curl_init($url);  //初始化curl
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $content = curl_exec($ch);  //执行并存储结果
        curl_close($ch);

        //编译结果
        echo $content;
        exit();
    }

    public function update() {
        intval(I('paymoney')) ? $data['paymoney'] = intval(I('paymoney')) : $this->error('请填写金额');
        I('radio') ? $data['radio'] = I('radio') : $this->error('请选择支付方式');
        $order_sn = makeSn();
        $insert = array(
            'memberid' => $_SESSION['userData']['member_id'],
            'paymoney' => $data['paymoney'],
            'paypmoney' => round(I('paypmoney'), 2),
            'payrmoney' => round(I('payrmoney'), 2),
            'paytype' => $data['radio'],
            'paysn' => makeSn(),
            'paystatus' => 0,
        );
        
        $res = M('zxzq_wallet_record')->data($insert)->add();
        if($res && $insert['paytype'] == 1){
            $rst = M('payment')->where(array('payment_code' => 'alipay'))->find();
            $config = unserialize($rst['payment_config']);
            $rst['payment_config'] = $config;
            
            $order_sn = $insert['paysn'];
            $order_info['subject'] = '预存款充值';
            $order_info['order_type'] = 'zq_yck';
            $order_info['api_pay_amount'] = $insert['payrmoney'];
            $order_info['pay_sn'] = $insert['paysn'];
            $order_info['body'] = "用户ID：{$insert['memberid']}, 金额：{$data['paymoney']},订单生成时间：" . date('Y-m-d H:i:s');
            
            $payment_api = new \Think\Pay\alipay($rst,$order_info);
            @header("Location: ".$payment_api->get_payurl()); 
        }
        
        if($res && $insert['paytype'] == 2){
            $config = array(
                'appid' => 'wxb93997d5416a58e1',
                'mchid' => '1394437902',
                'key' => 'eTeukRqglV2aDZPfnOBk7cJxYSUKCutq',
            );
            
            
            $rst['payment_config'] = $config;
            $order_info['subject'] = '预存款充值';
            $order_info['order_type'] = 'zq_yck';
            $order_info['pay_sn'] = $insert['paysn'];
            //$order_info['api_pay_amount'] = floatval($insert['payrmoney']);
            $order_info['api_pay_amount'] = $insert['payrmoney'];
            Vendor('wxpay.wxpay');
            $payment_api = new \wxpay($rst,$order_info);
            
            $this->assign('paysn', $insert['paysn']);
            $this->assign('money', $insert['payrmoney']);
            $this->assign('pay_url',base64_encode(encrypt($payment_api->get_payurl(),MD5_KEY)));
            $this->display();
        }
    }
	
    public function extractWallet() {
        //查询可提现证券数
        $id = $_SESSION['userData']['member_id'];
        $money = M("zxzq_information")->where(array("memberid" => $id))->find();
//                var_dump($money);exit;
        //兑换率
        $rate = M('zxzq_rate')->order('id DESC')->limit(1)->find();
        //手续费
        $poundage = $money['securities'] * $rate['money'] * 0.05;
        //实际到帐金额
        $trueMoney = $money['securities'] * $rate['money'] - $poundage;
        $this->money =$money;
        $this->rate = $rate;
        $this->poundage = number_format($poundage, 2, '.', '');
        $this->trueMoney = number_format($trueMoney, 2, '.', '');
        $this->display();
    }

    public function withdraw() {
//        echo json_encode(array('code' => 1, 'message' => '参数不正确'));
        $id = $_SESSION['userData']['member_id'];
        if (!I('money') || !$id) {
            echo json_encode(array('code' => 1, 'message' => '参数不正确'));
            exit;
        }
        $data = array(
            'memberid' => $id,
        );

        $data = json_encode($data);
        $length = strlen($data);
        $header = array(
            'Content-Length:' . $length, //不是必需的
            'Content-Type: application/json',
        );
        $url = C("URL") . "securities/withdrawCash.do";
        $ch = curl_init($url);  //初始化curl
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $content = curl_exec($ch);  //执行并存储结果
        curl_close($ch);

        //编译结果
        echo $content;
        exit();
    }
    
    public function qrcode(){
        $data = base64_decode($_GET['data']);
        $data = decrypt($data,MD5_KEY,30);
        Vendor('wxpay.phpqrcode.phpqrcode');
        \QRcode::png($data);
    }

    
    public function checkOrder(){
        if(I('paysn')){
            $order = M('zxzq_wallet_record')->where(array('paysn'=>I('paysn')))->find();
            if($order['paystatus']){
                echo 'SUC';exit();
            }else{
                echo 'FIL';exit(); 
            }
        }
    }
}

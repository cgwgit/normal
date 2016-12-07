<?php

namespace Home\Controller;

use Think\Controller;

class WalletController extends Controller {

    public function _initialize() {
        //判断session
        if ($_SESSION['userData'] == NULL) {
            $this->success('请先登陆', U('Login/index'));
            exit();
        } 
    }

    public function index() {
        //用户id
        $id = $_SESSION['userData']['member_id'];
        $count7 = M("pd_recharge")->where(array("pdr_member_id" => $id))->count();
        $Page = new \Think\Page1($count7, 10);
        $show = $Page->show();
        $wall = M("pd_recharge")->where(array("pdr_member_id" => $id))->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->wall = $wall;
        $this->show = $show;
        $username = M("member")->where(array("member_id" => $id))->find();
        $this->userData = $username;
        $this->display();
    }

    public function integral() {
        //积分详细
        header("Content-Type: text/html; charset=utf-8");
        //用户id
        $id = $_SESSION['userData']['member_id'];
        //用户tb_userbalance数据
        $user = M("tb_userbalance");
        $data = $user->where(array("userid" => $id))->find();
        $this->data = $data;
        //用户订单
        $count = M('tb_amountrecord')->where(array("uid" => $id))->where("isdelete=0")->count();
        $Page = new \Think\Page1($count, 16);
        $show = $Page->show();
        $this->page=$show;
        //查询订单
        $amountrecord = M('tb_amountrecord')->where(array("uid" => $id))->where("isdelete=0")->order('declaration_date desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        foreach ($amountrecord as $val) {
            if ($val['type'] == 1) {
                $val['type'] = "现金充值";
            } else if ($val['type'] == 2) {
                $val['type'] = "现金提现";
            } else if ($val['type'] == 3) {
                $val['type'] = "积分购买";
            } else if ($val['type'] == 4) {
                $val['type'] = "积分折现";
            } else if ($val['type'] == 5) {
                $val['type'] = "保险购买";
            } else if ($val['type'] == 6) {
                $val['type'] = "积分退单";
            }
            if ($val['status'] == 1) {
                $val['status'] = "积分订单未确认";
            } else if ($val['status'] == 2) {
                $val['status'] = "积分订单已确认";
            } else if ($val['status'] == 4) {
                $val['status'] = "积分退单未审核";
            } else if ($val['status'] == 5) {
                $val['status'] = "积分退单已审核";
            }

            $a[] = $val;
        }
        $this->amountrecord = $a;
        //当日积分净值
        $equity = M("tb_equity")->order("createdate desc")->find();
        $this->assign("equity", $equity);
        //会员可购积分包数
         $remainbalance = M("tb_userbalance")->where(array("userid" => $id))->find();
        $this->assign("remainbalance", $remainbalance);
        //积分/包
         $tb_variable = M("tb_variable");
        $remarks = $tb_variable->where("id = 3")->find();
        $this->assign("remarks", $remarks);
        //可选购买积分包数
        
        $token = $_SESSION['token'];
        //退单信息接口 获取退单信息
        $tt = array(
            'token' => $token
        );
        $tt = json_encode($tt);
//        var_dump($tt);exit;
        $length = strlen($tt);
        $header = array(
            'Content-Length:' . $length, //不是必需的
            'Content-Type: application/json',
        );
        $ch = curl_init("192.168.0.250:8081/integral/integral_getStepInfo.do");  //初始化curl
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $tt);     
        $content = curl_exec($ch);  //执行并存储结果
        curl_close($ch);
        $result = json_decode($content, true);
        var_dump($result);exit;
        
        
        
        
//        $sf = M("tb_stepinfo");
//        $stepinfo = $sf->order("step_id asc")->select();
//        $this->assign("stepinfo", $stepinfo);
        //获取token
        $token = $_SESSION['token'];
        //退单信息接口 获取退单信息
        $dd = array(
            'token' => $token,
        );
        $dd = json_encode($dd);
        $length = strlen($dd);
        $header = array(
            'Content-Length:' . $length, //不是必需的
            'Content-Type: application/json',
        );
        $ch = curl_init("http://192.168.0.250:8081/integral/queryChargeBackDesc.do");  //初始化curl
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dd);     
        $content = curl_exec($ch);  //执行并存储结果
        curl_close($ch);
        $result = json_decode($content, true);
        //退单信息
        $code = $result['data'];
        //返回状态
        $cc = $result['code'];
        $this->cc = $cc;
        $this->code = $code;
        $this->con = $result;
        $this->display();
    }

    public function update() {
        $id = $_SESSION['userData']['member_id'];
        $equity = M("tb_equity");
        $jing = $equity->order("createdate desc")->find();
        $equity = $jing['equity']; //$equity净值
        //查询每包所含积分数
        $variable = M("tb_variable");
        $boxtotal = $variable->where(array("name" => "boxtotal"))->find();
        $value = $boxtotal['value']; //$value每包所含积分数
        $declaration_num = $_POST['remark'] * $value; //充值的包数;
        //交易金额|挂单金额
        $amount = $declaration_num * $equity; //amount交易金额|挂单金额
        //查询账户信息
        $bankname = $_SESSION['userData']['member_bankname'];
        $bankcard = $_SESSION['userData']['member_bankcard'];
        //相当于用户订单表（积分包）
        $tb_amount = M("tb_amountrecord");
        //当前用户剩余能购买包数
        $tb_userbalance = M("tb_userbalance");
        $remainbalance = $tb_userbalance->where("userid = $id")->find();
        /* 剩余可买积分包数 */
        $ramain_num = $remainbalance["remainbalance"];
        //平台可购买及分包总数
        $variable = M("tb_variable");
        $allnum = $variable->where(array("name" => "allscores"))->find();
        $allnumber = $allnum['value'];
        //用户账户剩余可购买积分包数量
        $userb = M("tb_userbalance");
        $oo = $userb->where("userid=$id")->find();
        $infonum = $oo['remainbalance'];
        if ($_POST) {
            //判断充值数量是否超过账户剩余可购买积分包数量	
            if ($_POST["remark"] > $ramain_num || $_POST["remark"] > $allnumber) {

                $this->error("购买积分包数超过可购买的数量");
            }
            $declaration = $_POST["remark"];
            $data["declaration_num"] = $value * $declaration; //积分数
            $data["declaration_price"] = $amount; //挂单金额
            $data["equity"] = $equity; //净值
            $data["bankName"] = $bankname; //银行名称
            $data["bankcard"] = $bankcard; //银行卡号
            $data["type"] = 3; //类型
            $data["uid"] = $id; //当前用户ID
            $data["status"] = 1;
            $data['declaration_date'] = date("Y-m-d H:i:s");
            $data['unit'] = $value;

            if ($tb_amount->data($data)->add()) {

                $newnum['value'] = $allnumber - $declaration;
                $ll = $variable->where(array("name" => "allscores"))->save($newnum);



                $new['remainbalance'] = $infonum - $declaration;
                $pp = $userb->where("userid=$id")->save($new);



                $this->success("报单成功", U("Wallet/integral"));
            } else {

                $this->error("报单失败");
            }
        }
    }

    public function consume() {
        //用户id
        $id = $_SESSION['userData']['member_id'];
        //用户详情
        $username = M("member")->where(array("member_id" => $id))->find();
        $this->userData = $username;
        //消费积分条数
        $count = M("rcb_log")->where(array("member_id" => $id))->count();
        $Page = new \Think\Page1($count, 10);
        $show = $Page->show();
        //查询该用户的所有的消费积分数据
        $rcb = M("rcb_log")->where(array("member_id" => $id))->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->rcb = $rcb;
        $this->show = $show;
        $this->display();
    }

    public function back() {
        //积分退单接口
        header("Content-Type: text/html; charset=utf-8");
        $equity = $_POST['equity'];
        $returnAmount = $_POST['returnAmount'];
        $management = $_POST['management'];
        $poundage = $_POST['poundage'];
        $finalAmount = $_POST['finalAmount'];
        $balance = $_POST['balance'];
        $name = $_SESSION['userData']['member_name'];
        $userid = $_SESSION['userData']['member_id'];
        $bankcard = $_SESSION['userData']['member_bankcard'];
        $bankname = $_SESSION['userData']['member_bankname'];
        //发送数据
        $data = array(
            'balance' => $balance,
            'poundage' => $poundage,
            'equity' => $equity,
            'returnAmount' => $returnAmount,
            'management' => $management,
            'finalAmount' => $finalAmount,
            'name' => $name,
            'userId' => $userid,
            'bankCard' => $bankcard,
            'bankName' => $bankname,
        );
        $data = json_encode($data);
        $length = strlen($data);
        $header = array(
            'Content-Length:' . $length, //不是必需的
            'Content-Type: application/json',
        );
        $ch = curl_init("http://106.75.24.52:81/integral/accountChargeBack.do");  //初始化curl
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);  
        $content = curl_exec($ch);  //执行并存储结果
        curl_close($ch);
        $result = json_decode($content, true);
        //根据返回code判断退单成功或失败
        if ($result['code'] == 0) {
            $this->success("提交退单成功", U('Wallet/integral'));
        } else {
            $this->error("提交退单失败", U('Wallet/integral'));
        }
    }

    public function cancel() {
        header("Content-Type: text/html; charset=utf-8");
        $type = $_GET['type'];
        //判断类型
        if ($type == "积分退单") {
            //如果类型为“积分退单”，调用退单接口
            $token = $_SESSION['token'];
            $eid = $_GET['eid'];
            $aa = array(
                'token' => $token,
                'eid' => $eid
            );
            $aa = json_encode($aa);
            $length = strlen($aa);
            $header = array(
                'Content-Length:' . $length, //不是必需的
                'Content-Type: application/json',
            );
            $ch = curl_init("http://106.75.24.52:81/integral/removeChargeBack.do");  //初始化curl
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $aa);    
            $content = curl_exec($ch);  //执行并存储结果
            curl_close($ch);
            $result = json_decode($content, true);
            //根据code判断取消退单成功或失败
            if ($result['code'] == 0) {
                $this->success("取消成功", U('Wallet/integral'));
            } else {
                $this->error("取消失败", U('Wallet/integral'));
            }
        } else {
            //如果类型为“删除”，调用删除接口
            $token = $_SESSION['token'];
            $eid = $_GET['eid'];
            $token = $_SESSION['token'];
            $eid = $_GET['eid'];
            $data = array(
                'eid' => $eid,
                'token' => $token);
            $data = json_encode($data);
            $length = strlen($data);
            $header = array(
                'Content-Length:' . $length, //不是必需的
                'Content-Type: application/json',
            );
            $ch = curl_init("http://106.75.24.52/zhongxiaotouzi/integral_deleteOrderByEid");  //初始化curl
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);  
            $content = curl_exec($ch);  //执行并存储结果
            curl_close($ch);
            $result = json_decode($content, true);
            //根据code判断删除成功或失败
            if ($result['code'] == 0) {
                $this->success("删除成功", U('Wallet/integral'));
            }
            $this->error("删除失败", U('Wallet/integral'));
        }
    }
}

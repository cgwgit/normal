<?php

namespace Home\Controller;

use Think\Controller;

class WithdrawController extends Controller {

    public function _initialize() {
        //session为空或者token为空不可登录
        if ($_SESSION['userData'] == NULL) {
            $this->success('请先登陆', U('Login/index'));
            exit();
        }
    }

    public function index() {
        //查询奖金转消费积分的手续费
        $jifen = M("sys_code_item")->where(array("code_set_id" => 5, "code_item_name" => "奖金转消费积分"))->find();
        //查询奖金转钱包的手续费
        $qianbao = M("sys_code_item")->where(array("code_set_id" => 5, "code_item_name" => "奖金转钱包"))->find();
        $this->jifen = $jifen['code_item_id'] * 100;
        $this->qianbao = $qianbao['code_item_id'] * 100;
        $id = $_SESSION['userData']['member_id'];
        $user = M("tb_userbalance");
        //获取奖金
        $data = $user->where(array("userid" => $id))->find();
        //手续费
        $shou = $data['realreward'] * $jifen['code_item_id'];
        //实际奖金
        $shiji = $data['realreward'] - $shou;
        //用户信息
        $date=date("N",time());//星期
        $this->date=$date;
        $ss = M("member")->where(array("member_id" => $id))->find();
        $this->ss = $ss;
        $this->shou = $shou;
        $this->shiji = $shiji;
        $this->data = $data;
        $this->display();
    }

    public function record() {
        $id = $_SESSION['userData']['member_id'];
        if ($_GET['date'] != "") {
            $date = $_GET['date'];
            $y1 = substr($_GET['date'], 0, 10);
            $y2 = substr($_GET['date'], 15, 10);
            $where = " dateandtime > '$y1' and  dateandtime < '$y2'";
            $this->date = $y1 . " 至 " . $y2;
        } else {
            $where = NULL;
        }
//            var_dump($where);exit;
        $count = M("ransfer_record")->where($where)->where(array("member_id" => $id))->count();
//        var_dump($count);exit;
        $Page = new \Think\Page1($count, 10);
        $show = $Page->show();
        $this->assign('show', $show);
        $data = M("ransfer_record")->where($where)->where(array("roll_out" => 1))->where(array("member_id" => $id))->order('dateandtime desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->data = $data;

//        var_dump($data);exit;

        $this->display();
    }

    public function apply() {
        $date=date("N",time());//星期
        $this->date=$date;
        $id = $_SESSION['userData']['member_id'];
        $map['pdc_payment_state'] = '0';
        $map['pdc_member_id'] = $id;
        $count = M("pd_cash")->where($map)->count();
//        var_dump($count);exit;
        $this->count = $count;
        $username = M("member")->where(array("member_id" => $id))->find();
//         var_dump($username);exit;
        $this->userData = $username;
        $this->display();
    }

   public function txjl() {
//        var_dump(strtotime(substr($_GET['date'], 0, 10)));
        if ($_GET['pdc_payment_state'] != "全部" && $_GET["date"] != "" && $_GET['pdc_payment_state'] != "") {
            $pdc_payment_state = $_GET["pdc_payment_state"];
            $date = $_GET['date'];

            $y1 = strtotime(substr($_GET['date'], 0, 10));
            $y2 = strtotime(substr($_GET['date'], 15, 10));
            $where = "pdc_payment_state = '$pdc_payment_state' and  pdc_add_time > '$y1' and  pdc_add_time < '$y2'";
        } elseif ($_GET['date'] != "" && $_GET['pdc_payment_state'] == "全部") {
            $y1 = strtotime(substr($_GET['date'], 0, 10));
            $y2 = strtotime(substr($_GET['date'], 15, 10));
            $date = $_GET['date'];
            $pdc_payment_state = "";
            $where = " pdc_add_time > '$y1' and  pdc_add_time < '$y2'";
        } elseif ($_GET['date'] == "" && $_GET['pdc_payment_state'] != "全部" && $_GET['pdc_payment_state'] != "") {
            $pdc_payment_state = $_GET["pdc_payment_state"];
            $date = '';
            $where = " pdc_payment_state = '$pdc_payment_state'";
        } else {
            $pdc_payment_state = '';
            $date = '';
            $where = NULL;
        }
//            var_dump($pdc_payment_state);
        $id = $_SESSION['userData']['member_id'];
        $count = M('pd_cash')->where($where)->where(array("pdc_member_id" => $id))->count();
//        var_dump($count);
        $Page = new \Think\Page1($count, 10);
        $show = $Page->show();
        $this->assign('show', $show);
        $data = M('pd_cash')->where($where)->where(array("pdc_member_id" => $id))->order("pdc_add_time desc")->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->data = $data;
//        var_dump($data);exit;
        $this->date = $date;
        $this->pdc_payment_state = $pdc_payment_state;
        $this->show = $show;
        $this->display();
    }


    public function account() {
        header("Content-Type: text/html; charset=utf-8");
        $token = $_SESSION['token'];
        $userid = $_SESSION['userData']['member_id'];
        $type = $_POST['type'];
        $reward = $_POST['reward'];
        if($reward<=0){
             $this->error("转账失败");
        }
        $cc = array(
            "reward" => $reward, "token" => $token, "type" => $type, "userid" => $userid
        );
        $cc = json_encode($cc);
        $length = strlen($cc);
        $header = array(
            'Content-Length:' . $length, //不是必需的
            'Content-Type: application/json',
        );
        $url1=C("URL")."reward/extractbonus.do";
        $ch = curl_init($url1);  //初始化curl
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $cc);
        $content = curl_exec($ch);  //执行并存储结果
        curl_close($ch);
        $result = json_decode($content, true);
//        var_dump($content);exit;
        if ($result['code'] == 0) {
            $this->success("转账成功", U('Withdraw/record'));
        } elseif($result['code'] == 1){
            $this->error($result['message'], U('Withdraw/index'));
        }else{
            $this->error("转账失败", U('Withdraw/index'));
        }
    }

    public function tixian() {

        header("Content-Type: text/html; charset=utf-8");
        $token = $_SESSION['token'];
        $id = $_SESSION['userData']['member_id'];
        $cash = $_POST['pcd_amount'];
        $username = M("member")->where(array("member_id" => $id))->find();
//         var_dump($username['available_predeposit']);exit;
        if ($username['available_predeposit'] > 0) {
            $cc = array(
                "token" => $token, "cash" =>$cash
            );
            $cc = json_encode($cc);
//            var_dump($cc);exit;
            $length = strlen($cc);
            $header = array(
                'Content-Length:' . $length, //不是必需的
                'Content-Type: application/json',
            );
            $url2=C("URL")."cash/withdrawCash.do";
            $ch = curl_init($url2);  //初始化curl
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $cc);
            $content = curl_exec($ch);  //执行并存储结果
//             var_dump($content);exit;
            curl_close($ch);
            $result = json_decode($content, true);
//            var_dump($result);exit;
           if ($result['code'] == 0) {
                $this->success("提现成功", U('Withdraw/txjl'));
            } else if ($result['code'] == 1) {
                $this->error($result['message'], U('Withdraw/apply'));
            } else {
                 $this->error("提现失败", U('Withdraw/apply'));
            }
        }else{
            $this->error("钱包金额不足");
        }
    }

}

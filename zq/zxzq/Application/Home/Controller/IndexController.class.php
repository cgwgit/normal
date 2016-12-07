<?php

namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller {

    public function _initialize() {
        if ($_SESSION['userData'] == NULL) {
            $this->success('请先登陆', U('Login/index'));
            exit();
        }
    }

    public function __construct() {
        parent::__construct();
    }

    public function Index() {
        $id = $_SESSION['userData']['member_id'];
        $result = M("member")->where(array("member_id" => $id))->find();
        $res = M("zxzq_information")->where(array("memberid" => $id))->find();
        $money = M("zxzq_wallet")->where(array("memberid" => $id))->find();
        //兑换率
        $rate = M('zxzq_rate')->order('id DESC')->limit(1)->find();
        //可售证券
        $amount = M('zxzq_variable')->where("id=1")->find();
        $this->rate = $rate;
        $this->amount = $amount;
        $this->money = $money;
        $this->res = $res;
        $this->result = $result;
//        var_dump($result);exit;
        $this->display();
    }

    public function accountProfile() {
        $name = $_SESSION['userData']['member_name'];
        $result = M("member")->where(array("member_name" => $name))->find();
        $this->result = $result;
//        var_dump($result);exit;
        $bank = M("tb_bankinfo")->select();
        $this->bank = $bank;
        $this->display();
    }

    public function updateProfile() {
        header("Content-Type: text/html; charset=utf-8");
        $id = $_SESSION['userData']['member_id'];
        $area=$_POST['area'];
        trim($_POST['name']) ? $name = $_POST['name'] : $this->error('请填写姓名');
        preg_match("/^[1-9]\d{7}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{3}$|^[1-9]\d{5}[1-9]\d{3}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{3}([0-9]|X)$/", trim($_POST['idcard'])) ? $idcard = $_POST['idcard'] : $this->error('身份证号格式错误');
        strlen(trim($_POST['mobile'])) == 11 ? $mobile = $_POST['mobile'] : $this->error('手机号为11位');
        trim($_POST['bankname']) ? $bankname = $_POST['bankname'] : $this->error('请填写开户银行');
        trim($_POST['member_cardtype']) ? $cardType = $_POST['member_cardtype'] : $this->error('银行卡类型有误');
        strlen(trim($_POST['bankcard'])) == 16 || strlen(trim($_POST['bankcard'])) == 17 || strlen(trim($_POST['bankcard'])) == 19 ? $bankcard = $_POST['bankcard'] : $this->error('银行格式不正确');
        trim($_POST['address']) ? $address = $_POST['address'] : $this->error('请填写地址');
        preg_match("/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/", trim($_POST['email'])) ? $email = $_POST['email'] : $this->error('邮箱格式不正确');
        $sex = $_POST['sex'];
        $bb = array(
            'idcard' => $idcard,
            'name' => $name,
            'member_id' => $id,
            'sex' => $sex,
            'bankname' => $bankname,
            'bankcard' => $bankcard,
            'area'=>$area,
            'address' => $address,
            'mobile' => $mobile,
            'email' => $email,
            'cardType' => $cardType,
        );
//        var_dump($bb);exit;
        $bb = json_encode($bb);
        $length = strlen($bb);
        $header = array(
            'Content-Length:' . $length, //不是必需的
            'Content-Type: application/json',
        );
        $url = C("URL") . "securities/userModifyUserInfo.do";
        $ch = curl_init($url);  //初始化curl
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $bb);
        $content = curl_exec($ch);  //执行并存储结果
        curl_close($ch);
        //编译结果
//        var_dump($content);exit;
        $result = json_decode($content, true);
        //判断成功或失败
        if ($result['code'] == 0) {
            $this->success($result['message'], U('Index/userInfo'));
        } else {
            $this->error($result['message'], U('Index/userInfo'));
        }
    }

    public function accountPwd() {
        $this->display();
    }

    public function userInfo() {
        $id = $_SESSION['userData']['member_id'];
        $result = M("member")->where(array("member_id" => $id))->find();
        $res = M("zxzq_information")->where(array("memberid" => $id))->find();
        $money = M("zxzq_wallet")->where(array("memberid" => $id))->find();
        $this->money = $money;
        $this->res = $res;
        $this->result = $result;
        $this->display();
    }

    public function doAccountPwd() {
        header("Content-Type: text/html; charset=utf-8");
        //用户id和用户名
        $id = $_SESSION['userData']['member_id'];
        $username = $_SESSION['userData']['member_name'];
        //判断原密码和新密码是否符合要求
        if (!$_POST['oldpwd']) {
            echo "<script type='text/javascript'>alert('旧密码不能为空');location='javascript:history.back()';</script>";
            exit;
        }
        if (!$_POST['loginpwd']) {
            echo "<script type='text/javascript'>alert('新密码不能为空');location='javascript:history.back()';</script>";
            exit;
        }
        if (strlen($_POST['loginpwd']) < 6 || strlen($_POST['loginpwd']) > 15) {
            echo "<script type='text/javascript'>alert('密码长度在6到15位之间');location='javascript:history.back()';</script>";
            exit;
        }
        if ($_POST['loginpwd'] != $_POST['password']) {
            echo "<script type='text/javascript'>alert('两次输入的密码不一致');location='javascript:history.back()';</script>";
            exit;
        }

        if (md5($_POST['oldpwd']) != $_SESSION['userData']['member_passwd']) {
            echo "<script type='text/javascript'>alert('原密码不正确');location='javascript:history.back()';</script>";
            exit;
        }
        //新密码
        $da = array(
            'userName' => $username,
            'passWord' => $_POST['oldpwd'],
            'newpassWord' => $_POST['password']
        );

        $da = json_encode($da);
//        var_dump($da);exit;
        $length = strlen($da);
        $header = array(
            'Content-Length:' . $length, //不是必需的
            'Content-Type: application/json',
        );
        $url = C("URL") . "securities/securities_updatePassword.do";
        $ch = curl_init($url);  //初始化curl
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $da);
        $content = curl_exec($ch);  //执行并存储结果
        curl_close($ch);
        //编译结果
//        var_dump($content);exit;
        $result = json_decode($content, true);
        //判断成功或失败
        if ($result['code'] == 0) {
            $this->success($result['message'], U('Login/index'));
        } else {
            $this->error($result['message'], U('Index/accountpwd'));
        }
    }
    
//    public function invite() {
//        $id = $_SESSION['userData']['member_id'];
//        $result = M("member")->where(array("member_id" => $id))->find();
////        var_dump($result);exit;
//        $this->result=$result;
//        $this->display();
//    }
//    
//    public function updateInvite() {
//        if(!$_POST['securities_id']){
//            $this->error('请填写推荐人');
//        }
//        $name=$_SESSION['userData']['member_name'];
//        $securities_id=$_POST['securities_id'];
//        $da = array(
//            "securities_id"=>$securities_id,
//            "userName"=>$name
//        );
//        $da = json_encode($da);
//        $length = strlen($da);
//        $header = array(
//            'Content-Length:' . $length, //不是必需的
//            'Content-Type: application/json',
//        );
//        $url = C("URL") . "securities/updateSecuritiesTeam.do";
//        $ch = curl_init($url);  //初始化curl
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
//        curl_setopt($ch, CURLOPT_POST, 1);
//        curl_setopt($ch, CURLOPT_POSTFIELDS, $da);
//        $content = curl_exec($ch);  //执行并存储结果
//        curl_close($ch);
//        //编译结果
//        $result = json_decode($content, true);
//        //判断成功或失败
//        if ($result['code'] == 0) {
//            $this->success($result['message'], U('Index/userInfo'));
//        } else {
//            $this->error($result['message']);
//        }
//    }

}

<?php

namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller {

    public function _initialize() {
        //判断session或token是否存在，不存在返回登陆页面
        if ($_SESSION['userData'] == NULL) {
            $this->success('请先登陆', U('Login/index'));
            exit();
        }
    }

    public function index() {
        //银行信息
        $bankname = M('tb_bankinfo')->select();
        $this->bkname = $bankname;
        //用户id
        $id = $_SESSION['userData']['member_id'];
        $user = M("tb_userbalance");
        //获取用户tb_userbalance中的数据
        $data = $user->where(array("userid" => $id))->find();
        //用户member中的数据
        $username = M("member")->where(array("member_id" => $id))->find();
        $uname = $username['member_name'];
        //用户订单数量
        $dingdan = M("tb_amountrecord")->where(array("uid" => $id))->where("isdelete = 0")->count();
        //用户直接推荐人数量
        $tuijian = M("member")->where(array("inviter_id" => $uname))->count();
        //基金
        $jijin = M("ransfer_record")->where(array("member_id" => $id))->Sum('charitable');
        //会员等级
        $huiyuan = $data['leveladd'] + $data['level'];
        $this->huiyuan = $huiyuan;
        $this->jijin = $jijin;
        $this->tuijian = $tuijian;
        $this->dingdan = $dingdan;
        //用户推荐人信息
        $invit = $username["inviter_id"];
        $uid = M("member")->where(array("member_name" => $invit))->find();
        $this->uid = $uid;
        $this->userData = $username;
        $this->data = $data;
        $this->display();
    }

    public function update() {
        //获取提交数据
        header("Content-Type: text/html; charset=utf-8");
        $token = $_SESSION['token'];
        $name = $_POST['name'];
        $sex = $_POST['sex'];
        $idcard = $_POST['idcard'];
        $bankname = $_POST['bankname'];
        $bankcard = $_POST['bankcard'];
        $mobile = $_POST['mobile'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $inviter = $_POST['inviter_id'];
        $cardType = $_POST['member_cardtype'];
        if(!$name || !$sex || !$idcard || !$bankname ||  !$bankcard || !$mobile || !$address || !$email || !$inviter || !$cardType){
            $this->error("修改失败");
        }
        $bb = "{
            idcard:$idcard,
            name:$name,
            token:$token,
            sex:$sex,
            bankname:$bankname,
            bankcard:$bankcard,
            mobile: $mobile,
            address:$address,
            email:$email,
            inviter:$inviter,
            cardType:$cardType
     }";
        $length = strlen($bb);
        $header = array(
            'Content-Length:' . $length, //不是必需的
            'Content-Type: application/json',
        );
        $url=C("URL_Z")."user_modifyUserInfo";
        $ch = curl_init($url);  //初始化curl
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $bb);
        $content = curl_exec($ch);  //执行并存储结果
        curl_close($ch);
        //编译结果
        $result = json_decode($content, true);
        //判断成功或失败
        if ($result['code'] == 0) {
            $this->success($result['message'], U('Index/index'));
        } else {
            $this->error("修改失败", U('Index/index'));
        }
    }

    public function pwdedit() {
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
        $data['member_passwd'] = md5($_POST['loginpwd']);
        //修改密码
        $result = M("member")->where(array("member_id" => $id))->save($data);
        if ($result) {
            $this->success('修改成功', U('Login/index'));
        } else {
            $this->success('修改失败', U('Login/index'));
        }
    }

}

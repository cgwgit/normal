<?php

namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller {

    public function index() {
        $this->display();
    }

    public function res() {

//        var_dump($_POST);exit;
        if (!$_POST['username']) {
            $this->error("用户名不能为空");
        }
        if (!$_POST['name']) {
            $this->error("姓名不能为空");
        }
        if (!$_POST['idcard']) {
            $this->error("身份证号不能为空");
        }
        if (!$_POST['address']) {
            $this->error("家庭住址不能为空");
        }
        if (!$_POST['bankname']) {
            $this->error("开户银行不能为空");
        }
        if (!$_POST['loginpwd']) {
            $this->error("密码不能为空");
        }
        if (!$_POST['email']) {
            $this->error("邮箱不能为空");
        }
        if (!$_POST['mobile']) {
            $this->error("手机号不能为空");
        }
        $tb_user = M("tb_user");
        $cot['username'] = $_POST['username'];
        $cot['loginpwd'] = $_POST['loginpwd'];
        $cot['inviterid'] = $_POST['inviterid'];
        $cot['mobile'] = $_POST['mobile'];
        $cot['createTime'] = date("Y-m-d H:i:s");
        $cotresult = $tb_user->add($cot);

        $user = M("tb_userinfo");
//        var_dump($_POST);exit;

        $data['userid'] = $cotresult;
        $data['name'] = $_POST['name'];
        $data['sex'] = $_POST['sex'];
        $data['idcard'] = $_POST['idcard'];
        $data['bankname'] = $_POST['bankname'];
        $data['bankcard'] = $_POST['bankcard'];
        $data['mobile'] = $_POST['mobile'];
        $data['address'] = $_POST['address'];
        $data['email'] = $_POST['email'];
        $result = $user->add($data);
        $userbalance = M("tb_userbalance");
        $res['userid'] = $cotresult;
        $balance = $userbalance->add($res);
        if ($result && $cotresult && $balance) {
            $this->success("注册成功");
            $equity = M("tb_equity");
            $jing = $equity->order("createdate desc")->find();
            $equity = $jing['equity'];
            $declaration_num = $_POST['declaration_num'];
            $variable = M("tb_variable");
            $boxtotal = $variable->where(array("name" => "boxtotal"))->find();
            $value = $boxtotal['value'];
            $amount = $declaration_num * $value * $equity;
            $cord['uid'] = $cotresult;
            $cord['type'] = 3;
            $cord['status'] = 1;
            $cord['bankcard'] = $_POST['bankcard'];
            $cord['bankName'] = $_POST['bankname'];
            $cord['equity'] = $equity;
            $cord['declaration_price'] = $amount;
            $cord['declaration_num'] = $declaration_num * $value;
            $cord['declaration_date'] = date("Y-m-d H:i:s");
            $tb_amount = M("tb_amountrecord");
            $dd = $tb_amount->add($cord);
            $variable = M("tb_variable");
            $allnum = $variable->where(array("name" => "allnumber"))->find();
            $allnumber = $allnum['value'];
            $newnum['value'] = $allnumber - $_POST['declaration_num'];
            $ll = $variable->where(array("name" => "allnumber"))->save($newnum);
            $userb = M("tb_userbalance");
            $oo = $userb->where("userid=$cotresult")->find();
            $new['remainbalance'] = $oo['remainbalance'] - $_POST['declaration_num'];
            $pp=$userb->where("userid=$cotresult")->save($new);
        } else {
            $this->error("注册失败");
        }
    
           $id=$_SESSION['userid'];
            $equity = M("equity");
            $jing = $equity->order("createdate desc")->find();
            $equity = $jing['equity'];
            $declaration_num = $_POST['order_num'];
            $variable = M("variable");
            $boxtotal = $variable->where(array("name" => "boxtotal"))->find();
            $value = $boxtotal['value'];
            $amount = $declaration_num * $value * $equity;
            $cord['uid'] = $_SESSION['userid'];
            $cord['type'] = 3;
            $cord['status'] = 1;
            $cord['bankcard'] = $_POST['bankcard'];
            $cord['bankName'] = $_POST['bankname'];
            $cord['equity'] = $equity;
            $cord['declaration_price'] = $amount;
            $cord['declaration_num'] = $declaration_num * $value;
            $cord['declaration_date'] = date("Y-m-d H:i:s");
            $tb_amount = M("amountrecord");
            $dd = $tb_amount->add($cord);
            $variable = M("variable");
            $allnum = $variable->where(array("name" => "allnumber"))->find();
            $allnumber = $allnum['value'];
            $newnum['value'] = $allnumber - $_POST['declaration_num'];
            $ll = $variable->where(array("name" => "allnumber"))->save($newnum);
            $userb = M("userbalance");
            $oo = $userb->where("userid=$id")->find();
            $new['remainbalance'] = $oo['remainbalance'] - $_POST['declaration_num'];
            $pp=$userb->where("userid=$id")->save($new);
		
}
}
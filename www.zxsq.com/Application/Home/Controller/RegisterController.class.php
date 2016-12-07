<?php
namespace Home\Controller;
use Think\Controller;
class RegisterController extends Controller {

    public function index() {
		
        $m=M('tb_bankinfo');
    	$bnametype=$m->select();
		$d=M('tb_stepinfo');
		$decltype=$d->select();
		$this->assign('decltype',$decltype);
    	$this->assign('bnametype',$bnametype);
        $this->display();
    }

  

    public function res() {

//        var_dump($_POST);exit;
        if (!$_POST['username']) {
            echo "<script type='text/javascript'>alert('用户名不能为空');location='javascript:history.back()';</script>";exit;
        } else {
            $name = M("t_user");
            $username = $_POST['username'];
//        var_dump($_POST['username']);exit;
            $mm = $name->where(array("username" => $username))->select();
            if ($mm) {
               	 echo "<script type='text/javascript'>alert('用户名已存在');location='javascript:history.back()';</script>"; exit;
            }
        }
        if (!$_POST['loginpwd']) {
     echo "<script type='text/javascript'>alert('密码不能为空');location='javascript:history.back()';</script>";exit;

        }
        if (!$_POST['name']) {
            echo "<script type='text/javascript'>alert('姓名不能为空');location='javascript:history.back()';</script>";exit;
           
        }
        if (!$_POST['idcard']) {
             echo "<script type='text/javascript'>alert('身份证不能为空');location='javascript:history.back()';</script>";exit;
        }/*  else {
            $info = M("tb_userinfo");
            $idcard = $_POST['idcard'];
            $nn = $info->where(array("idcard" => $idcard))->select();
            if ($nn) {
                echo "<script type='text/javascript'>alert('身份证号已注册');location='javascript:history.back()';</script>";exit;
            }
        } */
        if (!$_POST['address']) {
            echo "<script type='text/javascript'>alert('家庭住址不能为空');location='javascript:history.back()';</script>";exit;
        }
       if (!$_POST['email']) {
            echo "<script type='text/javascript'>alert('邮箱不能为空');location='javascript:history.back()';</script>";exit;
        }
        if (!$_POST['bankcard']) {
             echo "<script type='text/javascript'>alert('银行卡号不能为空');location='javascript:history.back()';</script>";exit;

        } else {
            $info = M("tb_userinfo");
            $bankcard = $_POST['bankcard'];
            $kk = $info->where(array("bankcard" => $bankcard))->select();
            if ($kk) {
                  echo "<script type='text/javascript'>alert('银行卡号不可重复');location='javascript:history.back()';</script>";exit;
            }
        }
        
        
        if (!$_POST['mobile']) {
             echo "<script type='text/javascript'>alert('手机号不能为空');location='javascript:history.back()';</script>";exit;
        }
/*//        if ($_POST['declaration_num']==0) {
//            echo "<script type='text/javascript'>alert('购买积分包数不能为空');location='javascript:history.back()';</script>";exit;
//        }*/
        if (!$_POST['inviterid']) {
            echo "<script type='text/javascript'>alert('推荐人不能为空');location='javascript:history.back()';</script>";exit;
        }
        
     if($_POST['inviterid'])
        {
        	$i= M("t_user");
        	$username = $_POST['inviterid'];
        	//
        	$in = $i->where(array("username"=> $username))->find();
        	if (!$in) {
        	echo "<script type='text/javascript'>alert('推荐人不存在');location='javascript:history.back()';</script>"; exit;
            }else
            {		$ss=$i->where(array("inviterid"=> $username))->order("teamsign desc")->find();
        				if(!$ss)
        				{
								$lk=$in['teamsign'].'001';
								//ar_dump($lk);exit;有推荐人，推荐人只推荐了他自己
        	 			}else
        				{
        					$max['teamsign']=$ss['teamsign']+1;
        					$lk=str_pad($max['teamsign'],strlen($max['teamsign'])+2,0,STR_PAD_LEFT);
							//ar_dump($lk);exit;exit;有推荐人，推荐人推荐的最大值加1
        				}
        	}
        }else
        {
			$lo=M('t_user');
        	$look=$lo->where("inviterid=''")->order("teamsign desc")->find();
        	$max['teamsign']=$look['teamsign']+1;
        	str_pad($max['teamsign'],3,0,STR_PAD_LEFT);
        	$lk=str_pad($max['teamsign'],3,0,STR_PAD_LEFT);
			//ar_dump($lk);exit;没有推荐人的时候自己就是顶级类，最大值加1
        						
        }
        $model = M();
        $model->startTrans();
        $cot['teamsign']=$lk;
        $cot['username'] = $_POST['username'];
        $cot['loginpwd'] = $_POST['loginpwd'];
        $cot['inviterid'] = $_POST['inviterid'];
        $cot['mobile'] = $_POST['mobile'];
        $cot['createTime'] = date("Y-m-d H:i:s");
        $cotresult = $model->table("t_user")->add($cot);
        if (!cotresult) {
            $model->rollback();
            exit();
        }
//        var_dump($_POST);exit;
        $data['userid'] = $cotresult;
        $data['name'] = $_POST['name'];
        $data['sex'] = $_POST['sex'];
        $data['idcard'] = $_POST['idcard'];
        $data['bankname'] = $_POST['bank_name'];
        $data['bankcard'] = $_POST['bankcard'];
        $data['address'] = $_POST['address'];
        $data['email'] = $_POST['email'];
        $data['cardtype'] = $_POST['cardtype'];
//        var_dump($data);exit;
        $result = $model->table("tb_userinfo")->add($data);
        if (!$cotresult && !$result) {
            $model->rollback();
            exit;
        }
        $res['userid'] = $cotresult;
		if(empty($_POST['intbalance']))
		{
			$res['intbalance']=0;
		}
		if(empty($_POST['reward']))
		{
			$res['reward']=0;
		}
        $balance = $model->table("tb_userbalance")->add($res);
        if ($result && $cotresult && $balance) {
            $model->commit();
            $this->success("注册成功", U('Index/index'));
            
        } else {
            $model->rollback();
            $this->error("注册失败");
        }
    }

}

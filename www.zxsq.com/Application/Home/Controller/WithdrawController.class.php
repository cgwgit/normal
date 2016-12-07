<?php
namespace Home\Controller;
use Think\Controller;
class WithdrawController extends Controller {
    
    public function index(){
	
     if($_GET){
//         print_r($_GET);
          $m=M("pd_cash");
          $where="1";
          if(!empty($_GET['username'])){
              $member_name=$_GET['username'];
              $where .=" and member_name = '$member_name'";
//              print_r($where);
          }
          if(!empty($_GET['date'])){
             $date = $_GET['date']; 
            $y1 = strtotime(substr($_GET['date'], 0, 10));
            $y2 = strtotime(substr($_GET['date'], 15, 10));
            $where .= " and  pdc_add_time >= '$y1' and  pdc_add_time < '$y2'";
             
          }
          if(!empty($_GET['pdc_payment_state']) || $_GET['pdc_payment_state']=="0"){
              $pdc_payment_state=$_GET['pdc_payment_state'];
              $where .=" and pdc_payment_state='$pdc_payment_state'";
//                print_r($pdc_payment_state);exit;
          }
          $count =$m->join("left join member on member.member_id = pd_cash.pdc_member_id")->where($where)->count();
//           print_r($count);exit;
          $Page = new \Think\Page1($count, 10);
          $show = $Page->show();
        
           $userinfo = $m->join('left join member on member.member_id = pd_cash.pdc_member_id')->where($where)->limit($Page->firstRow.','.$Page->listRows)->select();
//           print_r($userinfo);exit;

          
           $this->userinfo=$userinfo;
           $this->show=$show;
         
     }else{
        $data=M("pd_cash");
        //$userinfo = $data->join('left join member on member.member_id = pd_cash.pdc_member_id')->order("eid desc")->limit($Page->firstRow.','.$Page->listRows)->select();
        $count = $data->join('left join member on member.member_id = pd_cash.pdc_member_id')->count();

        $Page = new \Think\Page1($count, 10);
        $show = $Page->show();
        $userinfo = $data->join('left join member on member.member_id = pd_cash.pdc_member_id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->userinfo=$userinfo;
        $this->show=$show;
     }
        $user=M('pd_cash');
         $date=$user->where(array('pdc_payment_state'=>'0'))->Sum("pdc_amount");
//           print_r($date);exit;
         $info=M("pd_cash")->where(array("pdc_payment_state"=>'1'))->Sum("pdc_amount");
         $this->info = $info;
         $this->date = $date;
         $this->assign('name',$_GET['username']);
     $this->assign('data',$_GET['date']);
         $this->display();
    }
    
    
    //提现功能
    public function tixian(){
         header("Content-Type: text/html; charset=utf-8");
         
         
        
    }
    
    
    
    
    
    
}



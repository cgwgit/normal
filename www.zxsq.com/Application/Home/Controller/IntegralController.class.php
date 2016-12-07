<?php
namespace Home\Controller;
use Think\Controller;
class IntegralController extends Controller {
   
    
    
	public function index(){
           if($_GET){
//         print_r($_GET);
          $m=M("tb_amountrecord");
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
            $where .= " and  declaration_date > '$y1' and  declaration_date < '$y2'";
             
          }
          if(!empty($_GET['status']) || $_GET['status']=="0"){
              $status=$_GET['status'];
              $where .=" and status ='$status'";
//                print_r($pdc_payment_state);exit;
          }
          $count =$m->join("left join member on member.member_id =  tb_amountrecord.uid")->join('left join admin_user on admin_user.aid = tb_amountrecord.operatorid')->where(array("type"=>6))->where($where)->count();
//           print_r($count);exit;
          $Page = new \Think\Page1($count, 10);
          $show = $Page->show();
        
           $data = $m->join('left join member on member.member_id =  tb_amountrecord.uid')->join('left join admin_user on admin_user.aid = tb_amountrecord.operatorid')->where(array("type"=>6))->where($where)->limit($Page->firstRow.','.$Page->listRows)->select();
//           print_r($userinfo);exit;

          
           $this->data=$data;
           $this->show=$show;
         
     }else{
             $user = M("tb_amountrecord");
             
             $count = $user->join('left join member on member.member_id = tb_amountrecord.uid')->join('left join admin_user on admin_user.aid = tb_amountrecord.operatorid')->where(array("type"=>6))->count();

             $Page = new \Think\Page1($count, 10);
             $show = $Page->show();
            
             $data=$user->join('left join member on member.member_id = tb_amountrecord.uid')->join('left join admin_user on admin_user.aid = tb_amountrecord.operatorid')->where(array("type"=>6))->limit($Page->firstRow . ',' . $Page->listRows)->select();//->join('right join admin_user on admin_user.aid = tb_amountrecord.operatorid')
//            $adminid=$data['operatorid'];
//            $user=M("admin_user");
//            $userinfo=$user->where(array(""))->select();
//             print_r($data);exit;
             
             $this->show = $show;
             $this->data = $data;
    }
    $this->assign('name',$_GET['username']);
     $this->assign('date',$_GET['date']);
           $this->display();
        }


}
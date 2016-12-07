<?php

namespace Home\Controller;

use Think\Controller;

class GeneralizeController extends Controller {
public function _initialize(){
//    var_dump($_SESSION);exit;
		if( $_SESSION['userData']==NULL){
			$this->success('请先登陆',U('Login/index'));
			exit();
		}
	}
    public function index() {
        header("Content-Type: text/html; charset=utf-8");
            if ($_GET['username']!="" && $_GET["date"]!="") {
                $username = $_GET["username"];
                $date=$_GET['date'];
                
                $y1 = strtotime(substr($_GET['date'], 0, 10));
                $y2 = strtotime(substr($_GET['date'],15,10));
                $where ="member.member_name = '$username' and  member.member_time > '$y1' and  member.member_time < '$y2'";

            }elseif($_GET['date'] !="" && $_GET['username']=="") {
                $y1 = strtotime(substr($_GET['date'], 0, 10));
                $y2 = strtotime(substr($_GET['date'],15,10));
               $date=$_GET['date'];
               $username="";
                $where ="  member.member_time > '$y1' and  member.member_time < '$y2'";
            }elseif($_GET['date']=="" && $_GET['username']!="") {
                $username = $_GET["username"];
               $date='';
                $where ="member.member_name = '$username'";
            }else{
                $username="";
                $date='';
                $where=NULL;
            }
            $uname = $_SESSION['userData']['member_name'];
            $id = $_SESSION['userData']['member_id'];
            //查询我的团队
            $user = M("member");
            $team=$user->where(array("member_id"=>$id))->find();
            $s=$team['team_sign'];
            if($s){
            $sign=$team['team_sign'].'%';
            $this->s=$s;
             $map['team_sign']=array("like",$sign);
//             field('username,max(score)')->group('user_id,test_time')->select();
             //本周奖金查询
//             $reward_id=M("tb_reward")->field("reward_id")->where(array("inviterid"=>$id))->group("reward_id")->select();
             $ff['team_sign']=array("like",$sign);
            
             
//             var_dump($aaa);exit;
             $reward_id=M("member")->field("member_id")->where($ff)->where("team_sign != $s")->select();
//             var_dump($reward_id);exit;
                  for($i=0;$i<count($reward_id);$i++){
//                      var_dump();exit;
                      $rew[$i]=$reward_id[$i]['member_id'];
                  }
           
                 $re_id=  "'".join("','", $rew)."'";
//                 var_dump($re_id);exit;
                 
                 $dd=date("w");
                 if($dd!=0){
                     $miao=$dd-1;
                 }else{
                     $miao=6;
                 }
                     
                 $time=date("Y-m-d H:i:s",strtotime(date("Y-m-d"))-86400*$miao);
                 $nn['recordTime'] = array(array('gt', $time));
//                 $nn['recordTime'] = array(array('gt', $time));
                 $ap['status']  = array('EQ','2');
                 $c=M("tb_amountrecord")->where("tb_amountrecord.uid in($re_id)")->where($nn)->where($ap)->SUM("amount");
                    $this->c=number_format($c,2);
//                    var_dump($c);exit;

            $count = $user->join('left join tb_userbalance on member.member_id = tb_userbalance.userid')->where($where)->where(array("inviter_id"=>$uname))->count();
            $Page = new \Think\Page1($count, 10);
            $show = $Page->show();
            //查询用户信息
            $userRec = $user->join('left join tb_userbalance on member.member_id = tb_userbalance.userid')->where($where)->where(array("inviter_id"=>$uname))->order('length(team_sign)')->limit($Page->firstRow . ',' . $Page->listRows)->select();
            $this->assign('show', $show);
            $this->userRec = $userRec;
                $this->username=$username;           
            $this->date=$date;
            }
            $id = $_SESSION['userData']['member_id'];
            $achieve=M("tb_userbalance")->where(array("userid"=>$id))->find();
            $this->achieve=$achieve;
            $this->display();
            
            
        }
//    }
        

    }
    
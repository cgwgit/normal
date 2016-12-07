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
            $count = $user->join('left join tb_userbalance on member.member_id = tb_userbalance.userid')->where($where)->where($map)->where("team_sign !=$s")->count();
            $Page = new \Think\Page1($count, 10);
            $show = $Page->show();
            //查询用户信息
            $userRec = $user->join('left join tb_userbalance on member.member_id = tb_userbalance.userid')->where($where)->where($map)->where("team_sign !=$s")->order('length(team_sign)')->limit($Page->firstRow . ',' . $Page->listRows)->select();
            $this->assign('show', $show);
            $this->userRec = $userRec;
                $this->username=$username;           
            $this->date=$date;
            }
            $this->display();
            
        }
//    }
        

    }
    
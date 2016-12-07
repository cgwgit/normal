<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function index()
	{
		header("Content-Type:text/html; charset=utf-8");
	/*	$data = I("get.");
		if(in_array("or",$data))
		{
			echo "存在非法字符";
		}else
		{
			var_dump($data);
			echo "不存在非法字符";
		}*/
		
		// if($_SESSION['username'])
		// {
		// 	if($_GET)
		// 	{
				
		// 		$m=M('member');
		// 		$where='1';
		// 		if(!empty($_GET['member_name']) || $_GET['memeber_name']=='0')
		// 		{
		// 			$member_name=$_GET["member_name"];	
		// 			$where .=" and member_name = '$member_name'";
		// 		}
			
		// 		if(!empty($_GET['member_time']))
		// 		{
		// 			$y1=strtotime(substr($_GET['member_time'],0,10));
		// 			$y2=strtotime(substr($_GET['member_time'],15,10));
		// 			$where .=" and  member_time > $y1 and  member_time < $y2";		
		// 		}
		// 		if(!empty($_GET['reallevel']) || $_GET['reallevel']=='0')
		// 		{
		// 			$reallevel=$_GET['reallevel'];
		// 			$where .=" and reallevel = '$reallevel'";
		// 		}			
		// 		$count=$m->where($where)->count();
		// 		$Page = new \Think\Page($count,10);	
		// 		$show = $Page->show();
		// 		$list=$m->where($where)->order("member_id desc")->limit($Page->firstRow.','.$Page->listRows)->select();
				
		// 		if(!$list)
		// 		{
		// 			$this->error('信息不存在');
		// 		}
		// 		foreach($list as $val)
		// 		{
		// 			$val['member_time']=date("Y-m-d H:i:s");
		// 			$data[]=$val['member_time'];
		// 			var_dump($data);exit();
					
		// 		}
		// 		$this->assign('list',$data);
		// 		$this->assign('list',$list);
		// 		$this->assign('page',$show);
				
		// 	}else
		// 	{
		// 		$m=M('member');
		// 		$count=$m->count();
		// 		$Page = new \Think\Page($count,10);	
		// 		$show = $Page->show();	
		// 		$list=$m->order("member_id desc")->limit($Page->firstRow.','.$Page->listRows)->select();
		// 		$this->assign('list',$list);
		// 		$this->assign('page',$show);
		// 	}
		// 	$t=M('variable');
		// 	$s=$t->order("id asc")->limit(1)->find();
		// 	$r=M('member')->where(array("left(FROM_UNIXTIME(member_time),10)"=>date('Y-m-d')))->count();//新增人数
		// 	$z=M('total');
		// 	$k=$z->find();
		// 	$k['maichubao']=intval($k['maichubao']) ;
		// 	$k['benzhouyizhifu']=intval($k['benzhouyizhifu']) ;
		// 	$k['benzhouzongbaodan']=intval($k['benzhouzongbaodan']) ;
		// 	$k['jinrimaichubao']=intval($k['jinrimaichubao']) ;
			
		// 	$k['num']=$s['value']+$k['maichubao'];
		// 	$k['num1']= substr($k['maichubao']/$k['num']*100,0,5);
		// 	$this->assign('r',$r);
		// 	$this->assign('s',$s);
		// // 	$this->assign("k",$k);
			$this->display();
		
		// }else{
			
		// 	$this->display("login");
		// }			
	 }
    public function login(){
		 if($_POST)
		 {
		 	$sql=I("post.username");
			$pwd=I("post.password");
			
				$m=M("admin_user");
				$row= $m->where("username = '$sql'")->find();
				
			if(!$row){
				
				$this->error("此用户不存在");
			}else
			{
			
				//判断密码
				if($row['password'] != md5($pwd)){
					
					$this->error("密码错误");
				}
				if($row["rid"]==0)
				{
					$_SESSION["username"]=$row['username'];
					$_SESSION["userid"] = $row["userid"];
					$this->success("登陆成功",U('index/index'));  
				}else if($row["rid"]==1)
				{
					$this->error('权限不够');
				}
				}
			}else
		 	{
				$this->display();
			}
		
   }
		 
    

	 public function out_login(){
	 	 session(null);
        //跳转到首页
        $this->success("退出成功", U("Index/index"), 1);
	 }
    
    
}
<?php
namespace Home\Controller;
use Think\Controller;
class ShowController extends Controller {

   function index()
   {
		 if($_GET)
		 {
			$m=M('tb_new');
			$where = "isdelete != 1";
		
			if(!empty($_GET['member_name']))
			{
				$member_name=$_GET["member_name"];	
				$where .=" and member_name = '$member_name'";
			}
			if(!empty($_GET['bankcard']))
			{
				$where .=" and bankcard =$_GET[bankcard]";
			}
			if(!empty($_GET['banktransaction']))
			{
				$banktransaction = $_GET["banktransaction"];
				$where .=" and banktransaction = $banktransaction ";
			}
			if(!empty($_GET['declaration_price1'])&&!empty($_GET['declaration_price2']))
			{
				if($_GET['declaration_price1']>$_GET['declaration_price2'])
				{
					$this->error("保单搜索需从小到大输入");
				}
				$where .=" and declaration_price >= $_GET[declaration_price1] and declaration_price <= $_GET[declaration_price2]";
			}
			if(!empty($_GET['date']))
			{
				$y1=substr($_GET['date'],0,10);
				$y2=substr($_GET['date'],11,10);
				$where .=" and  date > '$y1' and  date < '$y2'";
			}
			$count=$m->where($where)->count();
			$Page = new \Think\Page($count,10);	
			
			$show = $Page->show();
			$list=$m->where($where)->order("declaration_date desc")->limit($Page->firstRow.','.$Page->listRows)->select();	
		
			if(!$list)
			{
				$this->error('信息不存在');
			}
			foreach($list as $val)
			{
   
				if($val['status']==1)
				{
					$val['status']='积分订单未确认';
				}else if($val['status']==2)
				{
					$val['status']='积分订单已确认';
				}else if($val['status']==4)
				{
					$val['status']='积分退单未审核';
				}else if($val['status']==5)
				{
					$val['status']='积分退单已审核';
				}
				$data[]=$val;
			}
			$this->assign('page',$show);
			$this->assign('list',$data);
	 	}else
		 {
			$m=M('tb_new');
	
			//用户名
			
			
			$count=$m->where("isdelete != 1")->count();
			$Page = new \Think\Page($count,10);	
			
			$show = $Page->show();	
			$list=$m->where("isdelete != 1")->order("declaration_date desc")->limit($Page->firstRow.','.$Page->listRows)->select();
			
			foreach($list as $val)
			{
			
			   
				if($val['status']==1)
				{
					$val['status']='积分订单未确认';
				}else if($val['status']==2)
				{
					$val['status']='积分订单已确认';
				}else if($val['status']==4)
				{
					$val['status']='积分退单未审核';
				}else if($val['status']==5)
				{
					$val['status']='积分退单已审核';
				}
				$data[]=$val;
			}
			//print_r($stepinfo);
			$this->assign('page',$show);
	
			$this->assign('list',$data);
		
	 	}
		$h=M('admin_user')->find();
		
	  $this->assign('h',$h);
	  $this->display(); 
	}
}
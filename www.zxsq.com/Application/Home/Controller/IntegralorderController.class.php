<?php
namespace Home\Controller;
use Think\Controller;
class IntegralorderController extends Controller {
	public function index(){
		if($_GET)
		 {
			$m=M('tb_new');
			$where = "type=3";
		
			if(!empty($_GET['member_name'])|| $_GET['member_name']=='0')
			{
				$member_name=$_GET["member_name"];	
				$where .=" and member_name = '$member_name'";
			}
			
			if(!empty($_GET['declaration_date']))
			{
				$y1=substr($_GET['declaration_date'],0,10);
				$y2=substr($_GET['declaration_date'],15,10);
				$where .=" and  declaration_date > '$y1' and  declaration_date < '$y2'";
			}
			if(!empty($_GET['status']) || $_GET['status']=='0')
			{
				
				$status=$_GET['status'];
				$where .=" and status = '$status'";
			}			
			$count=$m->where($where)->count();
			$Page = new \Think\Page($count,10);	
			
			$show = $Page->show();
			$list=$m->where($where)->order("declaration_date desc")->limit($Page->firstRow.','.$Page->listRows)->select();	
		
			if(!$list)
			{
				$this->error('信息不存在');
			}
			
			$this->assign('page',$show);
			$this->assign('list',$list);
	 	}else
		 {
			$m=M('tb_new');
	
			//用户名
			
			
			$count=$m->count();
			$Page = new \Think\Page($count,10);	
			
			$show = $Page->show();	
			$list=$m->where("type=3")->order("declaration_date desc")->limit($Page->firstRow.','.$Page->listRows)->select();
			
			
			$this->assign('page',$show);
	
			$this->assign('list',$list);
		
	 	}
		$h=M('admin_user')->find();
		
	  $this->assign('h',$h);
	  $this->display(); 
	}




}
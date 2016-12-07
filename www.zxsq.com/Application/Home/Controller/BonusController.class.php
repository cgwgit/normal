<?php
namespace Home\Controller;
use Think\Controller;
class BonusController extends Controller {
	public function index(){
		//奖金页面信息显示
		$module = M("ransfer_record");
		
		$map['ransferid']=array('gt',0);
		//奖金页面快速查询
		if($_POST){
			//用户名/姓名查询
			if(I('post.member_name','','htmlspecialchars')){
				$map['ransfer_record.member_name']= array('eq',"$_POST[member_name]");
			}	
			//结算日期
			if(I('post.dateandtime','','htmlspecialchars')){
				$map['ransfer_record.dateandtime']= array('between',array($_POST['dateandtime'].' 00:00:00',$_POST['dateandtime'].' 23:59:59'));
			}
		}
		//print_r($map);exit;s
		$count=$module->where($map)->cache(true)->count();
		$Page = new \Think\Page($count,10);
		$show = $Page->show();
		$info=$module->join("join member on member.member_name=ransfer_record.member_name")->where($map)->cache(true)->limit($Page->firstRow.','.$Page->listRows)->select();
		/*echo "<pre>";
			print_r($info);
		echo "</pre>";
		exit;*/
		$bonus=M("settlement_records");
		//计算日期
		$m = strtotime('Monday');
		/*echo $m;
		exit;*/
		$end = date("Y-m-d H:i:s",$m);
		$s = strtotime('Monday')-7*24*60*60+1;
		/*echo $s;
		exit;*/
		$start= date("Y-m-d H:i:s",$s);
		//当周报单总额
		$thisweek['time']=array('between',array($start,$end));
		$declaration=$bonus->where($thisweek)->select();
		/*var_dump($declaration);
		exit;*/
		foreach($declaration as $val){
			//报单金额
			$dec_num[] =$val['amount'];
			//待结算奖金
			$no_bnus_num[] =$val['reward'];
			//实结算奖金
			$yes_bnus_num[]=$val['real_reward'];
			//特殊津贴
			$special[]=$val['special'];
			//特殊津贴信息
			/*$special_remark[]=$val['special_remark'];*/
			//平级奖励
			$level[]=$val['pingji'];
		}
		$dec_all=array_sum($dec_num);//当周报单总额
		$no_bnus_all=array_sum($no_bnus_num);//当周待结算奖金
		$yes_bnus_all=array_sum($yes_bnus_num);//当周实结算奖金
		$special_all=array_sum($special);//特殊津贴
		/*var_dump($special_remark_all);
		exit;*/
		$level_all=array_sum($level);//平级奖励
		$this->assign('name',I('post.member_name','','htmlspecialchars'));//用户名
		$this->assign('date',I('post.dateandtime','','htmlspecialchars'));//日期
		$this->assign('truename',$truename);//真实姓名
		$this->assign("dec_all",$dec_all);
		$this->assign("no_bnus_all",$no_bnus_all);
		$this->assign("yes_bnus_all",$yes_bnus_all);
		$this->assign("special_all",$special_all);
		$this->assign("level_all",$level_all);
		/*$this->assign("special_remark",$special_remark);*/
		$this->assign("info",$info);
		$this->assign("Page",$show);
		$this->display();
	}
}
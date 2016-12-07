<?php
namespace Home\Controller;
use Think\Controller;
//数据表检索
class SearchController extends Controller
{
	 public function _initialize() {
        if ($_SESSION['userData'] == NULL) {
            $this->success('请先登陆', U('Login/index'));
            exit();
        }
    }
    //显示用户列表
    // "12"钱包表 wallet
    // "1"钱包充值记录表 wallet_record
    // "2"证券发行数量表 variable
    // "3"保单推荐人奖励表 reward
    // "4"生成证券报单记录表 record
    // "5"换算率表 rate
    // "6"证券人员基本信息表 information_record
    // "7"积分、福利、可体现记录生成记录表information
    // "8"持有证券数表holding
    // "9"投资额表  goods
    // "10"用户可提现证券明细drawcash_record
    // "11"用户可提现证券余额drawcash
	public function index(){
		// var_dump($_GET);die;
		// if(empty($_GET['list'])){
		// 	$this->error('请输入要查询的表名',U('index?list=12'),0.5);
		// }
		if(!empty($_GET['list'])){
			trim(I('get.list')) ? $list = trim(I('get.list')) : '';
			$where = '2>1';
			//获得传来的用户名
			if($_GET['username']){
				$member_name = trim(I('get.username'));
				$wh = "`member_name` = '$member_name'";
				$member = M('member')->where($wh)->find();
				$where .= " AND `memberid` = '{$member['member_id']}'";
			}
			//获得传来的订单号
		    if($_GET['securitiesid']){
				$type = trim(I('get.securitiesid'));
				$where .= " AND `securitiesid` = '{$type}'";
		    }
		    //对传来的表名进行判断
			switch ($list) {
				case '12':
				    $list = 'zxzq_wallet';
				    if(isset($_GET['status']) && $_GET['status'] != '' ){
						$status = trim(I('get.status'));
						$where .= " AND `status` = '{$status }'";
					}
					if(isset($_GET['field']) && $_GET['field'] != '' ){
						$field = trim(I('get.field'));
						switch ($field) {
							case '0':
							$field = 'money';
								break;
							case '1':
							$field = 'frozen';
								break;
							case '2':
							$field = 'membername';
								break;
							case '3':
							$field = 'member_bankname';
								break;
							default:
					
								break;
						}
					}
					$this->showPage($list, $where,$field);
					break;
				case '1':
				    $list = 'zxzq_wallet_record';
	                if(!empty($_GET['date'])){
						$stime = substr($_GET['date'] , 0,10);
						$etime = substr($_GET['date'] ,15,11);
					    $where .= " AND left(`paytime`,10) between '$stime' AND '$etime'";
				    }
				    if(isset($_GET['status']) && $_GET['status'] != '' ){
						$status = trim(I('get.status'));
						$where .= " AND `paystatus` = '{$status }'";
				    }
				    if(isset($_GET['type']) && $_GET['type'] != '' ){
						$type = trim(I('get.type'));
						$where .= " AND `paytype` = '{$type}'";
				    }
				    if(isset($_GET['paysn']) && $_GET['paysn'] != '' ){
						$type = trim(I('get.paysn'));
						$where .= " AND `paysn` = '{$type}'";
				    }
					if(isset($_GET['field']) && $_GET['field'] != '' ){
						$field = trim(I('get.field'));
						switch ($field) {
							case '0':
							$field = 'paymoney';
								break;
							case '1':
							$field = 'paypmoney';
								break;
							case '2':
							$field = 'payrmoney';
								break;
							case '3':
							$field = 'paytime';
								break;
							case '4':
							$field = 'payid';
								break;
							case '5':
							$field = 'paysn';
								break;
							case '6':
							$field = 'paystatus';
								break;
							default:
					
								break;
						}
				    }
					$this->showPage($list, $where,$field);
					break;
			    case '2':
					$list = 'zxzq_variable';
					$this->showPage($list, $where);
					break;
			    case '3':
			        $list = 'zxzq_reward';
				    if(!empty($_GET['date'])){
						$stime = substr($_GET['date'] , 0,10);
						$etime = substr($_GET['date'] ,15,11);
					    $where .= " AND left(`rewardtime`,10) between '$stime' AND '$etime'";
				    }
					if(isset($_GET['field']) && $_GET['field'] != '' ){
						$field = trim(I('get.field'));
						switch ($field) {
							case '0':
							$field = 'rewardpoint';
								break;
							case '1':
							$field = 'rewardnum';
								break;
							case '2':
							$field = 'invitelevel';
								break;
							case '3':
							$field = 'securitiesid';
								break;
							case '4':
							$field = 'rewardtime';
								break;
							default:
					
								break;
						}
				    }
					$this->showPage($list, $where,$field);
					break;
				case '4':
				    $list = 'zxzq_record';
					if(!empty($_GET['date'])){
						$stime = substr($_GET['date'] , 0,10);
						$etime = substr($_GET['date'] ,15,11);
					    $where .= " AND left(`otime`,10) between '$stime' AND '$etime'";
				    }
					if(isset($_GET['status']) && $_GET['status'] != '' ){
						$status = trim(I('get.status'));
						$where .= " AND `status` = '{$status }'";
				    }
			    	if(isset($_GET['field']) && $_GET['field'] != '' ){
					    $field = trim(I('get.field'));
						switch ($field) {
							case '0':
							$field = 'securities';
								break;
							case '1':
							$field = 'securitiesnum';
								break;
							case '2':
							$field = 'price';
								break;
							case '3':
							$field = 'realprice';
								break;
							case '4':
							$field = 'levered';
								break;
							case '5':
							$field = 'securitiesid';
								break;
								case '5':
							$field = 'frozen';
								break;
							default:
					
								break;
						}
			        }
					$this->showPage($list, $where,$field);
					break;
				case '5':
				    if(!empty($_GET['date'])){
					$stime = substr($_GET['date'] , 0,10);
					$etime = substr($_GET['date'] ,15,11);
				    $where .= " AND left(`ctime`,10) between '$stime' AND '$etime'";
			        }
					$list = 'zxzq_rate';
					$this->showPage($list, $where);
					break;
				case '6':
				    if(!empty($_GET['date'])){
						$stime = substr($_GET['date'] , 0,10);
						$etime = substr($_GET['date'] ,15,11);
					    $where .= " AND left(`time`,10) between '$stime' AND '$etime'";
			        }
				    $list = 'zxzq_information_record';
					if(isset($_GET['field']) && $_GET['field'] != '' ){
					   $field = trim(I('get.field'));
						switch ($field) {
							case '0':
							$field = 'welfare';
								break;
							case '1':
							$field = 'integration';
								break;
							case '2':
							$field = 'securities';
								break;
							case '3':
							$field = 'achievement';
								break;
							case '4':
							$field = 'assigned';
								break;
							case '5':
							$field = 'time';
								break;
							case '6':
							$field = 'type';
								break;
							default:
					
								break;
						}
			        }
					$this->showPage($list, $where,$field);
					break;
				case '7':
				   if(!empty($_GET['status'])){
						$status = trim(I('get.status'));
						$where .= " AND `status` = '{$status }'";
			        }
					$list = 'zxzq_information';
					if(isset($_GET['field']) && $_GET['field'] != '' ){
						$field = trim(I('get.field'));
						switch ($field) {
							case '0':
							$field = 'welfare';
								break;
							case '1':
							$field = 'integration';
								break;
							case '2':
							$field = 'securities';
								break;
							case '3':
							$field = 'achievement';
								break;
							case '4':
							$field = 'assigned';
								break;
							default:
					
								break;
						}
			        }
					$this->showPage($list, $where,$field);
					break;
				case '8':
					$list = 'zxzq_holding';
					if(isset($_GET['field']) && $_GET['field'] != '' ){
						$field = trim(I('get.field'));
						switch ($field) {
							case '0':
							$field = 'securitiesnum';
								break;
							default:
					
								break;
						}
			        }
					$this->showPage($list, $where,$field);
					break;
				case '9':
				   if(!empty($_GET['date'])){
						$stime = substr($_GET['date'] , 0,10);
						$etime = substr($_GET['date'] ,15,11);
					    $where .= " AND left(`utime`,10) between '$stime' AND '$etime'";
			       }
					$list = 'zxzq_goods';
					$this->showPage($list, $where);
					break;
				case '10':
				  if(!empty($_GET['date'])){
					$stime = substr($_GET['date'] , 0,10);
					$etime = substr($_GET['date'] ,15,11);
				    $where .= " AND left(`time`,10) between '$stime' AND '$etime'";
			      }
				  if(!empty($_GET['status'])){
						$status = trim(I('get.status'));
						$where .= " AND `status` = '{$status}'";
				  }
					$list = 'zxzq_drawcash_record';
			      if(isset($_GET['field']) && $_GET['field'] != '' ){
						$field = trim(I('get.field'));
						switch ($field) {
							case '0':
							$field = 'releasenum';
								break;
							case '1':
							$field = 'securitiesnum';
								break;
							case '2':
							$field = 'securitiesnum_after';
								break;
							case '3':
							$field = 'welfare';
								break;
							case '4':
							$field = 'integration';
								break;
								case '5':
							$field = 'status';
								break;
									case '6':
							$field = 'time';
								break;
							default:
					
								break;
						}
			      }
						$this->showPage($list, $where,$field);
						break;
				case '11':
			    if(isset($_GET['field']) && $_GET['field'] != '' ){
				    $field = trim(I('get.field'));
					switch ($field) {
						case '0':
						$field = 'securitiesnum';
							break;
						default:
				
							break;
					}
		    }
					$list = 'zxzq_drawcash';
					$this->showPage($list, $where, $field);
					break;
				default:	
					break;
			}
		}else{
			$list = 'zxzq_wallet';
			$this->showPage($list);
		}
			
	}

    //显示分页的方法
	public function showPage($list,$where,$field){
			if($_GET['sort'] == 1){
					 $order = "$field ASC";	
				}
			if($_GET['sort'] == 2){
					$order = "$field DESC";	
				}
		    $data = M($list)->where($where)->select();
            $count = count($data);
            $Page = new \Think\Page1($count, 10);
            if($list != 'zxzq_variable' && $list != 'zxzq_rate' && $list != 'zxzq_goods'){
                $wallet = M($list)->field($list.'.*,`member`.`member_name`,`member`.`member_bankname`,`member`.`member_bankcard`')->join('`member` on '.$list.'.memberid=`member`.`member_id`')->where($where)->order($order)->limit($Page->firstRow.','.$Page->listRows)->select();
            }else{
                $wallet = M($list)->field($list.'.*')->where($where)->order($order)->limit($Page->firstRow.','.$Page->listRows)->select();
            }
            if($list == 'zxzq_reward'){
            	foreach ($wallet as $key => $value) {
	        	  	$invite = M('member')->where(array('member_id' => $value['invitedid']))->find();
	        	  	$wallet[$key]['invite_name'] = $invite['member_name'];
        	  }
            }
            $show = $Page->show();
            $this->assign('show', $show);
            $this->assign('data', $wallet);
			$id = $_GET['id'];
			$this->assign('id', $id);
			//钱包表
			if($list == 'zxzq_wallet'){
				$this->display('index');exit;
			}
			 //wallet_record钱包充值记录表
			if($list == 'zxzq_wallet_record'){
				$this->display($list);exit;
			}
			//证券发行数量表
			if($list == 'zxzq_variable'){
				$this->display($list);exit;
			}
			 //保单人推荐奖励表
			if($list == 'zxzq_reward'){
				$this->display($list);exit;
			}
			//生成证券保单记录表
			if($list == 'zxzq_record'){
				$this->display($list);exit;
			}
			//换算率表
			if($list == 'zxzq_rate'){
				$this->display($list);exit;
			}
			//证券人员基本信息表
			if($list == 'zxzq_information_record'){
				$this->display($list);exit;
			}
			//积分福利可提现记录生成表
			if($list == 'zxzq_information'){
				$this->display($list);exit;
			}
			//持有证券数表
			if($list == 'zxzq_holding'){
				$this->display($list);exit;
			}
			 //投资额表
			if($list == 'zxzq_goods'){
				$this->display($list);exit;
			}
			//用户可提现证券明细
			if($list == 'zxzq_drawcash_record'){
				$this->display($list);exit;
			}
			//用户可提现证券余额
	        if($list == 'zxzq_drawcash'){
				$this->display($list);exit;
			}
	        
	}
     //查询订单号
	public function searchOrderId(){
	     if(isset($_GET['securitiesid']) && $_GET['securitiesid'] != '' ){
			$type = trim(I('get.securitiesid'));
			$where .= " AND `securitiesid` = '{$type}'";
		   }
	}
}
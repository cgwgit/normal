<?php 
namespace Home\Controller;
use Think\Controller;
class TableController extends Controller{
	public function index(){
		$sql ="select table_comment  from INFORMATION_SCHEMA.TABLES where table_name like'zxzq_%' and TABLE_SCHEMA='scoredb'" ;
		$tables = M('zxzq_wallet')->query($sql);
		foreach ($tables as $key => $value) {
		     if( $value['table_comment'] == '' ) {
               unset( $tables[$key] );   
             }  
		}
		if($_GET['table'] != ''){
			switch ($_GET['table']) {
				case '0':
				$list = 'zxzq_drawcash';
                $data = M('zxzq_drawcash')->alias('a')->field('a.memberid as 序列号,a.securitiesnum as 可提现证券数,`member`.`member_name` as 用户名' )->join('`member` on a.memberid=`member`.`member_id`')->select();
                // var_dump($data);die;
					break;
				case '1':
				  
					break;
				case '2':
				  
					break;
				case '3':
				  
					break;
				case '4':
				  
					break;
				case '5':
				  
					break;
				case '6':
				  
					break;
				case '7':
				  
					break;
				case '8':
				  
					break;
				case '9':
				 

					break;
				case '10':
					
					break;
				case '11':
				    $list = 'zxzq_wallet';
                    $data = M('zxzq_wallet')
			        ->field('`zxzq_wallet`.`id` as 序号,`member`.`member_name` as 用户名,`member`.`member_bankcard` as 银行卡号,`member`.`member_bankname` as 银行名称,`zxzq_wallet`.`money` as 金额,`zxzq_wallet`.`frozen` as 冻结金额,`zxzq_wallet`.`status` as 状态')
			        ->join('`member` on `zxzq_wallet`.`memberid`=`member`.`member_id`')
			        ->select();
				   break;
				default:
			       
					break;
			}
		}else{
			 $list = 'zxzq_wallet';
			 $data = M('zxzq_wallet')
			        ->field('`zxzq_wallet`.`id` as 序号,`member`.`member_name` as 用户名,`member`.`member_bankcard` as 银行卡号,`member`.`member_bankname` as 银行名称,`zxzq_wallet`.`money` as 金额,`zxzq_wallet`.`frozen` as 冻结金额,`zxzq_wallet`.`status` as 状态')
			        ->join('`member` on `zxzq_wallet`.`memberid`=`member`.`member_id`')
			        ->select(); 
			        
		}	
		$field = array();
		$field = $data[0];
		$field = array_keys($field);
		$this->$list($data, $field, $tables);

	}

    public function field(){

    }
	public function zxzq_wallet($data, $field, $tables){
		$count = count($data);
		$Page = new \Think\Page1($count, 10);
		$wallet = M('zxzq_wallet')
		        ->field('`zxzq_wallet`.`id` as 序号,`member`.`member_name` as 用户名,`member`.`member_bankcard` as 银行卡号,`member`.`member_bankname` as 银行名称,`zxzq_wallet`.`money` as 金额,`zxzq_wallet`.`frozen` as 冻结金额,`zxzq_wallet`.`status` as 状态')
		        ->join('`member` on `zxzq_wallet`.`memberid`=`member`.`member_id`')->limit($Page->firstRow.','.$Page->listRows)
		        ->select();
		$this->showPage($Page,$field,$tables,$wallet);
	}
    public function zxzq_drawcash($data, $field, $tables){
    	$count = count($data);
		$Page = new \Think\Page1($count, 10);
		$wallet = M('zxzq_drawcash')->alias('a')->field('a.memberid as 序列号,a.securitiesnum as 可提现证券数,`member`.`member_name` as 用户名' )->join('`member` on a.memberid=`member`.`member_id`')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->showPage($Page,$field,$tables,$wallet);
    }

	public function showPage($Page, $field, $tables, $wallet){
	    $show = $Page->show();
		$this->assign('show', $show);
		$this->assign('tables', $tables);
		$this->assign('field', $field);
	    $this->assign('wallet', $wallet);
		$this->display();
	}
}
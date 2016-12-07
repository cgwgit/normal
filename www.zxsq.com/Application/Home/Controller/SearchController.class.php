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
		if(!empty($_GET['list']) || !empty($_GET['username']) || !empty($_GET['username'])){
			trim(I('get.list')) ? $where['list'] = trim(I('get.list')) : '';
			trim(I('get.username')) ? $where['username'] = trim(I('get.username')) : $err = '您输入的用户名不存在';
			trim(I('get.date')) ? $where['date'] = trim(I('get.date')) : '';

			switch ($where['list']) {
				case '0':
					$where['list'] = 'wallet';
					break;
				case '1':
					$where['list'] = 'wallet_record';
					break;
			    case '2':
					$where['list'] = 'variable';
					break;
			    case '3':
					$where['list'] = 'reward';
					break;
				case '4':
					$where['list'] = 'record';
					break;
				case '5':
					$where['list'] = 'rate';
					break;
				case '6':
					$where['list'] = 'information_record';
					break;
				case '7':
					$where['list'] = 'information';
					break;
				case '8':
					$where['list'] = 'holding';
					break;
				case '9':
					$where['list'] = 'goods';
					break;
				case '10':
					$where['list'] = 'drawcash_record';
					break;
				case '11':
					$where['list'] = 'drawcash';
					break;
				default:
					
					break;
			}
		}
			$member = M('member');
            $sql = "SELECT `m`.`member_name`,`m`.`member_bankname`,`m`.`member_bankcard`,`w`.`money`,`w`.`frozen`,`w`.`status`,`w`.`id` FROM `member` AS `m` INNER JOIN `zxzq_wallet` AS `w` ON `m`.`member_id`=`w`.`memberid`";
            $data = $member->query($sql);
            $count = count($data);
            $Page = new \Think\Page1($count, 10);
            $data = $member->alias('m')->field("`m`.`member_name`,`m`.`member_bankname`,`m`.`member_bankcard`,`w`.`money`,`w`.`frozen`,`w`.`status`,`w`.`id`")->join("INNER JOIN `zxzq_wallet` AS `w` ON `m`.`member_id`=`w`.`memberid`")->limit($Page->firstRow.','.$Page->listRows)->select();
            $show = $Page->show();
            $this->assign('show', $show);
            $this->assign('data', $data);
			$id = $_GET['id'];
			$this->assign('id', $id);
	        $this->display();
	}
}
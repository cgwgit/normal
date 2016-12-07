<?php

namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller {

    public function _initialize() {
        if ($_SESSION['userData'] == NULL) {
            $this->success('请先登陆', U('Login/index'));
            exit();
        }
    }

    public function __construct() {
        parent::__construct();
    }

	
    public function Index() {
        $list = M('zxzq_goods')->order('securities ASC')->select();
        $this->assign('list', $list);
        $this->assign('title', '证券列表');
        $this->display('List');
    }

    public function addGoods() {
        if (I()) {
            floatval(I('securities')) ? $insert['securities'] = floatval(I('securities')) : $this->error('请填写正确的购买份额');
            floatval(I('levered')) ? $insert['levered'] = floatval(I('levered')) : $this->error('请填写正确的证券系数');
            floatval(I('t_1')) ? $insert['t_1'] = floatval(I('t_1')) : $this->error('请填写正确的第一推荐分红');
            floatval(I('t_2')) ? $insert['t_2'] = floatval(I('t_2')) : $this->error('请填写正确的第二推荐分红');
            floatval(I('t_3')) ? $insert['t_3'] = floatval(I('t_3')) : $this->error('请填写正确的第三推荐分红');
            floatval(I('t_bred')) < 100 ? $insert['t_bred'] = floatval(I('t_bred')) / 100 : $this->error('请填写正确的培育佣金比例');
            floatval(I('t_bred_f')) < 100 ? $insert['t_bred_f'] = floatval(I('t_bred_f')) / 100 : $this->error('请填写正确的培育佣金比例浮动');
            $insert['ctime'] = $insert['utime'] = date('Y-m-d H:i:s');

            $return = M('zxzq_goods')->data($insert)->add();
            if ($return) {
                $this->success('添加成功', U('Index/index'));
                exit();
            } else {
                $this->error('添加失败');
                exit();
            }
        }

        $this->assign('title', '添加证券');
        $this->display('Add');
    }

    public function editGoods() {
        if (!I('goodsId')) {
            $this->error('参数错误');
        }

        $data = M('zxzq_goods')->where(array('id' => intval(I('goodsId'))))->find();
        if (!$data) {
            $this->error('数据不存在');
        }

        $this->assign('data', $data);
        $this->assign('title', '编辑证券');
        $this->display('Edit');
    }

    public function doEditGoods() {
        if (I()) {
            floatval(I('securities')) ? $update['securities'] = floatval(I('securities')) : $this->error('请填写正确的购买份额');
            floatval(I('levered')) ? $update['levered'] = floatval(I('levered')) : $this->error('请填写正确的证券系数');
            floatval(I('t_1')) ? $update['t_1'] = floatval(I('t_1')) : $this->error('请填写正确的第一推荐分红');
            floatval(I('t_2')) ? $update['t_2'] = floatval(I('t_2')) : $this->error('请填写正确的第二推荐分红');
            floatval(I('t_3')) ? $update['t_3'] = floatval(I('t_3')) : $this->error('请填写正确的第三推荐分红');
            floatval(I('t_bred')) < 100 ? $update['t_bred'] = floatval(I('t_bred')) / 100 : $this->error('请填写正确的培育佣金比例');
            floatval(I('t_bred_f')) < 100 ? $update['t_bred_f'] = floatval(I('t_bred_f')) / 100 : $this->error('请填写正确的培育佣金比例浮动');
            $update['utime'] = date('Y-m-d H:i:s');
            $return = M('zxzq_goods')->where(array('id' => intval(I('id'))))->save($update);
            if ($return) {
                $this->success('编辑成功', U('Index/index'));
            } else {
                $this->error('编辑失败');
            }
        }

        $this->error('编辑失败');
    }

    public function Scale() {
        $count = M('zxzq_rate')->count();
        $Page = new \Think\Page1($count, 20);
        $show = $Page->show();
        $res = M('zxzq_rate')->order('ctime DESC')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->res = $res;
        $this->show = $show;
        $this->assign('title', '当日兑换率');
        $this->display();
    }

    public function addscale() {
        if (I()) {
            floatval(I('money')) ? $data['money'] = floatval(I('money')) : $this->error('正确填写兑换比例');
            $data['ctime'] = date('Y-m-d H:i:s');
            $result = M('zxzq_rate')->add($data);
            if ($result) {
                $this->success('添加成功', U('Index/Scale'));
            } else {
                $this->error('添加失败');
            }
        }
    }
    
    public function deleteGoods() {
        if (!I('goodsId')) {
            $this->error('参数错误');
        }
        
        $data = M('zxzq_goods')->where(array('id' => intval(I('goodsId'))))->delete();
        if ($data) {
            $this->success('删除成功',U('Index/index'));
        }else{
            $this->error('数据不存在');
        }
    }

}

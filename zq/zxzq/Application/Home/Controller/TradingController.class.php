<?php

namespace Home\Controller;

use Think\Controller;

class TradingController extends Controller {

    public function _initialize() {
        if ($_SESSION['userData'] == NULL) {
            $this->success('请先登陆', U('Login/index'));
            exit();
        }
    }

    public function platform() {
        $money = M("zxzq_rate")->field("money,max(date(ctime))")->group("date(ctime)")->limit(12)->select();
        $this->assign('list', $money);
        $this->display();
    }

    public function dictate() {
        $this->display();
    }

    public function details() {
        $this->display();
    }

}

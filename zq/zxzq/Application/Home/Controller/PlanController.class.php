<?php

namespace Home\Controller;

use Think\Controller;

class PlanController extends Controller {

    public function _initialize() {
        if ($_SESSION['userData'] == NULL) {
            $this->success('请先登陆', U('Login/index'));
            exit();
        }
    }

    public function planExtension() {

        $this->display();
    }

    public function planDevelop() {
        $this->display();
    }
    
    public function planRaic() {
        $this->display();
    }

}

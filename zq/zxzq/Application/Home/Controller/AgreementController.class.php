<?php

namespace Home\Controller;

use Think\Controller;

class AgreementController extends Controller {

    public function _initialize() {
        if ($_SESSION['userData'] == NULL) {
            $this->success('请先登陆', U('Login/index'));
            exit();
        }
    }

    public function  info() {

        $this->display();
    }

    public function certificate() {
        $this->display();
    }
    
    public function certificatelist() {
        $this->display();
    }
    public function apply() {
        $this->display();
    }
    
 
 

}

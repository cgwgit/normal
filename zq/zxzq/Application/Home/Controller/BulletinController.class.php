<?php

namespace Home\Controller;

use Think\Controller;

class BulletinController extends Controller {

    public function _initialize() {
        if ($_SESSION['userData'] == NULL) {
            $this->success('请先登陆', U('Login/index'));
            exit();
        }
    }

    public function  bulletinlist() {

        $this->display();
    }

    public function download() {
        $this->display();
    }
    
    public function demand() {
        $this->display();
    }
    
 
 

}

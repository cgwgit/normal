<?php

namespace Home\Controller;

use Think\Controller;

class PerformanceController extends Controller {

    public function _initialize() {
        if ($_SESSION['userData'] == NULL) {
            $this->success('请先登陆', U('Login/index'));
            exit();
        }
    }

    public function __construct() {
        parent::__construct();
    }

    public function performance_reports() {
       
        $this->display();
    }
    public function zx_courseware() {
       
        $this->display();
    }
    public function zx_video() {
       
        $this->display();
    }
    public function zx_instructional() {
       
        $this->display();
    }

   
}

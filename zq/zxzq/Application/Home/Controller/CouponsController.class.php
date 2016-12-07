<?php

namespace Home\Controller;

use Think\Controller;

class CouponsController extends Controller {

    public function _initialize() {
        if ($_SESSION['userData'] == NULL) {
            $this->success('请先登陆', U('Login/index'));
            exit();
        }
    }

    public function couponsDetails() {

        $this->display();
    }

    public function couponsTransfer() {
        $this->display();
    }
    
    public function couponsRecharge() {
        $this->display();
    }
    
    public function couponDetails() {

        $this->display();
    }
    
    public function couponWithdrawals() {

        $this->display();
    }
    
    public function couponTransfer() {

        $this->display();
    }
    
    public function couponTradetails() {

        $this->display();
    }
    
    public function auctionInfo() {

        $this->display();
    }
    
    public function auctionDetails() {

        $this->display();
    }

}

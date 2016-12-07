<?php

namespace Tools;
use Think\Controller; //空间类元素引入

class HomeController extends Controller{
    //构造方法，判断是否越权访问
    function __construct(){
        parent::__construct(); //先实现父类的构造方法
        //实现所有控制器都需要的信息(商品分类信息)
        //获得3个级别的分类信息
        $catInfoA = D('Category')->where(array('cat_level'=>'0'))->select();
        $catInfoB = D('Category')->where(array('cat_level'=>'1'))->select();
        $catInfoC = D('Category')->where(array('cat_level'=>'2'))->select();
        $this -> assign('catInfoA',$catInfoA);
        $this -> assign('catInfoB',$catInfoB);
        $this -> assign('catInfoC',$catInfoC);
    }

}

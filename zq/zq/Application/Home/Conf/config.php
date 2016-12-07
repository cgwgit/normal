<?php
//登录用户名：admin 123456
return array(
    //'配置项'=>'配置值'
    'DB_TYPE' =>'mysql',  //数据库类型
    // 'DB_HOST' =>'192.168.0.250',  //服务器地址
    'DB_HOST' =>'127.0.0.1',  //服务器地址
    'DB_NAME' =>'scoredb',   //数据库名
    'DB_USER' =>'root',  //用户名
    // 'DB_PWD' =>'zhongxiao',   //密码
    'DB_PWD' =>'root',   //密码
    'DB_PREFIX' =>'',  //数据库表前缀
    'DB_CHARSET' =>'utf8',   //数据库编码
    'DEFAULT_CONTROLLER'    =>  'Index', // 默认控制器名称
//    'DEFAULT_ACTION'        =>  'Index', // 默认操作名称
    'URL_MODEL'   =>  1
);
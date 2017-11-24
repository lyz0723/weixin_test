<?php
return array(
	//'配置项'=>'配置值'
    'DB_TYPE'               =>  'mysqli',                 // 数据库类型
    'DB_HOST'               =>  '127.0.0.1',     // 服务器地址
    'DB_NAME'               =>  'tpauth',     // 数据库名
    'DB_USER'               =>  'root',     // 用户名
    'DB_PWD'                =>  'root',      // 密码
    'DB_PORT'               =>  '3306',     // 端口
    'DB_PREFIX'             =>  'bjyadmin_',   // 数据库表前缀

    'WEIXINPAY_CONFIG'       => array(
        'APPID'              => 'wx4ff19b6511cb0168', // 微信支付APPID
        'MCHID'              => '1486263132', // 微信支付MCHID 商户收款账号
        'KEY'                => '6fb297764fe1d0e4b787f055ff843eca', // 微信支付KEY
        'APPSECRET'          => 'ef0cc74d77ceb137e297efecfc0e9908',  //公众帐号secert
        'NOTIFY_URL'         => 'https://liyanzhao.feisir.com/Api/WeixPay/notify/order_number/', // 接收支付状态的连接
    ),
);
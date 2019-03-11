<?php
return[
    // 是否开启路由
    'url_route_on'           => true,
    // 是否强制使用路由
    'url_route_must'         => false,

    'captcha'  => [
        // 验证码字符集合
        //'codeSet'  => '23456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ',
        'codeSet'  => '23456789',
        // 验证码字体大小(px)
        'fontSize' => 25,
        // 是否画混淆曲线
        'useCurve' => false,
        // 验证码位数
        'length'   => 2,
        // 验证成功后是否重置
        'reset'    => true
    ],

    //开启session
    'session'                => [
        'id'             => '',
        // SESSION_ID的提交变量,解决flash上传跨域
        'var_session_id' => '',
        // SESSION 前缀
        'prefix'         => 'think',
        // 驱动方式 支持redis memcache memcached
        'type'           => '',
        // 是否自动开启 SESSION
        'auto_start'     => true
    ]
];
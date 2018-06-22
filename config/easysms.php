<?php
return [
    // HTTP 请求的超时时间（秒）
    'timeout' => 5.0,

    // 默认发送配置
    'default' => [
        // 网关调用策略，默认：顺序调用
        'strategy' => \Overtrue\EasySms\Strategies\OrderStrategy::class,

        // 默认可用的发送网关
        'gateways' => [
            'yunpian',
//            'aliyun',
        ],
    ],
    // 可用的网关配置
    'gateways' => [
        'errorlog' => [
            'file' => '/tmp/easy-sms.log',
        ],
        'yunpian' => [
            'api_key' => 'f49a04667d9c16a66dc1b8e54f780785',
        ],
//        'aliyun' => [
//            'access_key_id' => 'LTAInFbXqLFhptN0',
//            'access_key_secret' => 'G0kBm2WSwpRc7VlKkI9lTR5Uln6kMY',
//            'sign_name' => '青岛军民融合生活保障中心',
//        ],
    ],
];
<?php
/**
 * Created by PhpStorm.
 * User: wangzaron
 * Date: 2018/6/23
 * Time: 上午11:05
 */
return [
    // HTTP 请求的超时时间（秒）
    'timeout' => 5.0,

    // 默认发送配置
    'default' => [
        // 网关调用策略，默认：顺序调用
        'strategy' => \Overtrue\EasySms\Strategies\OrderStrategy::class,

        // 默认可用的发送网关
        'gateways' => [
            'chuanglan'
        ],
    ],
    // 可用的网关配置
    'gateways' => [
        'errorlog' => [
            'file' => storage_path(date('Y-m-d')."-easy-sms.log"),
        ],
        'chuanglan' => [
            'username'  => '',
            'password' => '',
        ],
    ],
    'new_clue_template' => [
        'id' => '',
        'content' => '%s推广渠道有新学员咨询学车业务，学员姓名:%s,学员电话:%s。请尽快联系学员，谢谢。',
        'to' => ''
    ]
];
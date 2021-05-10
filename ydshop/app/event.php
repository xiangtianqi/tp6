<?php
// 事件定义文件
return [
    'bind'      => [
    ],

    'listen'    => [
        'UserLogin'    =>    ['app\listener\UserLogin'],
        'AppInit'  => [],
        'HttpRun'  => [],
        'HttpEnd'  => [],
        'LogLevel' => [],
        'LogWrite' => [],
    ],

    'subscribe' => [
    ],
];

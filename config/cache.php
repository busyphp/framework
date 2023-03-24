<?php

// +----------------------------------------------------------------------
// | 缓存设置
// +----------------------------------------------------------------------

return [
    // 默认缓存驱动
    'default' => env('cache.driver', 'file'),
    
    // 缓存连接方式配置
    'stores'  => [
        // 文件缓存方式
        'file'      => [
            'type'   => 'file',
            'prefix' => '',
        ],
        
        // Redis缓存方式
        'redis'     => [
            'type'     => 'redis',
            'prefix'   => '',
            'host'     => '127.0.0.1',
            'port'     => 6379,
            'password' => '',
            'select'   => 0,
        ],
        
        // Memcache缓存方式
        'memcache'  => [
            'type'   => 'memcache',
            'prefix' => '',
            'host'   => '127.0.0.1',
            'port'   => 11211,
        ],
        
        // Memcached缓存方式
        'memcached' => [
            'type'     => 'memcached',
            'prefix'   => '',
            'host'     => '127.0.0.1',
            'port'     => 11211,
            'username' => '',
            'password' => '',
        ],
        
        // Wincache缓存方式
        'wincache'  => [
            'type'   => 'wincache',
            'prefix' => ''
        ]
    ],
];

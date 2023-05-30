<?php
return [
    'model' => [
        // 系统用户模型
        'admin_user'   => [
            // 验证相关
            // 'validate' => [
                // 头像是否必传
                // 'avatar'   => false,
                
                // 昵称是否必填
                // 'nickname' => false,
                
                // 手机号选项
                // 'phone'    => [
                    // 是否必填验证
                    // 'required' => false,
                    
                    // 创建/修改/手机号登录验证规则，支持正则/闭包，默认为验证中国大陆手机号
                    // 'regex'    => null,
                    
                    // 前端校验手机号正则
                    // 'js_regex' => '^1[3-9]\d{9}$',
                // ],
                
                // 邮箱是否必填
                // 'email'    => false,
                
                // 姓名是否必填
                // 'name'     => false,
                
                // 证件号码选项
                // 'card_no'  => [
                    // 是否必填验证
                    // 'required' => false,
                    
                    // 是否验证唯一性
                    // 'unique'   => false,
                    
                    // 是否校验身份证号码
                    // 'identity' => false
                // ],
                
                // 性别是否必选
                // 'sex'      => false,
                
                // 出生日期是否必选
                // 'birthday' => false,
                
                // 电话号码选项
                // 'tel'      => [
                    // 是否必填验证
                    // 'required' => false,
                    
                    // 电话号码验证正则，支持正则/闭包
                    // 'regex'    => null,
                    
                    // 前端校验电话号码正则
                    // 'js_regex' => null,
                // ],
            // ],
            
            // 登录相关
            'login'    => [
                // 解密通行 authKey 的秘钥，24位字符，默认为：Pe78mUtfomfhHqSHGpQ3jAlI
                'auth_secret'           => '',
                
                // 通行token扩展
                'auth_extend'           => [
                    // 创建扩展内容，生成token时调用
                    'create' => null,
                    
                    // 检测扩展内容，检测登录时调用，失败请抛出异常
                    'check'  => null
                ],
                
                // 允许多设备同时登录的token生成扩展，支持闭包与字符串，闭包必须返回字符串
                'multiple_client_token' => null,
            ],
        ],
        
        // 用户通行模型
        'system_token' => [
            // 登录类型映射
            // 'type_map'      => [
            //     1 => '网页端',
            //     2 => 'APP端'
            // ],
            
            // 用户类型映射
            // 'user_type_map' => [
            //     1 => '系统用户',
            //     2 => '会员'
            // ],
        ],
        
        // 文件模型
        'system_file' => [
            // 文件类型扩展
            // 'file_types' => [
                // 类型 => [
                //     'name' => '类型名称',
                //     'icon' => 'fa fa-file-o',
                //     'types' => ['文件扩展名1', '文件扩展名2', '文件扩展名...']
                // ]
                // 'code' => [
                    // 'name'  => '代码',
                    // 'types' => ['html', 'js', 'php']
                // ]
            // ],
            
            // 文件图标映射
            // 'file_icons' => [
                // 格式 => '图标名称或图标路径'
            // ]
        ]
    ]
];
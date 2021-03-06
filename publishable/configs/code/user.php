<?php
return [


        'index' => [
            'submit'=>[
                'success' => [
                    'http_code' => 200,
                    'code' => 'ZBASEMENT_CODE_USER_INDEX_SUBMIT_SUCCESS',
                    'status' => true,
                    'message' => '获取用户列表成功!'
                ],
                'failed' => [
                    'http_code' => 403,
                    'code' => 'ZBASEMENT_CODE_USER_INDEX_SUBMIT_FAILED',
                    'status' => false,
                    'message' => '获取用户列表失败!'
                ],
            ],

            'validation' => [
                'failed'=>[
                    'http_code' => 422,
                    'code' => 'ZBASEMENT_CODE_USER_INDEX_VALIDATION',
                    'status' => false,
                    'message' => '用户列表输入参数验证失败!'
                ],
            ],
            'load'=>[
                'rules'=>[
                    'success'=>[
                        'http_code' => 200,
                        'code' => 'ZBASEMENT_CODE_USER_INDEX_LOAD_RULES_SUCCESS',
                        'status' => true,
                        'message' => '用户列表操作所需验证规则加载成功!'
                    ],
                    'failed'=>[
                        'http_code' => 403,
                        'code' => 'ZBASEMENT_CODE_USER_INDEX_LOAD_RULES_FAILED',
                        'status' => false,
                        'message' => '用户列表操作所需验证规则加载失败!'
                    ],

                ],
                'messages'=>[
                    'success'=>[
                        'http_code' => 200,
                        'code' => 'ZBASEMENT_CODE_USER_INDEX_LOAD_MESSAGES_SUCCESS',
                        'status' => true,
                        'message' => '用户列表操作所需验证规则的提示信息加载成功!'
                    ],
                    'failed'=>[
                        'http_code' => 403,
                        'code' => 'ZBASEMENT_CODE_USER_INDEX_LOAD_MESSAGES_FAILED',
                        'status' => false,
                        'message' => '用户列表操作所需验证规则的提示信息加载失败!'
                    ],

                ],
            ],
        ],
        'fetch' => [
            'submit'=>[
                'success' => [
                    'http_code' => 200,
                    'code' => 'ZBASEMENT_CODE_USER_FETCH_SUBMIT_SUCCESS',
                    'status' => true,
                    'message' => '获取单个用户成功!'
                ],
                'failed' => [
                    'http_code' => 403,
                    'code' => 'ZBASEMENT_CODE_USER_FETCH_SUBMIT_FAILED',
                    'status' => false,
                    'message' => '获取单个用户失败!'
                ],
            ],

            'validation' => [
                'failed'=>[
                    'http_code' => 422,
                    'code' => 'ZBASEMENT_CODE_USER_FETCH_VALIDATION',
                    'status' => false,
                    'message' => '查找单个用户输入参数验证失败!'
                ]

            ],
            'load'=>[
                'rules'=>[
                    'success'=>[
                        'http_code' => 200,
                        'code' => 'ZBASEMENT_CODE_USER_FETCH_LOAD_RULES_SUCCESS',
                        'status' => true,
                        'message' => '查找单个用户操作所需验证规则加载成功!'
                    ],
                    'failed'=>[
                        'http_code' => 403,
                        'code' => 'ZBASEMENT_CODE_USER_FETCH_LOAD_RULES_FAILED',
                        'status' => false,
                        'message' => '查找单个用户操作所需验证规则加载失败!'
                    ],

                ],
                'messages'=>[
                    'http_code' => 403,
                    'code' => 'ZBASEMENT_CODE_USER_FETCH_LOAD_MESSAGES_FAILED',
                    'status' => false,
                    'message' => '查找单个用户操作所需验证规则的提示信息加载失败!'
                ],
            ],
        ],
        'show' => [
            'submit'=>[
                'success' => [
                    'http_code' => 200,
                    'code' => 'ZBASEMENT_CODE_USER_SHOW_SUBMIT_SUCCESS',
                    'status' => true,
                    'message' => '获取用户信息成功!'
                ],
                'error' => [
                    'http_code' => 403,
                    'code' => 'ZBASEMENT_CODE_USER_SHOW_SUBMIT_FAILED',
                    'status' => false,
                    'message' => '获取用户信息失败!'
                ],
            ],

            'validation' => [
                'failed'=>[
                    'http_code' => 422,
                    'code' => 'ZBASEMENT_CODE_USER_SHOW_VALIDATION_FAILED',
                    'status' => false,
                    'message' => '用户信息输入参数验证失败!'
                ]
            ],
            'load'=>[
                'rules'=>[
                    'success'=>[
                        'http_code' => 200,
                        'code' => 'ZBASEMENT_CODE_USER_SHOW_LOAD_RULES_SUCCESS',
                        'status' => true,
                        'message' => 'USER数据详情展示操作所需验证规则加载成功!'
                    ],
                    'failed'=>[
                        'http_code' => 403,
                        'code' => 'ZBASEMENT_CODE_USER_SHOW_LOAD_RULES_FAILED',
                        'status' => false,
                        'message' => 'USER数据详情展示操作所需验证规则加载失败!'
                    ],
                ],
                'messages'=>[
                    'success'=>[
                        'http_code' => 200,
                        'code' => 'ZBASEMENT_CODE_USER_SHOW_LOAD_MESSAGES_SUCCESS',
                        'status' => true,
                        'message' => 'USER数据详情展示操作所需验证规则的提示信息加载成功!'
                    ],
                    'failed'=>[
                        'http_code' => 403,
                        'code' => 'ZBASEMENT_CODE_USER_SHOW_LOAD_MESSAGES_FAILED',
                        'status' => false,
                        'message' => 'USER数据详情展示操作所需验证规则的提示信息加载失败!'
                    ],

                ],
            ],
        ],
        'register' => [
            'submit'=>[
                'success' => [
                    'http_code' => 201,
                    'code' => 'ZBASEMENT_CODE_USER_REGISTER_SUBMIT_SUCCESS',
                    'status' => true,
                    'message' => '注册用户信息成功!'
                ],
                'error' => [
                    'http_code' => 403,
                    'code' => 'ZBASEMENT_CODE_USER_REGISTER_SUBMIT_FAILDE',
                    'status' => false,
                    'message' => '注册用户信息失败!'
                ],
            ],

            'validation' => [
                'failed'=>[
                    'http_code' => 422,
                    'code' => 'ZBASEMENT_CODE_USER_REGISTER_VALIDATION_FAILED',
                    'status' => false,
                    'message' => '注册用户时输入参数验证失败!'
                ]

            ],
        ],
        'updatepassword'=>[
            'submit'=>[
                'success' => [
                    'http_code' => 200,
                    'code' => 'ZBASEMENT_CODE_USER_UPDATEPASSWORD_SUBMIT_SUCCESS',
                    'status' => true,
                    'message' => '更新用户密码成功!'
                ],
                'failed' => [
                    'http_code' => 403,
                    'code' => 'ZBASEMENT_CODE_USER_UPDATEPASSWORD_FAILED',
                    'status' => false,
                    'message' => '更新用户密码失败，原密码不正确!'
                ],
            ],

            'validation' => [
                'failed'=>[
                    'http_code' => 422,
                    'code' => 'ZBASEMENT_CODE_USER_UPDATEPASSWORD_VALIDATION_FAILED',
                    'status' => false,
                    'message' => '修改密码输入参数验证失败!'
                ]

            ],
            'load'=>[
                'rules'=>[
                    'success'=>[
                        'http_code' => 200,
                        'code' => 'ZBASEMENT_CODE_USER_UPDATEPASSWORD_LOAD_RULES_SUCCESS',
                        'status' => true,
                        'message' => '更新密码操作所需验证规则加载成功!'
                    ],
                    'failed'=>[
                        'http_code' => 403,
                        'code' => 'ZBASEMENT_CODE_USER_UPDATEPASSWORD_LOAD_RULES_FAILED',
                        'status' => false,
                        'message' => '更新密码操作所需验证规则加载失败!'
                    ],

                ],
                'messages'=>[
                    'success'=>[
                        'http_code' => 200,
                        'code' => 'ZBASEMENT_CODE_USER_UPDATEPASSWORD_LOAD_MESSAGES_SUCCESS',
                        'status' => true,
                        'message' => '更新密码操作所需验证规则的提示信息加载成功!'
                    ],
                    'failed'=>[
                        'http_code' => 403,
                        'code' => 'ZBASEMENT_CODE_USER_UPDATEPASSWORD_LOAD_MESSAGES_FAILED',
                        'status' => false,
                        'message' => '更新密码操作所需验证规则的提示信息加载失败!'
                    ],

                ],
            ],
        ],
        'field'=>[
            'search'=>[
                'failed'=>[
                    'http_code' => 500,
                    'code' => 'ZBASEMENT_CODE_USER_FIELD_SEARCH_FAILED',
                    'status' => false,
                    'message' => 'USER数据模型中字段丢失!'
                ],
            ],
        ],
        'store'=>[
            'submit'=>[
                'success'=>[
                    'http_code' => 201,
                    'code' => 'ZBASEMENT_CODE_USER_STORE_SUBMIT_SUBMIT_SUCCESS',
                    'status' => true,
                    'message' => '已经接收到USER数据插入提交申请!'
                ],
                'failed'=>[
                    'http_code' => 403,
                    'code' => 'ZBASEMENT_CODE_USER_STORE_SUBMIT_SUBMIT_FAILED',
                    'status' => false,
                    'message' => 'USER数据插入失败，该用户已经存在!'
                ],
            ],
            'load'=>[
                'rules'=>[
                    'success'=>[
                        'http_code' => 200,
                        'code' => 'ZBASEMENT_CODE_USER_STORE_LOAD_RULES_SUCCESS',
                        'status' => true,
                        'message' => 'USER数据插入操作所需验证规则加载成功!'
                    ],
                    'failed'=>[
                        'http_code' => 403,
                        'code' => 'ZBASEMENT_CODE_USER_STORE_LOAD_RULES_FAILED',
                        'status' => false,
                        'message' => 'USER数据插入操作所需验证规则加载失败!'
                    ],

                ],
                'messages'=>[
                    'success'=>[
                        'http_code' => 200,
                        'code' => 'ZBASEMENT_CODE_USER_STORE_LOAD_MESSAGES_SUCCESS',
                        'status' => true,
                        'message' => 'USER数据插入操作所需验证规则的提示信息加载成功!'
                    ],
                    'failed'=>[
                        'http_code' => 403,
                        'code' => 'ZBASEMENT_CODE_USER_STORE_LOAD_MESSAGES_FAILED',
                        'status' => false,
                        'message' => 'USER数据插入操作所需验证规则的提示信息加载失败!'
                    ],

                ],
            ],
            'validation' => [
                'failed'=>[
                    'http_code' => 422,
                    'code' => 'ZBASEMENT_CODE_USER_STORE_VALIDATION_FAILED',
                    'status' => false,
                    'message' => '新建用户帐户时输入参数验证失败!'
                ]

            ],
        ],
        'update'=>[
            'submit'=>[
                'success'=>[
                    'http_code' => 201,
                    'code' => 'ZBASEMENT_CODE_USER_UPDATE_SUBMIT_SUCCESS',
                    'status' => true,
                    'message' => '已经接收到USER数据更新提交申请!'
                ],
            ],
            'load'=>[
                'rules'=>[
                    'success'=>[
                        'http_code' => 200,
                        'code' => 'ZBASEMENT_CODE_USER_UPDATE_LOAD_RULES_SUCCESS',
                        'status' => true,
                        'message' => 'USER数据更新操作所需验证规则加载成功!'
                    ],
                    'failed'=>[
                        'http_code' => 403,
                        'code' => 'ZBASEMENT_CODE_USER_UPDATE_LOAD_RULES_FAILED',
                        'status' => false,
                        'message' => 'USER数据更新操作所需验证规则加载失败!'
                    ],

                ],
                'messages'=>[
                    'success'=>[
                        'http_code' => 200,
                        'code' => 'ZBASEMENT_CODE_USER_UPDATE_LOAD_MESSAGES_SUCCESS',
                        'status' => true,
                        'message' => 'USER数据更新操作所需验证规则的提示信息加载成功!'
                    ],
                    'failed'=>[
                        'http_code' => 403,
                        'code' => 'ZBASEMENT_CODE_USER_UPDATE_LOAD_MESSAGES_FAILED',
                        'status' => false,
                        'message' => 'USER数据更新操作所需验证规则的提示信息加载失败!'
                    ],

                ],
            ],
            'validation' => [
                'failed'=>[
                    'http_code' => 422,
                    'code' => 'ZBASEMENT_CODE_USER_UPDATE_VALIDATION_FAILED',
                    'status' => false,
                    'message' => '更新用户帐户时输入参数验证失败!'
                ]

            ],
        ],

];

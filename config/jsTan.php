<?php
return [
    // 授权地址
    'authUrl' => env('STAN_AUTH_URL', 'https://openweb.jushuitan.com/auth'),
    // 接口地址
    'baseUrl' => env('STAN_BASE_URL','https://dev-api.jushuitan.com/'),
    // 授权接口地址
    'apiUrl' => env('STAN_BASE_URL','https://openapi.jushuitan.com/'),
    // 授权token
    'accessToken' => env('STAN_ACCESS_TOKEN',''),
    // 应用key
    'appKey' =>env('STAN_APP_KEY',''),
    // 应用secret
    'appSecret' => env('STAN_APP_SECRET',''),
    // 版本号
    'version' => '2',
    // 时间戳
    'timestamp'=> time(),
    // 字符集
    'charset' => 'utf-8',
    // 是否验证证书
    'verify' => env('STAN_VERIFY',false),
    // 超时时间
    'timeout' => env('STAN_TIMEOUT',0)

];

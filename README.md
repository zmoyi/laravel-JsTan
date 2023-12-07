# laravel-JsTan

## 简介

laravel-JsTan 是基于[聚水潭 sdk（2.0）](https://github.com/zmoyi/JsTan)的 Laravel 聚水潭 SDK，支持laravel9.0以上版本。
[![Latest Stable Version](http://poser.pugx.org/zmoyi/laravel-jstan/v)](https://packagist.org/packages/zmoyi/laravel-jstan) [![Total Downloads](http://poser.pugx.org/zmoyi/laravel-jstan/downloads)](https://packagist.org/packages/zmoyi/laravel-jstan) [![License](http://poser.pugx.org/zmoyi/laravel-jstan/license)](https://packagist.org/packages/zmoyi/laravel-jstan) [![Monthly Downloads](http://poser.pugx.org/zmoyi/laravel-jstan/d/monthly)](https://packagist.org/packages/zmoyi/laravel-jstan) [![Daily Downloads](http://poser.pugx.org/zmoyi/laravel-jstan/d/daily)](https://packagist.org/packages/zmoyi/laravel-jstan) [![Version](http://poser.pugx.org/zmoyi/laravel-jstan/version)](https://packagist.org/packages/zmoyi/laravel-jstan) [![PHP Version Require](http://poser.pugx.org/zmoyi/laravel-jstan/require/php)](https://packagist.org/packages/zmoyi/laravel-jstan) 

## 特点

- 基于laravel10开发，支持laravel9以上版本
- 其他版本未经过测试 理论支持 laravel 8+ 需要自行修改 php 版本
- php 版本 >= 8.1 （理论支持php8.1以下版本，需要自行修改 php 版本）

## 安装

```
composer require zmoyi/laravel-JsTan
```

## 使用

### 发布配置文件

```
php artisan vendor:publish --tag=laravel-jsTan
```

### 使用示例

```php
use JsTan\Route;
use LaravelJsTan\Facades\JsTan;

/**
* ...
**/

$authUrl = JsTan::Client()->createAuthUrl();
        $response = JsTan::Client()->request(
            Route::QUERY_SHOPS,[
                'page_index' => 1,
                'page_size' => 10
            ]
        );
```

## 注意事项
- 遇到问题请先查阅聚水潭文档，如果文档中没有说明，请在此处提 issue
- 聚水潭 sdk 文档地址：https://github.com/zmoyi/JsTan
- 聚水潭 文档说明：https://openweb.jushuitan.com/doc
- 聚水潭 sdk 文档示例：https://github.com/zmoyi/JsTan/blob/main/tests/MyClientTest.php

## 开源协议

[MIT]()
## 版权信息

MIT © [zmoyi](https://github.com/zmoyi)

## 捐赠
如果您觉得这个项目帮助到了您，可以请作者喝杯咖啡表示鼓励。

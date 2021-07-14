<img align="right" width="100" src="https://user-images.githubusercontent.com/1472352/49656357-1e874080-fa78-11e8-80ea-69e2103345cf.png" alt="EasyDouyin Logo"/>

<h1 align="left"><a href="https://www.easyDouyin.com">EasyDouyin</a></h1>

📦 It is probably the best SDK in the world for developing Douyin App.

[![Test Status](https://github.com/kinderzhuang/Douyin/workflows/Test/badge.svg)](https://github.com/kinderzhuang/Douyin/actions) 
[![Lint Status](https://github.com/kinderzhuang/Douyin/workflows/Lint/badge.svg)](https://github.com/kinderzhuang/Douyin/actions) 
[![Latest Stable Version](https://poser.pugx.org/kinderzhuang/Douyin/v/stable.svg)](https://packagist.org/packages/kinderzhuang/Douyin) 
[![Latest Unstable Version](https://poser.pugx.org/kinderzhuang/Douyin/v/unstable.svg)](https://packagist.org/packages/kinderzhuang/Douyin)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/kinderzhuang/Douyin/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/kinderzhuang/Douyin/?branch=master) 
[![Code Coverage](https://scrutinizer-ci.com/g/kinderzhuang/Douyin/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/kinderzhuang/Douyin/?branch=master) 
[![Total Downloads](https://poser.pugx.org/kinderzhuang/Douyin/downloads)](https://packagist.org/packages/kinderzhuang/Douyin) 
[![License](https://poser.pugx.org/kinderzhuang/Douyin/license)](https://packagist.org/packages/kinderzhuang/Douyin) 


## Requirement

1. PHP >= 7.2
2. **[Composer](https://getcomposer.org/)**
3. openssl 拓展
4. fileinfo 拓展（素材管理模块需要用到）

## Installation

```shell
$ composer require "kinderzhuang/Douyin:^1.0" -vvv
```

## Usage

基本使用（以服务端为例）:

```php
<?php

use EasyDouyin\Factory;

$options = [
    'app_id'    => 'wx3cf0f39249eb0exxx',
    'secret'    => 'f1c242f4f28f735d4687abb469072xxx',
    'token'     => 'easyDouyin',
    'log' => [
        'level' => 'debug',
        'file'  => '/tmp/easyDouyin.log',
    ],
    // ...
];

$app = Factory::officialAccount($options);

$server = $app->server;
$user = $app->user;

$server->push(function($message) use ($user) {
    $fromUser = $user->get($message['FromUserName']);

    return "{$fromUser->nickname} 您好！欢迎关注 kinderzhuang!";
});

$server->serve()->send();
```

更多请参考 [https://www.easyDouyin.com/](https://www.easyDouyin.com/)。

## Documentation

[官网](https://www.easyDouyin.com)  · [教程](https://www.easyDouyin.com/tutorials)  ·  [讨论](https://yike.io/)  ·  [微信公众平台](https://mp.weixin.qq.com/wiki)  ·  [Douyin Official](http://admin.Douyin.com/wiki)

## Integration

[Laravel 5 拓展包: kinderzhuang/laravel-Douyin](https://github.com/kinderzhuang/laravel-Douyin)

## Contributors

This project exists thanks to all the people who contribute. [[Contribute](CONTRIBUTING.md)].
<a href="https://github.com/kinderzhuang/Douyin/graphs/contributors"><img src="https://opencollective.com/Douyin/contributors.svg?width=890" /></a>


## PHP 扩展包开发

> 想知道如何从零开始构建 PHP 扩展包？
>
> 请关注我的实战课程，我会在此课程中分享一些扩展开发经验 —— [《PHP 扩展包实战教程 - 从入门到发布》](https://learnku.com/courses/creating-package)


## License

MIT


[![FOSSA Status](https://app.fossa.io/api/projects/git%2Bgithub.com%2Fkinderzhuang%2FDouyin.svg?type=large)](https://app.fossa.io/projects/git%2Bgithub.com%2Fkinderzhuang%2FDouyin?ref=badge_large)

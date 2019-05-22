<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\facade\Route;

Route::group('api', function () {

    //登录
    Route::post('/login','admin/login/login');

    //前台页面
    Route::group('home',function () {

        Route::get('test','test/index')->name('home-test');

    })->prefix('index/');

    //后台页面
    Route::group('admin',function () {

        Route::get('index','index/index');

    })->prefix('admin/');
});


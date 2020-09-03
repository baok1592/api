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

Route::get('', function () {
    echo '如花系统'.VAE_VERSION.'(开源板)';
});

/**
 * 用户管理
 */
Route::group('user', function () {
    Route::group('', function () {
        Route::put('/login', 'User/userLogin'); //模拟用户登录
        Route::get('wxcode_url', 'User/wxcodeUrl');   //请求公众号code
        Route::get('gzh_token', 'User/getToken');   //异步接收公众号code,获取openid，返回token
        Route::get('/info', 'User/getInfo'); //获取用户基础信息
        Route::post('get_xcx_token', 'User/getXcxToken');   //小程序获取用户token
        Route::post('token_verify', 'User/verifyToken');   //验证用户token
        Route::post('upinfo', 'User/xcx_upinfo');   //更新用户昵称、头像
        Route::post('get_mobile_token', 'User/getMobileToken');   //获取手机登录的token
        Route::post('/get_yzm', 'User/getYzm'); //单纯的获取验证码
        Route::post('/bind_phone', 'User/bind_phone'); //单纯的绑定手机号
        Route::post('edit_phone', 'User/editMobile'); //单纯的绑定手机号
        Route::post('verify_yzm', 'User/verifyYzm'); //单纯的绑定手机号
    });
});
Route::group('pay',function (){
    Route::get('wxpay','Pay/WxPay');//微信支付
});

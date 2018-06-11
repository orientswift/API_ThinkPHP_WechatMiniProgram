<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;

// 标准TP5路由定义方法
//Route::请求方式('路由名/:参数','模块名/控制器名/方法名');

//banner部分相关接口
//Route::get('banner/:id','api/v1.Banner/getBanner');
//将URL修改为标准的RestFulAPI接口
//Route::get('api/v1/banner/:id','api/v1.Banner/getBanner');

//  获取首页轮播图接口
Route::get('api/:version/banner/:id','api/:version.Banner/getBanner');
//  获取首页主题接口
Route::get('api/:version/theme','api/:version.Theme/getSimpleList');
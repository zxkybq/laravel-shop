<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    // 用户管理
	$router->get('users', 'UsersController@index');

	// 商品列表
	$router->get('products', 'ProductsController@index');
	// 添加商品
	$router->get('products/create', 'ProductsController@create');
	// 保存商品
    $router->post('products', 'ProductsController@store');
    // 编辑页面
    $router->get('products/{id}/edit', 'ProductsController@edit');
    // 编辑
	$router->put('products/{id}', 'ProductsController@update');


    // 订单列表
    $router->get('orders', 'OrdersController@index')->name('admin.orders.index');
    // 订单详情
    $router->get('orders/{order}', 'OrdersController@show')->name('admin.orders.show');
    // 订单发货
    $router->post('orders/{order}/ship', 'OrdersController@ship')->name('admin.orders.ship');
});

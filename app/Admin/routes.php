<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');
    $router->get('/user', 'UserController@index')->name('admin.home');
    $router->get('/user/create', 'UserController@create')->name('admin.home');
    $router->resource('/user', UserController::class);
    $router->resource('/channel_user', ChannelUserController::class);
    $router->resource('/channel_publisher', ChannelPublisherController::class);
    $router->resource('/channel', ChannelController::class);
    $router->resource('/gift', GiftController::class);
    $router->resource('/wallet', WalletController::class);
    $router->resource('/payment_history', PaymentHistoryController::class);
    $router->resource('/gift_history', GiftHistoryController::class);
    $router->resource('/comment', CommentController::class);
    $router->resource('/report', ReportController::class);
    $router->resource('/publisher', PublisherController::class);
    $router->resource('/advertise', AdvertiseController::class);



});

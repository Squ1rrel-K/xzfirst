<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),

], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');
    $router->resource('articles', ArticlesController::class);
    $router->resource('products', ProductsController::class);
    $router->resource('messages', MessagesController::class);
    $router->resource('albums', AlbumController::class);
    $router->resource('downloads', DownloadController::class);


});

<?php

use App\Admin\Controllers\ProductController;
use Illuminate\Routing\Router;
use App\Admin\Controllers\PricingController;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    
    $router->resource('products', ProductController::class);
    $router->resource('pricings', PricingController::class);
});

<?php
use App\Router;

Router::get('/','App\Controllers\HomeController@index');
Router::get('/home', 'App\Controllers\HomeController@index');
Router::post('/search', 'App\Controllers\HomeController@search');

Router::get('/product', 'App\Controllers\ProductController@product');
Router::get('/productDetail', 'App\Controllers\ProductController@productDetail');

Router::get('/cart', 'App\Controllers\CartController@cart');
Router::get('/addCart', 'App\Controllers\CartController@addCart');
Router::post('/addCart', 'App\Controllers\CartController@addCart');
Router::get('/deleteCart', 'App\Controllers\CartController@deleteCart');
Router::post('/pay', 'App\Controllers\CartController@pay');

Router::get('/register', 'App\Controllers\Auth\RegisterController@showRegisterForm');
Router::post('/register', 'App\Controllers\Auth\RegisterController@register');
Router::get('/login', 'App\Controllers\Auth\LoginController@showLoginForm');
Router::post('/login', 'App\Controllers\Auth\LoginController@login');
Router::get('/logout', 'App\Controllers\Auth\LoginController@logout');

Router::get('/admin', 'App\Controllers\AdminController@index');
Router::get('/adminProduct', 'App\Controllers\AdminController@Product');
Router::post('/adminProduct', 'App\Controllers\AdminController@Product');
Router::get('/adminUser', 'App\Controllers\AdminController@User');

Router::error('App\Controllers\HomeController@error');
?>
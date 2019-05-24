<?php
//后台首页
Route::get('/', \App\Http\Controllers\Admin\AdminController::class.'@index');

Route::get('/index', \App\Http\Controllers\Admin\AdminController::class.'@index');



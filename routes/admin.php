<?php

Route::get('/admin/home', \App\Http\Controllers\Admin\AdminController::class.'@index')->name('home');


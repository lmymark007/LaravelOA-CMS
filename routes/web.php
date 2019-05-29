<?php

Auth::routes();

Route::get('/', \App\Http\Controllers\Home\HomeController::class.'@index')->name('home');

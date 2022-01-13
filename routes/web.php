<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return redirect()->to('/login');
});

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::group(['prefix' => 'general'], function(){

        Route::get('home', function (){
            return view('pages.general.home');
        })->name('general.home');

    });
    Route::group(['prefix' => 'user'], function(){

        Route::get('manager', function (){
            return view('pages.user.manager');
        })->name('user.manager');

    });
    Route::group(['prefix' => 'services'], function(){

    });
});

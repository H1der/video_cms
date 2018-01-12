<?php

Route::group(['prefix'=>'admin','namespace'=>'Admin'],function (){
    //后台登陆
    Route::get('/login','EntryController@loginForm');
    //登陆处理
    Route::post('/login', 'EntryController@login');
    //后台登陆主页
    Route::get('/index', 'EntryController@index');
    //退出
    Route::get('logout', 'EntryController@logout');

});

<?php
/**
 * Created by PhpStorm.
 * User: Hider
 * Date: 2018/1/10
 * Time: 23:10
 */

Route::group(['prefix'=>'admin','namespace'=>'Admin'],function (){
    Route::get('/login','EntryController@loginForm');
});
<?php
// tpweb.test

use think\Route;

Route::group('',function (){
    Route::get('add','index/News/add');
    Route::get('edit','index/News/edit');
    Route::get('delete','index/News/delete');
    Route::get('query','index/News/query');
});


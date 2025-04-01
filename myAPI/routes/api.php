<?php

use Illuminate\Http\Request;

Route::get('hello/{name}',function($name){
    return 'teste . $name';
});

Route::post('hello-post', function(){
    return 'teste post';
});


Route::middleware('auth:api')->get('/user', function (Request $request){
    return $request->user();
});

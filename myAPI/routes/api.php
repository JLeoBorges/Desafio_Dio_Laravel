<?php

use Illuminate\Http\Request;

/*Route::get('hello/{name}',function($name){
    return 'teste ' . $name;
});

Route::get('hello-post/{name}', HelloWorldController@Hello{
   
});*/
Route::get('bands', BandCrontroller@getAll)


Route::middleware('auth:api')->get('/user', function (Request $request){
    return $request->user();
});

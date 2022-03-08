<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace'=>'Encriss\Contact\Http\Controllers'],function (){
    Route::get('contact','ContactController@index')->name('contact');
    Route::post('contact','ContactController@send');
});

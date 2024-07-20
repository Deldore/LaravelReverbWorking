<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/reaction', '\App\Http\Controllers\ReactionController@reaction')->name('reaction');

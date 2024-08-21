<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

Route::get('/', function () {
    return view('index');
});


Route::controller(IndexController::class)->group(function () {
    Route::get('about', 'about')->name('about');
});
Route::get('service', function(){
    return view('service');
});
Route::get('contact', function(){
    return view('contact');
});
    
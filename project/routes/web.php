<?php

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cache-set', function () {
    Cache::set('name', 'Muhammad Waris Zargar');
});

Route::get('/cache-get', function () {
    echo Cache::get('name');
});

Route::get('/email-sending', function () {
    Mail::to("muhammad.waris@pf.com.pk")
        ->send(new \App\Mail\WelcomeEmailHogMail());
});



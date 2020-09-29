<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;
use Symfony\Component\Routing\Route as RoutingRoute;

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
    //auth()->logout();
    echo auth()->user();
    return view('welcome');
});

Route::get('/logout', function () {
    auth()->logout();
});

Route::prefix('auth')->namespace('Auth')->middleware('guest')->group(function () {
    Route::get('login', 'LoginController@showLogin')->name('auth.login');
    Route::post('login', 'LoginController@Login');
    Route::get('register', 'RegisterController@showRegister')->name('auth.register');
    Route::post('register', 'RegisterController@register');

    Route::get('token', 'TokenController@showToken')->name('auth.phone.token');
    Route::post('token', 'TokenController@token');
});

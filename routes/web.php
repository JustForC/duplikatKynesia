<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [AuthController::class, 'login'])->name('home');

Route::group(['prefix' => 'auth', 'controller' => AuthController::class, 'as' => 'auth.'], function(){
    Route::get('/login', 'login')->name('login');
    Route::post('/doLogin', 'doLogin')->name('doLogin');
    Route::get('/register', 'register')->name('register');
    Route::post('/doRegister', 'doRegister')->name('doRegister');
    Route::get('/logout', 'logout')->name('logout');
});

Route::group(['prefix' => 'user', 'middleware' => ['auth', 'user'], 'controller' => UserController::class, 'as' => 'user.'], function()
{
    Route::get('/', 'homepage')->name('homepage');
    Route::get('/biodata', 'biodata')->name('biodata');
    Route::get('/family', 'family')->name('family');
    Route::get('/education', 'education')->name('education');
    Route::get('/downloadable', 'downloadable')->name('downloadable');
    Route::get('/test', 'onlineTest')->name('test');
    Route::get('/interview', 'onlineInterview')->name('interview');
    Route::get('/doneTest', 'doneOnlineTest')->name('doneTest');
    Route::get('/profile', 'profile')->name('profile');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin'], 'controller' => AdminController::class, 'as' => 'admin.'], function()
{
    Route::get('/', 'homepage')->name('homepage');
    Route::get('/stepOne', 'stepOne')->name('stepOne');
    Route::get('/stepTwo', 'stepTwo')->name('stepTwo');
    Route::get('/rejected', 'rejected')->name('rejected');
    Route::get('/detail/{id}', 'detail')->name('detail');
    Route::get('/profile', 'profile')->name('profile');
});

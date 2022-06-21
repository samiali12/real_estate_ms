<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);



Route::get('/admin', [AdminController::class, 'index']);
Route::post('/admin/auth', [AdminController::class, 'auth'])->name('admin.auth');

Route::group(['middleware'=>'admin_auth'], function() {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
});


/* user authenication */

Route::post('/user/signup', [UserController::class, 'userSignUp'])->name('user.signup');
Route::post('/user/signin', [UserController::class, 'userSignIn'])->name('user.signin');

Route::group(['middleware'=>'user_auth'], function() {
    Route::get('/user/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
});


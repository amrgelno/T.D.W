<?php
use App\Http\Controllers\user\Auth\RegisterController;
use App\Http\Controllers\user\Auth\LoginController;

Route::get('/user/Dashboard', [App\Http\Controllers\Admin\Auth\Dashboard::class, 'index'])->name('user.Dashboard');  // auth library  //middleware

Route::get('/home', [App\Http\Controllers\Auth\HomeController::class, 'index'])->name('Dashboard');  // auth library

//RegisterController
Route::post('/userreg',[App\Http\Controllers\Admin\Auth\RegisterController::class,'reg'])->name('user.register.post');   // request

Route::get('/user_reg',[App\Http\Controllers\Admin\Auth\RegisterController::class,'showRegistrationForm'])->name('user.register');  // Form

//LoginController
Route::POST('/user/Log',[App\Http\Controllers\Admin\Auth\LoginController::class,'customLogin'])->name('user.Login.post');   // request  // middleware

Route::get('/',[App\Http\Controllers\Admin\Auth\LoginController::class,'showLoginForm'])->name('user.Login');  // Form


Route::get('/user/Log_in',[App\Http\Controllers\Admin\Auth\LoginController::class,'showLoginForm'])->name('user.Login');  // Form

Route::get('/user/LogOut',[App\Http\Controllers\Admin\Auth\LoginController::class,'logout'])->name('user.LogOut');


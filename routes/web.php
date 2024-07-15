<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\LocaleController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;


Route::post('/locale', LocaleController::class)->name('locale.change');

Route::get('/', function () {
    return redirect()->route('home');
    // return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('languages', LanguageController::class);
    Route::resource('products', ProductController::class);
});
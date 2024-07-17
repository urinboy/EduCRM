<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\OrganizationController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;


Route::post('/locale', LocaleController::class)->name('locale.change');

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('languages', LanguageController::class);
    Route::resource('products', ProductController::class);
    Route::resource('cities', CityController::class);
    Route::get('states', [CityController::class, 'getStates'])->name('states.get');
    Route::resource('organizations', OrganizationController::class);   
    Route::get('/profile', [AccountController::class, 'index'])->name('profile');
});
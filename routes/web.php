<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;



Route::prefix('/')->group(function () {
    Route::post('/locale', LocaleController::class)->name('locale.change');
    Route::get('/', [PageController::class, 'index']);
    Route::get('/privacy-policy', [PageController::class, 'privacyPolicy'])->name('privacyPolicy');
    Route::get('/terms-of-service', [PageController::class, 'termsOfServices'])->name('termsOfServices');

    Route::prefix('/contact')->group(function () {
        Route::get('/', [ContactController::class, 'create'])->name('contacts.create');
        Route::post('/', [ContactController::class, 'store'])->name('contacts.store');
    });
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::prefix('/contact')->group(function () {
        Route::get('/index', [ContactController::class, 'index'])->name('contacts.index');
        Route::get('/view/{contact}', [ContactController::class, 'show'])->name('contacts.show');
    });
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('languages', LanguageController::class);
    Route::resource('products', ProductController::class);
    Route::resource('cities', CityController::class);
    Route::get('states', [CityController::class, 'getStates'])->name('states.get');
    Route::resource('organizations', OrganizationController::class);
    Route::resource('currencies', CurrencyController::class);
    Route::resource('addresses', AddressController::class);
    Route::resource('accounts', AccountController::class);

    Route::get('/profile', [AccountController::class, 'profile'])->name('profile');
    Route::put('/profile', [AccountController::class, 'profileUpdate'])->name('profile.update');
    Route::get('/get-states', [AccountController::class, 'getStates'])->name('getStates');
    Route::get('/get-cities', [AccountController::class, 'getCities'])->name('getCities');
    Route::put('accounts/{account}/address', [AccountController::class, 'addressUpdate'])->name('profile.address.update');
    Route::put('/profile/password', [AccountController::class, 'passwordUpdate'])->name('profile.password.update');
});
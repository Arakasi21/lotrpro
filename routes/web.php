<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainController::class, 'indexa']);

Route::get('/add-to-cart/{id}', [MainController::class, 'getAddToCart'])->name('product.addToCart');

Route::get('/shopping-cart', [MainController::class, 'getCart'])->name('product.shoppingCart');


Route::get('/shop',[MainController::class,'getIndex'])->name('shop.index');

Route::get('/kingdoms', [MainController::class, 'kingdoms']);


Route::get('/checkout', [MainController::class, 'getCheckout'])->name('checkout');

Route::post('/checkout', [MainController::class, 'postCheckout']);

Route::group([
    'prefix' => 'user',
],function(){
    Route::middleware('guest')->group(function () {
        Route::get('/signup', [UserController::class, 'getSignup'])->name('user.signup')->middleware('guest');

        Route::post('/signup', [UserController::class, 'postSignup'])->middleware('guest');

        Route::get('/signin', [UserController::class, 'getSignin'])->name('user.signin')->middleware('guest');

        Route::post('/signin', [UserController::class, 'postSignin'])->middleware('guest');

        Route::get('/author', [MainController::class, 'author']);
    });

    Route::middleware('auth')->group(function () {

        Route::get('/profile', [UserController::class, 'getProfile'])->name('user.profile')->middleware('auth');

        Route::get('/logout', [UserController::class, 'getLogout'])->name('user.logout')->middleware('auth');
    });

});

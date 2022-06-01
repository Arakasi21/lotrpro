<?php
use App\Http\Controllers\MainController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'kingdoms']);

Route::get('/add-to-cart/{id}', [MainController::class, 'getAddToCart'])->name('product.addToCart');

Route::get('/shopping-cart', [MainController::class, 'getCart'])->name('product.shoppingCart');

Route::get('/reduce/{id}', [MainController::class, 'getReduceByOne'])->name('product.reduceByOne');

Route::get('/remove/{id}', [MainController::class, 'getRemoveItem'])->name('product.remove');

Route::get('/shop',[MainController::class,'getIndex'])->name('shop.index');

Route::get('/kingdoms', [MainController::class, 'kingdoms']);

Route::get('/post-view/{id}',[MainController::class, 'view'])->name('post.view')->middleware('auth');;

Route::post('/review-store',[MainController::class, 'reviewstore'])->name('review.store')->middleware('auth');;

Route::resource('products', BookController::class);

Route::delete('/userdestroy/{id}', [UserController::class, 'userdestroy'])->name('userdestroy');

Route::delete('/reviewdestroy/{id}', [MainController::class, 'reviewdestroy'])->name('reviewdestroy');


Route::delete('/ordertroy/{id}', [MainController::class, 'orderdestroy'])->name('orderdestroy');

Route::get('/reviewview', [MainController::class, 'reviewview'])->name('review-view');


Route::middleware('admin')->group(function (){
    Route::get('/adminview', [MainController::class, 'adminView'])->name('admin-view');

    Route::get('/orderview', [MainController::class, 'orderView'])->name('order-view');


    Route::get('/productview', [MainController::class, 'productview'])->name('product-view');

    Route::get('/addnewproduct', [MainController::class, 'addnewproduct'])->name('addproduct');

    Route::post('/insert-product', [MainController::class, 'insert']);
});

Route::group([
    'prefix' => 'user',
],function(){
    Route::middleware('guest')->group(function () {
        Route::get('/signup', [UserController::class, 'getSignup'])->name('user.signup')->middleware('guest');

        Route::post('/signup', [UserController::class, 'postSignup'])->middleware('guest');

        Route::get('/signin', [UserController::class, 'getSignin'])->name('user.signin')->middleware('guest');

        Route::post('/signin', [UserController::class, 'postSignin'])->middleware('guest');

    });

    Route::middleware('auth')->group(function () {

        Route::get('/checkout', [MainController::class, 'getCheckout'])->name('checkout');

        Route::post('/checkout', [MainController::class, 'postCheckout']);

        Route::get('/profile', [UserController::class, 'getProfile'])->name('user.profile')->middleware('auth');

        Route::get('/logout', [UserController::class, 'getLogout'])->name('user.logout')->middleware('auth');

        Route::get('/useredit',  [UserController::class, 'useredit'])->name('user-edit');

        Route::patch('/user-update',  [UserController::class, 'userupdate']);

    });
});

<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


//Route::get('/','MainController@index');


Route::get('/', [MainController::class, 'index']);

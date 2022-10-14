<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/account', function () {
    return view('account');
});

// Prefix
Route::prefix('users')->group(function(){

    Route::get('/', [UserController::class,'index'])->name('users.index');

    Route::get('/{id}',[UserController::class, 'show'] )->name('users.show');
});




Route::fallback(function(){
    dd("apner request puron kora somvob na");
});

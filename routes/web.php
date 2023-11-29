<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/author', function() {
    return view ("author"); })->name('author');

Route::get('ordersNew', [OrderController::class, 'orderNew']);
Route::get('ordersDeny', [OrderController::class, 'orderDeny']);
Route::get('ordersAccept', [OrderController::class, 'orderAccept']);
Route::get('Authors', [OrderController::class, 'Authors']);

Route::get('/genres', function () {
    return view('genres');
});

Route::get('/like', function () {
    return view('like');
});
Route::get('/personal_area', function () {
    return view('personal_area');
});
Route::get('/playlist', function () {
    return view('playlist');
});

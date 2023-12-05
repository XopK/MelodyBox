<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
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
Route::get('/author', function () {
    return view('author');
})->name('author');

Route::get('admin', [AdminController::class, "index"]);

Route::get('admin/OrdersNew', function () {
    return view('admin.ordersNew');
});
Route::get('admin/OrdersAccept', function () {
    return view('admin.OrdersAccept');
});
Route::get('admin/OrdersDeny', function () {
    return view('admin.ordersDeny');
});

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

Route::post('/registration', [UserController::class, "registration"]);

Route::post('/login', [UserController::class, "login"]);

Route::get('/logout', [UserController::class, 'logout']);

Route::post('/application', [UserController::class, "application_artist"]);

Route::get('/album_create', function () {
    return view('album_create');
});
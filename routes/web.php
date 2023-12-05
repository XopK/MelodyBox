<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
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

Route::get('/', [IndexController::class, 'index']);

Route::get('/author', function () {
    return view('author');
});

Route::get('admin', [AdminController::class, "index"]);

Route::get('admin/OrdersNew', [AdminController::class, 'OrderNew']);

Route::get('admin/OrdersAccept', [AdminController::class, 'OrderAccept']);

Route::get('admin/OrdersDeny', [AdminController::class, 'OrderDeny']);

Route::get('/admin/OrdersNew/{id}/accept', [AdminController::class, 'AcceptApp']);

Route::get('/admin/OrdersNew/{id}/denay', [AdminController::class, 'DenayApp']);

Route::get('/admin/{id}/delete', [AdminController::class, 'Delete']);

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
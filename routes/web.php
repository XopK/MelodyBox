<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TrackController;
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

Route::get('/sitemap', [IndexController::class, 'sitemap']);

Route::get('/author/{author}', [TrackController::class, 'AuthorShow']);

Route::get('admin', [AdminController::class, "index"]);

Route::get('admin/OrdersNew', [AdminController::class, 'OrderNew']);

Route::get('admin/OrdersAccept', [AdminController::class, 'OrderAccept']);

Route::get('admin/OrdersDeny', [AdminController::class, 'OrderDeny']);

Route::get('/admin/OrdersNew/{id}/accept', [AdminController::class, 'AcceptApp']);

Route::get('/admin/OrdersNew/{id}/denay', [AdminController::class, 'DenayApp']);

Route::post('/album_create/create', [TrackController::class, 'addTracks']);

Route::get('/admin/{id}/delete', [AdminController::class, 'Delete']);

Route::get('/playlist/{id_album}', [TrackController::class, 'showTrack']);

Route::get('/genres/{genre}', [TrackController::class, 'genresShow']);

Route::get('/like',[TrackController::class, 'LikeTrack']);

Route::get('/like/{like}',[TrackController::class, 'addLike']);

Route::get('/personal_area', function () {return view('personal_area');});

Route::post('/updateUser', [UserController::class, 'updateUser']);

Route::post('/registration', [UserController::class, "registration"]);

Route::post('/login', [UserController::class, "login"]);

Route::get('/logout', [UserController::class, 'logout']);

Route::post('/application', [UserController::class, "application_artist"]);

Route::get('/album_create', function () {
    return view('album_create');
});
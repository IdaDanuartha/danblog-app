<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FrontendController as AdminFrontendController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontendController;
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

Route::controller(FrontendController::class)->group(function() {
    Route::redirect('/', '/home');

    Route::get('/home', 'homeView')->name('home');
    Route::get('/blogs', 'blogsView');
    Route::get('/blog/{category}/{slug}', 'blogDetail');
});

Route::controller(AdminFrontendController::class)->group(function() {
    Route::middleware(['auth', 'isAdmin'])->group(function() {
        Route::redirect('/admin', '/admin/analytics');

        Route::get('/admin/analytics', 'analyticsView');
    });
});

Route::controller(AuthController::class)->group(function() {
    Route::post('/signup', 'store');
    Route::post('/login', 'auth');
    Route::get('/logout', 'logout');
});

Route::resource('/admin/posts', PostController::class);

Route::resource('/admin/categories', CategoryController::class);


Route::fallback(function () {
    return view('404-page');
});



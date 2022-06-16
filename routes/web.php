<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FrontendController as AdminFrontendController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\CommentController;
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
    Route::get('/blog/{category_slug}/{post_slug}', 'blogDetail');
});

Route::controller(AuthController::class)->group(function() {
    Route::post('/signup', 'store');
    Route::post('/login', 'auth');
    Route::get('/logout', 'logout');
});

Route::middleware(['auth', 'isAdmin'])->group(function() {
    Route::redirect('/admin', '/admin/analytics');

    Route::controller(AdminFrontendController::class)->group(function() {
        Route::get('/admin/analytics', 'analyticsView');
        Route::get('/admin/profile', 'profileView');
        Route::get('/admin/settings', 'settingsView');
    });

    Route::resource('/admin/posts', PostController::class);
    Route::resource('/admin/categories', CategoryController::class);
    
    Route::put('/admin/settings/{id}', [UserController::class, 'updateUser']);
});

Route::controller(CommentController::class)->group(function() {
    Route::middleware('auth')->group(function() {
        Route::get('/comments/detail/{id}', 'detailComment');
        Route::post('/comments/create', 'addComment');
        Route::put('/comments/update/{id}', 'updateComment');
        Route::delete('/comments/delete/{id}', 'deleteComment');
    });
});

Route::fallback(function () {
    return view('404-page');
});



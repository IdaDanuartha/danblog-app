<?php

use App\Http\Controllers\Admin\FrontendController as AdminFrontendController;
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

    Route::get('/home', 'homeView');
    Route::get('/blogs', 'blogsView');
    Route::get('/blog/{category}/{slug}', 'blogDetail');
});

Route::controller(AdminFrontendController::class)->group(function() {
    Route::redirect('/admin', '/admin/analytics');

    Route::get('/admin/analytics', 'analyticsView');
    Route::get('/admin/posts', 'postsView');
    Route::get('/admin/post/{slug}', 'postPreview');

    Route::get('/admin/categories', 'categoriesView');
});



Route::fallback(function () {
    return view('404-page');
});



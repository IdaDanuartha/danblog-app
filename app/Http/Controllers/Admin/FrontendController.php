<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function analyticsView()
    {
        return view('admin.analytics', [
            'content_title' => 'Analytics'
        ]);
    }

    public function postsView()
    {
        return view('admin.posts', [
            'content_title' => 'Posts'
        ]);
    }

    public function postPreview()
    {
        return view('admin.post', [
            'content_title' => 'Preview Post'
        ]);
    }

    public function categoriesView()
    {
        return view('admin.categories', [
            'content_title' => 'Categories'
        ]);
    }
}

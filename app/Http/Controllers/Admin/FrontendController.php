<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;

class FrontendController extends Controller
{
    public function analyticsView()
    {
        return view('admin.analytics', [
            'content_title' => 'Analytics',
            'posts_count' => Post::all()->count(),
            'categories_count' => Category::all()->count(),
            'users_count' => User::where('is_admin', 0)->count(),
            'comments_count' => Comment::all()->count()
        ]);
    }

    public function profileView()
    {
        return view('admin.profile', [
            'content_title' => 'Profile',
            'user' => auth()->user(),
        ]);
    }

    public function settingsView()
    {
        return view('admin.settings', [
            'content_title' => 'Account Settings',
            'user' => auth()->user(),
        ]);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function analyticsView()
    {
        return view('admin.analytics', [
            'content_title' => 'Analytics'
        ]);
    }
}

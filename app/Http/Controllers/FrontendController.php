<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function homeView()
    {
        return view('home');
    }

    public function blogsView()
    {
        return view('blogs');
    }

    public function blogDetail()
    {
        return view('blog');
    }
}

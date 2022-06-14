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

    public function profileView()
    {
        return view('admin.profile', [
            'content_title' => 'Profile',
            'user' => auth()->user(),
        ]);
    }
}

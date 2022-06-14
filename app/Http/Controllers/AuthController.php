<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class AuthController extends Controller
{
    public function store(AuthUserRequest $request)
    {
        $user = $request->validated();
        $user['password'] = bcrypt($user['password']);

        User::create($user);

        if($user) {
            $request->session()->regenerate();
            return back()->with('success', 'Account Created Successfully');
        }


        return back()->with('failed', 'Registered Failed!');
    }

    public function auth(StoreUserRequest $request)
    {
        $credentials = $request->validated();

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if($request->has('remember')) { 
                Cookie::queue('useremail', $request->email, 1440);
                Cookie::queue('userpass', $request->password, 1440);
            }

            if(Auth::user()->is_admin == 1) {
                return redirect('/admin')->with('status', 'Welcome Back, Admin');
            } else {
                return redirect('/');
            }
        }

        return back()->with('failed', 'Login Failed! Check your email or password again');
    }

    public function logout()
    {
        auth()->logout();
        
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/');
    }
}

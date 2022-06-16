<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function updateUser(UpdateUserRequest $request, $id)
    {        
        $user = User::find($id);

        if ($request->hasFile('image')) {
            $path = 'uploads/users/' . $user->image;
            if (File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $ext;
            $file->move('uploads/users/', $fileName);
            $user->image = $fileName;
        }

        $user->username = $request->username;
        $user->email = $request->email;
        
        $user->save();

        return back()->with('success', 'Profile Updated Successfully');
    }
}

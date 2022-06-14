<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use App\Http\Requests\CommentRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function addComment(CommentRequest $request)
    {
        $post_id = $request->post_id;
        $user_comment = $request->user_comment;

        $check_post = Post::where('id', $post_id)->first();

        if ($check_post) {
            Comment::create($request->validated());                
            return back();

        } else {
            return back()->with('failed', "The link you followed was broken");
        }
    }

    public function deleteComment($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        return back();
    }
}

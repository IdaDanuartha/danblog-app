<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function homeView()
    {
        return view('home', [            
            'latest_articles' => Post::where('status', 1)->latest()->with(['category', 'author'])->take(6)->get()
        ]);
    }

    public function blogsView()
    {
        return view('blogs', [
            'blogs' => Post::where('status', 1)->filter(request(['query', 'category']))->latest()->with(['category', 'author'])->get()
        ]);
    }

    public function blogDetail($category_slug, $post_slug)
    {
        $check_cate_slug = Category::where('slug', $category_slug);
        $check_post_slug = Post::where('slug', $post_slug);

        if($check_cate_slug->exists())
        {
            if($check_post_slug->exists())
            {
                $category = $check_cate_slug->first();
                $post = $check_post_slug->with(['category', 'author'])->first();

                $related_posts = Post::relatedPosts($category);
                $recommended = Post::where('recommended', 1)->where('status', 1)->latest()->get();

                $linkURL = "$category->slug/$post->slug";
                $social_share = Post::socialShare($linkURL, $post->title);

                $user_comments = Comment::latest()->where('post_id', $post->id)->get();
                $user_comment = Comment::where('user_id', Auth::id())->where('post_id', $post->id)->first();
                
                return view('blog', compact('post', 'related_posts', 'recommended', 'social_share', 'user_comments', 'user_comment'));
            }
        }
    }
}

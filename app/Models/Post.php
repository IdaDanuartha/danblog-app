<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use Share;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['query'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%');
        });

        $query->when(
            $filters['category'] ?? false,
            fn ($query, $category) =>
            $query->whereHas(
                'category',
                fn ($query) =>
                $query->where('slug', $category)
            )
        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    static public function relatedPosts($category)
    {
        return DB::table('posts')
        ->select('posts.title', 'posts.slug', 'posts.image', 'posts.body', 'posts.created_at', 'categories.slug AS category_slug')
        ->join('categories', 'posts.category_id', '=', 'categories.id')
        ->where('categories.id', $category->id)
        ->where('posts.status', 1)
        ->take(4)
        ->get();
    }

    static public function socialShare($linkURL, $title)
    {
        return Share::page("http://127.0.0.1:8000/blog/$linkURL", $title)
        ->facebook()
        ->twitter()
        ->linkedin()
        ->whatsapp()
        ->telegram()
        ->getRawLinks();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;

// Tahap 4 - 06/05/2022

class PostController extends Controller
{
    public function index()
    {
        $title = '';
        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title += 'Posts By Author : ' . $author->name;
        }
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title += ' | Posts in : ' . $category->name;
        }
        return view('front-pages.posts', [
            'title' => $title,
            // 'posts' => Post::all(),
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(6),
        ]);
    }

    public function detail(Post $post)
    {
        // Route Model Binding(Mengquery otomatis)
        // $post harus sama dengan yang dikirim di route yaitu {post}
        // Route::get('/posts/{post}', [PostController::class, 'detail'])->name('post.detail');
        return view('front-pages.post', [
            'title' => 'Post Detail',
            'post' => $post,
            'posts' => Post::latest()->paginate(4),
            'categories' => Category::all()
        ]);
    }

}

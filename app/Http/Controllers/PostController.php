<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        return view('posts.index',[
            'posts' => Post::latest()->paginate(10),
        ]);

    }

    public function show(Post $post)
    {

        return view('posts.show', [
            'post' => $post,
        ]);

    }
}

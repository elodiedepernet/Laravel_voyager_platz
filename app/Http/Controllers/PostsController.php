<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;


class PostsController extends Controller
{
    public function index() {
        $posts = Post::orderBy('created_at', 'desc') ->get();
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post) {
        $posts = Post::orderBy('created_at', 'desc')->get();
        $categories = Category::orderBy('created_at', 'desc')->get();
        $test = $post->category->posts->random(4);
        return view('posts.show', compact('post', 'categories', 'test'));
    }

    public function more(Request $request) {
        $posts = Post::orderBy('created_at', 'desc')
                     ->take(10)
                     ->offset($request->offset)
                     ->get();
        return view('posts._list', compact('posts'));
    }

}
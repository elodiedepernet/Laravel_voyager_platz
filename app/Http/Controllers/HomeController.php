<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;

class HomeController extends Controller
{
    public function index(){
        $posts = Post::get();
        $categories = Category::orderBy('created_at', 'desc')->get();

        return view('home', compact('posts', 'categories'));
    }
}

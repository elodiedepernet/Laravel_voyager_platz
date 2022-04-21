<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Post;

class PagesController extends Controller
{
    public function show (Page $page) {
        $posts = Post::get();
        $categories = Category::orderBy('created_at', 'desc')->get();
        return view('pages.show', compact('page', 'posts', 'categories'));
    }
}

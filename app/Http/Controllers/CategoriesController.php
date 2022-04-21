<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use TCG\Voyager\Models\Post;


class CategoriesController extends Controller
{
    public function show(Category $category) {
        $categories = Category::orderBy('created_at', 'desc')->get();
        $post = Post::orderBy('created_at', 'desc')->get();

        return view('categories.show', compact('category', 'categories', 'post'));
    }
    
}

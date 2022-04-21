<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Liaison 1-N: la catégories a des posts
    public function posts () {
        return $this->hasmany(\App\Models\Post::class, 'category_id');
    }
}

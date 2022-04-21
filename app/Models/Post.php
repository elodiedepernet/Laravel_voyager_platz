<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // Liaison 1-N: le post à une catégorie
    public function category () {
        return $this->belongsTo(\App\Models\Category::class, 'category_id');
    }
    
    // Liaison : Les Commentaires du Post
    public function comments() {
        return $this->hasMany(\App\Models\Comment::class);
    }

    // Liaison N-M: les tags du post
    //public function tags () {
    //    return $this->belongsToMany(\App\Models\Tag::class, 'posts_has_tags');
    //}

}

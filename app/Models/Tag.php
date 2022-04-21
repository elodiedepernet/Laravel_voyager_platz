<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    //PAS UTILE DANS CE TEMPLATE
    //public function posts() {
    //    return $this->belongsToMany(Post::class, 'posts_has_tags');
    //}
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article_Category extends Model
{
    
    use HasFactory;

    public function article() {
        return $this->belongsTo(Article::class, 'article_id');
    }

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }

    
}

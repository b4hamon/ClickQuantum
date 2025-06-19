<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $casts = [
        'published_at' => 'date',
    ];
    
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }



    public function articles_categories() {
        return $this->hasMany(Article_Category::class, 'article_id');
    }

    public function comments() {
        return $this->hasMany(Comment::class, 'article_id');
    }

    protected $fillable = ['title', 'content'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function articles_categories() {
        return $this->hasMany(Article_Category::class, 'category_id');
    }

    protected $fillable = ['category_name'];
    
}

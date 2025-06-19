<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article_Category;

class Articles_CategoriesSeeder extends Seeder
{
    public function run(): void
    {
        $articles_categories = [
            ['article_id' => 1, 'category_id' => 1],
            ['article_id' => 2, 'category_id' => 2],
            ['article_id' => 3, 'category_id' => 3],
            ['article_id' => 4, 'category_id' => 4],
            ['article_id' => 5, 'category_id' => 5],
            ['article_id' => 6, 'category_id' => 6],
            ['article_id' => 7, 'category_id' => 7],
            ['article_id' => 8, 'category_id' => 8],
            ['article_id' => 9, 'category_id' => 9],
            ['article_id' => 10, 'category_id' => 10],
            ['article_id' => 11, 'category_id' => 11],
            ['article_id' => 12, 'category_id' => 12],
            ['article_id' => 13, 'category_id' => 13],
            ['article_id' => 14, 'category_id' => 14],
            ['article_id' => 15, 'category_id' => 15],
            ['article_id' => 16, 'category_id' => 16],
            ['article_id' => 17, 'category_id' => 17],
            ['article_id' => 18, 'category_id' => 18],
            ['article_id' => 19, 'category_id' => 19],
            ['article_id' => 20, 'category_id' => 20],
            ['article_id' => 21, 'category_id' => 21],
            ['article_id' => 22, 'category_id' => 22],
            ['article_id' => 23, 'category_id' => 23],
            ['article_id' => 24, 'category_id' => 24],
            ['article_id' => 25, 'category_id' => 25],
            ['article_id' => 26, 'category_id' => 26],
            ['article_id' => 27, 'category_id' => 27],
            ['article_id' => 28, 'category_id' => 28],
            ['article_id' => 29, 'category_id' => 29],
            ['article_id' => 30, 'category_id' => 30],
        ];

        foreach ($articles_categories as $articles_category) {
            Article_Category::create($articles_category);
        }
    }
}
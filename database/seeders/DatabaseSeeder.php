<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RolesSeeder::class,
            UsersSeeder::class,
            ArticlesSeeder::class,
            CategoriesSeeder::class,
            Articles_CategoriesSeeder::class,
            CommentsSeeder::class,
            CoursesSeeder::class,
            ActivitiesSeeder::class,
            RegistrationsSeeder::class,
        ]);
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Article;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,
            UserSeeder::class,
            ArticleCategorySeeder::class,
            ArticleSeeder::class,
            ProductCategorySeeder::class,
            ProductSeeder::class,
            WebConfigSeeder::class,
        ]);
    }
}

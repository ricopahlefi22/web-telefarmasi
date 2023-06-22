<?php

namespace Database\Seeders;

use App\Models\ArticleCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ArticleCategory::factory()->create([
            'category' => 'Dehidrasi',
        ]);

        ArticleCategory::factory()->create([
            'category' => 'Kehamilan',
        ]);

        ArticleCategory::factory()->create([
            'category' => 'Gaya Hidup',
        ]);

        ArticleCategory::factory()->create([
            'category' => 'Pemakaian Obat',
        ]);
    }
}

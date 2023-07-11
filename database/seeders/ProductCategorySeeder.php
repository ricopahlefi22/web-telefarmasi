<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductCategory::factory()->create([
            'category' => 'Masalah Pencernaan',
        ]);

        ProductCategory::factory()->create([
            'category' => 'Multivitamin',
        ]);

        ProductCategory::factory()->create([
            'category' => 'Kecantikan dan Perawatan Diri',
        ]);

        ProductCategory::factory()->create([
            'category' => 'Diabetes',
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\WebConfig;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WebConfig::factory()->create([
            'name' => 'Apotek Desta Farma',
            'logo' => 'img/favicon.png',
            'address' => 'Jl. Jenderal Sudirman No. 67',
            'email' => 'apotekdestafarma@gmail.com',
            'phone_number' => '6285171004535',
            'facebook' => 'https://www.facebook.com/apotekdestafarma/',
            'instagram' => 'https://www.instagram.com/apotekdestafarma/',
            'latitude' => -1.8403967,
            'longitude' => 109.9781016,
        ]);
    }
}

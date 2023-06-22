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
            'about' => 'Apotek Desta Farma merupakan apotek kesehatan yang memberikan solusi kesehatan lengkap dan terpercaya untuk memenuhi kebutuhan kesehatan kamu dan keluarga.',
            'favicon' => 'img/favicon.png',
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

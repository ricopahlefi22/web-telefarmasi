<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::factory()->create([
            'name' => 'Rico Pahlefi',
            'email' => 'ricopahlefi22@gmail.com',
            'password' => bcrypt('MudahDitebak22!'),
        ]);

        Admin::factory()->create([
            'name' => 'Vika Khairunisa',
            'email' => 'vika.khairunisa08@gmail.com',
            'password' => bcrypt('12341234'),
        ]);
    }
}

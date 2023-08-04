<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Rico Pahlefi',
            'email' => 'ricopahlefi22@gmail.com',
            'phone_number' => '089528597031',
            'password' => bcrypt('MudahDitebak123!'),
        ]);

        User::factory()->create([
            'name' => 'Vika Khairunisa',
            'email' => 'vika.khairunisa08@gmail.com',
            'phone_number' => '089522071515',
            'password' => bcrypt('12341234'),
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::factory(20)->create();
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => '12345678',
            'role_id' => 1,
        ]);
    }
}

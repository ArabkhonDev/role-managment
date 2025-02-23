<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Manager',
            'email' => 'manager@gmail.com',
            'password' => Hash::make("secret123")
        ]);
        for ($i = 0; $i < 20; $i++) {
            User::create([
                'name' => 'Client',
                'email' => fake()->firstName() .'@gmail.com',
                'password' => Hash::make("secret123")
            ]);
        }
    }
}

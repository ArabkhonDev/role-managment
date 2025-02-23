<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        // foreach($users as $user){
        for ($i = 1; $i <= 10; $i++) {
            Post::create([
                // 'user_id'=>$user->id,
                'title' => fake()->word(2, true),
                // 'short_body' => fake()->word(10, true),/
                'body' => fake()->word(100, true)
            ]);
            // }
        }
    }
}

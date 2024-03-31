<?php

namespace Database\Seeders;

use App\Models\Message;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\PostFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'voodoomodoo@gmail.com',
            'password' => Hash::make("12345678"),
            'address' => fake()->address
        ]);
        User::factory(29)->create();
        Post::factory(50)->create();
        Message::factory(50)->create();
    }
}

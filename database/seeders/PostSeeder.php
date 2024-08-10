<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $numberOfPosts = 20;

        for ($i = 0; $i < $numberOfPosts; $i++) {

            Post::factory()->create();
        }
    }
}

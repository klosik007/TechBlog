<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title' => 'How to learn Laravel',
            'content' => 'Here\'s the content of the blog article',
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'How to learn Laravel2',
            'content' => 'Here\'s the content of the blog article',
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'How to learn Laravel3',
            'content' => 'Here\'s the content of the blog article',
            'user_id' => 1
        ]);
    }
}

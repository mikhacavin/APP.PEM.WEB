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
        $posts = [
            [
                'image' => '1.jpeg',
                'title' => 'Judul Post 1',
                'content' => 'Isi post 1',
            ],
            [
                'image' => '1.jpeg',
                'title' => 'Judul Post 2',
                'content' => 'Isi post 2',
            ],
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}

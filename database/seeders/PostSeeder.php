<?php

namespace Database\Seeders;

use App\Models\post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = collect([
            [
                'user_id' => 1,
                'title' => 'Shelf Books',
                'image' => 'IMG-20240416-WA0020.jpg',
                'message' => 'Over 1000+ books available from various sources.',  
            ],
            [
                'user_id' => 1,
                'title' => 'Library Technician',
                'image' => 'IMG-20240416-WA0021.jpg',
                'message' => 'Warm welcome to Library from our skilled librarians',
            ],[
                'user_id' => 1,
                'title' => 'Books',
                'image' => 'IMG-20240416-WA0011.jpg',
                'message' => 'All books you need found in the library, available for you',
            ]
    ]);

    $posts->each(function ($post){
        post::insert($post);
    });
    }
}

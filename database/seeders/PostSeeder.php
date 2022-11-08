<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i < 5;$i++) {
            Post::create([
                "title" => "Post Title" . $i,
                "body" => "Post Body" . $i,
                "author" => "Post Author" . $i,
                "active" => 0
            ]);
        }
        for($i=0;$i < 5;$i++) {
            Post::create([
                "title" => "Post Title" . $i,
                "body" => "Post Body" . $i,
                "author" => "Post Author" . $i,
                "active" => 1
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = Post::all();
        $users = User::all();
        foreach ($posts as $post) {

            $user = $users->random();
            Comment::factory()
                ->count(5)
                ->for($post)
                ->for($user)
                ->create();
        }
    }
}

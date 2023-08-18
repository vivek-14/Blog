<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $categories = Category::all();

        foreach ($categories as $category) {
            foreach ($users as $user) {
                Post::factory()
                    ->count(5)
                    ->for($user)
                    ->for($category)
                    ->create();
            }
        }

    }
}

<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'title' => fake()->sentence,
            'excerpt' => '<p>' . fake()->paragraphs(1, true) . '</p>',
            'slug' => fake()->slug,
            'body' => '<p>' . fake()->paragraphs(10, true) . '</p>',
            'is_draft' => fake()->boolean(false),
        ];
    }
}

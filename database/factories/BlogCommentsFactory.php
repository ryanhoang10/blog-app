<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BlogCommentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $id = Blog::select('id')->inRandomOrder()->first();
        return [
            'blog_id'   => $id,
            'comments'  => $this->faker->paragraph(),
            'user'      => $this->faker->name(),
        ];
    }
}

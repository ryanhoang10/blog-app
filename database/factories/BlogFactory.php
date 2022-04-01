<?php

namespace Database\Factories;

use App\Models\Blog;
use App\Models\BlogCategories;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'author' => $this->faker->name(),
            'user' => function() {
                return User::factory(1)->create()[0]->email;
            },
            'category' => function() {
                return BlogCategories::factory(1)->create()[0]->category;
            },
            'created_at' => now(),
            'body' => $this->faker->paragraph(mt_rand(15, 20)),
            'likes' => $this->faker->randomDigit(),
        ];
    }
}

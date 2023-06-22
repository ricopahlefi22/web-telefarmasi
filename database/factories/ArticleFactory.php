<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(mt_rand(5, 10), true),
            'slug' => $this->faker->slug(),
            'body' => $this->faker->paragraphs(mt_rand(5, 10), true),
            'category_id' => $this->faker->randomElement([1, 2, 3]),
            'published_at' => Carbon::now(),
        ];
    }
}

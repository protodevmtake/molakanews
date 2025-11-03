<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<News>
 */
final class NewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<News>
     */
    protected $model = News::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'content' => fake()->paragraphs(3, true),
            'author' => fake()->name(),
            'published_at' => fake()->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
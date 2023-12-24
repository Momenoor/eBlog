<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Category;
use App\Models\Media;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ArticleFactory extends Factory
{
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'body' => $this->faker->paragraph(rand(3, 50)),
            'author_id' => User::factory(),
            'category_id' => Category::inRandomOrder()->first(),
            'status' => rand(0, 1),
            'is_pinned' => false,
            'submitted_at' => now(),
            'approved_at' => now(),
            'declined_at' => null,
            'published_at' => now(),
            'hero_image_id' => Media::factory(),
        ];
    }
}

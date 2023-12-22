<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Media;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Media>
 */
class MediaFactory extends Factory
{

    protected $model = Media::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'type' => $this->faker->word(),
            'path' => $this->faker->imageUrl(),
            'size' => $this->faker->randomNumber(),
            'article_id' => Article::factory(),
        ];
    }
}

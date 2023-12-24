<?php

namespace Database\Factories;

use App\Models\Media;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Media>
 */
class MediaFactory extends Factory
{

    protected array $types = ['image', 'video', 'audio'];
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
            'type' => $this->types[rand(0, 2)],
            'path' => $this->faker->imageUrl(rand(200, 400), rand(400, 600)),
            'size' => $this->faker->randomNumber(),
        ];
    }
}

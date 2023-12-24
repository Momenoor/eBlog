<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CommentFactory extends Factory
{
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'body' => $this->faker->paragraph(),
            'author_id' => User::inRandomOrder()->first(),
            'article_id' => Article::inRandomOrder()->first(),
        ];
    }

    public function setArticle($comment): CommentFactory
    {
        return $this->state(function (array $attributes) use ($comment) {
            return [
                'article_id' => $comment->article_id,
            ];
        });
    }
}

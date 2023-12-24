<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * ->for(User::factory(),'author')->has(Comment::factory()->count(rand(1, 20)))->has(Tag::factory()->count(3))
     */
    public function run(): void
    {
        User::create(
            [
                'name' => 'Momen Noor',
                'email' => 'momen.noor@gmail.com',
                'password' => Hash::make('123456'),
            ]
        );
        Category::factory(10)->create();
        Article::factory(50)->has(Comment::factory()->count(rand(1, 20)))->has(Tag::factory()->count(3))->create();

        $comments = Comment::all();
        foreach ($comments as $comment) {
            $comment->replies()->saveMany(Comment::factory()->setArticle($comment)->count(rand(1, 5))->make());
        }
    }
}

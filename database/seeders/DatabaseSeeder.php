<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Media;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * ->for(User::factory(),'author')->has(Comment::factory()->count(rand(1, 20)))->has(Tag::factory()->count(3))
     */
    public function run(): void
    {
        Article::factory(1)->create();
        Category::factory(10)->create();
        Media::factory(10)->create();



    }
}

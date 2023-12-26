<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Article;

class Media extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'type',
        'path',
        'size',
        'article_id',

    ];
    public function article()
    {
        return $this->hasOne(Article::class, 'hero_image_id');
    }
}

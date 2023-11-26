<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'body',
        'author_id',
        'status',
        'is_pinned',
        'submitted_at',
        'approved_at',
        'published_at',
        'declined_at',
        'hero_image_id'
    ];
}

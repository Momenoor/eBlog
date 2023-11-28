<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;
use App\Models\Category;
use App\Models\Media;

class Article extends Model
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
        'hero_image_id',
    ];

    protected $casts =  [
        'is_pinned' => 'boolean', // bool True or False
        'submitted_at' => 'datetime',
        'approved_at' => 'datetime',
        'published_at' => 'datetime',
        'declined_at' => 'datetime',
    ];

    //
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    //
    /*public function author(){
        return $this->belongsTo('App\Models\Author','author_id');
    }*/

    //
    public function tags()
    {
        return $this->hasMany(Tag::class);
    }

    //
    public function heroImage()
    {
        return $this->hasMany(Media::class);
    }
}

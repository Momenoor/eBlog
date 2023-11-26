<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comments;
use App\Models\Categories;

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
    public function category(){
        return $this->belongsTo(Categories::class);
    }

    //
    public function comments() {
        return $this->hasMany(Comments::class);
    }

    //
    /*public function author(){
        return $this->belongsTo('App\Models\Author','author_id');
    }*/

    //
    public function tags(){
        return $this->hasMany(Tags::class);
    }

}

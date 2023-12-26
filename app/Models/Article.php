<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;
use App\Models\Category;
use App\Models\Media;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'body',
        'author_id',
        'category_id',
        'status',
        'is_pinned',
        'submitted_at',
        'approved_at',
        'published_at',
        'declined_at',
        'hero_image_id',
    ];

    protected $casts = [
        'is_pinned' => 'boolean', // bool True or False
        'submitted_at' => 'datetime',
        'approved_at' => 'datetime',
        'published_at' => 'datetime',
        'declined_at' => 'datetime',
    ];

    protected $with = [
        'category',
        'author',
        'tags',
        'heroImage',
    ];

    public function resolveRouteBinding($value, $field = null): Article|Model|null
    {
        return $this->withCount('comments')->where($field ?? $this->getRouteKeyName(), $value)->first();
    }
    //
    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    //
    public function comments(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }

    public function allComments(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Comment::class);
    }
    //

    public function author(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    //
    public function tags(): \Illuminate\Database\Eloquent\Relations\belongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    //
    public function heroImage(): \Illuminate\Database\Eloquent\Relations\belongsTo
    {
        return $this->belongsTo(Media::class, 'hero_image_id');
    }

    public function excerpt(): string
    {
        return Str::limit($this->body, 350);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Articles;
class Categories extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'slug',
        'description',
        'created_by'
    ];

    //

    public function articles(){
        return $this->hasMany(Articles::class);
    }

    //
    public function createdBy() {
        return $this->belongsTo(User::class,'created_by');
    }
}

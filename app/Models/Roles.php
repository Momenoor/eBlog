<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Permissions;
use App\Models\User;
class Roles extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'slug',
        'description'
    ];

    //
    public function users() {
        return $this->belongsToMany(User::class);
    }

    //
    public function permissions() {
        return $this->hasMany(Permissions::class);
    }
}

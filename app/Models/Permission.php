<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role;
use App\Models\User;

class Permission extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'guard_name',
    ];

    //
    public function roles()
    {
        return $this->hasMany(Role::class);
    }


    //public function user()
    //{
    //    return $this->hasMany(User::class);
    //}
}

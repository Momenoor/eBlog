<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Roles;

class Permissions extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'description',
        'created_by',
        'status'
    ];

    //
    public function roles(){
        return $this->hasMany(Roles::class);

    }
}

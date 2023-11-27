<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Articles;
class Media extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'type',
        'path',
        'size',

    ];
    public function article(){
        return $this->belongsTo(Articles::class);
    }
}

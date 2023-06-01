<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Traits\Apitrait;

class Tag extends Model
{
    use HasFactory, Apitrait;

    // Relacion muchos a muchos
    public function posts(){
        $this->belongsToMany(Post::class);
    }
}

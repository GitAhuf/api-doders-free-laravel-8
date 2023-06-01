<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Traits\Apitrait;
class Category extends Model
{
    use HasFactory, Apitrait;

    protected $fillable = ['name', 'slug'];

    protected $allowIncluded = ['posts', 'posts.user'];
    protected $allowFilter = ['id', 'name', 'slug'];
    protected $allowSort = ['id', 'name', 'slug'];

    //Relacion uno a muchos
    public function posts(){
        return $this->hasMany(Post::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Traits\Apitrait;

class image extends Model
{
    use HasFactory, Apitrait;

    public function imageable(){
        // Habilitando las relaciones polimorficas
        return $this->morphTo();

    }
}

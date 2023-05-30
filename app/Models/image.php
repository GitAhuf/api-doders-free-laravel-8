<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    use HasFactory;

    public function imageable(){
        // Habilitando las relaciones polimorficas
        return $this->morphTo();

    }
}

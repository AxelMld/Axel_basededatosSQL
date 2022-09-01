<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    //relacion uno a muchos
    public function producto(){
        return $this->hasMany('App\Model\Producto');
    }
}

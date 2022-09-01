<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    //relacion uno a muchos inverso
    public function user(){
        return $this->belongsTo('App\Model\User');
    }

    public function categoria(){
        return $this->belongsTo('App\Model\Categoria');
    }
}

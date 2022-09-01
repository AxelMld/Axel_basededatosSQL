<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    use HasFactory;

     //muchos a muchos 
     public function roless(){
        return $this->belongsTo('App\Model\Role');
    }
}

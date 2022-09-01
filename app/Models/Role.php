<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    //muchos a muchos 
    public function users(){
        return $this->belongsTo('App\Model\User');
    }

    public function permisos(){
        return $this->belongsTo('App\Model\Permiso');
    }
}

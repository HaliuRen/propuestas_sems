<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dcontacto extends Model
{
    // Relacion 1:1 de contacto con usuario
    public function usuario(){
        return $this->belongsTo(User::class, 'user_id');
    }
}

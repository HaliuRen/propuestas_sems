<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $fillable = [
        'rfc',
        'nombre',
        'apaterno',
        'amaterno',
        'sexo',
        'imagen'
    ];
    // Relacion 1:1 de perfil con usuario
    public function usuario(){
        return $this->belongsTo(User::class, 'user_id');
    }
}

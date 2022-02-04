<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dcontacto extends Model
{

    //campos que se agregaran
    protected $fillable = [
        'email', 'telefono','telefono_contacto',  'estado_id', 'municipio' , 'colonia', 'calle', 'numero', 'cp', 'fb', 'twiteer'
    ];

   // Obtiene el estado via FK
    public function estado(){
        return $this->belongsTo(Estados::class);
    }

    // Relacion 1:1 de contacto con usuario
    public function usuario(){
        return $this->belongsTo(User::class, 'user_id');
    }
}

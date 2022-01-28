<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Evento que se ejecuta cuando un usuario es creado
    protected static function boot(){
        parent::boot();

        // Asignar perfil una vez se haya creado un usuario nuevo
        static::created(function ($user){
            $user->perfil()->create();
            $user->dcontacto()->create();
        });
    }

    // Relación  1:1 de usuario a perfil
    public function perfil(){
        return $this->hasOne(Perfil::class);
    }
    // Relación  1:1 de usuario a datos de contacto
    public function dcontacto(){
        return $this->hasOne(Dcontacto::class);
    }
    
    //adminLTE
    public function adminlte_image(){
        return 'https://picsum.photos/300/300';
    }

    public function adminlte_desc()
    {
        return 'Administrador';
    }

    public function adminlte_profile_url()
    {
        // return 'admin/perfiles/1';
        return route('perfiles.show',['perfil' => Auth::user()->id]);
    }
}

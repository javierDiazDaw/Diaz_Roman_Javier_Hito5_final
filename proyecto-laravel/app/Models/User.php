<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{

    
    use HasApiTokens, HasFactory, Notifiable;

    const UPDATED_AT = 'false';
    public $timestamps=false;
    protected $table = "users";
    protected $primaryKey = "IdUsuario";
    protected $fillable = ['IdUsuario', 'nombre', 'apellidos', 'email', 'dni', 'telefono', 'password', 'rol', 'validacion'];
   

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    static public function obtenerUsuarios(){

        return User::all();

    }

    static public function obtenerUnUsuario($idUsuario){
        return User::find($idUsuario);
    }

    static public function obtenerUsuarioCorreo($email){
        return DB::table('users')->select('idUsuario')->where('email',$email)->get();
    }

}

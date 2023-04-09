<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'rut',
        'name',
        'email',
        'password',
        'tipo_de_cuenta',
    ];

    public function getTipoDeCuenta($value)
    {
        switch ($value) {
            case 1:
                return 'Admin';
            case 2:
                return 'Analista';
            case 3:
                return 'Trabajador';
            default:
                return null;
        }
    }

    protected $primaryKey = 'rut';

    public $incrementing = false;

    protected $keyType = 'bigint';

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',

    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */

}

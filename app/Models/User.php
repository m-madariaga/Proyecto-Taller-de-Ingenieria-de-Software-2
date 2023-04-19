<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'run',
        'name',
        'email',
        'password',
        'tipo_cuenta',
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

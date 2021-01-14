<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable; //vai ser usado para autenticação

class Usuario extends Authenticatable
{
    //
    use Notifiable;

    //permite a criação em massa
    protected $fillable = [
        'nome', 'login', 'email','cargo', 'senha'
    ];

    protected $hidden = [
        'senha'
    ];

}

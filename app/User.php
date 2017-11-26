<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
//use Illuminate\Foundation\Auth\Authenticatable as AuthenticableTrait;
//use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends Model implements Authenticatable
{
    use Notifiable, AuthenticableTrait;

    protected $fillable = [
        'name', 'email', 'password', 'surname', 'patronymic',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];

}
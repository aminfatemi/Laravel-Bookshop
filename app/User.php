<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'username', 'email', 'password', 'password_confirmation'
    ];

    protected $hidden = [
        'password', 'password_confirmation','remember_token',
    ];

    public function orders() {
        return $this->hasMany('App\Order');
    }
}

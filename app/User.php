<?php

namespace App;

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable
{
    use HasRoles,Notifiable;
    protected $fillable = [
        'name', 'email', 'password',
    ];
    protected $guarded = ['confirm_password'];

    public function SetDate()
    {
        $this->timestamps();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\CanResetPassword;
//use Illuminate\Auth\Passwords\CanResetPassword;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable;


    protected $guard = 'admin';

    protected $fillable = [
        'name', 'WorkID', 'email', 'password', 'province', 'district',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
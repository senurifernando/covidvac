<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class SendAppointment extends Model
{
    use HasFactory, Notifiable;
    //protected $guard = 'admin';

    protected $fillable = [

        'date',
        'time',
        'location',
    ];

    protected $hidden = [
        'password',
        'remember_token',

    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Appointment extends Model
{
    use HasFactory, Notifiable;
    //protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'NIC',
        'province',
        'district',
        'injection_name',
        //'date',
        //'time',
        //'location',
        'dosenum',
        'phone',
        'email',


    ];

    protected $hidden = [
        'password',
        'remember_token',

    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'nama',
        'email',
        'rekammedis',
        'password',
        'role',
        'spesialis',
        'alumnus',
        'str',
        'tempat_praktik',
        'lama_praktik',
        'tarif',
        'maksimal_chat',
        'foto',
        'status_chat',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected  $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
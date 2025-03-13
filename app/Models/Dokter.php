<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Dokter extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = [
        'nama_dokter',
        'spesialis',
        'email',
        'password',
        'alumnus',
        'nomor_str',
        'tempat_praktik',
        'mulai_praktik',
        'tarif',
        'maksimal_chat',
        'foto',
    ];

    protected $hidden = [
        'password',
    ];
}

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
        'tempat_lahir',
        'tanggal_lahir',
        'nomor_telepon',
        'nama_ibu_kandung',
        'alamat',
        'desa',
        'kecamatan',
        'kota_kabupaten',
        'agama',
        'status_perkawinan',
        'pendidikan_terakhir',
        'nomor_ktp',
        'pekerjaan',
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

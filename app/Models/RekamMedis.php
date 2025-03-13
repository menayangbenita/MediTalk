<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekamMedis extends Model
{
    use HasFactory;

    protected $table = 'rekam_medis';

    protected $fillable = [
        'pasien_id',
        'dokter_id',
        'tanggal',
        'anamnesis',
        'tanda_vital',
        'diagnosis',
        'medikasi',
    ];

    public function dokter()
    {
        return $this->belongsTo(User::class, 'dokter_id');
    }

    public function pasien()
    {
        return $this->belongsTo(User::class, 'pasien_id');
    }
}

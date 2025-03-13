<?php

namespace App\Models;

    use HasFactory;
    use Illuminate\Database\Eloquent\Model;

class Konsultasi extends Model
{
    protected $table = 'konsultasi';

    protected $fillable = ['status', 'dokter_id', 'pasien_id', 'transaksi_id', 'start_time', 'end_time']; 

    public $timestamps = true; 

    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'dokter_id');
    }
}

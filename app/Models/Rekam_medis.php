<?php

namespace App\Models;

use App\Models\Pasien;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rekam_medis extends Model
{
    use HasFactory;

    protected $table = 'rekam_medis';

    protected $fillable = [
        'id_pasien',
        'tanggal_kunjungan',
        'dx',
        'tx',
        'keterangan',
    ];

    /**
     * Relasi ke model Pasien.
     */
    public function datapasien()
    {
        return $this->belongsTo(Pasien::class, 'id_pasien','id');
    }
}

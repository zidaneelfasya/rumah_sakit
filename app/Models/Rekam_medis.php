<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

}

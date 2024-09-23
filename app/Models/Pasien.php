<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    
    

    protected $fillable = [
        'nama',
        'tanggal_lahir',
        'NIK',
        'alamat',
    ];
    public function rekamMedis()
    {
        return $this->hasMany(RekamMedis::class, 'id_pasien', 'id');
    }
}

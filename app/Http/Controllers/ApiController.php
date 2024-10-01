<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\RekamMedis;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function lihatPasien()
    {
        $pasien= Pasien::all(); 
        return response()->json($pasien);
    }
    public function lihatPasienDetail()
    {
        $pasien = Pasien::with('rekamMedis')->get();
        return response()->json($pasien);
    }
    public function detailPasien($id)
    {
        $pasien = Pasien::with('rekamMedis')->findOrFail($id);
        return response()->json($pasien);
    }
    public function lihatRekam()
    {
        $rm = RekamMedis::all();
        return response()->json($rm);
    }
}

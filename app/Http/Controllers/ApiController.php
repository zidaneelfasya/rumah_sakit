<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function lihatPasien()
    {
        $pasien= Pasien::all(); 
        return response()->json($pasien);
    }
    public function detailPasien($id)
    {
        $pasien = Pasien::with('rekamMedis')->findOrFail($id);
        return response()->json($pasien);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function lihatPasien()
    {
        $pasien = Pasien::all(); 
        return view('lihatpasien', compact('pasien'));
    }
    public function lihatPasienAPI()
    {
        $pasien= Pasien::all(); 
        return response()->json($pasien);
    }
}

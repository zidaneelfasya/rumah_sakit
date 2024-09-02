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
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'NIK' => 'required|numeric|unique:pasiens,NIK', 
            'alamat' => 'required|string|max:255',
            'tlahir' => 'required|date',
        ]);
        Pasien::create([
            'nama' => $request->nama,
            'NIK' => $request->NIK,
            'alamat' => $request->alamat,
            'tanggal_lahir' => $request->tlahir,
        ]);
        return redirect('/admin/pasien')->with('success', 'Data pasien berhasil ditambahkan!');
    }

}

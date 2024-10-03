<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
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
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'NIK' => 'required|numeric|unique:pasiens,NIK', 
            'alamat' => 'required|string|max:255',
            'tlahir' => 'required|date',
        ]);
        $pasien = Pasien::create([
            'nama' => $request->nama,
            'NIK' => $request->NIK,
            'alamat' => $request->alamat,
            'tanggal_lahir' => $request->tlahir,
        ]);
        
        return response()->json($pasien);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'NIK' => 'required|numeric|unique:pasiens,NIK,' . $id, 
            'alamat' => 'required|string|max:255',
            'tlahir' => 'required|date',
        ]);
        $pasien = Pasien::findOrFail($id);
        $pasien->update([
            'nama' => $request->nama,
            'NIK' => $request->NIK,
            'alamat' => $request->alamat,
            'tanggal_lahir' => $request->tlahir,
        ]);
        return response()->json($pasien);
    }
    public function delete($id)
    {
        $pasien = Pasien::findOrFail($id);
        $pasien->delete();
        return response()->json('berhasil dihapus');
    }
}

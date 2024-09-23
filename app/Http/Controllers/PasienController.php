<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\RekamMedis;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function lihatPasien()
    {
        $pasien = Pasien::all(); 
        return view('pasien/lihatpasien', compact('pasien'));
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
    public function pasienParam($id)
    {
        $pasien = Pasien::findOrFail($id); 
        return view('pasien/formupdatepasien', compact('pasien'));
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
        return redirect('/admin/pasien')->with('success', 'Data pasien berhasil diperbarui!');
    }
    public function delete($id)
    {
        $pasien = Pasien::findOrFail($id);
        $pasien->delete();
        return redirect('/admin/pasien')->with('success', 'Data pasien berhasil dihapus');
    }
    public function detailPasien($id)
    {
        $pasien = Pasien::with('rekamMedis')->findOrFail($id);

        return view('pasien/detailpasien', compact('pasien'));
    }

}

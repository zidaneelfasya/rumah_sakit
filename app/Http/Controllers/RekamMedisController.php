<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\RekamMedis;
use Illuminate\Http\Request;
use App\Http\Resources\RekamMedisResource;

class RekamMedisController extends Controller
{
    public function lihatRekam_medis()
    {
        $rekam_medis = RekamMedis::all(); 
        return view('rekamMedis/lihatrekam_medis', compact('rekam_medis'));
        
    }
    public function lihatRekam_medis2()
    {
        $rekam_medis = RekamMedis::with('datapasien:id,nama,tanggal_lahir,NIK,alamat')->get(); 
        return view('rekamMedis/lihatrekam_medis',  ['rekam_medis' => RekamMedisResource::collection($rekam_medis)]);
    }
    
    public function lihatPasienAPI()
    {
        $rekam_medis= RekamMedis::all(); 
        return response()->json($rekam_medis);
    }
    public function formadd()
    {
        $pasien= Pasien::all(); 
        return view('rekamMedis/formadd',  compact('pasien'));
    }
    public function store(Request $request)
    {

        $request->validate([
            'nama' => 'required|exists:pasiens,id', 
            'tanggal_kunjungan' => 'required|date',
            'dx' => 'required|string|max:255',
            'tx' => 'required|string|max:255',
            'keterangan' => 'nullable|string'
        ]);


        $rekamMedis = new RekamMedis();
        $rekamMedis->id_pasien = $request->nama;
        $rekamMedis->tanggal_kunjungan = $request->tanggal_kunjungan;
        $rekamMedis->dx = $request->dx;
        $rekamMedis->tx = $request->tx;
        $rekamMedis->keterangan = $request->keterangan;
        $rekamMedis->save(); 
        
        return redirect('admin/rekam')->with('success', 'Rekam medis berhasil ditambahkan!');
    }
    public function formupdate($id)
    {

        $rekamMedis = RekamMedis::findOrFail($id);
        return view('rekamMedis/formupdate',  compact('rekamMedis'));
    }
    public function update(Request $request, $id)
{
    // Validasi data input
    $rekamMedis = RekamMedis::findOrFail($id);

    $request->validate([ 
        'tanggal_kunjungan' => 'required|date',
        'dx' => 'required|string|max:255',
        'tx' => 'required|string|max:255',
        'keterangan' => 'nullable|string'
    ]);

    $rekamMedis->update([
        'id_pasien' => $rekamMedis->id_pasien,
        'tanggal_kunjungan' => $request->tanggal_kunjungan,
        'dx' => $request->dx,
        'tx' => $request->tx,
        'keterangan' => $request->keterangan,
    ]);
    // $rekamMedis->id_pasien = $request->nama;
    // $rekamMedis->tanggal_kunjungan = $request->tanggal_kunjungan;
    // $rekamMedis->dx = $request->dx;
    // $rekamMedis->tx = $request->tx;
    // $rekamMedis->keterangan = $request->keterangan;
    // $rekamMedis->save(); // Menyimpan perubahan ke database

    // // Redirect ke halaman yang sesuai dengan pesan sukses
    return redirect('admin/rekam')->with('success', 'Rekam medis berhasil diperbarui!');
    }
    public function delete($id)
    {
        $rekamMedis = RekamMedis::findOrFail($id);
        $rekamMedis->delete();
        return redirect('/admin/rekam')->with('success', 'Data pasien berhasil dihapus');
    }
}

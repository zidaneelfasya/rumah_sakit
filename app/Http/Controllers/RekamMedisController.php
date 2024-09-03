<?php

namespace App\Http\Controllers;

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
}

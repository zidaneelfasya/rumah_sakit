<?php

namespace App\Http\Controllers;

use App\Models\Rekam_medis;
use Illuminate\Http\Request;
use App\Http\Resources\RekamMedisResource;

class RekamMedisController extends Controller
{
    public function lihatRekam_medis()
    {
        $rekam_medis = Rekam_medis::all(); 
        return view('lihatrekam_medis', compact('rekam_medis'));
        
    }
    public function lihatRekam_medis2()
    {
        $rekam_medis = Rekam_medis::with('datapasien:id,nama,tanggal_lahir,NIK,alamt')->get; 
        return view('lihatrekam_medis',  ['rekam_medis' => RekamMedisResource::collection($rekam_medis)]);
    }
    public function lihatPasienAPI()
    {
        $rekam_medis= Rekam_medis::all(); 
        return response()->json($rekam_medis);
    }
}

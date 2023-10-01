<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function getApi(){

        $siswa = Siswa::all();
        
        return response()->json($siswa);
    }
    public function insertApi(Request $request)
    {
        Siswa::create($request->all());

        return response()->json([
            'message' => 'Sukses Di Buat'
        ]);
    }
    public function deleteApi($id){
        $siswa = Siswa::find($id);
        $siswa->delete();

        return response()->json([
            'message' => 'sukses di hapus'
        ]);
    }
}
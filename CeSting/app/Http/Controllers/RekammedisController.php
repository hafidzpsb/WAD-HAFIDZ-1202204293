<?php

namespace App\Http\Controllers;
use App\Models\Rekammedis;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RekammedisController extends Controller
{
    public function index()
    {
        return view('cek_si_ibu.rekam_medis');
    }
    public function store(Request $request)
    {
        if($request->has('rekam_janin'))
        {
            Rekammedis::updateOrCreate([
                'rekam_id' => Auth::user() -> id
                ], [
                'rekam_id' => Auth::user() -> id,
                'berat_janin' => $request -> berat_janin,
                'panjang_janin' => $request -> panjang_janin,
                'detak_janin' => $request -> detak_janin,
            ]);
            return redirect('/rekam_medis');
        }
        if($request->has('rekam_ibu'))
        {
            Rekammedis::updateOrCreate([
                'rekam_id' => Auth::user() -> id
                ], [
                'rekam_id' => Auth::user() -> id,
                'berat_ibu' => $request -> berat_ibu,
                'detak_ibu' => $request -> detak_ibu,
            ]);
            return redirect('/rekam_medis');
        }
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Catattumbuh;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CatattumbuhController extends Controller
{
    public function index()
    {
        return view('1000_hari_anak.catat_tumbuh');
    }
    public function store(Request $request)
    {
        Catattumbuh::updateOrCreate([
            'anak_id' => Auth::user() -> id
            ], [
            'anak_id' => Auth::user() -> id,
            'tinggi_badan_anak' => $request -> tinggi_badan_anak,
            'berat_badan_anak' => $request -> berat_badan_anak,
            'lingkar_kepala_anak' => $request -> lingkar_kepala_anak,
        ]);
        return redirect('/catat_tumbuh');
    }
}
